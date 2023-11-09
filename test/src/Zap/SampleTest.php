<?php

namespace Zap\Test;

use PHPUnit\Framework\TestCase;
use Zap;
use Zap\ZapError;
use Zap\Zapv2;

class SampleTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function testRun()
    {

        $api_key = 'popsp3nasdfesc7h4agk4m24cj';
        $website = 'http://host.docker.internal:8000';
        $proxy = 'tcp://localhost:8090';
        // find old context
        $contextName = 'mycontext';

        $zap = new Zap\Zapv2($proxy, $api_key);

        $version = @$zap->core->version();
        if (is_null($version)) {
            echo "PHP API error\n";
            exit();
        } else {
            echo "version: $version\n";
        }

        // enable scanners which would get disabled at previous scans
        $zap->pscan->enableAllScanners();

        $contexts = $zap->context->contextList();
        if (!\in_array($contextName, $contexts, false)) {
            // create new context
            $contextId = $zap->context->newContext($contextName);
        } elseif (false !== $context = $zap->context->context($contextName)) {
            $contextId = $context['id'];
        }
        if (!isset($contextId)) {
            throw new ZapError(sprintf('Unable to create context for %s (contextName: %s).', $website, $contextName));
        }
        $zap->context->setContextRegexs($contextName, [$website . '.*'], []);

        echo "Spidering website $website\n";

        // Response JSON looks like {"scan":"1"}
        $scan_id = $zap->spider->scan($website, 0, true, $contextName);
        $count = 0;
        while (true) {
            if ($count > 10) exit();
            // Response JSON looks like {"status":"50"}
            $progress = intval($zap->spider->status($scan_id));
            printf("Spider progress %d\n", $progress);
            if ($progress >= 100) break;
            sleep(2);
            $count++;
        }
        echo "Spider completed\n";
        // Give the passive scanner a chance to finish
        sleep(5);

        $urls = $zap->spider->results($scan_id);
        print_r($urls);

        /**
         * Active scan (only non-free scans)
         */
        echo "Scanning website {$website}\n";

        $scanId = $this->activeScan($zap, $website, $contextId);

        echo "Scan completed\n";
        $offset = 0;
        /** @noinspection PhpAssignmentInConditionInspection */
        while ($alerts = $zap->alerts->alerts($website, $offset, 100)) {
            foreach ($alerts as $zapAlert) {
                if (empty($zapAlert['cweid'])) {
                    continue;
                }
                print_r($zapAlert);
            }
            $offset += 100;
        }
        // Report the results
        echo "Hosts: " . implode(",", $zap->core->hosts()) . "\n";
        $alerts = $zap->core->alerts($website);
        echo "Alerts (" . count($alerts) . "):\n";
        print_r($zap->core->alertsSummary($website));

    }

    /**
     * @param Zapv2 $zap
     * @param string $website
     * @param ?int $contextId
     *
     * @return int
     */
    private function activeScan(Zapv2 $zap, string $website, int $contextId = null): int
    {
        $scanId = $zap->ascan->scan($website, true, null, 'STD', null, null, $contextId);

        echo sprintf('ZAProxy active scan (id:%d) started on website (%s)', $scanId, $website);

        $try = 0;
        do {
            sleep(5);
            set_time_limit(10);
            $scanProgress = $zap->ascan->scanProgress($scanId);
            if (!($scanProgress = $scanProgress[1]['HostProcess'] ?? false)) {
                if (++$try > 3) {
                    break;
                }
                continue;
            }
            $try = 0;
            /**
             * $scanProgress = [
             *   Plugin->[
             *      <plugin name>,
             *      <plugin id>
             *      <plugin quality (alpha/beta/release)>
             *      <progress: (Pending/Skipped(, .*)?/XX%/Complete)>
             *      <time in ms>
             *      <messages>
             *      <alerts>
             *   ]
             * ...
             * ]
             */
            /** @var \stdClass $pluginProgress */
            $total = $pending = $currentProgress = 0;
            $currentPluginName = $currentPluginId = null;
            foreach ($scanProgress as $pluginProgress) {
                $total++;
                /** @noinspection PhpUnusedLocalVariableInspection */
                [$pluginName, $pluginId, $quality, $progress, $time, $messageCount, $alertCount] = $pluginProgress->Plugin;
                if ($progress === 'Pending') {
                    $pending++;
                } elseif (preg_match('/(\d+)%/', $progress, $m)) {
                    $currentPluginName = $pluginName;
                    $currentPluginId = $pluginId;
                    $currentProgress = (int)$m[1];
                }
            }
            if ($currentPluginName) {
                echo sprintf('ZAProxy active scan (%s): [%d/%d] %d%% - current: [%d], %s (%d%%)', $website, $total, $total - $pending, round(($total - $pending - 1) / $total * 100), $currentPluginId, $currentPluginName, $currentProgress);
            }
        } while ($pending || $currentPluginName);
        sleep(8);
        return $scanId;
    }

}

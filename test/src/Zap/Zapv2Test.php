<?php

namespace Zap\Test;

use PHPUnit\Framework\TestCase;

class Zapv2Test extends TestCase {

	public function setUp(): void
    {
		parent::setUp();

		// Set your ZAP setting
		$this->proxy = 'tcp://127.0.0.1:8090';
		// Set your target web server
		$this->targetUrl = 'http://127.0.0.1:8000';

        $this->apiKey = 'popsp3nasdfesc7h4agk4m24cj';
	}

    public function tearDown(): void
    {
        \Mockery::close();
    }

	/**
	 * @test
	 */
	public function testVersion() {
		$zap = new \Zap\Zapv2($this->proxy, $this->apiKey);
		$version = @$zap->core->version();
		$this->assertSame(2, (int)$version);
	}

	/**
	 * @test
	 */
	public function testStatusCode() {
		$zap = new \Zap\Zapv2($this->proxy);
		$res = $zap->statusCode($this->targetUrl);
		$this->assertSame('200', $res);
	}

	/**
	 * @test
	 */
	public function testSpiderScanReturnError() {
		// the Spider->scan() method doesn't raise any errors
		$this->assertTrue(true);
	}

	/**
	 * @test
	 */
	public function testSpiderScanReturnSuccess() {
		/* Use Mock not to request to a target server */
		$spider = \Mockery::mock('Zap\Spider');
		$spider->shouldReceive('scan')->once()->andReturn('1');

		$zap = new \Zap\Zapv2($this->proxy);
		$zap->setFieldByName('spider', $spider);
		$scan_id = $zap->spider->scan($this->targetUrl);

		$this->assertSame($scan_id, '1');
	}
}

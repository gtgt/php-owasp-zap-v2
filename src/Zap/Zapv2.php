<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2015 the ZAP development team
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an 'AS IS' BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// Client implementation for using the ZAP pentesting proxy remotely.

namespace Zap;

class ZapError extends \Exception
{
    public function __toString(): string
    {
        return __CLASS__ . ': [{$this->code}]: {$this->message}\n';
    }
}

/**
 * Client API implementation for integrating with ZAP v2.
 */
class Zapv2
{

    // base JSON api url
    public $baseApiUrl = 'http://zap/JSON/';

    // base OTHER api url
    public $baseOtherUrl = 'http://zap/OTHER/';
    public Acsrf $acsrf;
    public AjaxSpider $ajaxSpider;
    public Alerts $alerts;
    public Ascan $ascan;
    public Authentication $authentication;
    public Autoupdate $autoupdate;
    public Brk $brk;
    public Core $core;
    public Context $context;
    public ForcedUser $forcedUser;
    public HttpSessions $httpsessions;
    public ImportLogFiles $importLogFiles;
    public Params $params;
    public Pnh $pnh;
    public Pscan $pscan;
    public Reveal $reveal;
    public Script $script;
    public Search $search;
    public Selenium $selenium;
    public SessionManagement $sessionManagement;
    public Spider $spider;
    public Users $users;

    /**
     * Creates an instance of the ZAP api client.
     *
     * Note that all the other classes in this directory are generated
     * new ones will need to be manually added to this file
     *
     * @param string $proxy e.g. 'tcp://127.0.0.1:8080'
     */
    public function __construct(protected string $proxy = 'tcp://127.0.0.1:8080', protected string $apiKey = '')
    {
        $this->acsrf = new Acsrf($this);
        $this->alerts = new Alerts($this);
        $this->ajaxSpider = new AjaxSpider($this);
        $this->ascan = new Ascan($this);
        $this->authentication = new Authentication($this);
        $this->autoupdate = new Autoupdate($this);
        $this->brk = new Brk($this);
        $this->context = new Context($this);
        $this->core = new Core($this);
        $this->forcedUser = new ForcedUser($this);
        $this->httpsessions = new HttpSessions($this);
        $this->importLogFiles = new ImportLogFiles($this);
        $this->params = new Params($this);
        $this->pnh = new Pnh($this);
        $this->pscan = new Pscan($this);
        $this->reveal = new Reveal($this);
        $this->script = new Script($this);
        $this->search = new Search($this);
        $this->selenium = new Selenium($this);
        $this->sessionManagement = new SessionManagement($this);
        $this->spider = new Spider($this);
        $this->users = new Users($this);
    }

    /**
     * Overwrite a field
     *
     * mainly used for unit test
     *
     * @param $name string the name of overwritten field
     * @param $obj  mixed the value of overwritten field
     */
    public function setFieldByName(string $name, mixed $obj): void
    {
        $this->{$name} = $obj;
    }

    /**
     * Checks that we have an OK response, else raises an exception.
     *
     * checks the result json data after doing action request
     *
     * @param array $json_data the json data to look at.
     * @return array
     * @throws ZapError
     */
    public function expectOk(array $json_data): array
    {
        if (reset($json_data) === 'OK') {
            return $json_data;
        }
        throw new ZapError('json_data: ' . json_encode($json_data));
    }

    /**
     * Opens a url
     *
     * @param $url
     * @return string|false
     */
    public function sendRequest($url): string|false
    {
        $context = stream_context_create(['http' => ['proxy' => $this->proxy]]);
        return file_get_contents($url, false, $context);
    }

    /**
     * Open a url
     *
     * @param string $url
     * @return string
     */
    public function statusCode(string $url): string
    {
        $headers = get_headers($url, true, stream_context_create(['http' => ['proxy' => $this->proxy, 'request_fulluri' => true]]));
        return substr($headers[0], 9, 3);
    }

    /**
     * Shortcut for a GET request.
     *
     * @param string $url the url to GET at.
     * @param array $getParams the dictionary to turn into GET variables.
     * @return mixed
     * @throws ZapError
     */
    public function request(string $url, array $getParams = []): mixed
    {
        $getParams['apikey'] ??= $this->apiKey;
        $response = $this->sendRequest($url . '?' . $this->urlencode($getParams));
        if ($response === false) {
            throw new ZapError(sprintf('Connection error (proxy: %s)', $this->proxy));
        }
        $response = trim($response, '()');
        return json_decode($response, true);
    }

    /**
     * Shortcut for an API OTHER GET request.
     *
     * @param string $url the url to GET at.
     * @param array $getParams the dictionary to turn into GET variables.
     * @return string
     */
    public function requestOther(string $url, array $getParams = []): string
    {
        $getParams['apikey'] ??= $this->apiKey;
        return $this->sendRequest($url . '?' . $this->urlencode($getParams));
    }

    /**
     * @param array $getParams
     * @return string
     */
    private function urlencode(array $getParams): string
    {
        foreach ($getParams as &$param) {
            if (\is_bool($param)) {
                $param = $param ? 'true' : 'false';
            } elseif(\is_array($param)) {
                $param = json_encode($param);
            }
        }
        return http_build_query($getParams);
    }
}

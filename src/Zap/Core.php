<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2016 the ZAP development team
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Zap;


/**
 * This file was automatically generated.
 */
class Core extends AbstractZapComponent
{

    /**
     * Gets the alert with the given ID, the corresponding HTTP message can be obtained with the 'messageId' field and 'message' API method
     */
    public function alert($id)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/alert/', array('id' => $id));
        return reset($res);
    }

    /**
     * Gets the alerts raised by ZAP, optionally filtering by URL and paginating with 'start' position and 'count' of alerts
     */
    public function alerts($baseurl = NULL, $start = NULL, $count = NULL)
    {
        $params = [];
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        if ($start !== NULL) {
            $params['start'] = $start;
        }
        if ($count !== NULL) {
            $params['count'] = $count;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/alerts/', $params);
        return reset($res);
    }

    /**
     * Gets the number of alerts, optionally filtering by URL
     */
    public function numberOfAlerts($baseurl = NULL)
    {
        $params = [];
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/numberOfAlerts/', $params);
        return reset($res);
    }

    /**
     * Gets the summary of alerts raised by ZAP, optionally filtering by URL and paginating with 'start' position and 'count' of alerts
     */
    public function alertsSummary($baseurl = NULL)
    {
        $params = [];

        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }

        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/alertsSummary/', $params);

        return reset($res);
    }

    /**
     * Gets the name of the hosts accessed through/by ZAP
     */
    public function hosts()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/hosts/');
        return reset($res);
    }

    /**
     * Gets the sites accessed through/by ZAP (scheme and domain)
     */
    public function sites()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/sites/');
        return reset($res);
    }

    /**
     * Gets the URLs accessed through/by ZAP
     */
    public function urls()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/urls/');
        return reset($res);
    }

    /**
     * Gets the HTTP message with the given ID. Returns the ID, request/response headers and bodies, cookies and note.
     */
    public function message($id)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/message/', array('id' => $id));
        return reset($res);
    }

    /**
     * Gets the HTTP messages sent by ZAP, request and response, optionally filtered by URL and paginated with 'start' position and 'count' of messages
     */
    public function messages($baseurl = NULL, $start = NULL, $count = NULL)
    {
        $params = [];
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        if ($start !== NULL) {
            $params['start'] = $start;
        }
        if ($count !== NULL) {
            $params['count'] = $count;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/messages/', $params);
        return reset($res);
    }

    /**
     * Gets the number of messages, optionally filtering by URL
     */
    public function numberOfMessages($baseurl = NULL)
    {
        $params = [];
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/numberOfMessages/', $params);
        return reset($res);
    }

    /**
     * Gets ZAP version
     */
    public function version()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/version/');
        return reset($res);
    }

    /**
     * Gets the regular expressions, applied to URLs, to exclude from the Proxy
     */
    public function excludedFromProxy()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/excludedFromProxy/');
        return reset($res);
    }

    public function homeDirectory()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/homeDirectory/');
        return reset($res);
    }

    public function stats($keyprefix = NULL)
    {
        $params = [];
        if ($keyprefix !== NULL) {
            $params['keyPrefix'] = $keyprefix;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/stats/', $params);
        return reset($res);
    }

    public function optionDefaultUserAgent()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionDefaultUserAgent/');
        return reset($res);
    }

    public function optionHttpState()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionHttpState/');
        return reset($res);
    }

    public function optionProxyChainName()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyChainName/');
        return reset($res);
    }

    public function optionProxyChainPassword()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyChainPassword/');
        return reset($res);
    }

    public function optionProxyChainPort()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyChainPort/');
        return reset($res);
    }

    public function optionProxyChainRealm()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyChainRealm/');
        return reset($res);
    }

    public function optionProxyChainSkipName()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyChainSkipName/');
        return reset($res);
    }

    public function optionProxyChainUserName()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyChainUserName/');
        return reset($res);
    }

    public function optionProxyExcludedDomains()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyExcludedDomains/');
        return reset($res);
    }

    public function optionProxyExcludedDomainsEnabled()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyExcludedDomainsEnabled/');
        return reset($res);
    }

    public function optionTimeoutInSecs()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionTimeoutInSecs/');
        return reset($res);
    }

    public function optionHttpStateEnabled()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionHttpStateEnabled/');
        return reset($res);
    }

    public function optionProxyChainPrompt()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionProxyChainPrompt/');
        return reset($res);
    }

    public function optionSingleCookieRequestHeader()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionSingleCookieRequestHeader/');
        return reset($res);
    }

    public function optionUseProxyChain()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionUseProxyChain/');
        return reset($res);
    }

    public function optionUseProxyChainAuth()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/view/optionUseProxyChainAuth/');
        return reset($res);
    }

    /**
     * Shuts down ZAP
     */
    public function shutdown()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/shutdown/');
        return reset($res);
    }

    /**
     * Creates a new session, optionally overwriting existing files. If a relative path is specified it will be resolved against the "session" directory in ZAP "home" dir.
     */
    public function newSession($name = NULL, $overwrite = NULL)
    {
        $params = [];
        if ($name !== NULL) {
            $params['name'] = $name;
        }
        if ($overwrite !== NULL) {
            $params['overwrite'] = $overwrite;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/newSession/', $params);
        return reset($res);
    }

    /**
     * Loads the session with the given name. If a relative path is specified it will be resolved against the "session" directory in ZAP "home" dir.
     */
    public function loadSession($name)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/loadSession/', array('name' => $name));
        return reset($res);
    }

    /**
     * Saves the session with the name supplied, optionally overwriting existing files. If a relative path is specified it will be resolved against the "session" directory in ZAP "home" dir.
     */
    public function saveSession($name, $overwrite = NULL)
    {
        $params = array('name' => $name);
        if ($overwrite !== NULL) {
            $params['overwrite'] = $overwrite;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/saveSession/', $params);
        return reset($res);
    }

    public function snapshotSession()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/snapshotSession/');
        return reset($res);
    }

    public function clearExcludedFromProxy()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/clearExcludedFromProxy/');
        return reset($res);
    }

    public function excludeFromProxy($regex)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/excludeFromProxy/', array('regex' => $regex));
        return reset($res);
    }

    public function setHomeDirectory($dir)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setHomeDirectory/', array('dir' => $dir));
        return reset($res);
    }

    public function generateRootCA()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/generateRootCA/');
        return reset($res);
    }

    /**
     * Sends the HTTP request, optionally following redirections. Returns the request sent and response received and followed redirections, if any.
     */
    public function sendRequest($request, $followredirects = NULL)
    {
        $params = array('request' => $request);
        if ($followredirects !== NULL) {
            $params['followRedirects'] = $followredirects;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/sendRequest/', $params);
        return reset($res);
    }

    public function deleteAllAlerts()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/deleteAllAlerts/');
        return reset($res);
    }

    public function runGarbageCollection()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/runGarbageCollection/');
        return reset($res);
    }

    public function clearStats($keyprefix)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/clearStats/', array('keyPrefix' => $keyprefix));
        return reset($res);
    }

    public function setOptionDefaultUserAgent($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionDefaultUserAgent/', array('String' => $string));
        return reset($res);
    }

    public function setOptionProxyChainName($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionProxyChainName/', array('String' => $string));
        return reset($res);
    }

    public function setOptionProxyChainPassword($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionProxyChainPassword/', array('String' => $string));
        return reset($res);
    }

    public function setOptionProxyChainRealm($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionProxyChainRealm/', array('String' => $string));
        return reset($res);
    }

    public function setOptionProxyChainSkipName($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionProxyChainSkipName/', array('String' => $string));
        return reset($res);
    }

    public function setOptionProxyChainUserName($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionProxyChainUserName/', array('String' => $string));
        return reset($res);
    }

    public function setOptionHttpStateEnabled($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionHttpStateEnabled/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionProxyChainPort($integer)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionProxyChainPort/', array('Integer' => $integer));
        return reset($res);
    }

    public function setOptionProxyChainPrompt($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionProxyChainPrompt/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionSingleCookieRequestHeader($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionSingleCookieRequestHeader/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionTimeoutInSecs($integer)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionTimeoutInSecs/', array('Integer' => $integer));
        return reset($res);
    }

    public function setOptionUseProxyChain($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionUseProxyChain/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionUseProxyChainAuth($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'core/action/setOptionUseProxyChainAuth/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function proxypac()
    {
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/proxy.pac/');
    }

    public function rootcert()
    {
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/rootcert/');
    }

    public function setproxy($proxy)
    {
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/setproxy/', array('proxy' => $proxy));
    }

    /**
     * Generates a report in XML format
     */
    public function xmlreport()
    {
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/xmlreport/');
    }

    /**
     * Generates a report in HTML format
     */
    public function htmlreport()
    {
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/htmlreport/');
    }

    /**
     * Gets the message with the given ID in HAR format
     */
    public function messageHar($id)
    {
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/messageHar/', array('id' => $id));
    }

    /**
     * Gets the HTTP messages sent through/by ZAP, in HAR format, optionally filtered by URL and paginated with 'start' position and 'count' of messages
     */
    public function messagesHar($baseurl = NULL, $start = NULL, $count = NULL)
    {
        $params = [];
        if ($baseurl !== NULL) {
            $params['baseurl'] = $baseurl;
        }
        if ($start !== NULL) {
            $params['start'] = $start;
        }
        if ($count !== NULL) {
            $params['count'] = $count;
        }
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/messagesHar/', $params);
    }

    /**
     * Sends the first HAR request entry, optionally following redirections. Returns, in HAR format, the request sent and response received and followed redirections, if any.
     */
    public function sendHarRequest($request, $followredirects = NULL)
    {
        $params = array('request' => $request);
        if ($followredirects !== NULL) {
            $params['followRedirects'] = $followredirects;
        }
        return $this->zap->requestother($this->zap->baseOtherUrl . 'core/other/sendHarRequest/', $params);
    }

}

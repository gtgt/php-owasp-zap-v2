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
class Spider extends AbstractZapComponent
{

    public function status($scanid = NULL)
    {
        $params = [];
        if ($scanid !== NULL) {
            $params['scanId'] = $scanid;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/status/', $params);
        return reset($res);
    }

    public function results($scanid = NULL)
    {
        $params = [];
        if ($scanid !== NULL) {
            $params['scanId'] = $scanid;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/results/', $params);
        return reset($res);
    }

    public function fullResults($scanid)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/fullResults/', array('scanId' => $scanid));
        return reset($res);
    }

    public function scans()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/scans/');
        return reset($res);
    }

    public function excludedFromScan()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/excludedFromScan/');
        return reset($res);
    }

    public function optionDomainsAlwaysInScope()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionDomainsAlwaysInScope/');
        return reset($res);
    }

    public function optionDomainsAlwaysInScopeEnabled()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionDomainsAlwaysInScopeEnabled/');
        return reset($res);
    }

    public function optionHandleParameters()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionHandleParameters/');
        return reset($res);
    }

    public function optionMaxDepth()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionMaxDepth/');
        return reset($res);
    }

    public function optionMaxScansInUI()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionMaxScansInUI/');
        return reset($res);
    }

    public function optionRequestWaitTime()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionRequestWaitTime/');
        return reset($res);
    }

    public function optionScope()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionScope/');
        return reset($res);
    }

    public function optionScopeText()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionScopeText/');
        return reset($res);
    }

    public function optionSkipURLString()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionSkipURLString/');
        return reset($res);
    }

    public function optionThreadCount()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionThreadCount/');
        return reset($res);
    }

    public function optionUserAgent()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionUserAgent/');
        return reset($res);
    }

    public function optionHandleODataParametersVisited()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionHandleODataParametersVisited/');
        return reset($res);
    }

    public function optionParseComments()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionParseComments/');
        return reset($res);
    }

    public function optionParseGit()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionParseGit/');
        return reset($res);
    }

    public function optionParseRobotsTxt()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionParseRobotsTxt/');
        return reset($res);
    }

    public function optionParseSVNEntries()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionParseSVNEntries/');
        return reset($res);
    }

    public function optionParseSitemapXml()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionParseSitemapXml/');
        return reset($res);
    }

    public function optionPostForm()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionPostForm/');
        return reset($res);
    }

    public function optionProcessForm()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionProcessForm/');
        return reset($res);
    }

    /**
     * Sets whether or not the 'Referer' header should be sent while spidering
     */
    public function optionSendRefererHeader()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionSendRefererHeader/');
        return reset($res);
    }

    public function optionShowAdvancedDialog()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/view/optionShowAdvancedDialog/');
        return reset($res);
    }

    /**
     * Runs the spider against the given URL. Optionally, the 'maxChildren' parameter can be set to limit the number of children scanned, the 'recurse' parameter can be used to prevent the spider from seeding recursively and the parameter 'contextName' can be used to constrain the scan to a Context.
     */
    public function scan($url, $maxchildren = NULL, $recurse = NULL, $contextname = NULL)
    {
        $params = array('url' => $url);
        if ($maxchildren !== NULL) {
            $params['maxChildren'] = $maxchildren;
        }
        if ($recurse !== NULL) {
            $params['recurse'] = $recurse;
        }
        if ($contextname !== NULL) {
            $params['contextName'] = $contextname;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/scan/', $params);
        return reset($res);
    }

    /**
     * Runs the spider from the perspective of a User, obtained using the given Context ID and User ID. See 'scan' action for more details.
     */
    public function scanAsUser($url, $contextid, $userid, $maxchildren = NULL, $recurse = NULL)
    {
        $params = array('url' => $url, 'contextId' => $contextid, 'userId' => $userid);
        if ($maxchildren !== NULL) {
            $params['maxChildren'] = $maxchildren;
        }
        if ($recurse !== NULL) {
            $params['recurse'] = $recurse;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/scanAsUser/', $params);
        return reset($res);
    }

    public function pause($scanid)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/pause/', array('scanId' => $scanid));
        return reset($res);
    }

    public function resume($scanid)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/resume/', array('scanId' => $scanid));
        return reset($res);
    }

    public function stop($scanid = NULL)
    {
        $params = [];
        if ($scanid !== NULL) {
            $params['scanId'] = $scanid;
        }
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/stop/', $params);
        return reset($res);
    }

    public function removeScan($scanid)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/removeScan/', array('scanId' => $scanid));
        return reset($res);
    }

    public function pauseAllScans()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/pauseAllScans/');
        return reset($res);
    }

    public function resumeAllScans()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/resumeAllScans/');
        return reset($res);
    }

    public function stopAllScans()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/stopAllScans/');
        return reset($res);
    }

    public function removeAllScans()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/removeAllScans/');
        return reset($res);
    }

    public function clearExcludedFromScan()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/clearExcludedFromScan/');
        return reset($res);
    }

    public function excludeFromScan($regex)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/excludeFromScan/', array('regex' => $regex));
        return reset($res);
    }

    public function setOptionHandleParameters($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionHandleParameters/', array('String' => $string));
        return reset($res);
    }

    public function setOptionScopeString($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionScopeString/', array('String' => $string));
        return reset($res);
    }

    public function setOptionSkipURLString($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionSkipURLString/', array('String' => $string));
        return reset($res);
    }

    public function setOptionUserAgent($string)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionUserAgent/', array('String' => $string));
        return reset($res);
    }

    public function setOptionHandleODataParametersVisited($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionHandleODataParametersVisited/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionMaxDepth($integer)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionMaxDepth/', array('Integer' => $integer));
        return reset($res);
    }

    public function setOptionMaxScansInUI($integer)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionMaxScansInUI/', array('Integer' => $integer));
        return reset($res);
    }

    public function setOptionParseComments($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionParseComments/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionParseGit($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionParseGit/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionParseRobotsTxt($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionParseRobotsTxt/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionParseSVNEntries($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionParseSVNEntries/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionParseSitemapXml($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionParseSitemapXml/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionPostForm($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionPostForm/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionProcessForm($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionProcessForm/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionRequestWaitTime($integer)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionRequestWaitTime/', array('Integer' => $integer));
        return reset($res);
    }

    public function setOptionSendRefererHeader($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionSendRefererHeader/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionShowAdvancedDialog($boolean)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionShowAdvancedDialog/', array('Boolean' => $boolean));
        return reset($res);
    }

    public function setOptionThreadCount($integer)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'spider/action/setOptionThreadCount/', array('Integer' => $integer));
        return reset($res);
    }

}

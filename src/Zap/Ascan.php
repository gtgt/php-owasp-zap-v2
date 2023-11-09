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
class Ascan extends AbstractZapComponent {

	public function status($scanid=NULL) {
		$params = [];
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/status/', $params);
		return reset($res);
	}

	public function scanProgress($scanid=NULL) {
		$params = [];
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/scanProgress/', $params);
		return reset($res);
	}

	public function messagesIds($scanid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/messagesIds/', array('scanId' => $scanid));
		return reset($res);
	}

	public function alertsIds($scanid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/alertsIds/', array('scanId' => $scanid));
		return reset($res);
	}

	public function scans() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/scans/');
		return reset($res);
	}

	public function scanPolicyNames() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/scanPolicyNames/');
		return reset($res);
	}

	public function excludedFromScan() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/excludedFromScan/');
		return reset($res);
	}

	public function scanners($scanpolicyname=NULL, $policyid=NULL) {
		$params = [];
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($policyid !== NULL) {
			$params['policyId'] = $policyid;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/scanners/', $params);
		return reset($res);
	}

	public function policies($scanpolicyname=NULL, $policyid=NULL) {
		$params = [];
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($policyid !== NULL) {
			$params['policyId'] = $policyid;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/policies/', $params);
		return reset($res);
	}

	public function attackModeQueue() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/attackModeQueue/');
		return reset($res);
	}

	public function optionAttackPolicy() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionAttackPolicy/');
		return reset($res);
	}

	public function optionDefaultPolicy() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionDefaultPolicy/');
		return reset($res);
	}

	public function optionDelayInMs() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionDelayInMs/');
		return reset($res);
	}

	public function optionExcludedParamList() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionExcludedParamList/');
		return reset($res);
	}

	public function optionHandleAntiCSRFTokens() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionHandleAntiCSRFTokens/');
		return reset($res);
	}

	public function optionHostPerScan() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionHostPerScan/');
		return reset($res);
	}

	public function optionMaxChartTimeInMins() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionMaxChartTimeInMins/');
		return reset($res);
	}

	public function optionMaxResultsToList() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionMaxResultsToList/');
		return reset($res);
	}

	public function optionMaxScansInUI() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionMaxScansInUI/');
		return reset($res);
	}

	public function optionTargetParamsEnabledRPC() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionTargetParamsEnabledRPC/');
		return reset($res);
	}

	public function optionTargetParamsInjectable() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionTargetParamsInjectable/');
		return reset($res);
	}

	public function optionThreadPerHost() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionThreadPerHost/');
		return reset($res);
	}

	public function optionAllowAttackOnStart() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionAllowAttackOnStart/');
		return reset($res);
	}

	public function optionInjectPluginIdInHeader() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionInjectPluginIdInHeader/');
		return reset($res);
	}

	public function optionPromptInAttackMode() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionPromptInAttackMode/');
		return reset($res);
	}

	public function optionPromptToClearFinishedScans() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionPromptToClearFinishedScans/');
		return reset($res);
	}

	public function optionRescanInAttackMode() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionRescanInAttackMode/');
		return reset($res);
	}

	public function optionShowAdvancedDialog() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/view/optionShowAdvancedDialog/');
		return reset($res);
	}

    /**
     * Runs the active scanner against the given URL and/or Context. Optionally, the ''recurse'' parameter can be used to scan URLs under the given URL, the parameter ''inScopeOnly'' can be used to constrain the scan to URLs that are in scope (ignored if a Context is specified), the parameter ''scanPolicyName'' allows to specify the scan policy (if none is given it uses the default scan policy), the parameters ''method'' and ''postData'' allow to select a given request in conjunction with the given URL.
     *
     * @param null $url
     * @param null $recurse
     * @param null $inscopeonly
     * @param null $scanpolicyname
     * @param null $method
     * @param null $postdata
     * @param null $contextid
     *
     * @return int
     */
    public function scan($url = null, $recurse = null, $inscopeonly = null, $scanpolicyname = null, $method = null, $postdata = null, $contextid = null) {
        $params = [];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($recurse !== null) {
            $params['recurse'] = $recurse;
        }
        if ($inscopeonly !== null) {
            $params['inScopeOnly'] = $inscopeonly;
        }
        if ($scanpolicyname !== null) {
            $params['scanPolicyName'] = $scanpolicyname;
        }
        if ($method !== null) {
            $params['method'] = $method;
        }
        if ($postdata !== null) {
            $params['postData'] = $postdata;
        }
        if ($contextid !== null) {
            $params['contextId'] = $contextid;
        }
        $res = $this->zap->request($this->zap->baseApiUrl.'ascan/action/scan/', $params);
        return reset($res);
    }

	/**
	 * Active Scans from the perspective of a User, obtained using the given Context ID and User ID. See 'scan' action for more details.
	 */
	public function scanAsUser($url, $contextid, $userid, $recurse=NULL, $scanpolicyname=NULL, $method=NULL, $postdata=NULL) {
		$params = ['url' => $url, 'contextId' => $contextid, 'userId' => $userid];
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($method !== NULL) {
			$params['method'] = $method;
		}
		if ($postdata !== NULL) {
			$params['postData'] = $postdata;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/scanAsUser/', $params);
        return reset($res);
	}

	public function pause($scanid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/pause/', ['scanId' => $scanid]);
		return reset($res);
	}

	public function resume($scanid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/resume/', ['scanId' => $scanid]);
		return reset($res);
	}

	public function stop($scanid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/stop/', array('scanId' => $scanid));
		return reset($res);
	}

	public function removeScan($scanid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/removeScan/', ['scanId' => $scanid]);
		return reset($res);
	}

	public function pauseAllScans($apikey='') {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/pauseAllScans/');
		return reset($res);
	}

	public function resumeAllScans($apikey='') {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/resumeAllScans/');
		return reset($res);
	}

	public function stopAllScans($apikey='') {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/stopAllScans/');
		return reset($res);
	}

	public function removeAllScans($apikey='') {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/removeAllScans/');
		return reset($res);
	}

	public function clearExcludedFromScan($apikey='') {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/clearExcludedFromScan/');
		return reset($res);
	}

	public function excludeFromScan($regex) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/excludeFromScan/', array('regex' => $regex));
		return reset($res);
	}

	public function enableAllScanners($scanpolicyname=NULL) {
        $params = [];
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/enableAllScanners/', $params);
		return reset($res);
	}

	public function disableAllScanners($scanpolicyname=NULL) {
        $params = [];
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/disableAllScanners/', $params);
		return reset($res);
	}

	public function enableScanners($ids) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/enableScanners/', array('ids' => $ids));
		return reset($res);
	}

	public function disableScanners($ids) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/disableScanners/', array('ids' => $ids));
		return reset($res);
	}

	public function setEnabledPolicies($ids) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setEnabledPolicies/', array('ids' => $ids));
		return reset($res);
	}

	public function setPolicyAttackStrength($id, $attackstrength, $scanpolicyname=NULL) {
		$params = array('id' => $id, 'attackStrength' => $attackstrength);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setPolicyAttackStrength/', $params);
		return reset($res);
	}

	public function setPolicyAlertThreshold($id, $alertthreshold, $scanpolicyname=NULL) {
		$params = array('id' => $id, 'alertThreshold' => $alertthreshold);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setPolicyAlertThreshold/', $params);
		return reset($res);
	}

	public function setScannerAttackStrength($id, $attackstrength, $scanpolicyname=NULL) {
		$params = array('id' => $id, 'attackStrength' => $attackstrength);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setScannerAttackStrength/', $params);
		return reset($res);
	}

	public function setScannerAlertThreshold($id, $alertthreshold, $scanpolicyname=NULL) {
		$params = array('id' => $id, 'alertThreshold' => $alertthreshold);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setScannerAlertThreshold/', $params);
		return reset($res);
	}

	public function addScanPolicy($scanpolicyname) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/addScanPolicy/', array('scanPolicyName' => $scanpolicyname));
		return reset($res);
	}

	public function removeScanPolicy($scanpolicyname) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/removeScanPolicy/', array('scanPolicyName' => $scanpolicyname));
		return reset($res);
	}

	public function setOptionAttackPolicy($string) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionAttackPolicy/', array('String' => $string));
		return reset($res);
	}

	public function setOptionDefaultPolicy($string) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionDefaultPolicy/', array('String' => $string));
		return reset($res);
	}

	public function setOptionAllowAttackOnStart($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionAllowAttackOnStart/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionDelayInMs($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionDelayInMs/', array('Integer' => $integer));
		return reset($res);
	}

	public function setOptionHandleAntiCSRFTokens($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionHandleAntiCSRFTokens/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionHostPerScan($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionHostPerScan/', array('Integer' => $integer));
		return reset($res);
	}

	public function setOptionInjectPluginIdInHeader($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionInjectPluginIdInHeader/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionMaxChartTimeInMins($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionMaxChartTimeInMins/', array('Integer' => $integer));
		return reset($res);
	}

	public function setOptionMaxResultsToList($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionMaxResultsToList/', array('Integer' => $integer));
		return reset($res);
	}

	public function setOptionMaxScansInUI($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionMaxScansInUI/', array('Integer' => $integer));
		return reset($res);
	}

	public function setOptionPromptInAttackMode($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionPromptInAttackMode/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionPromptToClearFinishedScans($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionPromptToClearFinishedScans/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionRescanInAttackMode($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionRescanInAttackMode/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionShowAdvancedDialog($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionShowAdvancedDialog/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionTargetParamsEnabledRPC($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionTargetParamsEnabledRPC/', array('Integer' => $integer));
		return reset($res);
	}

	public function setOptionTargetParamsInjectable($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionTargetParamsInjectable/', array('Integer' => $integer));
		return reset($res);
	}

	public function setOptionThreadPerHost($integer) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'ascan/action/setOptionThreadPerHost/', array('Integer' => $integer));
		return reset($res);
	}

}

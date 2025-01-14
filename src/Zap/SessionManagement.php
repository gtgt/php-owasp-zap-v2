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
class SessionManagement extends AbstractZapComponent {

	public function getSupportedSessionManagementMethods() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'sessionManagement/view/getSupportedSessionManagementMethods/');
		return reset($res);
	}

	public function getSessionManagementMethodConfigParams($methodname) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'sessionManagement/view/getSessionManagementMethodConfigParams/', array('methodName' => $methodname));
		return reset($res);
	}

	public function getSessionManagementMethod($contextid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'sessionManagement/view/getSessionManagementMethod/', array('contextId' => $contextid));
		return reset($res);
	}

	public function setSessionManagementMethod($contextid, $methodname, $methodconfigparams=NULL) {
		$params = array('contextId' => $contextid, 'methodName' => $methodname);
		if ($methodconfigparams !== NULL) {
			$params['methodConfigParams'] = $methodconfigparams;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'sessionManagement/action/setSessionManagementMethod/', $params);
		return reset($res);
	}

}

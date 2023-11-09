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
class Authentication extends AbstractZapComponent {

	public function getSupportedAuthenticationMethods() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/view/getSupportedAuthenticationMethods/');
		return reset($res);
	}

	public function getAuthenticationMethodConfigParams($authmethodname) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/view/getAuthenticationMethodConfigParams/', array('authMethodName' => $authmethodname));
		return reset($res);
	}

	public function getAuthenticationMethod($contextid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/view/getAuthenticationMethod/', array('contextId' => $contextid));
		return reset($res);
	}

	public function getLoggedInIndicator($contextid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/view/getLoggedInIndicator/', array('contextId' => $contextid));
		return reset($res);
	}

	public function getLoggedOutIndicator($contextid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/view/getLoggedOutIndicator/', array('contextId' => $contextid));
		return reset($res);
	}

	public function setAuthenticationMethod($contextid, $authmethodname, $authmethodconfigparams=NULL) {
		$params = array('contextId' => $contextid, 'authMethodName' => $authmethodname);
		if ($authmethodconfigparams !== NULL) {
			$params['authMethodConfigParams'] = $authmethodconfigparams;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/action/setAuthenticationMethod/', $params);
		return reset($res);
	}

	public function setLoggedInIndicator($contextid, $loggedinindicatorregex) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/action/setLoggedInIndicator/', array('contextId' => $contextid, 'loggedInIndicatorRegex' => $loggedinindicatorregex));
		return reset($res);
	}

	public function setLoggedOutIndicator($contextid, $loggedoutindicatorregex) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'authentication/action/setLoggedOutIndicator/', array('contextId' => $contextid, 'loggedOutIndicatorRegex' => $loggedoutindicatorregex));
		return reset($res);
	}

}

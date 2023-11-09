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
class Users extends AbstractZapComponent {

	public function usersList($contextid=NULL) {
		$params = [];
		if ($contextid !== NULL) {
			$params['contextId'] = $contextid;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/view/usersList/', $params);
		return reset($res);
	}

	public function getUserById($contextid=NULL, $userid=NULL) {
		$params = [];
		if ($contextid !== NULL) {
			$params['contextId'] = $contextid;
		}
		if ($userid !== NULL) {
			$params['userId'] = $userid;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/view/getUserById/', $params);
		return reset($res);
	}

	public function getAuthenticationCredentialsConfigParams($contextid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/view/getAuthenticationCredentialsConfigParams/', array('contextId' => $contextid));
		return reset($res);
	}

	public function getAuthenticationCredentials($contextid, $userid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/view/getAuthenticationCredentials/', array('contextId' => $contextid, 'userId' => $userid));
		return reset($res);
	}

	public function newUser($contextid, $name) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/action/newUser/', array('contextId' => $contextid, 'name' => $name));
		return reset($res);
	}

	public function removeUser($contextid, $userid) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/action/removeUser/', array('contextId' => $contextid, 'userId' => $userid));
		return reset($res);
	}

	public function setUserEnabled($contextid, $userid, $enabled) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/action/setUserEnabled/', array('contextId' => $contextid, 'userId' => $userid, 'enabled' => $enabled));
		return reset($res);
	}

	public function setUserName($contextid, $userid, $name) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/action/setUserName/', array('contextId' => $contextid, 'userId' => $userid, 'name' => $name));
		return reset($res);
	}

	public function setAuthenticationCredentials($contextid, $userid, $authcredentialsconfigparams=NULL) {
		$params = array('contextId' => $contextid, 'userId' => $userid);
		if ($authcredentialsconfigparams !== NULL) {
			$params['authCredentialsConfigParams'] = $authcredentialsconfigparams;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'users/action/setAuthenticationCredentials/', $params);
		return reset($res);
	}

}

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
class HttpSessions extends AbstractZapComponent {

	/**
	 * Gets the sessions of the given site. Optionally returning just the session with the given name.
	 */
	public function sessions($site, $session=NULL) {
		$params = array('site' => $site);
		if ($session !== NULL) {
			$params['session'] = $session;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/view/sessions/', $params);
		return reset($res);
	}

	/**
	 * Gets the name of the active session for the given site.
	 */
	public function activeSession($site) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/view/activeSession/', array('site' => $site));
		return reset($res);
	}

	/**
	 * Gets the names of the session tokens for the given site.
	 */
	public function sessionTokens($site) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/view/sessionTokens/', array('site' => $site));
		return reset($res);
	}

	/**
	 * Creates an empty session for the given site. Optionally with the given name.
	 */
	public function createEmptySession($site, $session=NULL) {
		$params = array('site' => $site);
		if ($session !== NULL) {
			$params['session'] = $session;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/createEmptySession/', $params);
		return reset($res);
	}

	/**
	 * Removes the session from the given site.
	 */
	public function removeSession($site, $session) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/removeSession/', array('site' => $site, 'session' => $session));
		return reset($res);
	}

	/**
	 * Sets the given session as active for the given site.
	 */
	public function setActiveSession($site, $session) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/setActiveSession/', array('site' => $site, 'session' => $session));
		return reset($res);
	}

	/**
	 * Unsets the active session of the given site.
	 */
	public function unsetActiveSession($site) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/unsetActiveSession/', array('site' => $site));
		return reset($res);
	}

	/**
	 * Adds the session token to the given site.
	 */
	public function addSessionToken($site, $sessiontoken) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/addSessionToken/', array('site' => $site, 'sessionToken' => $sessiontoken));
		return reset($res);
	}

	/**
	 * Removes the session token from the given site.
	 */
	public function removeSessionToken($site, $sessiontoken) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/removeSessionToken/', array('site' => $site, 'sessionToken' => $sessiontoken));
		return reset($res);
	}

	/**
	 * Sets the value of the session token of the given session for the given site.
	 */
	public function setSessionTokenValue($site, $session, $sessiontoken, $tokenvalue) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/setSessionTokenValue/', array('site' => $site, 'session' => $session, 'sessionToken' => $sessiontoken, 'tokenValue' => $tokenvalue));
		return reset($res);
	}

	/**
	 * Renames the session of the given site.
	 */
	public function renameSession($site, $oldsessionname, $newsessionname) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'httpSessions/action/renameSession/', array('site' => $site, 'oldSessionName' => $oldsessionname, 'newSessionName' => $newsessionname));
		return reset($res);
	}

}

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
class Brk extends AbstractZapComponent {

	public function brk($type, $scope, $state) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'break/action/break/', array('type' => $type, 'scope' => $scope, 'state' => $state));
		return reset($res);
	}

	public function addHttpBreakpoint($string, $location, $match, $inverse, $ignorecase) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'break/action/addHttpBreakpoint/', array('string' => $string, 'location' => $location, 'match' => $match, 'inverse' => $inverse, 'ignorecase' => $ignorecase));
		return reset($res);
	}

	public function removeHttpBreakpoint($string, $location, $match, $inverse, $ignorecase) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'break/action/removeHttpBreakpoint/', array('string' => $string, 'location' => $location, 'match' => $match, 'inverse' => $inverse, 'ignorecase' => $ignorecase));
		return reset($res);
	}

}

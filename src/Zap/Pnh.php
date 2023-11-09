<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright the ZAP development team
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
class Pnh extends AbstractZapComponent {

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function monitor($id, $message) {
		return $this->zap->request($this->zap->baseApiUrl . 'pnh/action/monitor/', array('id' => $id, 'message' => $message));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function oracle($id) {
		return $this->zap->request($this->zap->baseApiUrl . 'pnh/action/oracle/', array('id' => $id));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function startMonitoring($url) {
		return $this->zap->request($this->zap->baseApiUrl . 'pnh/action/startMonitoring/', array('url' => $url));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function stopMonitoring($id) {
		return $this->zap->request($this->zap->baseApiUrl . 'pnh/action/stopMonitoring/', array('id' => $id));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function pnh($apikey='') {
		return $this->zap->requestother($this->zap->baseOtherUrl . 'pnh/other/pnh/');
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function manifest($apikey='') {
		return $this->zap->requestother($this->zap->baseOtherUrl . 'pnh/other/manifest/');
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function service($apikey='') {
		return $this->zap->requestother($this->zap->baseOtherUrl . 'pnh/other/service/');
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function fx_pnhxpi($apikey='') {
		return $this->zap->requestother($this->zap->baseOtherUrl . 'pnh/other/fx_pnh.xpi/');
	}

}

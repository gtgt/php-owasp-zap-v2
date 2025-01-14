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
class Selenium extends AbstractZapComponent {

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionChromeDriverPath() {
		return $this->zap->request($this->zap->baseApiUrl . 'selenium/view/optionChromeDriverPath/')->{'ChromeDriverPath'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionIeDriverPath() {
		return $this->zap->request($this->zap->baseApiUrl . 'selenium/view/optionIeDriverPath/')->{'IeDriverPath'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionPhantomJsBinaryPath() {
		return $this->zap->request($this->zap->baseApiUrl . 'selenium/view/optionPhantomJsBinaryPath/')->{'PhantomJsBinaryPath'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionChromeDriverPath($string) {
		return $this->zap->request($this->zap->baseApiUrl . 'selenium/action/setOptionChromeDriverPath/', array('String' => $string));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionIeDriverPath($string) {
		return $this->zap->request($this->zap->baseApiUrl . 'selenium/action/setOptionIeDriverPath/', array('String' => $string));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionPhantomJsBinaryPath($string) {
		return $this->zap->request($this->zap->baseApiUrl . 'selenium/action/setOptionPhantomJsBinaryPath/', array('String' => $string));
	}

}

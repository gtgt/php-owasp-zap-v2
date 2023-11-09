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
class ImportLogFiles extends AbstractZapComponent {

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function ImportZAPLogFromFile($filepath) {
		return $this->zap->request($this->zap->baseApiUrl . 'importLogFiles/view/ImportZAPLogFromFile/', array('FilePath' => $filepath))->{'ImportZAPLogFromFile'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function ImportModSecurityLogFromFile($filepath) {
		return $this->zap->request($this->zap->baseApiUrl . 'importLogFiles/view/ImportModSecurityLogFromFile/', array('FilePath' => $filepath))->{'ImportModSecurityLogFromFile'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function ImportZAPHttpRequestResponsePair($httprequest, $httpresponse) {
		return $this->zap->request($this->zap->baseApiUrl . 'importLogFiles/view/ImportZAPHttpRequestResponsePair/', array('HTTPRequest' => $httprequest, 'HTTPResponse' => $httpresponse))->{'ImportZAPHttpRequestResponsePair'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function PostModSecurityAuditEvent($auditeventstring='') {
		return $this->zap->request($this->zap->baseApiUrl . 'importLogFiles/action/PostModSecurityAuditEvent/', array('AuditEventString' => $auditeventstring));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function OtherPostModSecurityAuditEvent($auditeventstring) {
		return $this->zap->requestother($this->zap->baseOtherUrl . 'importLogFiles/other/OtherPostModSecurityAuditEvent/', array('AuditEventString' => $auditeventstring));
	}

}

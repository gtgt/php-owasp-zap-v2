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
class Search extends AbstractZapComponent {

	public function urlsByUrlRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/urlsByUrlRegex/', $params);
		return reset($res);
	}

	public function urlsByRequestRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/urlsByRequestRegex/', $params);
		return reset($res);
	}

	public function urlsByResponseRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/urlsByResponseRegex/', $params);
		return reset($res);
	}

	public function urlsByHeaderRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/urlsByHeaderRegex/', $params);
		return reset($res);
	}

	public function messagesByUrlRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/messagesByUrlRegex/', $params);
		return reset($res);
	}

	public function messagesByRequestRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/messagesByRequestRegex/', $params);
		return reset($res);
	}

	public function messagesByResponseRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/messagesByResponseRegex/', $params);
		return reset($res);
	}

	public function messagesByHeaderRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->baseApiUrl . 'search/view/messagesByHeaderRegex/', $params);
		return reset($res);
	}

	public function harByUrlRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestother($this->zap->baseOtherUrl . 'search/other/harByUrlRegex/', $params);
	}

	public function harByRequestRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestother($this->zap->baseOtherUrl . 'search/other/harByRequestRegex/', $params);
	}

	public function harByResponseRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestother($this->zap->baseOtherUrl . 'search/other/harByResponseRegex/', $params);
	}

	public function harByHeaderRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array('regex' => $regex);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestother($this->zap->baseOtherUrl . 'search/other/harByHeaderRegex/', $params);
	}

}

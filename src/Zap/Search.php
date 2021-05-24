<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2021 the ZAP development team
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
 * @property Zap $zap
 */
class Search {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Returns the URLs of the HTTP messages that match the given regular expression in the URL optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function urlsByUrlRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/urlsByUrlRegex/', $params)->{'urlsByUrlRegex'};
	}

	/**
	 * Returns the URLs of the HTTP messages that match the given regular expression in the request optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function urlsByRequestRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/urlsByRequestRegex/', $params)->{'urlsByRequestRegex'};
	}

	/**
	 * Returns the URLs of the HTTP messages that match the given regular expression in the response optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function urlsByResponseRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/urlsByResponseRegex/', $params)->{'urlsByResponseRegex'};
	}

	/**
	 * Returns the URLs of the HTTP messages that match the given regular expression in the header(s) optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function urlsByHeaderRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/urlsByHeaderRegex/', $params)->{'urlsByHeaderRegex'};
	}

	/**
	 * Returns the HTTP messages that match the given regular expression in the URL optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function messagesByUrlRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/messagesByUrlRegex/', $params)->{'messagesByUrlRegex'};
	}

	/**
	 * Returns the HTTP messages that match the given regular expression in the request optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function messagesByRequestRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/messagesByRequestRegex/', $params)->{'messagesByRequestRegex'};
	}

	/**
	 * Returns the HTTP messages that match the given regular expression in the response optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function messagesByResponseRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/messagesByResponseRegex/', $params)->{'messagesByResponseRegex'};
	}

	/**
	 * Returns the HTTP messages that match the given regular expression in the header(s) optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function messagesByHeaderRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'search/view/messagesByHeaderRegex/', $params)->{'messagesByHeaderRegex'};
	}

	/**
	 * Returns the HTTP messages, in HAR format, that match the given regular expression in the URL optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function harByUrlRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestOther($this->zap->base_other . 'search/other/harByUrlRegex/', $params);
	}

	/**
	 * Returns the HTTP messages, in HAR format, that match the given regular expression in the request optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function harByRequestRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestOther($this->zap->base_other . 'search/other/harByRequestRegex/', $params);
	}

	/**
	 * Returns the HTTP messages, in HAR format, that match the given regular expression in the response optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function harByResponseRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestOther($this->zap->base_other . 'search/other/harByResponseRegex/', $params);
	}

	/**
	 * Returns the HTTP messages, in HAR format, that match the given regular expression in the header(s) optionally filtered by URL and paginated with 'start' position and 'count' of messages.
	 */
	public function harByHeaderRegex($regex, $baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestOther($this->zap->base_other . 'search/other/harByHeaderRegex/', $params);
	}

}

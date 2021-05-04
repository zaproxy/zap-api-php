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
class Brk {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Returns True if ZAP will break on both requests and responses
	 */
	public function isBreakAll($apikey='') {
		return $this->zap->request($this->zap->base . 'break/view/isBreakAll/', array('apikey' => $apikey))->{'isBreakAll'};
	}

	/**
	 * Returns True if ZAP will break on requests
	 */
	public function isBreakRequest($apikey='') {
		return $this->zap->request($this->zap->base . 'break/view/isBreakRequest/', array('apikey' => $apikey))->{'isBreakRequest'};
	}

	/**
	 * Returns True if ZAP will break on responses
	 */
	public function isBreakResponse($apikey='') {
		return $this->zap->request($this->zap->base . 'break/view/isBreakResponse/', array('apikey' => $apikey))->{'isBreakResponse'};
	}

	/**
	 * Returns the HTTP message currently intercepted (if any)
	 */
	public function httpMessage($apikey='') {
		return $this->zap->request($this->zap->base . 'break/view/httpMessage/', array('apikey' => $apikey))->{'httpMessage'};
	}

	/**
	 * Controls the global break functionality. The type may be one of: http-all, http-request or http-response. The state may be true (for turning break on for the specified type) or false (for turning break off). Scope is not currently used.
	 */
	public function brk($type, $state, $scope=NULL, $apikey='') {
		$params = array('type' => $type, 'state' => $state, 'apikey' => $apikey);
		if ($scope !== NULL) {
			$params['scope'] = $scope;
		}
		return $this->zap->request($this->zap->base . 'break/action/break/', $params);
	}

	/**
	 * Overwrites the currently intercepted message with the data provided
	 */
	public function setHttpMessage($httpheader, $httpbody=NULL, $apikey='') {
		$params = array('httpHeader' => $httpheader, 'apikey' => $apikey);
		if ($httpbody !== NULL) {
			$params['httpBody'] = $httpbody;
		}
		return $this->zap->request($this->zap->base . 'break/action/setHttpMessage/', $params);
	}

	/**
	 * Submits the currently intercepted message and unsets the global request/response breakpoints
	 */
	public function cont($apikey='') {
		return $this->zap->request($this->zap->base . 'break/action/continue/', array('apikey' => $apikey));
	}

	/**
	 * Submits the currently intercepted message, the next request or response will automatically be intercepted
	 */
	public function step($apikey='') {
		return $this->zap->request($this->zap->base . 'break/action/step/', array('apikey' => $apikey));
	}

	/**
	 * Drops the currently intercepted message
	 */
	public function drop($apikey='') {
		return $this->zap->request($this->zap->base . 'break/action/drop/', array('apikey' => $apikey));
	}

	/**
	 * Adds a custom HTTP breakpoint. The string is the string to match. Location may be one of: url, request_header, request_body, response_header or response_body. Match may be: contains or regex. Inverse (match) may be true or false. Lastly, ignorecase (when matching the string) may be true or false.  
	 */
	public function addHttpBreakpoint($string, $location, $match, $inverse, $ignorecase, $apikey='') {
		return $this->zap->request($this->zap->base . 'break/action/addHttpBreakpoint/', array('string' => $string, 'location' => $location, 'match' => $match, 'inverse' => $inverse, 'ignorecase' => $ignorecase, 'apikey' => $apikey));
	}

	/**
	 * Removes the specified breakpoint
	 */
	public function removeHttpBreakpoint($string, $location, $match, $inverse, $ignorecase, $apikey='') {
		return $this->zap->request($this->zap->base . 'break/action/removeHttpBreakpoint/', array('string' => $string, 'location' => $location, 'match' => $match, 'inverse' => $inverse, 'ignorecase' => $ignorecase, 'apikey' => $apikey));
	}

}

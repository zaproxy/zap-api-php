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
class Authentication {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Gets the name of the authentication methods.
	 */
	public function getSupportedAuthenticationMethods($apikey='') {
		return $this->zap->request($this->zap->base . 'authentication/view/getSupportedAuthenticationMethods/', array('apikey' => $apikey))->{'getSupportedAuthenticationMethods'};
	}

	/**
	 * Gets the configuration parameters for the authentication method with the given name.
	 */
	public function getAuthenticationMethodConfigParams($authmethodname, $apikey='') {
		return $this->zap->request($this->zap->base . 'authentication/view/getAuthenticationMethodConfigParams/', array('authMethodName' => $authmethodname, 'apikey' => $apikey))->{'getAuthenticationMethodConfigParams'};
	}

	/**
	 * Gets the name of the authentication method for the context with the given ID.
	 */
	public function getAuthenticationMethod($contextid, $apikey='') {
		return $this->zap->request($this->zap->base . 'authentication/view/getAuthenticationMethod/', array('contextId' => $contextid, 'apikey' => $apikey))->{'getAuthenticationMethod'};
	}

	/**
	 * Gets the logged in indicator for the context with the given ID.
	 */
	public function getLoggedInIndicator($contextid, $apikey='') {
		return $this->zap->request($this->zap->base . 'authentication/view/getLoggedInIndicator/', array('contextId' => $contextid, 'apikey' => $apikey))->{'getLoggedInIndicator'};
	}

	/**
	 * Gets the logged out indicator for the context with the given ID.
	 */
	public function getLoggedOutIndicator($contextid, $apikey='') {
		return $this->zap->request($this->zap->base . 'authentication/view/getLoggedOutIndicator/', array('contextId' => $contextid, 'apikey' => $apikey))->{'getLoggedOutIndicator'};
	}

	/**
	 * Sets the authentication method for the context with the given ID.
	 */
	public function setAuthenticationMethod($contextid, $authmethodname, $authmethodconfigparams=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'authMethodName' => $authmethodname, 'apikey' => $apikey);
		if ($authmethodconfigparams !== NULL) {
			$params['authMethodConfigParams'] = $authmethodconfigparams;
		}
		return $this->zap->request($this->zap->base . 'authentication/action/setAuthenticationMethod/', $params);
	}

	/**
	 * Sets the logged in indicator for the context with the given ID.
	 */
	public function setLoggedInIndicator($contextid, $loggedinindicatorregex, $apikey='') {
		return $this->zap->request($this->zap->base . 'authentication/action/setLoggedInIndicator/', array('contextId' => $contextid, 'loggedInIndicatorRegex' => $loggedinindicatorregex, 'apikey' => $apikey));
	}

	/**
	 * Sets the logged out indicator for the context with the given ID.
	 */
	public function setLoggedOutIndicator($contextid, $loggedoutindicatorregex, $apikey='') {
		return $this->zap->request($this->zap->base . 'authentication/action/setLoggedOutIndicator/', array('contextId' => $contextid, 'loggedOutIndicatorRegex' => $loggedoutindicatorregex, 'apikey' => $apikey));
	}

}

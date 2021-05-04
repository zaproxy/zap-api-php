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
class Users {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Gets a list of users that belong to the context with the given ID, or all users if none provided.
	 */
	public function usersList($contextid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($contextid !== NULL) {
			$params['contextId'] = $contextid;
		}
		return $this->zap->request($this->zap->base . 'users/view/usersList/', $params)->{'usersList'};
	}

	/**
	 * Gets the data of the user with the given ID that belongs to the context with the given ID.
	 */
	public function getUserById($contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/view/getUserById/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey))->{'getUserById'};
	}

	/**
	 * Gets the configuration parameters for the credentials of the context with the given ID.
	 */
	public function getAuthenticationCredentialsConfigParams($contextid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/view/getAuthenticationCredentialsConfigParams/', array('contextId' => $contextid, 'apikey' => $apikey))->{'getAuthenticationCredentialsConfigParams'};
	}

	/**
	 * Gets the authentication credentials of the user with given ID that belongs to the context with the given ID.
	 */
	public function getAuthenticationCredentials($contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/view/getAuthenticationCredentials/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey))->{'getAuthenticationCredentials'};
	}

	/**
	 * Gets the authentication state information for the user identified by the Context and User Ids.
	 */
	public function getAuthenticationState($contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/view/getAuthenticationState/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey))->{'getAuthenticationState'};
	}

	/**
	 * Gets the authentication session information for the user identified by the Context and User Ids, e.g. cookies and realm credentials.
	 */
	public function getAuthenticationSession($contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/view/getAuthenticationSession/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey))->{'getAuthenticationSession'};
	}

	/**
	 * Creates a new user with the given name for the context with the given ID.
	 */
	public function newUser($contextid, $name, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/action/newUser/', array('contextId' => $contextid, 'name' => $name, 'apikey' => $apikey));
	}

	/**
	 * Removes the user with the given ID that belongs to the context with the given ID.
	 */
	public function removeUser($contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/action/removeUser/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the user, with the given ID that belongs to the context with the given ID, should be enabled.
	 */
	public function setUserEnabled($contextid, $userid, $enabled, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/action/setUserEnabled/', array('contextId' => $contextid, 'userId' => $userid, 'enabled' => $enabled, 'apikey' => $apikey));
	}

	/**
	 * Renames the user with the given ID that belongs to the context with the given ID.
	 */
	public function setUserName($contextid, $userid, $name, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/action/setUserName/', array('contextId' => $contextid, 'userId' => $userid, 'name' => $name, 'apikey' => $apikey));
	}

	/**
	 * Sets the authentication credentials for the user with the given ID that belongs to the context with the given ID.
	 */
	public function setAuthenticationCredentials($contextid, $userid, $authcredentialsconfigparams=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey);
		if ($authcredentialsconfigparams !== NULL) {
			$params['authCredentialsConfigParams'] = $authcredentialsconfigparams;
		}
		return $this->zap->request($this->zap->base . 'users/action/setAuthenticationCredentials/', $params);
	}

	/**
	 * Tries to authenticate as the identified user, returning the authentication request and whether it appears to have succeeded.
	 */
	public function authenticateAsUser($contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/action/authenticateAsUser/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey));
	}

	/**
	 * Tries to poll as the identified user, returning the authentication request and whether it appears to have succeeded. This will only work if the polling verification strategy has been configured.
	 */
	public function pollAsUser($contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'users/action/pollAsUser/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey));
	}

	/**
	 * Sets fields in the authentication state for the user identified by the Context and User Ids.
	 */
	public function setAuthenticationState($contextid, $userid, $lastpollresult=NULL, $lastpolltimeinms=NULL, $requestssincelastpoll=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey);
		if ($lastpollresult !== NULL) {
			$params['lastPollResult'] = $lastpollresult;
		}
		if ($lastpolltimeinms !== NULL) {
			$params['lastPollTimeInMs'] = $lastpolltimeinms;
		}
		if ($requestssincelastpoll !== NULL) {
			$params['requestsSinceLastPoll'] = $requestssincelastpoll;
		}
		return $this->zap->request($this->zap->base . 'users/action/setAuthenticationState/', $params);
	}

	/**
	 * Sets the specified cookie for the user identified by the Context and User Ids.
	 */
	public function setCookie($contextid, $userid, $domain, $name, $value, $path=NULL, $secure=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'userId' => $userid, 'domain' => $domain, 'name' => $name, 'value' => $value, 'apikey' => $apikey);
		if ($path !== NULL) {
			$params['path'] = $path;
		}
		if ($secure !== NULL) {
			$params['secure'] = $secure;
		}
		return $this->zap->request($this->zap->base . 'users/action/setCookie/', $params);
	}

}

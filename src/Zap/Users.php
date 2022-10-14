<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2022 the ZAP development team
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
 * an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 */


namespace Zap;

/**
 * This file was automatically generated.
 */
class Users
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets a list of users that belong to the context with the given ID, or all users if none provided.
     */
    public function usersList($contextid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($contextid !== null) {
            $params['contextId'] = $contextid;
        }
        return $this->zap->request($this->zap->base . 'users/view/usersList/', $params)->usersList ?? null;
    }

    /**
     * Gets the data of the user with the given ID that belongs to the context with the given ID.
     */
    public function getUserById($contextid, $userid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/view/getUserById/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ])->getUserById ?? null;
    }

    /**
     * Gets the configuration parameters for the credentials of the context with the given ID.
     */
    public function getAuthenticationCredentialsConfigParams($contextid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/view/getAuthenticationCredentialsConfigParams/', [
            'contextId' => $contextid,
            'apikey' => $apikey,
        ])->getAuthenticationCredentialsConfigParams ?? null;
    }

    /**
     * Gets the authentication credentials of the user with given ID that belongs to the context with the given ID.
     */
    public function getAuthenticationCredentials($contextid, $userid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/view/getAuthenticationCredentials/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ])->getAuthenticationCredentials ?? null;
    }

    /**
     * Gets the authentication state information for the user identified by the Context and User Ids.
     */
    public function getAuthenticationState($contextid, $userid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/view/getAuthenticationState/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ])->getAuthenticationState ?? null;
    }

    /**
     * Gets the authentication session information for the user identified by the Context and User Ids, e.g. cookies and
     * realm credentials.
     */
    public function getAuthenticationSession($contextid, $userid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/view/getAuthenticationSession/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ])->getAuthenticationSession ?? null;
    }

    /**
     * Creates a new user with the given name for the context with the given ID.
     */
    public function newUser($contextid, $name, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/action/newUser/', [
            'contextId' => $contextid,
            'name' => $name,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Removes the user with the given ID that belongs to the context with the given ID.
     */
    public function removeUser($contextid, $userid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/action/removeUser/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not the user, with the given ID that belongs to the context with the given ID, should be enabled.
     */
    public function setUserEnabled($contextid, $userid, $enabled, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/action/setUserEnabled/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Renames the user with the given ID that belongs to the context with the given ID.
     */
    public function setUserName($contextid, $userid, $name, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/action/setUserName/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'name' => $name,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the authentication credentials for the user with the given ID that belongs to the context with the given ID.
     */
    public function setAuthenticationCredentials(
        $contextid,
        $userid,
        $authcredentialsconfigparams = null,
        string $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ];
        if ($authcredentialsconfigparams !== null) {
            $params['authCredentialsConfigParams'] = $authcredentialsconfigparams;
        }
        return $this->zap->request($this->zap->base . 'users/action/setAuthenticationCredentials/', $params);
    }

    /**
     * Tries to authenticate as the identified user, returning the authentication request and whether it appears to have
     * succeeded.
     */
    public function authenticateAsUser($contextid, $userid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/action/authenticateAsUser/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Tries to poll as the identified user, returning the authentication request and whether it appears to have
     * succeeded. This will only work if the polling verification strategy has been configured.
     */
    public function pollAsUser($contextid, $userid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'users/action/pollAsUser/', [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets fields in the authentication state for the user identified by the Context and User Ids.
     */
    public function setAuthenticationState(
        $contextid,
        $userid,
        $lastpollresult = null,
        $lastpolltimeinms = null,
        $requestssincelastpoll = null,
        string $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ];
        if ($lastpollresult !== null) {
            $params['lastPollResult'] = $lastpollresult;
        }
        if ($lastpolltimeinms !== null) {
            $params['lastPollTimeInMs'] = $lastpolltimeinms;
        }
        if ($requestssincelastpoll !== null) {
            $params['requestsSinceLastPoll'] = $requestssincelastpoll;
        }
        return $this->zap->request($this->zap->base . 'users/action/setAuthenticationState/', $params);
    }

    /**
     * Sets the specified cookie for the user identified by the Context and User Ids.
     */
    public function setCookie(
        $contextid,
        $userid,
        $domain,
        $name,
        $value,
        $path = null,
        $secure = null,
        string $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'userId' => $userid,
            'domain' => $domain,
            'name' => $name,
            'value' => $value,
            'apikey' => $apikey,
        ];
        if ($path !== null) {
            $params['path'] = $path;
        }
        if ($secure !== null) {
            $params['secure'] = $secure;
        }
        return $this->zap->request($this->zap->base . 'users/action/setCookie/', $params);
    }
}

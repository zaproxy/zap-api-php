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
class HttpSessions
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets all of the sites that have sessions.
     */
    public function sites(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/view/sites/', [
            'apikey' => $apikey,
        ])['sites'] ?? null;
    }

    /**
     * Gets the sessions for the given site. Optionally returning just the session with the given name.
     */
    public function sessions($site, $session = null, string $apikey = '')
    {
        $params = [
            'site' => $site,
            'apikey' => $apikey,
        ];
        if ($session !== null) {
            $params['session'] = $session;
        }
        return $this->zap->request($this->zap->base . 'httpSessions/view/sessions/', $params)['sessions'] ?? null;
    }

    /**
     * Gets the name of the active session for the given site.
     */
    public function activeSession($site, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/view/activeSession/', [
            'site' => $site,
            'apikey' => $apikey,
        ])['activeSession'] ?? null;
    }

    /**
     * Gets the names of the session tokens for the given site.
     */
    public function sessionTokens($site, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/view/sessionTokens/', [
            'site' => $site,
            'apikey' => $apikey,
        ])['sessionTokens'] ?? null;
    }

    /**
     * Gets the default session tokens.
     */
    public function defaultSessionTokens(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/view/defaultSessionTokens/', [
            'apikey' => $apikey,
        ])['defaultSessionTokens'] ?? null;
    }

    /**
     * Creates an empty session for the given site. Optionally with the given name.
     */
    public function createEmptySession($site, $session = null, string $apikey = '')
    {
        $params = [
            'site' => $site,
            'apikey' => $apikey,
        ];
        if ($session !== null) {
            $params['session'] = $session;
        }
        return $this->zap->request($this->zap->base . 'httpSessions/action/createEmptySession/', $params);
    }

    /**
     * Removes the session from the given site.
     */
    public function removeSession($site, $session, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/removeSession/', [
            'site' => $site,
            'session' => $session,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the given session as active for the given site.
     */
    public function setActiveSession($site, $session, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/setActiveSession/', [
            'site' => $site,
            'session' => $session,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Unsets the active session of the given site.
     */
    public function unsetActiveSession($site, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/unsetActiveSession/', [
            'site' => $site,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds the session token to the given site.
     */
    public function addSessionToken($site, $sessiontoken, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/addSessionToken/', [
            'site' => $site,
            'sessionToken' => $sessiontoken,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Removes the session token from the given site.
     */
    public function removeSessionToken($site, $sessiontoken, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/removeSessionToken/', [
            'site' => $site,
            'sessionToken' => $sessiontoken,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the value of the session token of the given session for the given site.
     */
    public function setSessionTokenValue($site, $session, $sessiontoken, $tokenvalue, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/setSessionTokenValue/', [
            'site' => $site,
            'session' => $session,
            'sessionToken' => $sessiontoken,
            'tokenValue' => $tokenvalue,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Renames the session of the given site.
     */
    public function renameSession($site, $oldsessionname, $newsessionname, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/renameSession/', [
            'site' => $site,
            'oldSessionName' => $oldsessionname,
            'newSessionName' => $newsessionname,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds a default session token with the given name and enabled state.
     */
    public function addDefaultSessionToken($sessiontoken, $tokenenabled = null, string $apikey = '')
    {
        $params = [
            'sessionToken' => $sessiontoken,
            'apikey' => $apikey,
        ];
        if ($tokenenabled !== null) {
            $params['tokenEnabled'] = $tokenenabled;
        }
        return $this->zap->request($this->zap->base . 'httpSessions/action/addDefaultSessionToken/', $params);
    }

    /**
     * Sets whether or not the default session token with the given name is enabled.
     */
    public function setDefaultSessionTokenEnabled($sessiontoken, $tokenenabled, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/setDefaultSessionTokenEnabled/', [
            'sessionToken' => $sessiontoken,
            'tokenEnabled' => $tokenenabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Removes the default session token with the given name.
     */
    public function removeDefaultSessionToken($sessiontoken, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'httpSessions/action/removeDefaultSessionToken/', [
            'sessionToken' => $sessiontoken,
            'apikey' => $apikey,
        ]);
    }
}

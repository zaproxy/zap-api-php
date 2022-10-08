<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2022 the ZAP development team
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
class Authentication
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets the name of the authentication methods.
     */
    public function getSupportedAuthenticationMethods(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'authentication/view/getSupportedAuthenticationMethods/',
            [
                'apikey' => $apikey,
            ]
        )['getSupportedAuthenticationMethods'] ?? null;
    }

    /**
     * Gets the configuration parameters for the authentication method with the given name.
     *
     * @param mixed $authmethodname
     */
    public function getAuthenticationMethodConfigParams($authmethodname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'authentication/view/getAuthenticationMethodConfigParams/',
            [
                'authMethodName' => $authmethodname, 'apikey' => $apikey,
            ]
        )['getAuthenticationMethodConfigParams'] ?? null;
    }

    /**
     * Gets the name of the authentication method for the context with the given ID.
     *
     * @param mixed $contextid
     */
    public function getAuthenticationMethod($contextid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'authentication/view/getAuthenticationMethod/',
            [
                'contextId' => $contextid, 'apikey' => $apikey,
            ]
        )['getAuthenticationMethod'] ?? null;
    }

    /**
     * Gets the logged in indicator for the context with the given ID.
     *
     * @param mixed $contextid
     */
    public function getLoggedInIndicator($contextid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'authentication/view/getLoggedInIndicator/',
            [
                'contextId' => $contextid, 'apikey' => $apikey,
            ]
        )['getLoggedInIndicator'] ?? null;
    }

    /**
     * Gets the logged out indicator for the context with the given ID.
     *
     * @param mixed $contextid
     */
    public function getLoggedOutIndicator($contextid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'authentication/view/getLoggedOutIndicator/',
            [
                'contextId' => $contextid, 'apikey' => $apikey,
            ]
        )['getLoggedOutIndicator'] ?? null;
    }

    /**
     * Sets the authentication method for the context with the given ID.
     *
     * @param mixed      $contextid
     * @param mixed      $authmethodname
     * @param null|mixed $authmethodconfigparams
     */
    public function setAuthenticationMethod(
        $contextid,
        $authmethodname,
        $authmethodconfigparams = null,
        string $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'authMethodName' => $authmethodname, 'apikey' => $apikey,
        ];
        if (null !== $authmethodconfigparams) {
            $params['authMethodConfigParams'] = $authmethodconfigparams;
        }

        return $this->zap->request(
            $this->zap->base.'authentication/action/setAuthenticationMethod/',
            $params
        );
    }

    /**
     * Sets the logged in indicator for the context with the given ID.
     *
     * @param mixed $contextid
     * @param mixed $loggedinindicatorregex
     */
    public function setLoggedInIndicator(
        $contextid,
        $loggedinindicatorregex,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'authentication/action/setLoggedInIndicator/',
            [
                'contextId' => $contextid,
                'loggedInIndicatorRegex' => $loggedinindicatorregex, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets the logged out indicator for the context with the given ID.
     *
     * @param mixed $contextid
     * @param mixed $loggedoutindicatorregex
     */
    public function setLoggedOutIndicator(
        $contextid,
        $loggedoutindicatorregex,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'authentication/action/setLoggedOutIndicator/',
            [
                'contextId' => $contextid,
                'loggedOutIndicatorRegex' => $loggedoutindicatorregex, 'apikey' => $apikey,
            ]
        );
    }
}

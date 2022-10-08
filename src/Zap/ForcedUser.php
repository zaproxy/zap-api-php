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
class ForcedUser
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Returns 'true' if 'forced user' mode is enabled, 'false' otherwise.
     */
    public function isForcedUserModeEnabled(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'forcedUser/view/isForcedUserModeEnabled/',
            [
                'apikey' => $apikey,
            ]
        )['isForcedUserModeEnabled'] ?? null;
    }

    /**
     * Gets the user (ID) set as 'forced user' for the given context (ID).
     *
     * @param mixed $contextid
     */
    public function getForcedUser($contextid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'forcedUser/view/getForcedUser/',
            [
                'contextId' => $contextid, 'apikey' => $apikey,
            ]
        )['getForcedUser'] ?? null;
    }

    /**
     * Sets the user (ID) that should be used in 'forced user' mode for the given context (ID).
     *
     * @param mixed $contextid
     * @param mixed $userid
     */
    public function setForcedUser(
        $contextid,
        $userid,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'forcedUser/action/setForcedUser/',
            [
                'contextId' => $contextid,
                'userId' => $userid, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets if 'forced user' mode should be enabled or not.
     *
     * @param mixed $boolean
     */
    public function setForcedUserModeEnabled($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'forcedUser/action/setForcedUserModeEnabled/',
            [
                'boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }
}

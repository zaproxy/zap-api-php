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
class Authorization
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Obtains all the configuration of the authorization detection method that is currently set for a
     * context.
     *
     * @param mixed $contextid
     */
    public function getAuthorizationDetectionMethod($contextid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'authorization/view/getAuthorizationDetectionMethod/',
            [
                'contextId' => $contextid, 'apikey' => $apikey,
            ]
        )['getAuthorizationDetectionMethod'] ?? null;
    }

    /**
     * Sets the authorization detection method for a context as one that identifies un-authorized messages
     * based on: the message's status code or a regex pattern in the response's header or body. Also,
     * whether all conditions must match or just some can be specified via the logicalOperator parameter,
     * which accepts two values: "AND" (default), "OR".
     *
     * @param mixed      $contextid
     * @param null|mixed $headerregex
     * @param null|mixed $bodyregex
     * @param null|mixed $statuscode
     * @param null|mixed $logicaloperator
     */
    public function setBasicAuthorizationDetectionMethod(
        $contextid,
        $headerregex = null,
        $bodyregex = null,
        $statuscode = null,
        $logicaloperator = null,
        string $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid, 'apikey' => $apikey,
        ];
        if (null !== $headerregex) {
            $params['headerRegex'] = $headerregex;
        }
        if (null !== $bodyregex) {
            $params['bodyRegex'] = $bodyregex;
        }
        if (null !== $statuscode) {
            $params['statusCode'] = $statuscode;
        }
        if (null !== $logicaloperator) {
            $params['logicalOperator'] = $logicaloperator;
        }

        return $this->zap->request(
            $this->zap->base.'authorization/action/setBasicAuthorizationDetectionMethod/',
            $params
        );
    }
}

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
class Authorization
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Obtains all the configuration of the authorization detection method that is currently set for a context.
     */
    public function getAuthorizationDetectionMethod($contextid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'authorization/view/getAuthorizationDetectionMethod/', [
            'contextId' => $contextid,
            'apikey' => $apikey,
        ])['getAuthorizationDetectionMethod'] ?? null;
    }

    /**
     * Sets the authorization detection method for a context as one that identifies un-authorized messages based on: the
     * message's status code or a regex pattern in the response's header or body. Also, whether all conditions must
     * match or just some can be specified via the logicalOperator parameter, which accepts two values: "AND" (default),
     * "OR".
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
            'contextId' => $contextid,
            'apikey' => $apikey,
        ];
        if ($headerregex !== null) {
            $params['headerRegex'] = $headerregex;
        }
        if ($bodyregex !== null) {
            $params['bodyRegex'] = $bodyregex;
        }
        if ($statuscode !== null) {
            $params['statusCode'] = $statuscode;
        }
        if ($logicaloperator !== null) {
            $params['logicalOperator'] = $logicaloperator;
        }
        return $this->zap->request(
            $this->zap->base . 'authorization/action/setBasicAuthorizationDetectionMethod/',
            $params
        );
    }
}

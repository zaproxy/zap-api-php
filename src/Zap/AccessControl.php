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
class AccessControl
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets the Access Control scan progress (percentage integer) for the given context ID. This component is optional
     * and therefore the API will only work if it is installed
     */
    public function getScanProgress($contextid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'accessControl/view/getScanProgress/', [
            'contextId' => $contextid,
            'apikey' => $apikey,
        ])->getScanProgress ?? null;
    }

    /**
     * Gets the Access Control scan status (description string) for the given context ID. This component is optional and
     * therefore the API will only work if it is installed
     */
    public function getScanStatus($contextid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'accessControl/view/getScanStatus/', [
            'contextId' => $contextid,
            'apikey' => $apikey,
        ])->getScanStatus ?? null;
    }

    /**
     * Starts an Access Control scan with the given context ID and user ID. (Optional parameters: user ID for
     * Unauthenticated user, boolean identifying whether or not Alerts are raised, and the Risk level for the Alerts.)
     * [This assumes the Access Control rules were previously established via ZAP gui and the necessary Context
     * exported/imported.] This component is optional and therefore the API will only work if it is installed
     */
    public function scan(
        $contextid,
        $userid,
        $scanasunauthuser = null,
        $raisealert = null,
        $alertrisklevel = null,
        string $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ];
        if ($scanasunauthuser !== null) {
            $params['scanAsUnAuthUser'] = $scanasunauthuser;
        }
        if ($raisealert !== null) {
            $params['raiseAlert'] = $raisealert;
        }
        if ($alertrisklevel !== null) {
            $params['alertRiskLevel'] = $alertrisklevel;
        }
        return $this->zap->request($this->zap->base . 'accessControl/action/scan/', $params);
    }

    /**
     * Generates an Access Control report for the given context ID and saves it based on the provided filename (path).
     * This component is optional and therefore the API will only work if it is installed
     */
    public function writeHTMLreport($contextid, $filename, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'accessControl/action/writeHTMLreport/', [
            'contextId' => $contextid,
            'fileName' => $filename,
            'apikey' => $apikey,
        ]);
    }
}

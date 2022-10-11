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
 *
 * @property Zap $zap
 */
class AlertFilter
{
    public function __construct($zap)
    {
        $this->zap = $zap;
    }

    /**
     * Lists the alert filters of the context with the given ID. This component is optional and therefore the API will
     * only work if it is installed
     */
    public function alertFilterList($contextid, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/view/alertFilterList/', [
            'contextId' => $contextid,
            'apikey' => $apikey,
        ])->{'alertFilterList'};
    }

    /**
     * Lists the global alert filters. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function globalAlertFilterList($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/view/globalAlertFilterList/', [
            'apikey' => $apikey,
        ])->{'globalAlertFilterList'};
    }

    /**
     * Adds a new alert filter for the context with the given ID. This component is optional and therefore the API will
     * only work if it is installed
     */
    public function addAlertFilter(
        $contextid,
        $ruleid,
        $newlevel,
        $url = null,
        $urlisregex = null,
        $parameter = null,
        $enabled = null,
        $parameterisregex = null,
        $attack = null,
        $attackisregex = null,
        $evidence = null,
        $evidenceisregex = null,
        $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'ruleId' => $ruleid,
            'newLevel' => $newlevel,
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($urlisregex !== null) {
            $params['urlIsRegex'] = $urlisregex;
        }
        if ($parameter !== null) {
            $params['parameter'] = $parameter;
        }
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        if ($parameterisregex !== null) {
            $params['parameterIsRegex'] = $parameterisregex;
        }
        if ($attack !== null) {
            $params['attack'] = $attack;
        }
        if ($attackisregex !== null) {
            $params['attackIsRegex'] = $attackisregex;
        }
        if ($evidence !== null) {
            $params['evidence'] = $evidence;
        }
        if ($evidenceisregex !== null) {
            $params['evidenceIsRegex'] = $evidenceisregex;
        }
        return $this->zap->request($this->zap->base . 'alertFilter/action/addAlertFilter/', $params);
    }

    /**
     * Removes an alert filter from the context with the given ID. This component is optional and therefore the API will
     * only work if it is installed
     */
    public function removeAlertFilter(
        $contextid,
        $ruleid,
        $newlevel,
        $url = null,
        $urlisregex = null,
        $parameter = null,
        $enabled = null,
        $parameterisregex = null,
        $attack = null,
        $attackisregex = null,
        $evidence = null,
        $evidenceisregex = null,
        $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'ruleId' => $ruleid,
            'newLevel' => $newlevel,
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($urlisregex !== null) {
            $params['urlIsRegex'] = $urlisregex;
        }
        if ($parameter !== null) {
            $params['parameter'] = $parameter;
        }
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        if ($parameterisregex !== null) {
            $params['parameterIsRegex'] = $parameterisregex;
        }
        if ($attack !== null) {
            $params['attack'] = $attack;
        }
        if ($attackisregex !== null) {
            $params['attackIsRegex'] = $attackisregex;
        }
        if ($evidence !== null) {
            $params['evidence'] = $evidence;
        }
        if ($evidenceisregex !== null) {
            $params['evidenceIsRegex'] = $evidenceisregex;
        }
        return $this->zap->request($this->zap->base . 'alertFilter/action/removeAlertFilter/', $params);
    }

    /**
     * Adds a new global alert filter. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function addGlobalAlertFilter(
        $ruleid,
        $newlevel,
        $url = null,
        $urlisregex = null,
        $parameter = null,
        $enabled = null,
        $parameterisregex = null,
        $attack = null,
        $attackisregex = null,
        $evidence = null,
        $evidenceisregex = null,
        $apikey = ''
    ) {
        $params = [
            'ruleId' => $ruleid,
            'newLevel' => $newlevel,
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($urlisregex !== null) {
            $params['urlIsRegex'] = $urlisregex;
        }
        if ($parameter !== null) {
            $params['parameter'] = $parameter;
        }
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        if ($parameterisregex !== null) {
            $params['parameterIsRegex'] = $parameterisregex;
        }
        if ($attack !== null) {
            $params['attack'] = $attack;
        }
        if ($attackisregex !== null) {
            $params['attackIsRegex'] = $attackisregex;
        }
        if ($evidence !== null) {
            $params['evidence'] = $evidence;
        }
        if ($evidenceisregex !== null) {
            $params['evidenceIsRegex'] = $evidenceisregex;
        }
        return $this->zap->request($this->zap->base . 'alertFilter/action/addGlobalAlertFilter/', $params);
    }

    /**
     * Removes a global alert filter. This component is optional and therefore the API will only work if it is installed
     */
    public function removeGlobalAlertFilter(
        $ruleid,
        $newlevel,
        $url = null,
        $urlisregex = null,
        $parameter = null,
        $enabled = null,
        $parameterisregex = null,
        $attack = null,
        $attackisregex = null,
        $evidence = null,
        $evidenceisregex = null,
        $apikey = ''
    ) {
        $params = [
            'ruleId' => $ruleid,
            'newLevel' => $newlevel,
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($urlisregex !== null) {
            $params['urlIsRegex'] = $urlisregex;
        }
        if ($parameter !== null) {
            $params['parameter'] = $parameter;
        }
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        if ($parameterisregex !== null) {
            $params['parameterIsRegex'] = $parameterisregex;
        }
        if ($attack !== null) {
            $params['attack'] = $attack;
        }
        if ($attackisregex !== null) {
            $params['attackIsRegex'] = $attackisregex;
        }
        if ($evidence !== null) {
            $params['evidence'] = $evidence;
        }
        if ($evidenceisregex !== null) {
            $params['evidenceIsRegex'] = $evidenceisregex;
        }
        return $this->zap->request($this->zap->base . 'alertFilter/action/removeGlobalAlertFilter/', $params);
    }

    /**
     * Applies all currently enabled Global and Context alert filters. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function applyAll($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/action/applyAll/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Applies all currently enabled Context alert filters. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function applyContext($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/action/applyContext/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Applies all currently enabled Global alert filters. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function applyGlobal($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/action/applyGlobal/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Tests all currently enabled Global and Context alert filters. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function testAll($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/action/testAll/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Tests all currently enabled Context alert filters. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function testContext($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/action/testContext/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Tests all currently enabled Global alert filters. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function testGlobal($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alertFilter/action/testGlobal/', [
            'apikey' => $apikey,
        ]);
    }
}

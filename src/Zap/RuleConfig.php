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
class RuleConfig
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Show the specified rule configuration.
     *
     * @param mixed $key
     */
    public function ruleConfigValue($key, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ruleConfig/view/ruleConfigValue/',
            [
                'key' => $key, 'apikey' => $apikey,
            ]
        )['ruleConfigValue'] ?? null;
    }

    /**
     * Show all of the rule configurations.
     */
    public function allRuleConfigs(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ruleConfig/view/allRuleConfigs/',
            [
                'apikey' => $apikey,
            ]
        )['allRuleConfigs'] ?? null;
    }

    /**
     * Reset the specified rule configuration, which must already exist.
     *
     * @param mixed $key
     */
    public function resetRuleConfigValue($key, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ruleConfig/action/resetRuleConfigValue/',
            [
                'key' => $key, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Reset all of the rule configurations.
     */
    public function resetAllRuleConfigValues(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ruleConfig/action/resetAllRuleConfigValues/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    /**
     * Set the specified rule configuration, which must already exist.
     *
     * @param mixed      $key
     * @param null|mixed $value
     */
    public function setRuleConfigValue(
        $key,
        $value = null,
        string $apikey = ''
    ) {
        $params = [
            'key' => $key, 'apikey' => $apikey,
        ];
        if (null !== $value) {
            $params['value'] = $value;
        }

        return $this->zap->request(
            $this->zap->base.'ruleConfig/action/setRuleConfigValue/',
            $params
        );
    }
}

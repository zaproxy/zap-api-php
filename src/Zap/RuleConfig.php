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
class RuleConfig {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Show the specified rule configuration
	 */
	public function ruleConfigValue($key, $apikey='') {
		return $this->zap->request($this->zap->base . 'ruleConfig/view/ruleConfigValue/', array('key' => $key, 'apikey' => $apikey))->{'ruleConfigValue'};
	}

	/**
	 * Show all of the rule configurations
	 */
	public function allRuleConfigs($apikey='') {
		return $this->zap->request($this->zap->base . 'ruleConfig/view/allRuleConfigs/', array('apikey' => $apikey))->{'allRuleConfigs'};
	}

	/**
	 * Reset the specified rule configuration, which must already exist
	 */
	public function resetRuleConfigValue($key, $apikey='') {
		return $this->zap->request($this->zap->base . 'ruleConfig/action/resetRuleConfigValue/', array('key' => $key, 'apikey' => $apikey));
	}

	/**
	 * Reset all of the rule configurations
	 */
	public function resetAllRuleConfigValues($apikey='') {
		return $this->zap->request($this->zap->base . 'ruleConfig/action/resetAllRuleConfigValues/', array('apikey' => $apikey));
	}

	/**
	 * Set the specified rule configuration, which must already exist
	 */
	public function setRuleConfigValue($key, $value=NULL, $apikey='') {
		$params = array('key' => $key, 'apikey' => $apikey);
		if ($value !== NULL) {
			$params['value'] = $value;
		}
		return $this->zap->request($this->zap->base . 'ruleConfig/action/setRuleConfigValue/', $params);
	}

}

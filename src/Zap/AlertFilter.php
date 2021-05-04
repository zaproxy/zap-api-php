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
class AlertFilter {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Lists the alert filters of the context with the given ID.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function alertFilterList($contextid, $apikey='') {
		return $this->zap->request($this->zap->base . 'alertFilter/view/alertFilterList/', array('contextId' => $contextid, 'apikey' => $apikey))->{'alertFilterList'};
	}

	/**
	 * Lists the global alert filters.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function globalAlertFilterList($apikey='') {
		return $this->zap->request($this->zap->base . 'alertFilter/view/globalAlertFilterList/', array('apikey' => $apikey))->{'globalAlertFilterList'};
	}

	/**
	 * Adds a new alert filter for the context with the given ID. 
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function addAlertFilter($contextid, $ruleid, $newlevel, $url=NULL, $urlisregex=NULL, $parameter=NULL, $enabled=NULL, $parameterisregex=NULL, $attack=NULL, $attackisregex=NULL, $evidence=NULL, $evidenceisregex=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'ruleId' => $ruleid, 'newLevel' => $newlevel, 'apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($urlisregex !== NULL) {
			$params['urlIsRegex'] = $urlisregex;
		}
		if ($parameter !== NULL) {
			$params['parameter'] = $parameter;
		}
		if ($enabled !== NULL) {
			$params['enabled'] = $enabled;
		}
		if ($parameterisregex !== NULL) {
			$params['parameterIsRegex'] = $parameterisregex;
		}
		if ($attack !== NULL) {
			$params['attack'] = $attack;
		}
		if ($attackisregex !== NULL) {
			$params['attackIsRegex'] = $attackisregex;
		}
		if ($evidence !== NULL) {
			$params['evidence'] = $evidence;
		}
		if ($evidenceisregex !== NULL) {
			$params['evidenceIsRegex'] = $evidenceisregex;
		}
		return $this->zap->request($this->zap->base . 'alertFilter/action/addAlertFilter/', $params);
	}

	/**
	 * Removes an alert filter from the context with the given ID.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function removeAlertFilter($contextid, $ruleid, $newlevel, $url=NULL, $urlisregex=NULL, $parameter=NULL, $enabled=NULL, $parameterisregex=NULL, $attack=NULL, $attackisregex=NULL, $evidence=NULL, $evidenceisregex=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'ruleId' => $ruleid, 'newLevel' => $newlevel, 'apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($urlisregex !== NULL) {
			$params['urlIsRegex'] = $urlisregex;
		}
		if ($parameter !== NULL) {
			$params['parameter'] = $parameter;
		}
		if ($enabled !== NULL) {
			$params['enabled'] = $enabled;
		}
		if ($parameterisregex !== NULL) {
			$params['parameterIsRegex'] = $parameterisregex;
		}
		if ($attack !== NULL) {
			$params['attack'] = $attack;
		}
		if ($attackisregex !== NULL) {
			$params['attackIsRegex'] = $attackisregex;
		}
		if ($evidence !== NULL) {
			$params['evidence'] = $evidence;
		}
		if ($evidenceisregex !== NULL) {
			$params['evidenceIsRegex'] = $evidenceisregex;
		}
		return $this->zap->request($this->zap->base . 'alertFilter/action/removeAlertFilter/', $params);
	}

	/**
	 * Adds a new global alert filter. 
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function addGlobalAlertFilter($ruleid, $newlevel, $url=NULL, $urlisregex=NULL, $parameter=NULL, $enabled=NULL, $parameterisregex=NULL, $attack=NULL, $attackisregex=NULL, $evidence=NULL, $evidenceisregex=NULL, $apikey='') {
		$params = array('ruleId' => $ruleid, 'newLevel' => $newlevel, 'apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($urlisregex !== NULL) {
			$params['urlIsRegex'] = $urlisregex;
		}
		if ($parameter !== NULL) {
			$params['parameter'] = $parameter;
		}
		if ($enabled !== NULL) {
			$params['enabled'] = $enabled;
		}
		if ($parameterisregex !== NULL) {
			$params['parameterIsRegex'] = $parameterisregex;
		}
		if ($attack !== NULL) {
			$params['attack'] = $attack;
		}
		if ($attackisregex !== NULL) {
			$params['attackIsRegex'] = $attackisregex;
		}
		if ($evidence !== NULL) {
			$params['evidence'] = $evidence;
		}
		if ($evidenceisregex !== NULL) {
			$params['evidenceIsRegex'] = $evidenceisregex;
		}
		return $this->zap->request($this->zap->base . 'alertFilter/action/addGlobalAlertFilter/', $params);
	}

	/**
	 * Removes a global alert filter.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function removeGlobalAlertFilter($ruleid, $newlevel, $url=NULL, $urlisregex=NULL, $parameter=NULL, $enabled=NULL, $parameterisregex=NULL, $attack=NULL, $attackisregex=NULL, $evidence=NULL, $evidenceisregex=NULL, $apikey='') {
		$params = array('ruleId' => $ruleid, 'newLevel' => $newlevel, 'apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($urlisregex !== NULL) {
			$params['urlIsRegex'] = $urlisregex;
		}
		if ($parameter !== NULL) {
			$params['parameter'] = $parameter;
		}
		if ($enabled !== NULL) {
			$params['enabled'] = $enabled;
		}
		if ($parameterisregex !== NULL) {
			$params['parameterIsRegex'] = $parameterisregex;
		}
		if ($attack !== NULL) {
			$params['attack'] = $attack;
		}
		if ($attackisregex !== NULL) {
			$params['attackIsRegex'] = $attackisregex;
		}
		if ($evidence !== NULL) {
			$params['evidence'] = $evidence;
		}
		if ($evidenceisregex !== NULL) {
			$params['evidenceIsRegex'] = $evidenceisregex;
		}
		return $this->zap->request($this->zap->base . 'alertFilter/action/removeGlobalAlertFilter/', $params);
	}

}

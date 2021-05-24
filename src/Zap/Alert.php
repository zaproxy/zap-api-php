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
class Alert {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Gets the alert with the given ID, the corresponding HTTP message can be obtained with the 'messageId' field and 'message' API method
	 */
	public function alert($id, $apikey='') {
		return $this->zap->request($this->zap->base . 'alert/view/alert/', array('id' => $id, 'apikey' => $apikey))->{'alert'};
	}

	/**
	 * Gets the alerts raised by ZAP, optionally filtering by URL or riskId, and paginating with 'start' position and 'count' of alerts
	 */
	public function alerts($baseurl=NULL, $start=NULL, $count=NULL, $riskid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		if ($riskid !== NULL) {
			$params['riskId'] = $riskid;
		}
		return $this->zap->request($this->zap->base . 'alert/view/alerts/', $params)->{'alerts'};
	}

	/**
	 * Gets number of alerts grouped by each risk level, optionally filtering by URL
	 */
	public function alertsSummary($baseurl=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		return $this->zap->request($this->zap->base . 'alert/view/alertsSummary/', $params)->{'alertsSummary'};
	}

	/**
	 * Gets the number of alerts, optionally filtering by URL or riskId
	 */
	public function numberOfAlerts($baseurl=NULL, $riskid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($riskid !== NULL) {
			$params['riskId'] = $riskid;
		}
		return $this->zap->request($this->zap->base . 'alert/view/numberOfAlerts/', $params)->{'numberOfAlerts'};
	}

	/**
	 * Gets a summary of the alerts, optionally filtered by a 'url'. If 'recurse' is true then all alerts that apply to urls that start with the specified 'url' will be returned, otherwise only those on exactly the same 'url' (ignoring url parameters)
	 */
	public function alertsByRisk($url=NULL, $recurse=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		return $this->zap->request($this->zap->base . 'alert/view/alertsByRisk/', $params)->{'alertsByRisk'};
	}

	/**
	 * Gets a count of the alerts, optionally filtered as per alertsPerRisk
	 */
	public function alertCountsByRisk($url=NULL, $recurse=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		return $this->zap->request($this->zap->base . 'alert/view/alertCountsByRisk/', $params)->{'alertCountsByRisk'};
	}

	/**
	 * Deletes all alerts of the current session.
	 */
	public function deleteAllAlerts($apikey='') {
		return $this->zap->request($this->zap->base . 'alert/action/deleteAllAlerts/', array('apikey' => $apikey));
	}

	/**
	 * Deletes the alert with the given ID. 
	 */
	public function deleteAlert($id, $apikey='') {
		return $this->zap->request($this->zap->base . 'alert/action/deleteAlert/', array('id' => $id, 'apikey' => $apikey));
	}

	/**
	 * Update the confidence of the alerts.
	 */
	public function updateAlertsConfidence($ids, $confidenceid, $apikey='') {
		return $this->zap->request($this->zap->base . 'alert/action/updateAlertsConfidence/', array('ids' => $ids, 'confidenceId' => $confidenceid, 'apikey' => $apikey));
	}

	/**
	 * Update the risk of the alerts.
	 */
	public function updateAlertsRisk($ids, $riskid, $apikey='') {
		return $this->zap->request($this->zap->base . 'alert/action/updateAlertsRisk/', array('ids' => $ids, 'riskId' => $riskid, 'apikey' => $apikey));
	}

	/**
	 * Update the alert with the given ID, with the provided details.
	 */
	public function updateAlert($id, $name, $riskid, $confidenceid, $description, $param=NULL, $attack=NULL, $otherinfo=NULL, $solution=NULL, $references=NULL, $evidence=NULL, $cweid=NULL, $wascid=NULL, $apikey='') {
		$params = array('id' => $id, 'name' => $name, 'riskId' => $riskid, 'confidenceId' => $confidenceid, 'description' => $description, 'apikey' => $apikey);
		if ($param !== NULL) {
			$params['param'] = $param;
		}
		if ($attack !== NULL) {
			$params['attack'] = $attack;
		}
		if ($otherinfo !== NULL) {
			$params['otherInfo'] = $otherinfo;
		}
		if ($solution !== NULL) {
			$params['solution'] = $solution;
		}
		if ($references !== NULL) {
			$params['references'] = $references;
		}
		if ($evidence !== NULL) {
			$params['evidence'] = $evidence;
		}
		if ($cweid !== NULL) {
			$params['cweId'] = $cweid;
		}
		if ($wascid !== NULL) {
			$params['wascId'] = $wascid;
		}
		return $this->zap->request($this->zap->base . 'alert/action/updateAlert/', $params);
	}

	/**
	 * Add an alert associated with the given message ID, with the provided details. (The ID of the created alert is returned.)
	 */
	public function addAlert($messageid, $name, $riskid, $confidenceid, $description, $param=NULL, $attack=NULL, $otherinfo=NULL, $solution=NULL, $references=NULL, $evidence=NULL, $cweid=NULL, $wascid=NULL, $apikey='') {
		$params = array('messageId' => $messageid, 'name' => $name, 'riskId' => $riskid, 'confidenceId' => $confidenceid, 'description' => $description, 'apikey' => $apikey);
		if ($param !== NULL) {
			$params['param'] = $param;
		}
		if ($attack !== NULL) {
			$params['attack'] = $attack;
		}
		if ($otherinfo !== NULL) {
			$params['otherInfo'] = $otherinfo;
		}
		if ($solution !== NULL) {
			$params['solution'] = $solution;
		}
		if ($references !== NULL) {
			$params['references'] = $references;
		}
		if ($evidence !== NULL) {
			$params['evidence'] = $evidence;
		}
		if ($cweid !== NULL) {
			$params['cweId'] = $cweid;
		}
		if ($wascid !== NULL) {
			$params['wascId'] = $wascid;
		}
		return $this->zap->request($this->zap->base . 'alert/action/addAlert/', $params);
	}

}

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
class Pscan {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Tells whether or not the passive scan should be performed only on messages that are in scope.
	 */
	public function scanOnlyInScope($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/view/scanOnlyInScope/', array('apikey' => $apikey))->{'scanOnlyInScope'};
	}

	/**
	 * The number of records the passive scanner still has to scan
	 */
	public function recordsToScan($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/view/recordsToScan/', array('apikey' => $apikey))->{'recordsToScan'};
	}

	/**
	 * Lists all passive scanners with its ID, name, enabled state and alert threshold.
	 */
	public function scanners($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/view/scanners/', array('apikey' => $apikey))->{'scanners'};
	}

	/**
	 * Show information about the passive scan rule currently being run (if any).
	 */
	public function currentRule($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/view/currentRule/', array('apikey' => $apikey))->{'currentRule'};
	}

	/**
	 * Gets the maximum number of alerts a passive scan rule should raise.
	 */
	public function maxAlertsPerRule($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/view/maxAlertsPerRule/', array('apikey' => $apikey))->{'maxAlertsPerRule'};
	}

	/**
	 * Sets whether or not the passive scanning is enabled (Note: the enabled state is not persisted).
	 */
	public function setEnabled($enabled, $apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/setEnabled/', array('enabled' => $enabled, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the passive scan should be performed only on messages that are in scope.
	 */
	public function setScanOnlyInScope($onlyinscope, $apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/setScanOnlyInScope/', array('onlyInScope' => $onlyinscope, 'apikey' => $apikey));
	}

	/**
	 * Enables all passive scanners
	 */
	public function enableAllScanners($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/enableAllScanners/', array('apikey' => $apikey));
	}

	/**
	 * Disables all passive scanners
	 */
	public function disableAllScanners($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/disableAllScanners/', array('apikey' => $apikey));
	}

	/**
	 * Enables all passive scanners with the given IDs (comma separated list of IDs)
	 */
	public function enableScanners($ids, $apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/enableScanners/', array('ids' => $ids, 'apikey' => $apikey));
	}

	/**
	 * Disables all passive scanners with the given IDs (comma separated list of IDs)
	 */
	public function disableScanners($ids, $apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/disableScanners/', array('ids' => $ids, 'apikey' => $apikey));
	}

	/**
	 * Sets the alert threshold of the passive scanner with the given ID, accepted values for alert threshold: OFF, DEFAULT, LOW, MEDIUM and HIGH
	 */
	public function setScannerAlertThreshold($id, $alertthreshold, $apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/setScannerAlertThreshold/', array('id' => $id, 'alertThreshold' => $alertthreshold, 'apikey' => $apikey));
	}

	/**
	 * Sets the maximum number of alerts a passive scan rule should raise.
	 */
	public function setMaxAlertsPerRule($maxalerts, $apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/setMaxAlertsPerRule/', array('maxAlerts' => $maxalerts, 'apikey' => $apikey));
	}

	/**
	 * Disables all passive scan tags.
	 */
	public function disableAllTags($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/disableAllTags/', array('apikey' => $apikey));
	}

	/**
	 * Enables all passive scan tags.
	 */
	public function enableAllTags($apikey='') {
		return $this->zap->request($this->zap->base . 'pscan/action/enableAllTags/', array('apikey' => $apikey));
	}

}

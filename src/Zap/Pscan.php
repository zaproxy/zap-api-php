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
class Pscan
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Tells whether or not the passive scan should be performed only on messages that are in scope.
     */
    public function scanOnlyInScope(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/view/scanOnlyInScope/', [
            'apikey' => $apikey,
        ])['scanOnlyInScope'] ?? null;
    }

    /**
     * The number of records the passive scanner still has to scan
     */
    public function recordsToScan(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/view/recordsToScan/', [
            'apikey' => $apikey,
        ])['recordsToScan'] ?? null;
    }

    /**
     * Lists all passive scan rules with their ID, name, enabled state, and alert threshold.
     */
    public function scanners(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/view/scanners/', [
            'apikey' => $apikey,
        ])['scanners'] ?? null;
    }

    /**
     * Show information about the passive scan rule currently being run (if any).
     */
    public function currentRule(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/view/currentRule/', [
            'apikey' => $apikey,
        ])['currentRule'] ?? null;
    }

    /**
     * Show information about the passive scan tasks currently being run (if any).
     */
    public function currentTasks(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/view/currentTasks/', [
            'apikey' => $apikey,
        ])['currentTasks'] ?? null;
    }

    /**
     * Gets the maximum number of alerts a passive scan rule should raise.
     */
    public function maxAlertsPerRule(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/view/maxAlertsPerRule/', [
            'apikey' => $apikey,
        ])['maxAlertsPerRule'] ?? null;
    }

    /**
     * Sets whether or not the passive scanning is enabled (Note: the enabled state is not persisted).
     */
    public function setEnabled($enabled, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/setEnabled/', [
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not the passive scan should be performed only on messages that are in scope.
     */
    public function setScanOnlyInScope($onlyinscope, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/setScanOnlyInScope/', [
            'onlyInScope' => $onlyinscope,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Enables all passive scan rules
     */
    public function enableAllScanners(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/enableAllScanners/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Disables all passive scan rules
     */
    public function disableAllScanners(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/disableAllScanners/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Enables all passive scan rules with the given IDs (comma separated list of IDs)
     */
    public function enableScanners($ids, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/enableScanners/', [
            'ids' => $ids,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Disables all passive scan rules with the given IDs (comma separated list of IDs)
     */
    public function disableScanners($ids, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/disableScanners/', [
            'ids' => $ids,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the alert threshold of the passive scanner with the given ID, accepted values for alert threshold: OFF,
     * DEFAULT, LOW, MEDIUM and HIGH
     */
    public function setScannerAlertThreshold($id, $alertthreshold, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/setScannerAlertThreshold/', [
            'id' => $id,
            'alertThreshold' => $alertthreshold,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum number of alerts a passive scan rule should raise.
     */
    public function setMaxAlertsPerRule($maxalerts, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/setMaxAlertsPerRule/', [
            'maxAlerts' => $maxalerts,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Disables all passive scan tags.
     */
    public function disableAllTags(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/disableAllTags/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Enables all passive scan tags.
     */
    public function enableAllTags(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/enableAllTags/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Clears the passive scan queue.
     */
    public function clearQueue(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pscan/action/clearQueue/', [
            'apikey' => $apikey,
        ]);
    }
}

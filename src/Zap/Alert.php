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
class Alert
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets the alert with the given ID, the corresponding HTTP message can be obtained with the 'messageId' field and
     * 'message' API method
     */
    public function alert($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alert/view/alert/', [
            'id' => $id,
            'apikey' => $apikey,
        ])->alert ?? null;
    }

    /**
     * Gets the alerts raised by ZAP, optionally filtering by URL or riskId, and paginating with 'start' position and
     * 'count' of alerts
     */
    public function alerts($baseurl = null, $start = null, $count = null, $riskid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($baseurl !== null) {
            $params['baseurl'] = $baseurl;
        }
        if ($start !== null) {
            $params['start'] = $start;
        }
        if ($count !== null) {
            $params['count'] = $count;
        }
        if ($riskid !== null) {
            $params['riskId'] = $riskid;
        }
        return $this->zap->request($this->zap->base . 'alert/view/alerts/', $params)->alerts ?? null;
    }

    /**
     * Gets number of alerts grouped by each risk level, optionally filtering by URL
     */
    public function alertsSummary($baseurl = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($baseurl !== null) {
            $params['baseurl'] = $baseurl;
        }
        return $this->zap->request($this->zap->base . 'alert/view/alertsSummary/', $params)->alertsSummary ?? null;
    }

    /**
     * Gets the number of alerts, optionally filtering by URL or riskId
     */
    public function numberOfAlerts($baseurl = null, $riskid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($baseurl !== null) {
            $params['baseurl'] = $baseurl;
        }
        if ($riskid !== null) {
            $params['riskId'] = $riskid;
        }
        return $this->zap->request($this->zap->base . 'alert/view/numberOfAlerts/', $params)->numberOfAlerts ?? null;
    }

    /**
     * Gets a summary of the alerts, optionally filtered by a 'url'. If 'recurse' is true then all alerts that apply to
     * urls that start with the specified 'url' will be returned, otherwise only those on exactly the same 'url'
     * (ignoring url parameters)
     */
    public function alertsByRisk($url = null, $recurse = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($recurse !== null) {
            $params['recurse'] = $recurse;
        }
        return $this->zap->request($this->zap->base . 'alert/view/alertsByRisk/', $params)->alertsByRisk ?? null;
    }

    /**
     * Gets a count of the alerts, optionally filtered as per alertsPerRisk
     */
    public function alertCountsByRisk($url = null, $recurse = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($recurse !== null) {
            $params['recurse'] = $recurse;
        }
        return $this->zap->request(
            $this->zap->base . 'alert/view/alertCountsByRisk/',
            $params
        )->alertCountsByRisk ?? null;
    }

    /**
     * Deletes all alerts of the current session.
     */
    public function deleteAllAlerts(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alert/action/deleteAllAlerts/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Deletes the alert with the given ID.
     */
    public function deleteAlert($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alert/action/deleteAlert/', [
            'id' => $id,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Update the confidence of the alerts.
     */
    public function updateAlertsConfidence($ids, $confidenceid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alert/action/updateAlertsConfidence/', [
            'ids' => $ids,
            'confidenceId' => $confidenceid,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Update the risk of the alerts.
     */
    public function updateAlertsRisk($ids, $riskid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'alert/action/updateAlertsRisk/', [
            'ids' => $ids,
            'riskId' => $riskid,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Update the alert with the given ID, with the provided details.
     */
    public function updateAlert(
        $id,
        $name,
        $riskid,
        $confidenceid,
        $description,
        $param = null,
        $attack = null,
        $otherinfo = null,
        $solution = null,
        $references = null,
        $evidence = null,
        $cweid = null,
        $wascid = null,
        string $apikey = ''
    ) {
        $params = [
            'id' => $id,
            'name' => $name,
            'riskId' => $riskid,
            'confidenceId' => $confidenceid,
            'description' => $description,
            'apikey' => $apikey,
        ];
        if ($param !== null) {
            $params['param'] = $param;
        }
        if ($attack !== null) {
            $params['attack'] = $attack;
        }
        if ($otherinfo !== null) {
            $params['otherInfo'] = $otherinfo;
        }
        if ($solution !== null) {
            $params['solution'] = $solution;
        }
        if ($references !== null) {
            $params['references'] = $references;
        }
        if ($evidence !== null) {
            $params['evidence'] = $evidence;
        }
        if ($cweid !== null) {
            $params['cweId'] = $cweid;
        }
        if ($wascid !== null) {
            $params['wascId'] = $wascid;
        }
        return $this->zap->request($this->zap->base . 'alert/action/updateAlert/', $params);
    }

    /**
     * Add an alert associated with the given message ID, with the provided details. (The ID of the created alert is
     * returned.)
     */
    public function addAlert(
        $messageid,
        $name,
        $riskid,
        $confidenceid,
        $description,
        $param = null,
        $attack = null,
        $otherinfo = null,
        $solution = null,
        $references = null,
        $evidence = null,
        $cweid = null,
        $wascid = null,
        string $apikey = ''
    ) {
        $params = [
            'messageId' => $messageid,
            'name' => $name,
            'riskId' => $riskid,
            'confidenceId' => $confidenceid,
            'description' => $description,
            'apikey' => $apikey,
        ];
        if ($param !== null) {
            $params['param'] = $param;
        }
        if ($attack !== null) {
            $params['attack'] = $attack;
        }
        if ($otherinfo !== null) {
            $params['otherInfo'] = $otherinfo;
        }
        if ($solution !== null) {
            $params['solution'] = $solution;
        }
        if ($references !== null) {
            $params['references'] = $references;
        }
        if ($evidence !== null) {
            $params['evidence'] = $evidence;
        }
        if ($cweid !== null) {
            $params['cweId'] = $cweid;
        }
        if ($wascid !== null) {
            $params['wascId'] = $wascid;
        }
        return $this->zap->request($this->zap->base . 'alert/action/addAlert/', $params);
    }
}

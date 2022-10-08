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
class Alert
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets the alert with the given ID, the corresponding HTTP message can be obtained with the
     * 'messageId' field and 'message' API method.
     *
     * @param mixed $id
     */
    public function alert($id, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'alert/view/alert/',
            [
                'id' => $id, 'apikey' => $apikey,
            ]
        )['alert'] ?? null;
    }

    /**
     * Gets the alerts raised by ZAP, optionally filtering by URL or riskId, and paginating with 'start'
     * position and 'count' of alerts.
     *
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     * @param null|mixed $riskid
     */
    public function alerts(
        $baseurl = null,
        $start = null,
        $count = null,
        $riskid = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }
        if (null !== $riskid) {
            $params['riskId'] = $riskid;
        }

        return $this->zap->request(
            $this->zap->base.'alert/view/alerts/',
            $params
        )['alerts'] ?? null;
    }

    /**
     * Gets number of alerts grouped by each risk level, optionally filtering by URL.
     *
     * @param null|mixed $baseurl
     */
    public function alertsSummary($baseurl = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }

        return $this->zap->request(
            $this->zap->base.'alert/view/alertsSummary/',
            $params
        )['alertsSummary'] ?? null;
    }

    /**
     * Gets the number of alerts, optionally filtering by URL or riskId.
     *
     * @param null|mixed $baseurl
     * @param null|mixed $riskid
     */
    public function numberOfAlerts(
        $baseurl = null,
        $riskid = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $riskid) {
            $params['riskId'] = $riskid;
        }

        return $this->zap->request(
            $this->zap->base.'alert/view/numberOfAlerts/',
            $params
        )['numberOfAlerts'] ?? null;
    }

    /**
     * Gets a summary of the alerts, optionally filtered by a 'url'. If 'recurse' is true then all alerts
     * that apply to urls that start with the specified 'url' will be returned, otherwise only those on
     * exactly the same 'url' (ignoring url parameters).
     *
     * @param null|mixed $url
     * @param null|mixed $recurse
     */
    public function alertsByRisk(
        $url = null,
        $recurse = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $url) {
            $params['url'] = $url;
        }
        if (null !== $recurse) {
            $params['recurse'] = $recurse;
        }

        return $this->zap->request(
            $this->zap->base.'alert/view/alertsByRisk/',
            $params
        )['alertsByRisk'] ?? null;
    }

    /**
     * Gets a count of the alerts, optionally filtered as per alertsPerRisk.
     *
     * @param null|mixed $url
     * @param null|mixed $recurse
     */
    public function alertCountsByRisk(
        $url = null,
        $recurse = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $url) {
            $params['url'] = $url;
        }
        if (null !== $recurse) {
            $params['recurse'] = $recurse;
        }

        return $this->zap->request(
            $this->zap->base.'alert/view/alertCountsByRisk/',
            $params
        )['alertCountsByRisk'] ?? null;
    }

    /**
     * Deletes all alerts of the current session.
     */
    public function deleteAllAlerts(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'alert/action/deleteAllAlerts/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    /**
     * Deletes the alert with the given ID.
     *
     * @param mixed $id
     */
    public function deleteAlert($id, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'alert/action/deleteAlert/',
            [
                'id' => $id, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Update the confidence of the alerts.
     *
     * @param mixed $ids
     * @param mixed $confidenceid
     */
    public function updateAlertsConfidence(
        $ids,
        $confidenceid,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'alert/action/updateAlertsConfidence/',
            [
                'ids' => $ids,
                'confidenceId' => $confidenceid, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Update the risk of the alerts.
     *
     * @param mixed $ids
     * @param mixed $riskid
     */
    public function updateAlertsRisk(
        $ids,
        $riskid,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'alert/action/updateAlertsRisk/',
            [
                'ids' => $ids,
                'riskId' => $riskid, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Update the alert with the given ID, with the provided details.
     *
     * @param mixed      $id
     * @param mixed      $name
     * @param mixed      $riskid
     * @param mixed      $confidenceid
     * @param mixed      $description
     * @param null|mixed $param
     * @param null|mixed $attack
     * @param null|mixed $otherinfo
     * @param null|mixed $solution
     * @param null|mixed $references
     * @param null|mixed $evidence
     * @param null|mixed $cweid
     * @param null|mixed $wascid
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
            'description' => $description, 'apikey' => $apikey,
        ];
        if (null !== $param) {
            $params['param'] = $param;
        }
        if (null !== $attack) {
            $params['attack'] = $attack;
        }
        if (null !== $otherinfo) {
            $params['otherInfo'] = $otherinfo;
        }
        if (null !== $solution) {
            $params['solution'] = $solution;
        }
        if (null !== $references) {
            $params['references'] = $references;
        }
        if (null !== $evidence) {
            $params['evidence'] = $evidence;
        }
        if (null !== $cweid) {
            $params['cweId'] = $cweid;
        }
        if (null !== $wascid) {
            $params['wascId'] = $wascid;
        }

        return $this->zap->request(
            $this->zap->base.'alert/action/updateAlert/',
            $params
        );
    }

    /**
     * Add an alert associated with the given message ID, with the provided details. (The ID of the
     * created alert is returned.).
     *
     * @param mixed      $messageid
     * @param mixed      $name
     * @param mixed      $riskid
     * @param mixed      $confidenceid
     * @param mixed      $description
     * @param null|mixed $param
     * @param null|mixed $attack
     * @param null|mixed $otherinfo
     * @param null|mixed $solution
     * @param null|mixed $references
     * @param null|mixed $evidence
     * @param null|mixed $cweid
     * @param null|mixed $wascid
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
            'description' => $description, 'apikey' => $apikey,
        ];
        if (null !== $param) {
            $params['param'] = $param;
        }
        if (null !== $attack) {
            $params['attack'] = $attack;
        }
        if (null !== $otherinfo) {
            $params['otherInfo'] = $otherinfo;
        }
        if (null !== $solution) {
            $params['solution'] = $solution;
        }
        if (null !== $references) {
            $params['references'] = $references;
        }
        if (null !== $evidence) {
            $params['evidence'] = $evidence;
        }
        if (null !== $cweid) {
            $params['cweId'] = $cweid;
        }
        if (null !== $wascid) {
            $params['wascId'] = $wascid;
        }

        return $this->zap->request(
            $this->zap->base.'alert/action/addAlert/',
            $params
        );
    }
}

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
class Ascan
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * @param null|mixed $scanid
     */
    public function status($scanid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $scanid) {
            $params['scanId'] = $scanid;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/view/status/',
            $params
        )['status'] ?? null;
    }

    /**
     * @param null|mixed $scanid
     */
    public function scanProgress($scanid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $scanid) {
            $params['scanId'] = $scanid;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/view/scanProgress/',
            $params
        )['scanProgress'] ?? null;
    }

    /**
     * Gets the IDs of the messages sent during the scan with the given ID. A message can be obtained with
     * 'message' core view.
     *
     * @param mixed $scanid
     */
    public function messagesIds($scanid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/messagesIds/',
            [
                'scanId' => $scanid, 'apikey' => $apikey,
            ]
        )['messagesIds'] ?? null;
    }

    /**
     * Gets the IDs of the alerts raised during the scan with the given ID. An alert can be obtained with
     * 'alert' core view.
     *
     * @param mixed $scanid
     */
    public function alertsIds($scanid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/alertsIds/',
            [
                'scanId' => $scanid, 'apikey' => $apikey,
            ]
        )['alertsIds'] ?? null;
    }

    public function scans(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/scans/',
            [
                'apikey' => $apikey,
            ]
        )['scans'] ?? null;
    }

    public function scanPolicyNames(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/scanPolicyNames/',
            [
                'apikey' => $apikey,
            ]
        )['scanPolicyNames'] ?? null;
    }

    /**
     * Gets the regexes of URLs excluded from the active scans.
     */
    public function excludedFromScan(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/excludedFromScan/',
            [
                'apikey' => $apikey,
            ]
        )['excludedFromScan'] ?? null;
    }

    /**
     * Gets the scan rules, optionally, of the given scan policy or scanner policy/category ID.
     *
     * @param null|mixed $scanpolicyname
     * @param null|mixed $policyid
     */
    public function scanners(
        $scanpolicyname = null,
        $policyid = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }
        if (null !== $policyid) {
            $params['policyId'] = $policyid;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/view/scanners/',
            $params
        )['scanners'] ?? null;
    }

    /**
     * @param null|mixed $scanpolicyname
     * @param null|mixed $policyid
     */
    public function policies(
        $scanpolicyname = null,
        $policyid = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }
        if (null !== $policyid) {
            $params['policyId'] = $policyid;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/view/policies/',
            $params
        )['policies'] ?? null;
    }

    public function attackModeQueue(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/attackModeQueue/',
            [
                'apikey' => $apikey,
            ]
        )['attackModeQueue'] ?? null;
    }

    /**
     * Gets all the parameters that are excluded. For each parameter the following are shown: the name,
     * the URL, and the parameter type.
     */
    public function excludedParams(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/excludedParams/',
            [
                'apikey' => $apikey,
            ]
        )['excludedParams'] ?? null;
    }

    /**
     * Use view excludedParams instead.
     */
    public function optionExcludedParamList(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionExcludedParamList/',
            [
                'apikey' => $apikey,
            ]
        )['ExcludedParamList'] ?? null;
    }

    /**
     * Gets all the types of excluded parameters. For each type the following are shown: the ID and the
     * name.
     */
    public function excludedParamTypes(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/excludedParamTypes/',
            [
                'apikey' => $apikey,
            ]
        )['excludedParamTypes'] ?? null;
    }

    public function optionAttackPolicy(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionAttackPolicy/',
            [
                'apikey' => $apikey,
            ]
        )['AttackPolicy'] ?? null;
    }

    public function optionDefaultPolicy(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionDefaultPolicy/',
            [
                'apikey' => $apikey,
            ]
        )['DefaultPolicy'] ?? null;
    }

    public function optionDelayInMs(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionDelayInMs/',
            [
                'apikey' => $apikey,
            ]
        )['DelayInMs'] ?? null;
    }

    public function optionHandleAntiCSRFTokens(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionHandleAntiCSRFTokens/',
            [
                'apikey' => $apikey,
            ]
        )['HandleAntiCSRFTokens'] ?? null;
    }

    public function optionHostPerScan(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionHostPerScan/',
            [
                'apikey' => $apikey,
            ]
        )['HostPerScan'] ?? null;
    }

    public function optionMaxChartTimeInMins(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionMaxChartTimeInMins/',
            [
                'apikey' => $apikey,
            ]
        )['MaxChartTimeInMins'] ?? null;
    }

    public function optionMaxResultsToList(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionMaxResultsToList/',
            [
                'apikey' => $apikey,
            ]
        )['MaxResultsToList'] ?? null;
    }

    public function optionMaxRuleDurationInMins(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionMaxRuleDurationInMins/',
            [
                'apikey' => $apikey,
            ]
        )['MaxRuleDurationInMins'] ?? null;
    }

    public function optionMaxScanDurationInMins(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionMaxScanDurationInMins/',
            [
                'apikey' => $apikey,
            ]
        )['MaxScanDurationInMins'] ?? null;
    }

    public function optionMaxScansInUI(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionMaxScansInUI/',
            [
                'apikey' => $apikey,
            ]
        )['MaxScansInUI'] ?? null;
    }

    public function optionTargetParamsEnabledRPC(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionTargetParamsEnabledRPC/',
            [
                'apikey' => $apikey,
            ]
        )['TargetParamsEnabledRPC'] ?? null;
    }

    public function optionTargetParamsInjectable(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionTargetParamsInjectable/',
            [
                'apikey' => $apikey,
            ]
        )['TargetParamsInjectable'] ?? null;
    }

    public function optionThreadPerHost(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionThreadPerHost/',
            [
                'apikey' => $apikey,
            ]
        )['ThreadPerHost'] ?? null;
    }

    /**
     * Tells whether or not the active scanner should add a query parameter to GET request that don't have
     * parameters to start with.
     */
    public function optionAddQueryParam(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionAddQueryParam/',
            [
                'apikey' => $apikey,
            ]
        )['AddQueryParam'] ?? null;
    }

    public function optionAllowAttackOnStart(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionAllowAttackOnStart/',
            [
                'apikey' => $apikey,
            ]
        )['AllowAttackOnStart'] ?? null;
    }

    /**
     * Tells whether or not the active scanner should inject the HTTP request header X-ZAP-Scan-ID, with
     * the ID of the scanner that's sending the requests.
     */
    public function optionInjectPluginIdInHeader(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionInjectPluginIdInHeader/',
            [
                'apikey' => $apikey,
            ]
        )['InjectPluginIdInHeader'] ?? null;
    }

    public function optionPromptInAttackMode(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionPromptInAttackMode/',
            [
                'apikey' => $apikey,
            ]
        )['PromptInAttackMode'] ?? null;
    }

    public function optionPromptToClearFinishedScans(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionPromptToClearFinishedScans/',
            [
                'apikey' => $apikey,
            ]
        )['PromptToClearFinishedScans'] ?? null;
    }

    public function optionRescanInAttackMode(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionRescanInAttackMode/',
            [
                'apikey' => $apikey,
            ]
        )['RescanInAttackMode'] ?? null;
    }

    /**
     * Tells whether or not the HTTP Headers of all requests should be scanned. Not just requests that
     * send parameters, through the query or request body.
     */
    public function optionScanHeadersAllRequests(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionScanHeadersAllRequests/',
            [
                'apikey' => $apikey,
            ]
        )['ScanHeadersAllRequests'] ?? null;
    }

    /**
     * Tells whether or not the active scanner should scan null JSON values.
     */
    public function optionScanNullJsonValues(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionScanNullJsonValues/',
            [
                'apikey' => $apikey,
            ]
        )['ScanNullJsonValues'] ?? null;
    }

    public function optionShowAdvancedDialog(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/view/optionShowAdvancedDialog/',
            [
                'apikey' => $apikey,
            ]
        )['ShowAdvancedDialog'] ?? null;
    }

    /**
     * Runs the active scanner against the given URL or Context. Optionally, the 'recurse' parameter can
     * be used to scan URLs under the given URL, the parameter 'inScopeOnly' can be used to constrain the
     * scan to URLs that are in scope (ignored if a Context is specified), the parameter 'scanPolicyName'
     * allows to specify the scan policy (if none is given it uses the default scan policy), the
     * parameters 'method' and 'postData' allow to select a given request in conjunction with the given
     * URL.
     *
     * @param null|mixed $url
     * @param null|mixed $recurse
     * @param null|mixed $inscopeonly
     * @param null|mixed $scanpolicyname
     * @param null|mixed $method
     * @param null|mixed $postdata
     * @param null|mixed $contextid
     */
    public function scan(
        $url = null,
        $recurse = null,
        $inscopeonly = null,
        $scanpolicyname = null,
        $method = null,
        $postdata = null,
        $contextid = null,
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
        if (null !== $inscopeonly) {
            $params['inScopeOnly'] = $inscopeonly;
        }
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }
        if (null !== $method) {
            $params['method'] = $method;
        }
        if (null !== $postdata) {
            $params['postData'] = $postdata;
        }
        if (null !== $contextid) {
            $params['contextId'] = $contextid;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/scan/',
            $params
        );
    }

    /**
     * Active Scans from the perspective of a User, obtained using the given Context ID and User ID. See
     * 'scan' action for more details.
     *
     * @param null|mixed $url
     * @param null|mixed $contextid
     * @param null|mixed $userid
     * @param null|mixed $recurse
     * @param null|mixed $scanpolicyname
     * @param null|mixed $method
     * @param null|mixed $postdata
     */
    public function scanAsUser(
        $url = null,
        $contextid = null,
        $userid = null,
        $recurse = null,
        $scanpolicyname = null,
        $method = null,
        $postdata = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $url) {
            $params['url'] = $url;
        }
        if (null !== $contextid) {
            $params['contextId'] = $contextid;
        }
        if (null !== $userid) {
            $params['userId'] = $userid;
        }
        if (null !== $recurse) {
            $params['recurse'] = $recurse;
        }
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }
        if (null !== $method) {
            $params['method'] = $method;
        }
        if (null !== $postdata) {
            $params['postData'] = $postdata;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/scanAsUser/',
            $params
        );
    }

    /**
     * @param mixed $scanid
     */
    public function pause($scanid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/pause/',
            [
                'scanId' => $scanid, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $scanid
     */
    public function resume($scanid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/resume/',
            [
                'scanId' => $scanid, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $scanid
     */
    public function stop($scanid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/stop/',
            [
                'scanId' => $scanid, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $scanid
     */
    public function removeScan($scanid, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/removeScan/',
            [
                'scanId' => $scanid, 'apikey' => $apikey,
            ]
        );
    }

    public function pauseAllScans(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/pauseAllScans/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    public function resumeAllScans(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/resumeAllScans/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    public function stopAllScans(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/stopAllScans/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    public function removeAllScans(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/removeAllScans/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    /**
     * Clears the regexes of URLs excluded from the active scans.
     */
    public function clearExcludedFromScan(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/clearExcludedFromScan/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    /**
     * Adds a regex of URLs that should be excluded from the active scans.
     *
     * @param mixed $regex
     */
    public function excludeFromScan($regex, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/excludeFromScan/',
            [
                'regex' => $regex, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Enables all scan rules of the scan policy with the given name, or the default if none given.
     *
     * @param null|mixed $scanpolicyname
     */
    public function enableAllScanners($scanpolicyname = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/enableAllScanners/',
            $params
        );
    }

    /**
     * Disables all scan rules of the scan policy with the given name, or the default if none given.
     *
     * @param null|mixed $scanpolicyname
     */
    public function disableAllScanners($scanpolicyname = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/disableAllScanners/',
            $params
        );
    }

    /**
     * Enables the scan rules with the given IDs (comma separated list of IDs) of the scan policy with the
     * given name, or the default if none given.
     *
     * @param mixed      $ids
     * @param null|mixed $scanpolicyname
     */
    public function enableScanners(
        $ids,
        $scanpolicyname = null,
        string $apikey = ''
    ) {
        $params = [
            'ids' => $ids, 'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/enableScanners/',
            $params
        );
    }

    /**
     * Disables the scan rules with the given IDs (comma separated list of IDs) of the scan policy with
     * the given name, or the default if none given.
     *
     * @param mixed      $ids
     * @param null|mixed $scanpolicyname
     */
    public function disableScanners(
        $ids,
        $scanpolicyname = null,
        string $apikey = ''
    ) {
        $params = [
            'ids' => $ids, 'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/disableScanners/',
            $params
        );
    }

    /**
     * @param mixed      $ids
     * @param null|mixed $scanpolicyname
     */
    public function setEnabledPolicies(
        $ids,
        $scanpolicyname = null,
        string $apikey = ''
    ) {
        $params = [
            'ids' => $ids, 'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/setEnabledPolicies/',
            $params
        );
    }

    /**
     * @param mixed      $id
     * @param mixed      $attackstrength
     * @param null|mixed $scanpolicyname
     */
    public function setPolicyAttackStrength(
        $id,
        $attackstrength,
        $scanpolicyname = null,
        string $apikey = ''
    ) {
        $params = [
            'id' => $id,
            'attackStrength' => $attackstrength, 'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/setPolicyAttackStrength/',
            $params
        );
    }

    /**
     * @param mixed      $id
     * @param mixed      $alertthreshold
     * @param null|mixed $scanpolicyname
     */
    public function setPolicyAlertThreshold(
        $id,
        $alertthreshold,
        $scanpolicyname = null,
        string $apikey = ''
    ) {
        $params = [
            'id' => $id,
            'alertThreshold' => $alertthreshold, 'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/setPolicyAlertThreshold/',
            $params
        );
    }

    /**
     * @param mixed      $id
     * @param mixed      $attackstrength
     * @param null|mixed $scanpolicyname
     */
    public function setScannerAttackStrength(
        $id,
        $attackstrength,
        $scanpolicyname = null,
        string $apikey = ''
    ) {
        $params = [
            'id' => $id,
            'attackStrength' => $attackstrength, 'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/setScannerAttackStrength/',
            $params
        );
    }

    /**
     * @param mixed      $id
     * @param mixed      $alertthreshold
     * @param null|mixed $scanpolicyname
     */
    public function setScannerAlertThreshold(
        $id,
        $alertthreshold,
        $scanpolicyname = null,
        string $apikey = ''
    ) {
        $params = [
            'id' => $id,
            'alertThreshold' => $alertthreshold, 'apikey' => $apikey,
        ];
        if (null !== $scanpolicyname) {
            $params['scanPolicyName'] = $scanpolicyname;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/setScannerAlertThreshold/',
            $params
        );
    }

    /**
     * @param mixed      $scanpolicyname
     * @param null|mixed $alertthreshold
     * @param null|mixed $attackstrength
     */
    public function addScanPolicy(
        $scanpolicyname,
        $alertthreshold = null,
        $attackstrength = null,
        string $apikey = ''
    ) {
        $params = [
            'scanPolicyName' => $scanpolicyname, 'apikey' => $apikey,
        ];
        if (null !== $alertthreshold) {
            $params['alertThreshold'] = $alertthreshold;
        }
        if (null !== $attackstrength) {
            $params['attackStrength'] = $attackstrength;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/addScanPolicy/',
            $params
        );
    }

    /**
     * @param mixed $scanpolicyname
     */
    public function removeScanPolicy($scanpolicyname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/removeScanPolicy/',
            [
                'scanPolicyName' => $scanpolicyname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed      $scanpolicyname
     * @param null|mixed $alertthreshold
     * @param null|mixed $attackstrength
     */
    public function updateScanPolicy(
        $scanpolicyname,
        $alertthreshold = null,
        $attackstrength = null,
        string $apikey = ''
    ) {
        $params = [
            'scanPolicyName' => $scanpolicyname, 'apikey' => $apikey,
        ];
        if (null !== $alertthreshold) {
            $params['alertThreshold'] = $alertthreshold;
        }
        if (null !== $attackstrength) {
            $params['attackStrength'] = $attackstrength;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/updateScanPolicy/',
            $params
        );
    }

    /**
     * Imports a Scan Policy using the given file system path.
     *
     * @param mixed $path
     */
    public function importScanPolicy($path, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/importScanPolicy/',
            [
                'path' => $path, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Adds a new parameter excluded from the scan, using the specified name. Optionally sets if the new
     * entry applies to a specific URL (default, all URLs) and sets the ID of the type of the parameter
     * (default, ID of any type). The type IDs can be obtained with the view excludedParamTypes.
     *
     * @param mixed      $name
     * @param null|mixed $type
     * @param null|mixed $url
     */
    public function addExcludedParam(
        $name,
        $type = null,
        $url = null,
        string $apikey = ''
    ) {
        $params = [
            'name' => $name, 'apikey' => $apikey,
        ];
        if (null !== $type) {
            $params['type'] = $type;
        }
        if (null !== $url) {
            $params['url'] = $url;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/addExcludedParam/',
            $params
        );
    }

    /**
     * Modifies a parameter excluded from the scan. Allows to modify the name, the URL and the type of
     * parameter. The parameter is selected with its index, which can be obtained with the view
     * excludedParams.
     *
     * @param mixed      $idx
     * @param null|mixed $name
     * @param null|mixed $type
     * @param null|mixed $url
     */
    public function modifyExcludedParam(
        $idx,
        $name = null,
        $type = null,
        $url = null,
        string $apikey = ''
    ) {
        $params = [
            'idx' => $idx, 'apikey' => $apikey,
        ];
        if (null !== $name) {
            $params['name'] = $name;
        }
        if (null !== $type) {
            $params['type'] = $type;
        }
        if (null !== $url) {
            $params['url'] = $url;
        }

        return $this->zap->request(
            $this->zap->base.'ascan/action/modifyExcludedParam/',
            $params
        );
    }

    /**
     * Removes a parameter excluded from the scan, with the given index. The index can be obtained with
     * the view excludedParams.
     *
     * @param mixed $idx
     */
    public function removeExcludedParam($idx, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/removeExcludedParam/',
            [
                'idx' => $idx, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Skips the scanner using the given IDs of the scan and the scanner.
     *
     * @param mixed $scanid
     * @param mixed $scannerid
     */
    public function skipScanner(
        $scanid,
        $scannerid,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'ascan/action/skipScanner/',
            [
                'scanId' => $scanid,
                'scannerId' => $scannerid, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $string
     */
    public function setOptionAttackPolicy($string, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionAttackPolicy/',
            [
                'String' => $string, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $string
     */
    public function setOptionDefaultPolicy($string, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionDefaultPolicy/',
            [
                'String' => $string, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets whether or not the active scanner should add a query param to GET requests which do not have
     * parameters to start with.
     *
     * @param mixed $boolean
     */
    public function setOptionAddQueryParam($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionAddQueryParam/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $boolean
     */
    public function setOptionAllowAttackOnStart($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionAllowAttackOnStart/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionDelayInMs($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionDelayInMs/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $boolean
     */
    public function setOptionHandleAntiCSRFTokens($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionHandleAntiCSRFTokens/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionHostPerScan($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionHostPerScan/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets whether or not the active scanner should inject the HTTP request header X-ZAP-Scan-ID, with
     * the ID of the scanner that's sending the requests.
     *
     * @param mixed $boolean
     */
    public function setOptionInjectPluginIdInHeader($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionInjectPluginIdInHeader/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionMaxChartTimeInMins($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionMaxChartTimeInMins/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionMaxResultsToList($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionMaxResultsToList/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionMaxRuleDurationInMins($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionMaxRuleDurationInMins/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionMaxScanDurationInMins($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionMaxScanDurationInMins/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionMaxScansInUI($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionMaxScansInUI/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $boolean
     */
    public function setOptionPromptInAttackMode($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionPromptInAttackMode/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $boolean
     */
    public function setOptionPromptToClearFinishedScans($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionPromptToClearFinishedScans/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $boolean
     */
    public function setOptionRescanInAttackMode($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionRescanInAttackMode/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets whether or not the HTTP Headers of all requests should be scanned. Not just requests that send
     * parameters, through the query or request body.
     *
     * @param mixed $boolean
     */
    public function setOptionScanHeadersAllRequests($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionScanHeadersAllRequests/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets whether or not the active scanner should scan null JSON values.
     *
     * @param mixed $boolean
     */
    public function setOptionScanNullJsonValues($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionScanNullJsonValues/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $boolean
     */
    public function setOptionShowAdvancedDialog($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionShowAdvancedDialog/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionTargetParamsEnabledRPC($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionTargetParamsEnabledRPC/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionTargetParamsInjectable($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionTargetParamsInjectable/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * @param mixed $integer
     */
    public function setOptionThreadPerHost($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'ascan/action/setOptionThreadPerHost/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }
}

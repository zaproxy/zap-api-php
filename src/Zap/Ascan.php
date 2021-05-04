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
class Ascan {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * 
	 */
	public function status($scanid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		return $this->zap->request($this->zap->base . 'ascan/view/status/', $params)->{'status'};
	}

	/**
	 * 
	 */
	public function scanProgress($scanid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		return $this->zap->request($this->zap->base . 'ascan/view/scanProgress/', $params)->{'scanProgress'};
	}

	/**
	 * Gets the IDs of the messages sent during the scan with the given ID. A message can be obtained with 'message' core view.
	 */
	public function messagesIds($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/messagesIds/', array('scanId' => $scanid, 'apikey' => $apikey))->{'messagesIds'};
	}

	/**
	 * Gets the IDs of the alerts raised during the scan with the given ID. An alert can be obtained with 'alert' core view.
	 */
	public function alertsIds($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/alertsIds/', array('scanId' => $scanid, 'apikey' => $apikey))->{'alertsIds'};
	}

	/**
	 * 
	 */
	public function scans($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/scans/', array('apikey' => $apikey))->{'scans'};
	}

	/**
	 * 
	 */
	public function scanPolicyNames($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/scanPolicyNames/', array('apikey' => $apikey))->{'scanPolicyNames'};
	}

	/**
	 * Gets the regexes of URLs excluded from the active scans.
	 */
	public function excludedFromScan($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/excludedFromScan/', array('apikey' => $apikey))->{'excludedFromScan'};
	}

	/**
	 * Gets the scanners, optionally, of the given scan policy and/or scanner policy/category ID.
	 */
	public function scanners($scanpolicyname=NULL, $policyid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($policyid !== NULL) {
			$params['policyId'] = $policyid;
		}
		return $this->zap->request($this->zap->base . 'ascan/view/scanners/', $params)->{'scanners'};
	}

	/**
	 * 
	 */
	public function policies($scanpolicyname=NULL, $policyid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($policyid !== NULL) {
			$params['policyId'] = $policyid;
		}
		return $this->zap->request($this->zap->base . 'ascan/view/policies/', $params)->{'policies'};
	}

	/**
	 * 
	 */
	public function attackModeQueue($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/attackModeQueue/', array('apikey' => $apikey))->{'attackModeQueue'};
	}

	/**
	 * Gets all the parameters that are excluded. For each parameter the following are shown: the name, the URL, and the parameter type.
	 */
	public function excludedParams($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/excludedParams/', array('apikey' => $apikey))->{'excludedParams'};
	}

	/**
	 * Use view excludedParams instead.
	 */
	public function optionExcludedParamList($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionExcludedParamList/', array('apikey' => $apikey))->{'ExcludedParamList'};
	}

	/**
	 * Gets all the types of excluded parameters. For each type the following are shown: the ID and the name.
	 */
	public function excludedParamTypes($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/excludedParamTypes/', array('apikey' => $apikey))->{'excludedParamTypes'};
	}

	/**
	 * 
	 */
	public function optionAttackPolicy($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionAttackPolicy/', array('apikey' => $apikey))->{'AttackPolicy'};
	}

	/**
	 * 
	 */
	public function optionDefaultPolicy($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionDefaultPolicy/', array('apikey' => $apikey))->{'DefaultPolicy'};
	}

	/**
	 * 
	 */
	public function optionDelayInMs($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionDelayInMs/', array('apikey' => $apikey))->{'DelayInMs'};
	}

	/**
	 * 
	 */
	public function optionHandleAntiCSRFTokens($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionHandleAntiCSRFTokens/', array('apikey' => $apikey))->{'HandleAntiCSRFTokens'};
	}

	/**
	 * 
	 */
	public function optionHostPerScan($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionHostPerScan/', array('apikey' => $apikey))->{'HostPerScan'};
	}

	/**
	 * 
	 */
	public function optionMaxChartTimeInMins($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionMaxChartTimeInMins/', array('apikey' => $apikey))->{'MaxChartTimeInMins'};
	}

	/**
	 * 
	 */
	public function optionMaxResultsToList($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionMaxResultsToList/', array('apikey' => $apikey))->{'MaxResultsToList'};
	}

	/**
	 * 
	 */
	public function optionMaxRuleDurationInMins($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionMaxRuleDurationInMins/', array('apikey' => $apikey))->{'MaxRuleDurationInMins'};
	}

	/**
	 * 
	 */
	public function optionMaxScanDurationInMins($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionMaxScanDurationInMins/', array('apikey' => $apikey))->{'MaxScanDurationInMins'};
	}

	/**
	 * 
	 */
	public function optionMaxScansInUI($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionMaxScansInUI/', array('apikey' => $apikey))->{'MaxScansInUI'};
	}

	/**
	 * 
	 */
	public function optionTargetParamsEnabledRPC($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionTargetParamsEnabledRPC/', array('apikey' => $apikey))->{'TargetParamsEnabledRPC'};
	}

	/**
	 * 
	 */
	public function optionTargetParamsInjectable($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionTargetParamsInjectable/', array('apikey' => $apikey))->{'TargetParamsInjectable'};
	}

	/**
	 * 
	 */
	public function optionThreadPerHost($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionThreadPerHost/', array('apikey' => $apikey))->{'ThreadPerHost'};
	}

	/**
	 * Tells whether or not the active scanner should add a query parameter to GET request that don't have parameters to start with.
	 */
	public function optionAddQueryParam($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionAddQueryParam/', array('apikey' => $apikey))->{'AddQueryParam'};
	}

	/**
	 * 
	 */
	public function optionAllowAttackOnStart($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionAllowAttackOnStart/', array('apikey' => $apikey))->{'AllowAttackOnStart'};
	}

	/**
	 * Tells whether or not the active scanner should inject the HTTP request header X-ZAP-Scan-ID, with the ID of the scanner that's sending the requests.
	 */
	public function optionInjectPluginIdInHeader($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionInjectPluginIdInHeader/', array('apikey' => $apikey))->{'InjectPluginIdInHeader'};
	}

	/**
	 * 
	 */
	public function optionPromptInAttackMode($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionPromptInAttackMode/', array('apikey' => $apikey))->{'PromptInAttackMode'};
	}

	/**
	 * 
	 */
	public function optionPromptToClearFinishedScans($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionPromptToClearFinishedScans/', array('apikey' => $apikey))->{'PromptToClearFinishedScans'};
	}

	/**
	 * 
	 */
	public function optionRescanInAttackMode($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionRescanInAttackMode/', array('apikey' => $apikey))->{'RescanInAttackMode'};
	}

	/**
	 * Tells whether or not the HTTP Headers of all requests should be scanned. Not just requests that send parameters, through the query or request body.
	 */
	public function optionScanHeadersAllRequests($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionScanHeadersAllRequests/', array('apikey' => $apikey))->{'ScanHeadersAllRequests'};
	}

	/**
	 * 
	 */
	public function optionShowAdvancedDialog($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/view/optionShowAdvancedDialog/', array('apikey' => $apikey))->{'ShowAdvancedDialog'};
	}

	/**
	 * Runs the active scanner against the given URL and/or Context. Optionally, the 'recurse' parameter can be used to scan URLs under the given URL, the parameter 'inScopeOnly' can be used to constrain the scan to URLs that are in scope (ignored if a Context is specified), the parameter 'scanPolicyName' allows to specify the scan policy (if none is given it uses the default scan policy), the parameters 'method' and 'postData' allow to select a given request in conjunction with the given URL.
	 */
	public function scan($url=NULL, $recurse=NULL, $inscopeonly=NULL, $scanpolicyname=NULL, $method=NULL, $postdata=NULL, $contextid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($inscopeonly !== NULL) {
			$params['inScopeOnly'] = $inscopeonly;
		}
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($method !== NULL) {
			$params['method'] = $method;
		}
		if ($postdata !== NULL) {
			$params['postData'] = $postdata;
		}
		if ($contextid !== NULL) {
			$params['contextId'] = $contextid;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/scan/', $params);
	}

	/**
	 * Active Scans from the perspective of a User, obtained using the given Context ID and User ID. See 'scan' action for more details.
	 */
	public function scanAsUser($url=NULL, $contextid=NULL, $userid=NULL, $recurse=NULL, $scanpolicyname=NULL, $method=NULL, $postdata=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($contextid !== NULL) {
			$params['contextId'] = $contextid;
		}
		if ($userid !== NULL) {
			$params['userId'] = $userid;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		if ($method !== NULL) {
			$params['method'] = $method;
		}
		if ($postdata !== NULL) {
			$params['postData'] = $postdata;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/scanAsUser/', $params);
	}

	/**
	 * 
	 */
	public function pause($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/pause/', array('scanId' => $scanid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function resume($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/resume/', array('scanId' => $scanid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function stop($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/stop/', array('scanId' => $scanid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function removeScan($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/removeScan/', array('scanId' => $scanid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function pauseAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/pauseAllScans/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function resumeAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/resumeAllScans/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function stopAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/stopAllScans/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function removeAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/removeAllScans/', array('apikey' => $apikey));
	}

	/**
	 * Clears the regexes of URLs excluded from the active scans.
	 */
	public function clearExcludedFromScan($apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/clearExcludedFromScan/', array('apikey' => $apikey));
	}

	/**
	 * Adds a regex of URLs that should be excluded from the active scans.
	 */
	public function excludeFromScan($regex, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/excludeFromScan/', array('regex' => $regex, 'apikey' => $apikey));
	}

	/**
	 * Enables all scanners of the scan policy with the given name, or the default if none given.
	 */
	public function enableAllScanners($scanpolicyname=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/enableAllScanners/', $params);
	}

	/**
	 * Disables all scanners of the scan policy with the given name, or the default if none given.
	 */
	public function disableAllScanners($scanpolicyname=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/disableAllScanners/', $params);
	}

	/**
	 * Enables the scanners with the given IDs (comma separated list of IDs) of the scan policy with the given name, or the default if none given.
	 */
	public function enableScanners($ids, $scanpolicyname=NULL, $apikey='') {
		$params = array('ids' => $ids, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/enableScanners/', $params);
	}

	/**
	 * Disables the scanners with the given IDs (comma separated list of IDs) of the scan policy with the given name, or the default if none given.
	 */
	public function disableScanners($ids, $scanpolicyname=NULL, $apikey='') {
		$params = array('ids' => $ids, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/disableScanners/', $params);
	}

	/**
	 * 
	 */
	public function setEnabledPolicies($ids, $scanpolicyname=NULL, $apikey='') {
		$params = array('ids' => $ids, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/setEnabledPolicies/', $params);
	}

	/**
	 * 
	 */
	public function setPolicyAttackStrength($id, $attackstrength, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'attackStrength' => $attackstrength, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/setPolicyAttackStrength/', $params);
	}

	/**
	 * 
	 */
	public function setPolicyAlertThreshold($id, $alertthreshold, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'alertThreshold' => $alertthreshold, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/setPolicyAlertThreshold/', $params);
	}

	/**
	 * 
	 */
	public function setScannerAttackStrength($id, $attackstrength, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'attackStrength' => $attackstrength, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/setScannerAttackStrength/', $params);
	}

	/**
	 * 
	 */
	public function setScannerAlertThreshold($id, $alertthreshold, $scanpolicyname=NULL, $apikey='') {
		$params = array('id' => $id, 'alertThreshold' => $alertthreshold, 'apikey' => $apikey);
		if ($scanpolicyname !== NULL) {
			$params['scanPolicyName'] = $scanpolicyname;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/setScannerAlertThreshold/', $params);
	}

	/**
	 * 
	 */
	public function addScanPolicy($scanpolicyname, $alertthreshold=NULL, $attackstrength=NULL, $apikey='') {
		$params = array('scanPolicyName' => $scanpolicyname, 'apikey' => $apikey);
		if ($alertthreshold !== NULL) {
			$params['alertThreshold'] = $alertthreshold;
		}
		if ($attackstrength !== NULL) {
			$params['attackStrength'] = $attackstrength;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/addScanPolicy/', $params);
	}

	/**
	 * 
	 */
	public function removeScanPolicy($scanpolicyname, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/removeScanPolicy/', array('scanPolicyName' => $scanpolicyname, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function updateScanPolicy($scanpolicyname, $alertthreshold=NULL, $attackstrength=NULL, $apikey='') {
		$params = array('scanPolicyName' => $scanpolicyname, 'apikey' => $apikey);
		if ($alertthreshold !== NULL) {
			$params['alertThreshold'] = $alertthreshold;
		}
		if ($attackstrength !== NULL) {
			$params['attackStrength'] = $attackstrength;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/updateScanPolicy/', $params);
	}

	/**
	 * Imports a Scan Policy using the given file system path.
	 */
	public function importScanPolicy($path, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/importScanPolicy/', array('path' => $path, 'apikey' => $apikey));
	}

	/**
	 * Adds a new parameter excluded from the scan, using the specified name. Optionally sets if the new entry applies to a specific URL (default, all URLs) and sets the ID of the type of the parameter (default, ID of any type). The type IDs can be obtained with the view excludedParamTypes. 
	 */
	public function addExcludedParam($name, $type=NULL, $url=NULL, $apikey='') {
		$params = array('name' => $name, 'apikey' => $apikey);
		if ($type !== NULL) {
			$params['type'] = $type;
		}
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/addExcludedParam/', $params);
	}

	/**
	 * Modifies a parameter excluded from the scan. Allows to modify the name, the URL and the type of parameter. The parameter is selected with its index, which can be obtained with the view excludedParams.
	 */
	public function modifyExcludedParam($idx, $name=NULL, $type=NULL, $url=NULL, $apikey='') {
		$params = array('idx' => $idx, 'apikey' => $apikey);
		if ($name !== NULL) {
			$params['name'] = $name;
		}
		if ($type !== NULL) {
			$params['type'] = $type;
		}
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		return $this->zap->request($this->zap->base . 'ascan/action/modifyExcludedParam/', $params);
	}

	/**
	 * Removes a parameter excluded from the scan, with the given index. The index can be obtained with the view excludedParams.
	 */
	public function removeExcludedParam($idx, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/removeExcludedParam/', array('idx' => $idx, 'apikey' => $apikey));
	}

	/**
	 * Skips the scanner using the given IDs of the scan and the scanner.
	 */
	public function skipScanner($scanid, $scannerid, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/skipScanner/', array('scanId' => $scanid, 'scannerId' => $scannerid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionAttackPolicy($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionAttackPolicy/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionDefaultPolicy($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionDefaultPolicy/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the active scanner should add a query param to GET requests which do not have parameters to start with.
	 */
	public function setOptionAddQueryParam($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionAddQueryParam/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionAllowAttackOnStart($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionAllowAttackOnStart/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionDelayInMs($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionDelayInMs/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionHandleAntiCSRFTokens($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionHandleAntiCSRFTokens/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionHostPerScan($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionHostPerScan/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the active scanner should inject the HTTP request header X-ZAP-Scan-ID, with the ID of the scanner that's sending the requests.
	 */
	public function setOptionInjectPluginIdInHeader($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionInjectPluginIdInHeader/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionMaxChartTimeInMins($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxChartTimeInMins/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionMaxResultsToList($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxResultsToList/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionMaxRuleDurationInMins($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxRuleDurationInMins/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionMaxScanDurationInMins($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxScanDurationInMins/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionMaxScansInUI($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionMaxScansInUI/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionPromptInAttackMode($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionPromptInAttackMode/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionPromptToClearFinishedScans($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionPromptToClearFinishedScans/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionRescanInAttackMode($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionRescanInAttackMode/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the HTTP Headers of all requests should be scanned. Not just requests that send parameters, through the query or request body.
	 */
	public function setOptionScanHeadersAllRequests($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionScanHeadersAllRequests/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionShowAdvancedDialog($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionShowAdvancedDialog/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionTargetParamsEnabledRPC($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionTargetParamsEnabledRPC/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionTargetParamsInjectable($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionTargetParamsInjectable/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionThreadPerHost($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ascan/action/setOptionThreadPerHost/', array('Integer' => $integer, 'apikey' => $apikey));
	}

}

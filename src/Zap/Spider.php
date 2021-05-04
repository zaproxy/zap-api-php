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
class Spider {

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
		return $this->zap->request($this->zap->base . 'spider/view/status/', $params)->{'status'};
	}

	/**
	 * 
	 */
	public function results($scanid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		return $this->zap->request($this->zap->base . 'spider/view/results/', $params)->{'results'};
	}

	/**
	 * 
	 */
	public function fullResults($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/fullResults/', array('scanId' => $scanid, 'apikey' => $apikey))->{'fullResults'};
	}

	/**
	 * 
	 */
	public function scans($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/scans/', array('apikey' => $apikey))->{'scans'};
	}

	/**
	 * Gets the regexes of URLs excluded from the spider scans.
	 */
	public function excludedFromScan($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/excludedFromScan/', array('apikey' => $apikey))->{'excludedFromScan'};
	}

	/**
	 * Returns a list of unique URLs from the history table based on HTTP messages added by the Spider.
	 */
	public function allUrls($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/allUrls/', array('apikey' => $apikey))->{'allUrls'};
	}

	/**
	 * Returns a list of the names of the nodes added to the Sites tree by the specified scan.
	 */
	public function addedNodes($scanid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		return $this->zap->request($this->zap->base . 'spider/view/addedNodes/', $params)->{'addedNodes'};
	}

	/**
	 * Gets all the domains that are always in scope. For each domain the following are shown: the index, the value (domain), if enabled, and if specified as a regex.
	 */
	public function domainsAlwaysInScope($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/domainsAlwaysInScope/', array('apikey' => $apikey))->{'domainsAlwaysInScope'};
	}

	/**
	 * Use view domainsAlwaysInScope instead.
	 */
	public function optionDomainsAlwaysInScope($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScope/', array('apikey' => $apikey))->{'DomainsAlwaysInScope'};
	}

	/**
	 * Use view domainsAlwaysInScope instead.
	 */
	public function optionDomainsAlwaysInScopeEnabled($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScopeEnabled/', array('apikey' => $apikey))->{'DomainsAlwaysInScopeEnabled'};
	}

	/**
	 * 
	 */
	public function optionHandleParameters($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionHandleParameters/', array('apikey' => $apikey))->{'HandleParameters'};
	}

	/**
	 * Gets the maximum number of child nodes (per node) that can be crawled, 0 means no limit.
	 */
	public function optionMaxChildren($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionMaxChildren/', array('apikey' => $apikey))->{'MaxChildren'};
	}

	/**
	 * Gets the maximum depth the spider can crawl, 0 if unlimited.
	 */
	public function optionMaxDepth($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionMaxDepth/', array('apikey' => $apikey))->{'MaxDepth'};
	}

	/**
	 * 
	 */
	public function optionMaxDuration($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionMaxDuration/', array('apikey' => $apikey))->{'MaxDuration'};
	}

	/**
	 * Gets the maximum size, in bytes, that a response might have to be parsed.
	 */
	public function optionMaxParseSizeBytes($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionMaxParseSizeBytes/', array('apikey' => $apikey))->{'MaxParseSizeBytes'};
	}

	/**
	 * 
	 */
	public function optionMaxScansInUI($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionMaxScansInUI/', array('apikey' => $apikey))->{'MaxScansInUI'};
	}

	/**
	 * 
	 */
	public function optionRequestWaitTime($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionRequestWaitTime/', array('apikey' => $apikey))->{'RequestWaitTime'};
	}

	/**
	 * 
	 */
	public function optionScope($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionScope/', array('apikey' => $apikey))->{'Scope'};
	}

	/**
	 * 
	 */
	public function optionScopeText($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionScopeText/', array('apikey' => $apikey))->{'ScopeText'};
	}

	/**
	 * 
	 */
	public function optionSkipURLString($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionSkipURLString/', array('apikey' => $apikey))->{'SkipURLString'};
	}

	/**
	 * 
	 */
	public function optionThreadCount($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionThreadCount/', array('apikey' => $apikey))->{'ThreadCount'};
	}

	/**
	 * 
	 */
	public function optionUserAgent($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionUserAgent/', array('apikey' => $apikey))->{'UserAgent'};
	}

	/**
	 * Gets whether or not a spider process should accept cookies while spidering.
	 */
	public function optionAcceptCookies($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionAcceptCookies/', array('apikey' => $apikey))->{'AcceptCookies'};
	}

	/**
	 * 
	 */
	public function optionHandleODataParametersVisited($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionHandleODataParametersVisited/', array('apikey' => $apikey))->{'HandleODataParametersVisited'};
	}

	/**
	 * 
	 */
	public function optionParseComments($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseComments/', array('apikey' => $apikey))->{'ParseComments'};
	}

	/**
	 * 
	 */
	public function optionParseGit($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseGit/', array('apikey' => $apikey))->{'ParseGit'};
	}

	/**
	 * 
	 */
	public function optionParseRobotsTxt($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseRobotsTxt/', array('apikey' => $apikey))->{'ParseRobotsTxt'};
	}

	/**
	 * 
	 */
	public function optionParseSVNEntries($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseSVNEntries/', array('apikey' => $apikey))->{'ParseSVNEntries'};
	}

	/**
	 * 
	 */
	public function optionParseSitemapXml($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseSitemapXml/', array('apikey' => $apikey))->{'ParseSitemapXml'};
	}

	/**
	 * 
	 */
	public function optionPostForm($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionPostForm/', array('apikey' => $apikey))->{'PostForm'};
	}

	/**
	 * 
	 */
	public function optionProcessForm($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionProcessForm/', array('apikey' => $apikey))->{'ProcessForm'};
	}

	/**
	 * Gets whether or not the 'Referer' header should be sent while spidering.
	 */
	public function optionSendRefererHeader($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionSendRefererHeader/', array('apikey' => $apikey))->{'SendRefererHeader'};
	}

	/**
	 * 
	 */
	public function optionShowAdvancedDialog($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/view/optionShowAdvancedDialog/', array('apikey' => $apikey))->{'ShowAdvancedDialog'};
	}

	/**
	 * Runs the spider against the given URL (or context). Optionally, the 'maxChildren' parameter can be set to limit the number of children scanned, the 'recurse' parameter can be used to prevent the spider from seeding recursively, the parameter 'contextName' can be used to constrain the scan to a Context and the parameter 'subtreeOnly' allows to restrict the spider under a site's subtree (using the specified 'url').
	 */
	public function scan($url=NULL, $maxchildren=NULL, $recurse=NULL, $contextname=NULL, $subtreeonly=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($maxchildren !== NULL) {
			$params['maxChildren'] = $maxchildren;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($contextname !== NULL) {
			$params['contextName'] = $contextname;
		}
		if ($subtreeonly !== NULL) {
			$params['subtreeOnly'] = $subtreeonly;
		}
		return $this->zap->request($this->zap->base . 'spider/action/scan/', $params);
	}

	/**
	 * Runs the spider from the perspective of a User, obtained using the given Context ID and User ID. See 'scan' action for more details.
	 */
	public function scanAsUser($contextid, $userid, $url=NULL, $maxchildren=NULL, $recurse=NULL, $subtreeonly=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($maxchildren !== NULL) {
			$params['maxChildren'] = $maxchildren;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($subtreeonly !== NULL) {
			$params['subtreeOnly'] = $subtreeonly;
		}
		return $this->zap->request($this->zap->base . 'spider/action/scanAsUser/', $params);
	}

	/**
	 * 
	 */
	public function pause($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/pause/', array('scanId' => $scanid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function resume($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/resume/', array('scanId' => $scanid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function stop($scanid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		return $this->zap->request($this->zap->base . 'spider/action/stop/', $params);
	}

	/**
	 * 
	 */
	public function removeScan($scanid, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/removeScan/', array('scanId' => $scanid, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function pauseAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/pauseAllScans/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function resumeAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/resumeAllScans/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function stopAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/stopAllScans/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function removeAllScans($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/removeAllScans/', array('apikey' => $apikey));
	}

	/**
	 * Clears the regexes of URLs excluded from the spider scans.
	 */
	public function clearExcludedFromScan($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/clearExcludedFromScan/', array('apikey' => $apikey));
	}

	/**
	 * Adds a regex of URLs that should be excluded from the spider scans.
	 */
	public function excludeFromScan($regex, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/excludeFromScan/', array('regex' => $regex, 'apikey' => $apikey));
	}

	/**
	 * Adds a new domain that's always in scope, using the specified value. Optionally sets if the new entry is enabled (default, true) and whether or not the new value is specified as a regex (default, false).
	 */
	public function addDomainAlwaysInScope($value, $isregex=NULL, $isenabled=NULL, $apikey='') {
		$params = array('value' => $value, 'apikey' => $apikey);
		if ($isregex !== NULL) {
			$params['isRegex'] = $isregex;
		}
		if ($isenabled !== NULL) {
			$params['isEnabled'] = $isenabled;
		}
		return $this->zap->request($this->zap->base . 'spider/action/addDomainAlwaysInScope/', $params);
	}

	/**
	 * Modifies a domain that's always in scope. Allows to modify the value, if enabled or if a regex. The domain is selected with its index, which can be obtained with the view domainsAlwaysInScope.
	 */
	public function modifyDomainAlwaysInScope($idx, $value=NULL, $isregex=NULL, $isenabled=NULL, $apikey='') {
		$params = array('idx' => $idx, 'apikey' => $apikey);
		if ($value !== NULL) {
			$params['value'] = $value;
		}
		if ($isregex !== NULL) {
			$params['isRegex'] = $isregex;
		}
		if ($isenabled !== NULL) {
			$params['isEnabled'] = $isenabled;
		}
		return $this->zap->request($this->zap->base . 'spider/action/modifyDomainAlwaysInScope/', $params);
	}

	/**
	 * Removes a domain that's always in scope, with the given index. The index can be obtained with the view domainsAlwaysInScope.
	 */
	public function removeDomainAlwaysInScope($idx, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/removeDomainAlwaysInScope/', array('idx' => $idx, 'apikey' => $apikey));
	}

	/**
	 * Enables all domains that are always in scope.
	 */
	public function enableAllDomainsAlwaysInScope($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/enableAllDomainsAlwaysInScope/', array('apikey' => $apikey));
	}

	/**
	 * Disables all domains that are always in scope.
	 */
	public function disableAllDomainsAlwaysInScope($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/disableAllDomainsAlwaysInScope/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionHandleParameters($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionHandleParameters/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Use actions [add|modify|remove]DomainAlwaysInScope instead.
	 */
	public function setOptionScopeString($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionScopeString/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionSkipURLString($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionSkipURLString/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionUserAgent($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionUserAgent/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not a spider process should accept cookies while spidering.
	 */
	public function setOptionAcceptCookies($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionAcceptCookies/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionHandleODataParametersVisited($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionHandleODataParametersVisited/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * Sets the maximum number of child nodes (per node) that can be crawled, 0 means no limit.
	 */
	public function setOptionMaxChildren($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxChildren/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets the maximum depth the spider can crawl, 0 for unlimited depth.
	 */
	public function setOptionMaxDepth($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxDepth/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionMaxDuration($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxDuration/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets the maximum size, in bytes, that a response might have to be parsed. This allows the spider to skip big responses/files.
	 */
	public function setOptionMaxParseSizeBytes($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxParseSizeBytes/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionMaxScansInUI($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxScansInUI/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionParseComments($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseComments/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionParseGit($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseGit/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionParseRobotsTxt($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseRobotsTxt/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionParseSVNEntries($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseSVNEntries/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionParseSitemapXml($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseSitemapXml/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionPostForm($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionPostForm/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionProcessForm($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionProcessForm/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionRequestWaitTime($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionRequestWaitTime/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the 'Referer' header should be sent while spidering.
	 */
	public function setOptionSendRefererHeader($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionSendRefererHeader/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionShowAdvancedDialog($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionShowAdvancedDialog/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionThreadCount($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionThreadCount/', array('Integer' => $integer, 'apikey' => $apikey));
	}

}

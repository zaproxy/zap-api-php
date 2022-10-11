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
class Spider
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    public function status($scanid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($scanid !== null) {
            $params['scanId'] = $scanid;
        }
        return $this->zap->request($this->zap->base . 'spider/view/status/', $params)->status ?? null;
    }

    public function results($scanid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($scanid !== null) {
            $params['scanId'] = $scanid;
        }
        return $this->zap->request($this->zap->base . 'spider/view/results/', $params)->results ?? null;
    }

    public function fullResults($scanid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/fullResults/', [
            'scanId' => $scanid,
            'apikey' => $apikey,
        ])->fullResults ?? null;
    }

    public function scans(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/scans/', [
            'apikey' => $apikey,
        ])->scans ?? null;
    }

    /**
     * Gets the regexes of URLs excluded from the spider scans.
     */
    public function excludedFromScan(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/excludedFromScan/', [
            'apikey' => $apikey,
        ])->excludedFromScan ?? null;
    }

    /**
     * Returns a list of unique URLs from the history table based on HTTP messages added by the Spider.
     */
    public function allUrls(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/allUrls/', [
            'apikey' => $apikey,
        ])->allUrls ?? null;
    }

    /**
     * Returns a list of the names of the nodes added to the Sites tree by the specified scan.
     */
    public function addedNodes($scanid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($scanid !== null) {
            $params['scanId'] = $scanid;
        }
        return $this->zap->request($this->zap->base . 'spider/view/addedNodes/', $params)->addedNodes ?? null;
    }

    /**
     * Gets all the domains that are always in scope. For each domain the following are shown: the index, the value
     * (domain), if enabled, and if specified as a regex.
     */
    public function domainsAlwaysInScope(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/domainsAlwaysInScope/', [
            'apikey' => $apikey,
        ])->domainsAlwaysInScope ?? null;
    }

    /**
     * Use view domainsAlwaysInScope instead.
     */
    public function optionDomainsAlwaysInScope(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScope/', [
            'apikey' => $apikey,
        ])->DomainsAlwaysInScope ?? null;
    }

    /**
     * Use view domainsAlwaysInScope instead.
     */
    public function optionDomainsAlwaysInScopeEnabled(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScopeEnabled/', [
            'apikey' => $apikey,
        ])->DomainsAlwaysInScopeEnabled ?? null;
    }

    public function optionHandleParameters(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionHandleParameters/', [
            'apikey' => $apikey,
        ])->HandleParameters ?? null;
    }

    /**
     * Gets the maximum number of child nodes (per node) that can be crawled, 0 means no limit.
     */
    public function optionMaxChildren(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionMaxChildren/', [
            'apikey' => $apikey,
        ])->MaxChildren ?? null;
    }

    /**
     * Gets the maximum depth the spider can crawl, 0 if unlimited.
     */
    public function optionMaxDepth(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionMaxDepth/', [
            'apikey' => $apikey,
        ])->MaxDepth ?? null;
    }

    public function optionMaxDuration(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionMaxDuration/', [
            'apikey' => $apikey,
        ])->MaxDuration ?? null;
    }

    /**
     * Gets the maximum size, in bytes, that a response might have to be parsed.
     */
    public function optionMaxParseSizeBytes(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionMaxParseSizeBytes/', [
            'apikey' => $apikey,
        ])->MaxParseSizeBytes ?? null;
    }

    public function optionMaxScansInUI(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionMaxScansInUI/', [
            'apikey' => $apikey,
        ])->MaxScansInUI ?? null;
    }

    public function optionRequestWaitTime(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionRequestWaitTime/', [
            'apikey' => $apikey,
        ])->RequestWaitTime ?? null;
    }

    public function optionScope(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionScope/', [
            'apikey' => $apikey,
        ])->Scope ?? null;
    }

    public function optionScopeText(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionScopeText/', [
            'apikey' => $apikey,
        ])->ScopeText ?? null;
    }

    public function optionSkipURLString(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionSkipURLString/', [
            'apikey' => $apikey,
        ])->SkipURLString ?? null;
    }

    public function optionThreadCount(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionThreadCount/', [
            'apikey' => $apikey,
        ])->ThreadCount ?? null;
    }

    public function optionUserAgent(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionUserAgent/', [
            'apikey' => $apikey,
        ])->UserAgent ?? null;
    }

    /**
     * Gets whether or not a spider process should accept cookies while spidering.
     */
    public function optionAcceptCookies(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionAcceptCookies/', [
            'apikey' => $apikey,
        ])->AcceptCookies ?? null;
    }

    public function optionHandleODataParametersVisited(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionHandleODataParametersVisited/', [
            'apikey' => $apikey,
        ])->HandleODataParametersVisited ?? null;
    }

    public function optionParseComments(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionParseComments/', [
            'apikey' => $apikey,
        ])->ParseComments ?? null;
    }

    public function optionParseGit(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionParseGit/', [
            'apikey' => $apikey,
        ])->ParseGit ?? null;
    }

    public function optionParseRobotsTxt(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionParseRobotsTxt/', [
            'apikey' => $apikey,
        ])->ParseRobotsTxt ?? null;
    }

    public function optionParseSVNEntries(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionParseSVNEntries/', [
            'apikey' => $apikey,
        ])->ParseSVNEntries ?? null;
    }

    public function optionParseSitemapXml(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionParseSitemapXml/', [
            'apikey' => $apikey,
        ])->ParseSitemapXml ?? null;
    }

    public function optionPostForm(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionPostForm/', [
            'apikey' => $apikey,
        ])->PostForm ?? null;
    }

    public function optionProcessForm(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionProcessForm/', [
            'apikey' => $apikey,
        ])->ProcessForm ?? null;
    }

    /**
     * Gets whether or not the 'Referer' header should be sent while spidering.
     */
    public function optionSendRefererHeader(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionSendRefererHeader/', [
            'apikey' => $apikey,
        ])->SendRefererHeader ?? null;
    }

    public function optionShowAdvancedDialog(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/view/optionShowAdvancedDialog/', [
            'apikey' => $apikey,
        ])->ShowAdvancedDialog ?? null;
    }

    /**
     * Runs the spider against the given URL (or context). Optionally, the 'maxChildren' parameter can be set to limit
     * the number of children scanned, the 'recurse' parameter can be used to prevent the spider from seeding
     * recursively, the parameter 'contextName' can be used to constrain the scan to a Context and the parameter
     * 'subtreeOnly' allows to restrict the spider under a site's subtree (using the specified 'url').
     */
    public function scan(
        $url = null,
        $maxchildren = null,
        $recurse = null,
        $contextname = null,
        $subtreeonly = null,
        string $apikey = ''
    ) {
        $params = [
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($maxchildren !== null) {
            $params['maxChildren'] = $maxchildren;
        }
        if ($recurse !== null) {
            $params['recurse'] = $recurse;
        }
        if ($contextname !== null) {
            $params['contextName'] = $contextname;
        }
        if ($subtreeonly !== null) {
            $params['subtreeOnly'] = $subtreeonly;
        }
        return $this->zap->request($this->zap->base . 'spider/action/scan/', $params);
    }

    /**
     * Runs the spider from the perspective of a User, obtained using the given Context ID and User ID. See 'scan'
     * action for more details.
     */
    public function scanAsUser(
        $contextid,
        $userid,
        $url = null,
        $maxchildren = null,
        $recurse = null,
        $subtreeonly = null,
        string $apikey = ''
    ) {
        $params = [
            'contextId' => $contextid,
            'userId' => $userid,
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($maxchildren !== null) {
            $params['maxChildren'] = $maxchildren;
        }
        if ($recurse !== null) {
            $params['recurse'] = $recurse;
        }
        if ($subtreeonly !== null) {
            $params['subtreeOnly'] = $subtreeonly;
        }
        return $this->zap->request($this->zap->base . 'spider/action/scanAsUser/', $params);
    }

    public function pause($scanid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/pause/', [
            'scanId' => $scanid,
            'apikey' => $apikey,
        ]);
    }

    public function resume($scanid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/resume/', [
            'scanId' => $scanid,
            'apikey' => $apikey,
        ]);
    }

    public function stop($scanid = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($scanid !== null) {
            $params['scanId'] = $scanid;
        }
        return $this->zap->request($this->zap->base . 'spider/action/stop/', $params);
    }

    public function removeScan($scanid, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/removeScan/', [
            'scanId' => $scanid,
            'apikey' => $apikey,
        ]);
    }

    public function pauseAllScans(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/pauseAllScans/', [
            'apikey' => $apikey,
        ]);
    }

    public function resumeAllScans(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/resumeAllScans/', [
            'apikey' => $apikey,
        ]);
    }

    public function stopAllScans(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/stopAllScans/', [
            'apikey' => $apikey,
        ]);
    }

    public function removeAllScans(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/removeAllScans/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Clears the regexes of URLs excluded from the spider scans.
     */
    public function clearExcludedFromScan(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/clearExcludedFromScan/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds a regex of URLs that should be excluded from the spider scans.
     */
    public function excludeFromScan($regex, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/excludeFromScan/', [
            'regex' => $regex,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds a new domain that's always in scope, using the specified value. Optionally sets if the new entry is enabled
     * (default, true) and whether or not the new value is specified as a regex (default, false).
     */
    public function addDomainAlwaysInScope($value, $isregex = null, $isenabled = null, string $apikey = '')
    {
        $params = [
            'value' => $value,
            'apikey' => $apikey,
        ];
        if ($isregex !== null) {
            $params['isRegex'] = $isregex;
        }
        if ($isenabled !== null) {
            $params['isEnabled'] = $isenabled;
        }
        return $this->zap->request($this->zap->base . 'spider/action/addDomainAlwaysInScope/', $params);
    }

    /**
     * Modifies a domain that's always in scope. Allows to modify the value, if enabled or if a regex. The domain is
     * selected with its index, which can be obtained with the view domainsAlwaysInScope.
     */
    public function modifyDomainAlwaysInScope(
        $idx,
        $value = null,
        $isregex = null,
        $isenabled = null,
        string $apikey = ''
    ) {
        $params = [
            'idx' => $idx,
            'apikey' => $apikey,
        ];
        if ($value !== null) {
            $params['value'] = $value;
        }
        if ($isregex !== null) {
            $params['isRegex'] = $isregex;
        }
        if ($isenabled !== null) {
            $params['isEnabled'] = $isenabled;
        }
        return $this->zap->request($this->zap->base . 'spider/action/modifyDomainAlwaysInScope/', $params);
    }

    /**
     * Removes a domain that's always in scope, with the given index. The index can be obtained with the view
     * domainsAlwaysInScope.
     */
    public function removeDomainAlwaysInScope($idx, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/removeDomainAlwaysInScope/', [
            'idx' => $idx,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Enables all domains that are always in scope.
     */
    public function enableAllDomainsAlwaysInScope(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/enableAllDomainsAlwaysInScope/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Disables all domains that are always in scope.
     */
    public function disableAllDomainsAlwaysInScope(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/disableAllDomainsAlwaysInScope/', [
            'apikey' => $apikey,
        ]);
    }

    public function setOptionHandleParameters($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionHandleParameters/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Use actions [add|modify|remove]DomainAlwaysInScope instead.
     */
    public function setOptionScopeString($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionScopeString/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionSkipURLString($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionSkipURLString/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionUserAgent($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionUserAgent/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not a spider process should accept cookies while spidering.
     */
    public function setOptionAcceptCookies($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionAcceptCookies/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionHandleODataParametersVisited($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionHandleODataParametersVisited/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum number of child nodes (per node) that can be crawled, 0 means no limit.
     */
    public function setOptionMaxChildren($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxChildren/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum depth the spider can crawl, 0 for unlimited depth.
     */
    public function setOptionMaxDepth($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxDepth/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionMaxDuration($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxDuration/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum size, in bytes, that a response might have to be parsed. This allows the spider to skip big
     * responses/files.
     */
    public function setOptionMaxParseSizeBytes($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxParseSizeBytes/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionMaxScansInUI($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxScansInUI/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionParseComments($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionParseComments/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionParseGit($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionParseGit/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionParseRobotsTxt($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionParseRobotsTxt/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionParseSVNEntries($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionParseSVNEntries/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionParseSitemapXml($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionParseSitemapXml/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionPostForm($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionPostForm/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionProcessForm($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionProcessForm/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionRequestWaitTime($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionRequestWaitTime/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not the 'Referer' header should be sent while spidering.
     */
    public function setOptionSendRefererHeader($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionSendRefererHeader/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionShowAdvancedDialog($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionShowAdvancedDialog/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionThreadCount($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'spider/action/setOptionThreadCount/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }
}

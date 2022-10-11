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
class Core
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets the name of the hosts accessed through/by ZAP
     */
    public function hosts(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/hosts/', [
            'apikey' => $apikey,
        ])->hosts ?? null;
    }

    /**
     * Gets the sites accessed through/by ZAP (scheme and domain)
     */
    public function sites(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/sites/', [
            'apikey' => $apikey,
        ])->sites ?? null;
    }

    /**
     * Gets the URLs accessed through/by ZAP, optionally filtering by (base) URL.
     */
    public function urls($baseurl = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($baseurl !== null) {
            $params['baseurl'] = $baseurl;
        }
        return $this->zap->request($this->zap->base . 'core/view/urls/', $params)->urls ?? null;
    }

    /**
     * Gets the child nodes underneath the specified URL in the Sites tree
     */
    public function childNodes($url = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        return $this->zap->request($this->zap->base . 'core/view/childNodes/', $params)->childNodes ?? null;
    }

    /**
     * Gets the HTTP message with the given ID. Returns the ID, request/response headers and bodies, cookies, note,
     * type, RTT, and timestamp.
     */
    public function message($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/message/', [
            'id' => $id,
            'apikey' => $apikey,
        ])->message ?? null;
    }

    /**
     * Gets the HTTP messages sent by ZAP, request and response, optionally filtered by URL and paginated with 'start'
     * position and 'count' of messages
     */
    public function messages($baseurl = null, $start = null, $count = null, string $apikey = '')
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
        return $this->zap->request($this->zap->base . 'core/view/messages/', $params)->messages ?? null;
    }

    /**
     * Gets the HTTP messages with the given IDs.
     */
    public function messagesById($ids, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/messagesById/', [
            'ids' => $ids,
            'apikey' => $apikey,
        ])->messagesById ?? null;
    }

    /**
     * Gets the number of messages, optionally filtering by URL
     */
    public function numberOfMessages($baseurl = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($baseurl !== null) {
            $params['baseurl'] = $baseurl;
        }
        return $this->zap->request($this->zap->base . 'core/view/numberOfMessages/', $params)->numberOfMessages ?? null;
    }

    /**
     * Gets the mode
     */
    public function mode(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/mode/', [
            'apikey' => $apikey,
        ])->mode ?? null;
    }

    /**
     * Gets ZAP version
     */
    public function version(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/version/', [
            'apikey' => $apikey,
        ])->version ?? null;
    }

    /**
     * Gets the regular expressions, applied to URLs, to exclude from the local proxies.
     */
    public function excludedFromProxy(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/excludedFromProxy/', [
            'apikey' => $apikey,
        ])->excludedFromProxy ?? null;
    }

    /**
     * Gets the location of the current session file
     */
    public function sessionLocation(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/sessionLocation/', [
            'apikey' => $apikey,
        ])->sessionLocation ?? null;
    }

    /**
     * Gets all the domains that are excluded from the outgoing proxy. For each domain the following are shown: the
     * index, the value (domain), if enabled, and if specified as a regex.
     */
    public function proxyChainExcludedDomains(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/proxyChainExcludedDomains/', [
            'apikey' => $apikey,
        ])->proxyChainExcludedDomains ?? null;
    }

    /**
     * Gets the path to ZAP's home directory.
     */
    public function zapHomePath(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/zapHomePath/', [
            'apikey' => $apikey,
        ])->zapHomePath ?? null;
    }

    /**
     * Gets the maximum number of alert instances to include in a report.
     */
    public function optionMaximumAlertInstances(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionMaximumAlertInstances/', [
            'apikey' => $apikey,
        ])->MaximumAlertInstances ?? null;
    }

    /**
     * Gets whether or not related alerts will be merged in any reports generated.
     */
    public function optionMergeRelatedAlerts(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionMergeRelatedAlerts/', [
            'apikey' => $apikey,
        ])->MergeRelatedAlerts ?? null;
    }

    /**
     * Gets the path to the file with alert overrides.
     */
    public function optionAlertOverridesFilePath(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionAlertOverridesFilePath/', [
            'apikey' => $apikey,
        ])->AlertOverridesFilePath ?? null;
    }

    public function homeDirectory(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/homeDirectory/', [
            'apikey' => $apikey,
        ])->homeDirectory ?? null;
    }

    /**
     * Use view proxyChainExcludedDomains instead.
     */
    public function optionProxyChainSkipName(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyChainSkipName/', [
            'apikey' => $apikey,
        ])->ProxyChainSkipName ?? null;
    }

    /**
     * Use view proxyChainExcludedDomains instead.
     */
    public function optionProxyExcludedDomains(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyExcludedDomains/', [
            'apikey' => $apikey,
        ])->ProxyExcludedDomains ?? null;
    }

    /**
     * Use view proxyChainExcludedDomains instead.
     */
    public function optionProxyExcludedDomainsEnabled(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyExcludedDomainsEnabled/', [
            'apikey' => $apikey,
        ])->ProxyExcludedDomainsEnabled ?? null;
    }

    /**
     * Gets the alert with the given ID, the corresponding HTTP message can be obtained with the 'messageId' field and
     * 'message' API method
     */
    public function alert($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/alert/', [
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
        return $this->zap->request($this->zap->base . 'core/view/alerts/', $params)->alerts ?? null;
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
        return $this->zap->request($this->zap->base . 'core/view/alertsSummary/', $params)->alertsSummary ?? null;
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
        return $this->zap->request($this->zap->base . 'core/view/numberOfAlerts/', $params)->numberOfAlerts ?? null;
    }

    /**
     * Gets the user agent that ZAP should use when creating HTTP messages (for example, spider messages or CONNECT
     * requests to outgoing proxy).
     */
    public function optionDefaultUserAgent(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionDefaultUserAgent/', [
            'apikey' => $apikey,
        ])->DefaultUserAgent ?? null;
    }

    /**
     * Gets the TTL (in seconds) of successful DNS queries.
     */
    public function optionDnsTtlSuccessfulQueries(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionDnsTtlSuccessfulQueries/', [
            'apikey' => $apikey,
        ])->DnsTtlSuccessfulQueries ?? null;
    }

    public function optionHttpState(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionHttpState/', [
            'apikey' => $apikey,
        ])->HttpState ?? null;
    }

    public function optionHttpStateEnabled(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionHttpStateEnabled/', [
            'apikey' => $apikey,
        ])->HttpStateEnabled ?? null;
    }

    public function optionProxyChainName(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyChainName/', [
            'apikey' => $apikey,
        ])->ProxyChainName ?? null;
    }

    public function optionProxyChainPassword(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyChainPassword/', [
            'apikey' => $apikey,
        ])->ProxyChainPassword ?? null;
    }

    public function optionProxyChainPort(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyChainPort/', [
            'apikey' => $apikey,
        ])->ProxyChainPort ?? null;
    }

    public function optionProxyChainPrompt(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyChainPrompt/', [
            'apikey' => $apikey,
        ])->ProxyChainPrompt ?? null;
    }

    public function optionProxyChainRealm(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyChainRealm/', [
            'apikey' => $apikey,
        ])->ProxyChainRealm ?? null;
    }

    public function optionProxyChainUserName(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionProxyChainUserName/', [
            'apikey' => $apikey,
        ])->ProxyChainUserName ?? null;
    }

    public function optionSingleCookieRequestHeader(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionSingleCookieRequestHeader/', [
            'apikey' => $apikey,
        ])->SingleCookieRequestHeader ?? null;
    }

    /**
     * Gets the connection time out (in seconds).
     */
    public function optionTimeoutInSecs(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionTimeoutInSecs/', [
            'apikey' => $apikey,
        ])->TimeoutInSecs ?? null;
    }

    public function optionUseProxyChain(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionUseProxyChain/', [
            'apikey' => $apikey,
        ])->UseProxyChain ?? null;
    }

    public function optionUseProxyChainAuth(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionUseProxyChainAuth/', [
            'apikey' => $apikey,
        ])->UseProxyChainAuth ?? null;
    }

    /**
     * Gets whether or not the SOCKS proxy should be used.
     */
    public function optionUseSocksProxy(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/view/optionUseSocksProxy/', [
            'apikey' => $apikey,
        ])->UseSocksProxy ?? null;
    }

    /**
     * Convenient and simple action to access a URL, optionally following redirections. Returns the request sent and
     * response received and followed redirections, if any. Other actions are available which offer more control on what
     * is sent, like, 'sendRequest' or 'sendHarRequest'.
     */
    public function accessUrl($url, $followredirects = null, string $apikey = '')
    {
        $params = [
            'url' => $url,
            'apikey' => $apikey,
        ];
        if ($followredirects !== null) {
            $params['followRedirects'] = $followredirects;
        }
        return $this->zap->request($this->zap->base . 'core/action/accessUrl/', $params);
    }

    /**
     * Shuts down ZAP
     */
    public function shutdown(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/shutdown/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Creates a new session, optionally overwriting existing files. If a relative path is specified it will be resolved
     * against the "session" directory in ZAP "home" dir.
     */
    public function newSession($name = null, $overwrite = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($name !== null) {
            $params['name'] = $name;
        }
        if ($overwrite !== null) {
            $params['overwrite'] = $overwrite;
        }
        return $this->zap->request($this->zap->base . 'core/action/newSession/', $params);
    }

    /**
     * Loads the session with the given name. If a relative path is specified it will be resolved against the "session"
     * directory in ZAP "home" dir.
     */
    public function loadSession($name, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/loadSession/', [
            'name' => $name,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Saves the session.
     */
    public function saveSession($name, $overwrite = null, string $apikey = '')
    {
        $params = [
            'name' => $name,
            'apikey' => $apikey,
        ];
        if ($overwrite !== null) {
            $params['overwrite'] = $overwrite;
        }
        return $this->zap->request($this->zap->base . 'core/action/saveSession/', $params);
    }

    /**
     * Snapshots the session, optionally with the given name, and overwriting existing files. If no name is specified
     * the name of the current session with a timestamp appended is used. If a relative path is specified it will be
     * resolved against the "session" directory in ZAP "home" dir.
     */
    public function snapshotSession($name = null, $overwrite = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($name !== null) {
            $params['name'] = $name;
        }
        if ($overwrite !== null) {
            $params['overwrite'] = $overwrite;
        }
        return $this->zap->request($this->zap->base . 'core/action/snapshotSession/', $params);
    }

    /**
     * Clears the regexes of URLs excluded from the local proxies.
     */
    public function clearExcludedFromProxy(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/clearExcludedFromProxy/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds a regex of URLs that should be excluded from the local proxies.
     */
    public function excludeFromProxy($regex, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/excludeFromProxy/', [
            'regex' => $regex,
            'apikey' => $apikey,
        ]);
    }

    public function setHomeDirectory($dir, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setHomeDirectory/', [
            'dir' => $dir,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the mode, which may be one of [safe, protect, standard, attack]
     */
    public function setMode($mode, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setMode/', [
            'mode' => $mode,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Generates a new Root CA certificate for the local proxies.
     */
    public function generateRootCA(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/generateRootCA/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sends the HTTP request, optionally following redirections. Returns the request sent and response received and
     * followed redirections, if any. The Mode is enforced when sending the request (and following redirections), custom
     * manual requests are not allowed in 'Safe' mode nor in 'Protected' mode if out of scope.
     */
    public function sendRequest($request, $followredirects = null, string $apikey = '')
    {
        $params = [
            'request' => $request,
            'apikey' => $apikey,
        ];
        if ($followredirects !== null) {
            $params['followRedirects'] = $followredirects;
        }
        return $this->zap->request($this->zap->base . 'core/action/sendRequest/', $params);
    }

    public function runGarbageCollection(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/runGarbageCollection/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Deletes the site node found in the Sites Tree on the basis of the URL, HTTP method, and post data (if applicable
     * and specified).
     */
    public function deleteSiteNode($url, $method = null, $postdata = null, string $apikey = '')
    {
        $params = [
            'url' => $url,
            'apikey' => $apikey,
        ];
        if ($method !== null) {
            $params['method'] = $method;
        }
        if ($postdata !== null) {
            $params['postData'] = $postdata;
        }
        return $this->zap->request($this->zap->base . 'core/action/deleteSiteNode/', $params);
    }

    /**
     * Adds a domain to be excluded from the outgoing proxy, using the specified value. Optionally sets if the new entry
     * is enabled (default, true) and whether or not the new value is specified as a regex (default, false).
     */
    public function addProxyChainExcludedDomain($value, $isregex = null, $isenabled = null, string $apikey = '')
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
        return $this->zap->request($this->zap->base . 'core/action/addProxyChainExcludedDomain/', $params);
    }

    /**
     * Modifies a domain excluded from the outgoing proxy. Allows to modify the value, if enabled or if a regex. The
     * domain is selected with its index, which can be obtained with the view proxyChainExcludedDomains.
     */
    public function modifyProxyChainExcludedDomain(
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
        return $this->zap->request($this->zap->base . 'core/action/modifyProxyChainExcludedDomain/', $params);
    }

    /**
     * Removes a domain excluded from the outgoing proxy, with the given index. The index can be obtained with the view
     * proxyChainExcludedDomains.
     */
    public function removeProxyChainExcludedDomain($idx, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/removeProxyChainExcludedDomain/', [
            'idx' => $idx,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Enables all domains excluded from the outgoing proxy.
     */
    public function enableAllProxyChainExcludedDomains(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/enableAllProxyChainExcludedDomains/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Disables all domains excluded from the outgoing proxy.
     */
    public function disableAllProxyChainExcludedDomains(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/disableAllProxyChainExcludedDomains/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum number of alert instances to include in a report. A value of zero is treated as unlimited.
     */
    public function setOptionMaximumAlertInstances($numberofinstances, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionMaximumAlertInstances/', [
            'numberOfInstances' => $numberofinstances,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not related alerts will be merged in any reports generated.
     */
    public function setOptionMergeRelatedAlerts($enabled, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionMergeRelatedAlerts/', [
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets (or clears, if empty) the path to the file with alert overrides.
     */
    public function setOptionAlertOverridesFilePath($filepath = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($filepath !== null) {
            $params['filePath'] = $filepath;
        }
        return $this->zap->request($this->zap->base . 'core/action/setOptionAlertOverridesFilePath/', $params);
    }

    /**
     * Enables use of a PKCS12 client certificate for the certificate with the given file system path, password, and
     * optional index.
     */
    public function enablePKCS12ClientCertificate($filepath, $password, $index = null, string $apikey = '')
    {
        $params = [
            'filePath' => $filepath,
            'password' => $password,
            'apikey' => $apikey,
        ];
        if ($index !== null) {
            $params['index'] = $index;
        }
        return $this->zap->request($this->zap->base . 'core/action/enablePKCS12ClientCertificate/', $params);
    }

    /**
     * Disables the option for use of client certificates.
     */
    public function disableClientCertificate(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/disableClientCertificate/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Deletes all alerts of the current session.
     */
    public function deleteAllAlerts(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/deleteAllAlerts/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Deletes the alert with the given ID.
     */
    public function deleteAlert($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/deleteAlert/', [
            'id' => $id,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the user agent that ZAP should use when creating HTTP messages (for example, spider messages or CONNECT
     * requests to outgoing proxy).
     */
    public function setOptionDefaultUserAgent($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionDefaultUserAgent/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the TTL (in seconds) of successful DNS queries (applies after ZAP restart).
     */
    public function setOptionDnsTtlSuccessfulQueries($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionDnsTtlSuccessfulQueries/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionHttpStateEnabled($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionHttpStateEnabled/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionProxyChainName($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainName/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionProxyChainPassword($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPassword/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionProxyChainPort($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPort/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionProxyChainPrompt($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPrompt/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionProxyChainRealm($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainRealm/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Use actions [add|modify|remove]ProxyChainExcludedDomain instead.
     */
    public function setOptionProxyChainSkipName($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainSkipName/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionProxyChainUserName($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainUserName/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionSingleCookieRequestHeader($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionSingleCookieRequestHeader/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the connection time out (in seconds).
     */
    public function setOptionTimeoutInSecs($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionTimeoutInSecs/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not the outgoing proxy should be used. The address/hostname of the outgoing proxy must be set to
     * enable this option.
     */
    public function setOptionUseProxyChain($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionUseProxyChain/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionUseProxyChainAuth($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionUseProxyChainAuth/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not the SOCKS proxy should be used.
     */
    public function setOptionUseSocksProxy($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'core/action/setOptionUseSocksProxy/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function proxypac(string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/proxy.pac/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Gets the Root CA certificate used by the local proxies.
     */
    public function rootcert(string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/rootcert/', [
            'apikey' => $apikey,
        ]);
    }

    public function setproxy($proxy, string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/setproxy/', [
            'proxy' => $proxy,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Generates a report in XML format
     */
    public function xmlreport(string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/xmlreport/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Generates a report in HTML format
     */
    public function htmlreport(string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/htmlreport/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Generates a report in JSON format
     */
    public function jsonreport(string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/jsonreport/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Generates a report in Markdown format
     */
    public function mdreport(string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/mdreport/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Gets the message with the given ID in HAR format
     */
    public function messageHar($id, string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/messageHar/', [
            'id' => $id,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Gets the HTTP messages sent through/by ZAP, in HAR format, optionally filtered by URL and paginated with 'start'
     * position and 'count' of messages
     */
    public function messagesHar($baseurl = null, $start = null, $count = null, string $apikey = '')
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
        return $this->zap->requestOther($this->zap->base_other . 'core/other/messagesHar/', $params);
    }

    /**
     * Gets the HTTP messages with the given IDs, in HAR format.
     */
    public function messagesHarById($ids, string $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'core/other/messagesHarById/', [
            'ids' => $ids,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sends the first HAR request entry, optionally following redirections. Returns, in HAR format, the request sent
     * and response received and followed redirections, if any. The Mode is enforced when sending the request (and
     * following redirections), custom manual requests are not allowed in 'Safe' mode nor in 'Protected' mode if out of
     * scope.
     */
    public function sendHarRequest($request, $followredirects = null, string $apikey = '')
    {
        $params = [
            'request' => $request,
            'apikey' => $apikey,
        ];
        if ($followredirects !== null) {
            $params['followRedirects'] = $followredirects;
        }
        return $this->zap->requestOther($this->zap->base_other . 'core/other/sendHarRequest/', $params);
    }
}

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
class Core {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Gets the name of the hosts accessed through/by ZAP
	 */
	public function hosts($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/hosts/', array('apikey' => $apikey))->{'hosts'};
	}

	/**
	 * Gets the sites accessed through/by ZAP (scheme and domain)
	 */
	public function sites($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/sites/', array('apikey' => $apikey))->{'sites'};
	}

	/**
	 * Gets the URLs accessed through/by ZAP, optionally filtering by (base) URL.
	 */
	public function urls($baseurl=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		return $this->zap->request($this->zap->base . 'core/view/urls/', $params)->{'urls'};
	}

	/**
	 * Gets the child nodes underneath the specified URL in the Sites tree
	 */
	public function childNodes($url=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		return $this->zap->request($this->zap->base . 'core/view/childNodes/', $params)->{'childNodes'};
	}

	/**
	 * Gets the HTTP message with the given ID. Returns the ID, request/response headers and bodies, cookies, note, type, RTT, and timestamp.
	 */
	public function message($id, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/message/', array('id' => $id, 'apikey' => $apikey))->{'message'};
	}

	/**
	 * Gets the HTTP messages sent by ZAP, request and response, optionally filtered by URL and paginated with 'start' position and 'count' of messages
	 */
	public function messages($baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
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
		return $this->zap->request($this->zap->base . 'core/view/messages/', $params)->{'messages'};
	}

	/**
	 * Gets the HTTP messages with the given IDs.
	 */
	public function messagesById($ids, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/messagesById/', array('ids' => $ids, 'apikey' => $apikey))->{'messagesById'};
	}

	/**
	 * Gets the number of messages, optionally filtering by URL
	 */
	public function numberOfMessages($baseurl=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		return $this->zap->request($this->zap->base . 'core/view/numberOfMessages/', $params)->{'numberOfMessages'};
	}

	/**
	 * Gets the mode
	 */
	public function mode($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/mode/', array('apikey' => $apikey))->{'mode'};
	}

	/**
	 * Gets ZAP version
	 */
	public function version($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/version/', array('apikey' => $apikey))->{'version'};
	}

	/**
	 * Gets the regular expressions, applied to URLs, to exclude from the local proxies.
	 */
	public function excludedFromProxy($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/excludedFromProxy/', array('apikey' => $apikey))->{'excludedFromProxy'};
	}

	/**
	 * 
	 */
	public function homeDirectory($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/homeDirectory/', array('apikey' => $apikey))->{'homeDirectory'};
	}

	/**
	 * Gets the location of the current session file
	 */
	public function sessionLocation($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/sessionLocation/', array('apikey' => $apikey))->{'sessionLocation'};
	}

	/**
	 * Gets all the domains that are excluded from the outgoing proxy. For each domain the following are shown: the index, the value (domain), if enabled, and if specified as a regex.
	 */
	public function proxyChainExcludedDomains($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/proxyChainExcludedDomains/', array('apikey' => $apikey))->{'proxyChainExcludedDomains'};
	}

	/**
	 * Use view proxyChainExcludedDomains instead.
	 */
	public function optionProxyChainSkipName($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyChainSkipName/', array('apikey' => $apikey))->{'ProxyChainSkipName'};
	}

	/**
	 * Use view proxyChainExcludedDomains instead.
	 */
	public function optionProxyExcludedDomains($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyExcludedDomains/', array('apikey' => $apikey))->{'ProxyExcludedDomains'};
	}

	/**
	 * Use view proxyChainExcludedDomains instead.
	 */
	public function optionProxyExcludedDomainsEnabled($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyExcludedDomainsEnabled/', array('apikey' => $apikey))->{'ProxyExcludedDomainsEnabled'};
	}

	/**
	 * Gets the path to ZAP's home directory.
	 */
	public function zapHomePath($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/zapHomePath/', array('apikey' => $apikey))->{'zapHomePath'};
	}

	/**
	 * Gets the maximum number of alert instances to include in a report.
	 */
	public function optionMaximumAlertInstances($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionMaximumAlertInstances/', array('apikey' => $apikey))->{'MaximumAlertInstances'};
	}

	/**
	 * Gets whether or not related alerts will be merged in any reports generated.
	 */
	public function optionMergeRelatedAlerts($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionMergeRelatedAlerts/', array('apikey' => $apikey))->{'MergeRelatedAlerts'};
	}

	/**
	 * Gets the path to the file with alert overrides.
	 */
	public function optionAlertOverridesFilePath($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionAlertOverridesFilePath/', array('apikey' => $apikey))->{'AlertOverridesFilePath'};
	}

	/**
	 * Gets the alert with the given ID, the corresponding HTTP message can be obtained with the 'messageId' field and 'message' API method
	 */
	public function alert($id, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/alert/', array('id' => $id, 'apikey' => $apikey))->{'alert'};
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
		return $this->zap->request($this->zap->base . 'core/view/alerts/', $params)->{'alerts'};
	}

	/**
	 * Gets number of alerts grouped by each risk level, optionally filtering by URL
	 */
	public function alertsSummary($baseurl=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		return $this->zap->request($this->zap->base . 'core/view/alertsSummary/', $params)->{'alertsSummary'};
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
		return $this->zap->request($this->zap->base . 'core/view/numberOfAlerts/', $params)->{'numberOfAlerts'};
	}

	/**
	 * Gets the user agent that ZAP should use when creating HTTP messages (for example, spider messages or CONNECT requests to outgoing proxy).
	 */
	public function optionDefaultUserAgent($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionDefaultUserAgent/', array('apikey' => $apikey))->{'DefaultUserAgent'};
	}

	/**
	 * Gets the TTL (in seconds) of successful DNS queries.
	 */
	public function optionDnsTtlSuccessfulQueries($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionDnsTtlSuccessfulQueries/', array('apikey' => $apikey))->{'DnsTtlSuccessfulQueries'};
	}

	/**
	 * 
	 */
	public function optionHttpState($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionHttpState/', array('apikey' => $apikey))->{'HttpState'};
	}

	/**
	 * 
	 */
	public function optionProxyChainName($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyChainName/', array('apikey' => $apikey))->{'ProxyChainName'};
	}

	/**
	 * 
	 */
	public function optionProxyChainPassword($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyChainPassword/', array('apikey' => $apikey))->{'ProxyChainPassword'};
	}

	/**
	 * 
	 */
	public function optionProxyChainPort($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyChainPort/', array('apikey' => $apikey))->{'ProxyChainPort'};
	}

	/**
	 * 
	 */
	public function optionProxyChainRealm($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyChainRealm/', array('apikey' => $apikey))->{'ProxyChainRealm'};
	}

	/**
	 * 
	 */
	public function optionProxyChainUserName($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyChainUserName/', array('apikey' => $apikey))->{'ProxyChainUserName'};
	}

	/**
	 * Gets the connection time out (in seconds).
	 */
	public function optionTimeoutInSecs($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionTimeoutInSecs/', array('apikey' => $apikey))->{'TimeoutInSecs'};
	}

	/**
	 * 
	 */
	public function optionHttpStateEnabled($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionHttpStateEnabled/', array('apikey' => $apikey))->{'HttpStateEnabled'};
	}

	/**
	 * 
	 */
	public function optionProxyChainPrompt($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionProxyChainPrompt/', array('apikey' => $apikey))->{'ProxyChainPrompt'};
	}

	/**
	 * 
	 */
	public function optionSingleCookieRequestHeader($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionSingleCookieRequestHeader/', array('apikey' => $apikey))->{'SingleCookieRequestHeader'};
	}

	/**
	 * 
	 */
	public function optionUseProxyChain($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionUseProxyChain/', array('apikey' => $apikey))->{'UseProxyChain'};
	}

	/**
	 * 
	 */
	public function optionUseProxyChainAuth($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionUseProxyChainAuth/', array('apikey' => $apikey))->{'UseProxyChainAuth'};
	}

	/**
	 * Gets whether or not the SOCKS proxy should be used.
	 */
	public function optionUseSocksProxy($apikey='') {
		return $this->zap->request($this->zap->base . 'core/view/optionUseSocksProxy/', array('apikey' => $apikey))->{'UseSocksProxy'};
	}

	/**
	 * Convenient and simple action to access a URL, optionally following redirections. Returns the request sent and response received and followed redirections, if any. Other actions are available which offer more control on what is sent, like, 'sendRequest' or 'sendHarRequest'.
	 */
	public function accessUrl($url, $followredirects=NULL, $apikey='') {
		$params = array('url' => $url, 'apikey' => $apikey);
		if ($followredirects !== NULL) {
			$params['followRedirects'] = $followredirects;
		}
		return $this->zap->request($this->zap->base . 'core/action/accessUrl/', $params);
	}

	/**
	 * Shuts down ZAP
	 */
	public function shutdown($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/shutdown/', array('apikey' => $apikey));
	}

	/**
	 * Creates a new session, optionally overwriting existing files. If a relative path is specified it will be resolved against the "session" directory in ZAP "home" dir.
	 */
	public function newSession($name=NULL, $overwrite=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($name !== NULL) {
			$params['name'] = $name;
		}
		if ($overwrite !== NULL) {
			$params['overwrite'] = $overwrite;
		}
		return $this->zap->request($this->zap->base . 'core/action/newSession/', $params);
	}

	/**
	 * Loads the session with the given name. If a relative path is specified it will be resolved against the "session" directory in ZAP "home" dir.
	 */
	public function loadSession($name, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/loadSession/', array('name' => $name, 'apikey' => $apikey));
	}

	/**
	 * Saves the session.
	 */
	public function saveSession($name, $overwrite=NULL, $apikey='') {
		$params = array('name' => $name, 'apikey' => $apikey);
		if ($overwrite !== NULL) {
			$params['overwrite'] = $overwrite;
		}
		return $this->zap->request($this->zap->base . 'core/action/saveSession/', $params);
	}

	/**
	 * Snapshots the session, optionally with the given name, and overwriting existing files. If no name is specified the name of the current session with a timestamp appended is used. If a relative path is specified it will be resolved against the "session" directory in ZAP "home" dir.
	 */
	public function snapshotSession($name=NULL, $overwrite=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($name !== NULL) {
			$params['name'] = $name;
		}
		if ($overwrite !== NULL) {
			$params['overwrite'] = $overwrite;
		}
		return $this->zap->request($this->zap->base . 'core/action/snapshotSession/', $params);
	}

	/**
	 * Clears the regexes of URLs excluded from the local proxies.
	 */
	public function clearExcludedFromProxy($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/clearExcludedFromProxy/', array('apikey' => $apikey));
	}

	/**
	 * Adds a regex of URLs that should be excluded from the local proxies.
	 */
	public function excludeFromProxy($regex, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/excludeFromProxy/', array('regex' => $regex, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setHomeDirectory($dir, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setHomeDirectory/', array('dir' => $dir, 'apikey' => $apikey));
	}

	/**
	 * Sets the mode, which may be one of [safe, protect, standard, attack]
	 */
	public function setMode($mode, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setMode/', array('mode' => $mode, 'apikey' => $apikey));
	}

	/**
	 * Generates a new Root CA certificate for the local proxies.
	 */
	public function generateRootCA($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/generateRootCA/', array('apikey' => $apikey));
	}

	/**
	 * Sends the HTTP request, optionally following redirections. Returns the request sent and response received and followed redirections, if any. The Mode is enforced when sending the request (and following redirections), custom manual requests are not allowed in 'Safe' mode nor in 'Protected' mode if out of scope.
	 */
	public function sendRequest($request, $followredirects=NULL, $apikey='') {
		$params = array('request' => $request, 'apikey' => $apikey);
		if ($followredirects !== NULL) {
			$params['followRedirects'] = $followredirects;
		}
		return $this->zap->request($this->zap->base . 'core/action/sendRequest/', $params);
	}

	/**
	 * 
	 */
	public function runGarbageCollection($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/runGarbageCollection/', array('apikey' => $apikey));
	}

	/**
	 * Deletes the site node found in the Sites Tree on the basis of the URL, HTTP method, and post data (if applicable and specified). 
	 */
	public function deleteSiteNode($url, $method=NULL, $postdata=NULL, $apikey='') {
		$params = array('url' => $url, 'apikey' => $apikey);
		if ($method !== NULL) {
			$params['method'] = $method;
		}
		if ($postdata !== NULL) {
			$params['postData'] = $postdata;
		}
		return $this->zap->request($this->zap->base . 'core/action/deleteSiteNode/', $params);
	}

	/**
	 * Adds a domain to be excluded from the outgoing proxy, using the specified value. Optionally sets if the new entry is enabled (default, true) and whether or not the new value is specified as a regex (default, false).
	 */
	public function addProxyChainExcludedDomain($value, $isregex=NULL, $isenabled=NULL, $apikey='') {
		$params = array('value' => $value, 'apikey' => $apikey);
		if ($isregex !== NULL) {
			$params['isRegex'] = $isregex;
		}
		if ($isenabled !== NULL) {
			$params['isEnabled'] = $isenabled;
		}
		return $this->zap->request($this->zap->base . 'core/action/addProxyChainExcludedDomain/', $params);
	}

	/**
	 * Modifies a domain excluded from the outgoing proxy. Allows to modify the value, if enabled or if a regex. The domain is selected with its index, which can be obtained with the view proxyChainExcludedDomains.
	 */
	public function modifyProxyChainExcludedDomain($idx, $value=NULL, $isregex=NULL, $isenabled=NULL, $apikey='') {
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
		return $this->zap->request($this->zap->base . 'core/action/modifyProxyChainExcludedDomain/', $params);
	}

	/**
	 * Removes a domain excluded from the outgoing proxy, with the given index. The index can be obtained with the view proxyChainExcludedDomains.
	 */
	public function removeProxyChainExcludedDomain($idx, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/removeProxyChainExcludedDomain/', array('idx' => $idx, 'apikey' => $apikey));
	}

	/**
	 * Enables all domains excluded from the outgoing proxy.
	 */
	public function enableAllProxyChainExcludedDomains($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/enableAllProxyChainExcludedDomains/', array('apikey' => $apikey));
	}

	/**
	 * Disables all domains excluded from the outgoing proxy.
	 */
	public function disableAllProxyChainExcludedDomains($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/disableAllProxyChainExcludedDomains/', array('apikey' => $apikey));
	}

	/**
	 * Sets the maximum number of alert instances to include in a report. A value of zero is treated as unlimited.
	 */
	public function setOptionMaximumAlertInstances($numberofinstances, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionMaximumAlertInstances/', array('numberOfInstances' => $numberofinstances, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not related alerts will be merged in any reports generated.
	 */
	public function setOptionMergeRelatedAlerts($enabled, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionMergeRelatedAlerts/', array('enabled' => $enabled, 'apikey' => $apikey));
	}

	/**
	 * Sets (or clears, if empty) the path to the file with alert overrides.
	 */
	public function setOptionAlertOverridesFilePath($filepath=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($filepath !== NULL) {
			$params['filePath'] = $filepath;
		}
		return $this->zap->request($this->zap->base . 'core/action/setOptionAlertOverridesFilePath/', $params);
	}

	/**
	 * Enables use of a PKCS12 client certificate for the certificate with the given file system path, password, and optional index.
	 */
	public function enablePKCS12ClientCertificate($filepath, $password, $index=NULL, $apikey='') {
		$params = array('filePath' => $filepath, 'password' => $password, 'apikey' => $apikey);
		if ($index !== NULL) {
			$params['index'] = $index;
		}
		return $this->zap->request($this->zap->base . 'core/action/enablePKCS12ClientCertificate/', $params);
	}

	/**
	 * Disables the option for use of client certificates.
	 */
	public function disableClientCertificate($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/disableClientCertificate/', array('apikey' => $apikey));
	}

	/**
	 * Deletes all alerts of the current session.
	 */
	public function deleteAllAlerts($apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/deleteAllAlerts/', array('apikey' => $apikey));
	}

	/**
	 * Deletes the alert with the given ID. 
	 */
	public function deleteAlert($id, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/deleteAlert/', array('id' => $id, 'apikey' => $apikey));
	}

	/**
	 * Sets the user agent that ZAP should use when creating HTTP messages (for example, spider messages or CONNECT requests to outgoing proxy).
	 */
	public function setOptionDefaultUserAgent($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionDefaultUserAgent/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionProxyChainName($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainName/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionProxyChainPassword($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPassword/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionProxyChainRealm($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainRealm/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Use actions [add|modify|remove]ProxyChainExcludedDomain instead.
	 */
	public function setOptionProxyChainSkipName($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainSkipName/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionProxyChainUserName($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainUserName/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Sets the TTL (in seconds) of successful DNS queries (applies after ZAP restart).
	 */
	public function setOptionDnsTtlSuccessfulQueries($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionDnsTtlSuccessfulQueries/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionHttpStateEnabled($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionHttpStateEnabled/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionProxyChainPort($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPort/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionProxyChainPrompt($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPrompt/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionSingleCookieRequestHeader($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionSingleCookieRequestHeader/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * Sets the connection time out (in seconds).
	 */
	public function setOptionTimeoutInSecs($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionTimeoutInSecs/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the outgoing proxy should be used. The address/hostname of the outgoing proxy must be set to enable this option.
	 */
	public function setOptionUseProxyChain($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionUseProxyChain/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionUseProxyChainAuth($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionUseProxyChainAuth/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the SOCKS proxy should be used.
	 */
	public function setOptionUseSocksProxy($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'core/action/setOptionUseSocksProxy/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function proxypac($apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/proxy.pac/', array('apikey' => $apikey));
	}

	/**
	 * Gets the Root CA certificate used by the local proxies.
	 */
	public function rootcert($apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/rootcert/', array('apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setproxy($proxy, $apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/setproxy/', array('proxy' => $proxy, 'apikey' => $apikey));
	}

	/**
	 * Generates a report in XML format
	 */
	public function xmlreport($apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/xmlreport/', array('apikey' => $apikey));
	}

	/**
	 * Generates a report in HTML format
	 */
	public function htmlreport($apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/htmlreport/', array('apikey' => $apikey));
	}

	/**
	 * Generates a report in JSON format
	 */
	public function jsonreport($apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/jsonreport/', array('apikey' => $apikey));
	}

	/**
	 * Generates a report in Markdown format
	 */
	public function mdreport($apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/mdreport/', array('apikey' => $apikey));
	}

	/**
	 * Gets the message with the given ID in HAR format
	 */
	public function messageHar($id, $apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/messageHar/', array('id' => $id, 'apikey' => $apikey));
	}

	/**
	 * Gets the HTTP messages sent through/by ZAP, in HAR format, optionally filtered by URL and paginated with 'start' position and 'count' of messages
	 */
	public function messagesHar($baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
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
		return $this->zap->requestOther($this->zap->base_other . 'core/other/messagesHar/', $params);
	}

	/**
	 * Gets the HTTP messages with the given IDs, in HAR format.
	 */
	public function messagesHarById($ids, $apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'core/other/messagesHarById/', array('ids' => $ids, 'apikey' => $apikey));
	}

	/**
	 * Sends the first HAR request entry, optionally following redirections. Returns, in HAR format, the request sent and response received and followed redirections, if any. The Mode is enforced when sending the request (and following redirections), custom manual requests are not allowed in 'Safe' mode nor in 'Protected' mode if out of scope.
	 */
	public function sendHarRequest($request, $followredirects=NULL, $apikey='') {
		$params = array('request' => $request, 'apikey' => $apikey);
		if ($followredirects !== NULL) {
			$params['followRedirects'] = $followredirects;
		}
		return $this->zap->requestOther($this->zap->base_other . 'core/other/sendHarRequest/', $params);
	}

}

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
class AjaxSpider {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Gets the allowed resources. The allowed resources are always fetched even if out of scope, allowing to include necessary resources (e.g. scripts) from 3rd-parties.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function allowedResources($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/allowedResources/', array('apikey' => $apikey))->{'allowedResources'};
	}

	/**
	 * Gets the current status of the crawler. Actual values are Stopped and Running.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function status($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/status/', array('apikey' => $apikey))->{'status'};
	}

	/**
	 * Gets the current results of the crawler.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function results($start=NULL, $count=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/results/', $params)->{'results'};
	}

	/**
	 * Gets the number of resources found.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function numberOfResults($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/numberOfResults/', array('apikey' => $apikey))->{'numberOfResults'};
	}

	/**
	 * Gets the full crawled content detected by the AJAX Spider. Returns a set of values based on 'inScope' URLs, 'outOfScope' URLs, and 'errors' encountered during the last/current run of the AJAX Spider.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function fullResults($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/fullResults/', array('apikey' => $apikey))->{'fullResults'};
	}

	/**
	 * Gets the configured browser to use for crawling.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionBrowserId($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionBrowserId/', array('apikey' => $apikey))->{'BrowserId'};
	}

	/**
	 * Gets the time to wait after an event (in milliseconds). For example: the wait delay after the cursor hovers over an element, in order for a menu to display, etc.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionEventWait($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionEventWait/', array('apikey' => $apikey))->{'EventWait'};
	}

	/**
	 * Gets the configured value for the max crawl depth.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionMaxCrawlDepth($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionMaxCrawlDepth/', array('apikey' => $apikey))->{'MaxCrawlDepth'};
	}

	/**
	 * Gets the configured value for the maximum crawl states allowed.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionMaxCrawlStates($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionMaxCrawlStates/', array('apikey' => $apikey))->{'MaxCrawlStates'};
	}

	/**
	 * Gets the configured max duration of the crawl, the value is in minutes.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionMaxDuration($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionMaxDuration/', array('apikey' => $apikey))->{'MaxDuration'};
	}

	/**
	 * Gets the configured number of browsers to be used.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionNumberOfBrowsers($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionNumberOfBrowsers/', array('apikey' => $apikey))->{'NumberOfBrowsers'};
	}

	/**
	 * Gets the configured time to wait after reloading the page, this value is in milliseconds.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionReloadWait($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionReloadWait/', array('apikey' => $apikey))->{'ReloadWait'};
	}

	/**
	 * Gets the configured value for 'Click Default Elements Only', HTML elements such as 'a', 'button', 'input', all associated with some action or links on the page.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionClickDefaultElems($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionClickDefaultElems/', array('apikey' => $apikey))->{'ClickDefaultElems'};
	}

	/**
	 * Gets the value configured for the AJAX Spider to know if it should click on the elements only once.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionClickElemsOnce($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionClickElemsOnce/', array('apikey' => $apikey))->{'ClickElemsOnce'};
	}

	/**
	 * Gets if the AJAX Spider will use random values in form fields when crawling, if set to true.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionRandomInputs($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionRandomInputs/', array('apikey' => $apikey))->{'RandomInputs'};
	}

	/**
	 * Runs the AJAX Spider against a given target.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function scan($url=NULL, $inscope=NULL, $contextname=NULL, $subtreeonly=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($inscope !== NULL) {
			$params['inScope'] = $inscope;
		}
		if ($contextname !== NULL) {
			$params['contextName'] = $contextname;
		}
		if ($subtreeonly !== NULL) {
			$params['subtreeOnly'] = $subtreeonly;
		}
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/scan/', $params);
	}

	/**
	 * Runs the AJAX Spider from the perspective of a User of the web application.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function scanAsUser($contextname, $username, $url=NULL, $subtreeonly=NULL, $apikey='') {
		$params = array('contextName' => $contextname, 'userName' => $username, 'apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($subtreeonly !== NULL) {
			$params['subtreeOnly'] = $subtreeonly;
		}
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/scanAsUser/', $params);
	}

	/**
	 * Stops the AJAX Spider.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function stop($apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/stop/', array('apikey' => $apikey));
	}

	/**
	 * Adds an allowed resource.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function addAllowedResource($regex, $enabled=NULL, $apikey='') {
		$params = array('regex' => $regex, 'apikey' => $apikey);
		if ($enabled !== NULL) {
			$params['enabled'] = $enabled;
		}
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/addAllowedResource/', $params);
	}

	/**
	 * Removes an allowed resource.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function removeAllowedResource($regex, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/removeAllowedResource/', array('regex' => $regex, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not an allowed resource is enabled.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setEnabledAllowedResource($regex, $enabled, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setEnabledAllowedResource/', array('regex' => $regex, 'enabled' => $enabled, 'apikey' => $apikey));
	}

	/**
	 * Sets the configuration of the AJAX Spider to use one of the supported browsers.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionBrowserId($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionBrowserId/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Sets whether or not the the AJAX Spider will only click on the default HTML elements.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionClickDefaultElems($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionClickDefaultElems/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * When enabled, the crawler attempts to interact with each element (e.g., by clicking) only once.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionClickElemsOnce($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionClickElemsOnce/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * Sets the time to wait after an event (in milliseconds). For example: the wait delay after the cursor hovers over an element, in order for a menu to display, etc.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionEventWait($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionEventWait/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets the maximum depth that the crawler can reach.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionMaxCrawlDepth($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionMaxCrawlDepth/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets the maximum number of states that the crawler should crawl.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionMaxCrawlStates($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionMaxCrawlStates/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * The maximum time that the crawler is allowed to run.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionMaxDuration($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionMaxDuration/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * Sets the number of windows to be used by AJAX Spider.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionNumberOfBrowsers($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionNumberOfBrowsers/', array('Integer' => $integer, 'apikey' => $apikey));
	}

	/**
	 * When enabled, inserts random values into form fields.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionRandomInputs($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionRandomInputs/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * Sets the time to wait after the page is loaded before interacting with it.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionReloadWait($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionReloadWait/', array('Integer' => $integer, 'apikey' => $apikey));
	}

}

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
 *
 * @property Zap $zap
 */
class AjaxSpider
{
    public function __construct($zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets the allowed resources. The allowed resources are always fetched even if out of scope, allowing to include
     * necessary resources (e.g. scripts) from 3rd-parties. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function allowedResources($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/allowedResources/', [
            'apikey' => $apikey,
        ])->allowedResources ?? null;
    }

    /**
     * Gets the current status of the crawler. Actual values are Stopped and Running. This component is optional and
     * therefore the API will only work if it is installed
     */
    public function status($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/status/', [
            'apikey' => $apikey,
        ])->status ?? null;
    }

    /**
     * Gets the current results of the crawler. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function results($start = null, $count = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($start !== null) {
            $params['start'] = $start;
        }
        if ($count !== null) {
            $params['count'] = $count;
        }
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/results/', $params)->results ?? null;
    }

    /**
     * Gets the number of resources found. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function numberOfResults($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/numberOfResults/', [
            'apikey' => $apikey,
        ])->numberOfResults ?? null;
    }

    /**
     * Gets the full crawled content detected by the AJAX Spider. Returns a set of values based on 'inScope' URLs,
     * 'outOfScope' URLs, and 'errors' encountered during the last/current run of the AJAX Spider. This component is
     * optional and therefore the API will only work if it is installed
     */
    public function fullResults($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/fullResults/', [
            'apikey' => $apikey,
        ])->fullResults ?? null;
    }

    /**
     * Gets the configured browser to use for crawling. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function optionBrowserId($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionBrowserId/', [
            'apikey' => $apikey,
        ])->BrowserId ?? null;
    }

    /**
     * Gets the time to wait after an event (in milliseconds). For example: the wait delay after the cursor hovers over
     * an element, in order for a menu to display, etc. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function optionEventWait($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionEventWait/', [
            'apikey' => $apikey,
        ])->EventWait ?? null;
    }

    /**
     * Gets the configured value for the max crawl depth. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function optionMaxCrawlDepth($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionMaxCrawlDepth/', [
            'apikey' => $apikey,
        ])->MaxCrawlDepth ?? null;
    }

    /**
     * Gets the configured value for the maximum crawl states allowed. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function optionMaxCrawlStates($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionMaxCrawlStates/', [
            'apikey' => $apikey,
        ])->MaxCrawlStates ?? null;
    }

    /**
     * Gets the configured max duration of the crawl, the value is in minutes. This component is optional and therefore
     * the API will only work if it is installed
     */
    public function optionMaxDuration($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionMaxDuration/', [
            'apikey' => $apikey,
        ])->MaxDuration ?? null;
    }

    /**
     * Gets the configured number of browsers to be used. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function optionNumberOfBrowsers($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionNumberOfBrowsers/', [
            'apikey' => $apikey,
        ])->NumberOfBrowsers ?? null;
    }

    /**
     * Gets the configured time to wait after reloading the page, this value is in milliseconds. This component is
     * optional and therefore the API will only work if it is installed
     */
    public function optionReloadWait($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionReloadWait/', [
            'apikey' => $apikey,
        ])->ReloadWait ?? null;
    }

    /**
     * Gets the configured value for 'Click Default Elements Only', HTML elements such as 'a', 'button', 'input', all
     * associated with some action or links on the page. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function optionClickDefaultElems($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionClickDefaultElems/', [
            'apikey' => $apikey,
        ])->ClickDefaultElems ?? null;
    }

    /**
     * Gets the value configured for the AJAX Spider to know if it should click on the elements only once. This
     * component is optional and therefore the API will only work if it is installed
     */
    public function optionClickElemsOnce($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionClickElemsOnce/', [
            'apikey' => $apikey,
        ])->ClickElemsOnce ?? null;
    }

    /**
     * Gets if the AJAX Spider will use random values in form fields when crawling, if set to true. This component is
     * optional and therefore the API will only work if it is installed
     */
    public function optionRandomInputs($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/view/optionRandomInputs/', [
            'apikey' => $apikey,
        ])->RandomInputs ?? null;
    }

    /**
     * Runs the AJAX Spider against a given target. This component is optional and therefore the API will only work if
     * it is installed
     */
    public function scan($url = null, $inscope = null, $contextname = null, $subtreeonly = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($inscope !== null) {
            $params['inScope'] = $inscope;
        }
        if ($contextname !== null) {
            $params['contextName'] = $contextname;
        }
        if ($subtreeonly !== null) {
            $params['subtreeOnly'] = $subtreeonly;
        }
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/scan/', $params);
    }

    /**
     * Runs the AJAX Spider from the perspective of a User of the web application. This component is optional and
     * therefore the API will only work if it is installed
     */
    public function scanAsUser($contextname, $username, $url = null, $subtreeonly = null, string $apikey = '')
    {
        $params = [
            'contextName' => $contextname,
            'userName' => $username,
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        if ($subtreeonly !== null) {
            $params['subtreeOnly'] = $subtreeonly;
        }
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/scanAsUser/', $params);
    }

    /**
     * Stops the AJAX Spider. This component is optional and therefore the API will only work if it is installed
     */
    public function stop($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/stop/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds an allowed resource. This component is optional and therefore the API will only work if it is installed
     */
    public function addAllowedResource($regex, $enabled = null, string $apikey = '')
    {
        $params = [
            'regex' => $regex,
            'apikey' => $apikey,
        ];
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/addAllowedResource/', $params);
    }

    /**
     * Removes an allowed resource. This component is optional and therefore the API will only work if it is installed
     */
    public function removeAllowedResource($regex, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/removeAllowedResource/', [
            'regex' => $regex,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not an allowed resource is enabled. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setEnabledAllowedResource($regex, $enabled, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setEnabledAllowedResource/', [
            'regex' => $regex,
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the configuration of the AJAX Spider to use one of the supported browsers. This component is optional and
     * therefore the API will only work if it is installed
     */
    public function setOptionBrowserId($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionBrowserId/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not the the AJAX Spider will only click on the default HTML elements. This component is optional
     * and therefore the API will only work if it is installed
     */
    public function setOptionClickDefaultElems($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionClickDefaultElems/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    /**
     * When enabled, the crawler attempts to interact with each element (e.g., by clicking) only once. This component is
     * optional and therefore the API will only work if it is installed
     */
    public function setOptionClickElemsOnce($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionClickElemsOnce/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the time to wait after an event (in milliseconds). For example: the wait delay after the cursor hovers over
     * an element, in order for a menu to display, etc. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function setOptionEventWait($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionEventWait/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum depth that the crawler can reach. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setOptionMaxCrawlDepth($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionMaxCrawlDepth/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum number of states that the crawler should crawl. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function setOptionMaxCrawlStates($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionMaxCrawlStates/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * The maximum time that the crawler is allowed to run. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setOptionMaxDuration($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionMaxDuration/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the number of windows to be used by AJAX Spider. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setOptionNumberOfBrowsers($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionNumberOfBrowsers/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * When enabled, inserts random values into form fields. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setOptionRandomInputs($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionRandomInputs/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the time to wait after the page is loaded before interacting with it. This component is optional and
     * therefore the API will only work if it is installed
     */
    public function setOptionReloadWait($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'ajaxSpider/action/setOptionReloadWait/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }
}

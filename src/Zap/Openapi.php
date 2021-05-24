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
class Openapi {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Imports an OpenAPI definition from a local file.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function importFile($file, $target=NULL, $apikey='') {
		$params = array('file' => $file, 'apikey' => $apikey);
		if ($target !== NULL) {
			$params['target'] = $target;
		}
		return $this->zap->request($this->zap->base . 'openapi/action/importFile/', $params);
	}

	/**
	 * Imports an OpenAPI definition from a URL.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function importUrl($url, $hostoverride=NULL, $apikey='') {
		$params = array('url' => $url, 'apikey' => $apikey);
		if ($hostoverride !== NULL) {
			$params['hostOverride'] = $hostoverride;
		}
		return $this->zap->request($this->zap->base . 'openapi/action/importUrl/', $params);
	}

}

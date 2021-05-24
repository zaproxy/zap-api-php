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
class LocalProxies {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Gets all of the additional proxies that have been configured.
	 */
	public function additionalProxies($apikey='') {
		return $this->zap->request($this->zap->base . 'localProxies/view/additionalProxies/', array('apikey' => $apikey))->{'additionalProxies'};
	}

	/**
	 * Adds an new proxy using the details supplied.
	 */
	public function addAdditionalProxy($address, $port, $behindnat=NULL, $alwaysdecodezip=NULL, $removeunsupportedencodings=NULL, $apikey='') {
		$params = array('address' => $address, 'port' => $port, 'apikey' => $apikey);
		if ($behindnat !== NULL) {
			$params['behindNat'] = $behindnat;
		}
		if ($alwaysdecodezip !== NULL) {
			$params['alwaysDecodeZip'] = $alwaysdecodezip;
		}
		if ($removeunsupportedencodings !== NULL) {
			$params['removeUnsupportedEncodings'] = $removeunsupportedencodings;
		}
		return $this->zap->request($this->zap->base . 'localProxies/action/addAdditionalProxy/', $params);
	}

	/**
	 * Removes the additional proxy with the specified address and port.
	 */
	public function removeAdditionalProxy($address, $port, $apikey='') {
		return $this->zap->request($this->zap->base . 'localProxies/action/removeAdditionalProxy/', array('address' => $address, 'port' => $port, 'apikey' => $apikey));
	}

}

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
class Acsrf {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Lists the names of all anti-CSRF tokens
	 */
	public function optionTokensNames($apikey='') {
		return $this->zap->request($this->zap->base . 'acsrf/view/optionTokensNames/', array('apikey' => $apikey))->{'TokensNames'};
	}

	/**
	 * Define if ZAP should detect CSRF tokens by searching for partial matches
	 */
	public function optionPartialMatchingEnabled($apikey='') {
		return $this->zap->request($this->zap->base . 'acsrf/view/optionPartialMatchingEnabled/', array('apikey' => $apikey))->{'PartialMatchingEnabled'};
	}

	/**
	 * Adds an anti-CSRF token with the given name, enabled by default
	 */
	public function addOptionToken($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'acsrf/action/addOptionToken/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Removes the anti-CSRF token with the given name
	 */
	public function removeOptionToken($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'acsrf/action/removeOptionToken/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Define if ZAP should detect CSRF tokens by searching for partial matches.
	 */
	public function setOptionPartialMatchingEnabled($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'acsrf/action/setOptionPartialMatchingEnabled/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * Generate a form for testing lack of anti-CSRF tokens - typically invoked via ZAP
	 */
	public function genForm($hrefid, $apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'acsrf/other/genForm/', array('hrefId' => $hrefid, 'apikey' => $apikey));
	}

}

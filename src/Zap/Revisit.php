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
class Revisit {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function revisitList($apikey='') {
		return $this->zap->request($this->zap->base . 'revisit/view/revisitList/', array('apikey' => $apikey))->{'revisitList'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function revisitSiteOn($site, $starttime, $endtime, $apikey='') {
		return $this->zap->request($this->zap->base . 'revisit/action/revisitSiteOn/', array('site' => $site, 'startTime' => $starttime, 'endTime' => $endtime, 'apikey' => $apikey));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function revisitSiteOff($site, $apikey='') {
		return $this->zap->request($this->zap->base . 'revisit/action/revisitSiteOff/', array('site' => $site, 'apikey' => $apikey));
	}

}

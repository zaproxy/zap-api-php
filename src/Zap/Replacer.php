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
class Replacer {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Returns full details of all of the rules
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function rules($apikey='') {
		return $this->zap->request($this->zap->base . 'replacer/view/rules/', array('apikey' => $apikey))->{'rules'};
	}

	/**
	 * Adds a replacer rule. For the parameters: desc is a user friendly description, enabled is true or false, matchType is one of [REQ_HEADER, REQ_HEADER_STR, REQ_BODY_STR, RESP_HEADER, RESP_HEADER_STR, RESP_BODY_STR], matchRegex should be true if the matchString should be treated as a regex otherwise false, matchString is the string that will be matched against, replacement is the replacement string, initiators may be blank (for all initiators) or a comma separated list of integers as defined in <a href="https://github.com/zaproxy/zaproxy/blob/main/zap/src/main/java/org/parosproxy/paros/network/HttpSender.java">HttpSender</a>  
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function addRule($description, $enabled, $matchtype, $matchregex, $matchstring, $replacement=NULL, $initiators=NULL, $apikey='') {
		$params = array('description' => $description, 'enabled' => $enabled, 'matchType' => $matchtype, 'matchRegex' => $matchregex, 'matchString' => $matchstring, 'apikey' => $apikey);
		if ($replacement !== NULL) {
			$params['replacement'] = $replacement;
		}
		if ($initiators !== NULL) {
			$params['initiators'] = $initiators;
		}
		return $this->zap->request($this->zap->base . 'replacer/action/addRule/', $params);
	}

	/**
	 * Removes the rule with the given description
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function removeRule($description, $apikey='') {
		return $this->zap->request($this->zap->base . 'replacer/action/removeRule/', array('description' => $description, 'apikey' => $apikey));
	}

	/**
	 * Enables or disables the rule with the given description based on the bool parameter  
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setEnabled($description, $bool, $apikey='') {
		return $this->zap->request($this->zap->base . 'replacer/action/setEnabled/', array('description' => $description, 'bool' => $bool, 'apikey' => $apikey));
	}

}

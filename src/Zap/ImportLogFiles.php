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
class ImportLogFiles {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function ImportZAPLogFromFile($filepath, $apikey='') {
		return $this->zap->request($this->zap->base . 'importLogFiles/action/ImportZAPLogFromFile/', array('FilePath' => $filepath, 'apikey' => $apikey));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function ImportModSecurityLogFromFile($filepath, $apikey='') {
		return $this->zap->request($this->zap->base . 'importLogFiles/action/ImportModSecurityLogFromFile/', array('FilePath' => $filepath, 'apikey' => $apikey));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function ImportZAPHttpRequestResponsePair($httprequest, $httpresponse, $apikey='') {
		return $this->zap->request($this->zap->base . 'importLogFiles/action/ImportZAPHttpRequestResponsePair/', array('HTTPRequest' => $httprequest, 'HTTPResponse' => $httpresponse, 'apikey' => $apikey));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function PostModSecurityAuditEvent($auditeventstring=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($auditeventstring !== NULL) {
			$params['AuditEventString'] = $auditeventstring;
		}
		return $this->zap->request($this->zap->base . 'importLogFiles/action/PostModSecurityAuditEvent/', $params);
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function OtherPostModSecurityAuditEvent($auditeventstring, $apikey='') {
		return $this->zap->requestOther($this->zap->base_other . 'importLogFiles/other/OtherPostModSecurityAuditEvent/', array('AuditEventString' => $auditeventstring, 'apikey' => $apikey));
	}

}

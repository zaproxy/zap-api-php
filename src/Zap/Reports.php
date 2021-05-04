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
class Reports {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * View available templates.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function templates($apikey='') {
		return $this->zap->request($this->zap->base . 'reports/view/templates/', array('apikey' => $apikey))->{'templates'};
	}

	/**
	 * View details of the specified template.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function templateDetails($template, $apikey='') {
		return $this->zap->request($this->zap->base . 'reports/view/templateDetails/', array('template' => $template, 'apikey' => $apikey))->{'templateDetails'};
	}

	/**
	 * Generate a report with the supplied parameters.
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function generate($title, $template, $theme=NULL, $description=NULL, $contexts=NULL, $sites=NULL, $sections=NULL, $includedconfidences=NULL, $includedrisks=NULL, $reportfilename=NULL, $reportfilenamepattern=NULL, $reportdir=NULL, $display=NULL, $apikey='') {
		$params = array('title' => $title, 'template' => $template, 'apikey' => $apikey);
		if ($theme !== NULL) {
			$params['theme'] = $theme;
		}
		if ($description !== NULL) {
			$params['description'] = $description;
		}
		if ($contexts !== NULL) {
			$params['contexts'] = $contexts;
		}
		if ($sites !== NULL) {
			$params['sites'] = $sites;
		}
		if ($sections !== NULL) {
			$params['sections'] = $sections;
		}
		if ($includedconfidences !== NULL) {
			$params['includedConfidences'] = $includedconfidences;
		}
		if ($includedrisks !== NULL) {
			$params['includedRisks'] = $includedrisks;
		}
		if ($reportfilename !== NULL) {
			$params['reportFileName'] = $reportfilename;
		}
		if ($reportfilenamepattern !== NULL) {
			$params['reportFileNamePattern'] = $reportfilenamepattern;
		}
		if ($reportdir !== NULL) {
			$params['reportDir'] = $reportdir;
		}
		if ($display !== NULL) {
			$params['display'] = $display;
		}
		return $this->zap->request($this->zap->base . 'reports/action/generate/', $params);
	}

}

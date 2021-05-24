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
class Selenium {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Returns the current path to ChromeDriver
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionChromeDriverPath($apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/view/optionChromeDriverPath/', array('apikey' => $apikey))->{'ChromeDriverPath'};
	}

	/**
	 * Returns the current path to Firefox binary
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionFirefoxBinaryPath($apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/view/optionFirefoxBinaryPath/', array('apikey' => $apikey))->{'FirefoxBinaryPath'};
	}

	/**
	 * Returns the current path to Firefox driver (geckodriver)
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionFirefoxDriverPath($apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/view/optionFirefoxDriverPath/', array('apikey' => $apikey))->{'FirefoxDriverPath'};
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionIeDriverPath($apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/view/optionIeDriverPath/', array('apikey' => $apikey))->{'IeDriverPath'};
	}

	/**
	 * Returns the current path to PhantomJS binary
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function optionPhantomJsBinaryPath($apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/view/optionPhantomJsBinaryPath/', array('apikey' => $apikey))->{'PhantomJsBinaryPath'};
	}

	/**
	 * Sets the current path to ChromeDriver
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionChromeDriverPath($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/action/setOptionChromeDriverPath/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Sets the current path to Firefox binary
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionFirefoxBinaryPath($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/action/setOptionFirefoxBinaryPath/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Sets the current path to Firefox driver (geckodriver)
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionFirefoxDriverPath($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/action/setOptionFirefoxDriverPath/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionIeDriverPath($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/action/setOptionIeDriverPath/', array('String' => $string, 'apikey' => $apikey));
	}

	/**
	 * Sets the current path to PhantomJS binary
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setOptionPhantomJsBinaryPath($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'selenium/action/setOptionPhantomJsBinaryPath/', array('String' => $string, 'apikey' => $apikey));
	}

}

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
class Selenium
{
    public function __construct($zap)
    {
        $this->zap = $zap;
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function optionBrowserExtensions($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionBrowserExtensions/', [
            'apikey' => $apikey,
        ])->{'BrowserExtensions'};
    }

    /**
     * Returns the current path to Chrome binary This component is optional and therefore the API will only work if it
     * is installed
     */
    public function optionChromeBinaryPath($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionChromeBinaryPath/', [
            'apikey' => $apikey,
        ])->{'ChromeBinaryPath'};
    }

    /**
     * Returns the current path to ChromeDriver This component is optional and therefore the API will only work if it is
     * installed
     */
    public function optionChromeDriverPath($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionChromeDriverPath/', [
            'apikey' => $apikey,
        ])->{'ChromeDriverPath'};
    }

    /**
     * Returns the current path to Firefox binary This component is optional and therefore the API will only work if it
     * is installed
     */
    public function optionFirefoxBinaryPath($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionFirefoxBinaryPath/', [
            'apikey' => $apikey,
        ])->{'FirefoxBinaryPath'};
    }

    /**
     * Returns the current path to Firefox driver (geckodriver) This component is optional and therefore the API will
     * only work if it is installed
     */
    public function optionFirefoxDriverPath($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionFirefoxDriverPath/', [
            'apikey' => $apikey,
        ])->{'FirefoxDriverPath'};
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function optionIeDriverPath($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionIeDriverPath/', [
            'apikey' => $apikey,
        ])->{'IeDriverPath'};
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function optionLastDirectory($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionLastDirectory/', [
            'apikey' => $apikey,
        ])->{'LastDirectory'};
    }

    /**
     * Returns the current path to PhantomJS binary This component is optional and therefore the API will only work if
     * it is installed
     */
    public function optionPhantomJsBinaryPath($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/view/optionPhantomJsBinaryPath/', [
            'apikey' => $apikey,
        ])->{'PhantomJsBinaryPath'};
    }

    /**
     * Sets the current path to Chrome binary This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setOptionChromeBinaryPath($string, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/action/setOptionChromeBinaryPath/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the current path to ChromeDriver This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setOptionChromeDriverPath($string, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/action/setOptionChromeDriverPath/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the current path to Firefox binary This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setOptionFirefoxBinaryPath($string, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/action/setOptionFirefoxBinaryPath/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the current path to Firefox driver (geckodriver) This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setOptionFirefoxDriverPath($string, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/action/setOptionFirefoxDriverPath/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function setOptionIeDriverPath($string, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/action/setOptionIeDriverPath/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function setOptionLastDirectory($string, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/action/setOptionLastDirectory/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the current path to PhantomJS binary This component is optional and therefore the API will only work if it
     * is installed
     */
    public function setOptionPhantomJsBinaryPath($string, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'selenium/action/setOptionPhantomJsBinaryPath/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }
}

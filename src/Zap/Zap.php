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
 * Client API implementation for integrating with ZAP.
 *
 * @property string $proxy
 * @property AccessControl $accessControl
 * @property Acsrf $acsrf
 * @property AjaxSpider $ajaxSpider
 * @property Alert $alert
 * @property AlertFilter $alertFilter
 * @property Ascan $ascan
 * @property Authentication $authentication
 * @property Authorization $authorization
 * @property Autoupdate $autoupdate
 * @property Brk $brk
 * @property Context $context
 * @property Core $core
 * @property ForcedUser $forcedUser
 * @property Graphql $graphql
 * @property HttpSessions $httpSessions
 * @property ImportLogFiles $importLogFiles
 * @property ImportUrls $importUrls
 * @property LocalProxies $localProxies
 * @property Openapi $openapi
 * @property Params $params
 * @property Pnh $pnh
 * @property Pscan $pscan
 * @property Replacer $replacer
 * @property Reports $reports
 * @property Reveal $reveal
 * @property Revisit $revisit
 * @property Ruleconfig $ruleconfig
 * @property Script $script
 * @property Search $search
 * @property Selenium $selenium
 * @property SessionManagement $sessionManagement
 * @property Soap $soap
 * @property Spider $spider
 * @property Stats $stats
 * @property Users $users
 * @property Wappalyzer $wappalyzer
 * @property Websocket $websocket
 */
class Zap
{

    // base JSON api url
    public $base = 'http://zap/JSON/';
    // base OTHER api url
    public $base_other = 'http://zap/OTHER/';

    private $ch;

    /**
     * Creates an instance of the ZAP API client.
     *
     * Note that all of the other classes in this directory are generated.
     * New ones will need to be manually added to this file.
     *
     * @param string $proxy e.g. '127.0.0.1:8080'
     * @param bool $useSSL use SSL to make API requests, requires $apiKey.
     * @param string $apikey required only if $useSSL is true.
     * @throws ZapError
     */
    public function __construct($proxy = '127.0.0.1:8080', $useSSL = false, $apikey = '')
    {
        $this->proxy = $proxy;

        $this->accessControl = new AccessControl($this);
        $this->acsrf = new Acsrf($this);
        $this->ajaxSpider = new AjaxSpider($this);
        $this->alert = new Alert($this);
        $this->alertFilter = new AlertFilter($this);
        $this->ascan = new Ascan($this);
        $this->authentication = new Authentication($this);
        $this->authorization = new Authorization($this);
        $this->autoupdate = new Autoupdate($this);
        $this->brk = new Brk($this);
        $this->context = new Context($this);
        $this->core = new Core($this);
        $this->forcedUser = new ForcedUser($this);
        $this->graphql = new Graphql($this);
        $this->httpSessions = new HttpSessions($this);
        $this->importLogFiles = new ImportLogFiles($this);
        $this->importUrls = new Importurls($this);
        $this->localProxies = new LocalProxies($this);
        $this->openapi = new Openapi($this);
        $this->params = new Params($this);
        $this->pnh = new Pnh($this);
        $this->pscan = new Pscan($this);
        $this->replacer = new Replacer($this);
        $this->reports = new Reports($this);
        $this->reveal = new Reveal($this);
        $this->revisit = new Revisit($this);
        $this->ruleconfig = new RuleConfig($this);
        $this->script = new Script($this);
        $this->search = new Search($this);
        $this->selenium = new Selenium($this);
        $this->sessionManagement = new SessionManagement($this);
        $this->soap = new Soap($this);
        $this->spider = new Spider($this);
        $this->stats = new Stats($this);
        $this->users = new Users($this);
        $this->wappalyzer = new Wappalyzer($this);
        $this->websocket = new Websocket($this);

        $this->initialiseCurl($useSSL, $apikey);

        if ($useSSL) {
            $this->base = 'https://zap/JSON/';
            $this->base_other = 'https://zap/OTHER/';
        }
    }

    public function __destruct()
    {
        curl_close($this->ch);
    }

    /**
     * Initialise cURL.
     * @throws ZapError
     */
    private function initialiseCurl($useSsl, $apikey)
    {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_PROXY, $this->proxy);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        if ($useSsl) {
            $certString = $this->core->rootcert($apikey);
            $certPath = $this->core->zapHomePath($apikey) . 'ZAPCACert.cer';
            $certFile = fopen($certPath, 'w');
            fwrite($certFile, $certString);
            fclose($certFile);
            curl_setopt($this->ch, CURLOPT_CAINFO, $certPath);
        }
        if (curl_errno($this->ch)) {
            throw new ZapError(curl_error($this->ch));
        }
    }

    /**
     * Overwrite a field.
     *
     * Mainly used for unit tests.
     *
     * @param string $name the name of overwritten field
     * @param mixed $obj the value of overwritten field
     */
    public function setFieldByName($name, $obj)
    {
        $this->{$name} = $obj;
    }

    /**
     * Opens a URL.
     *
     * @param string $url
     * @return bool|string
     */
    public function sendRequest($url)
    {
        curl_setopt($this->ch, CURLOPT_URL, $url);
        return curl_exec($this->ch);
    }

    /**
     * Checks URL status.
     *
     * @param string $url
     * @return mixed
     */
    public function statusCode($url)
    {
        curl_setopt($this->ch, CURLOPT_HEADER, true);
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_exec($this->ch);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        return curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
    }

    /**
     * Make a get request with query string parameters.
     *
     * @param string $url the url to GET at.
     * @param array $get the dictionary to turn into GET variables.
     */
    public function request($url, array $get = array())
    {
        $response = $this->sendRequest($url . '?' . http_build_query($get));
        $response = trim($response, '()');
        return json_decode($response);
    }

    /**
     * @param string $url the url to GET at.
     * @param array $getParams the dictionary to turn into GET variables.
     */
    public function requestOther($url, $getParams = array())
    {
        return $this->sendRequest($url . '?' . http_build_query($getParams));
    }
}

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
class Pnh
{
    public function __construct($zap)
    {
        $this->zap = $zap;
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function monitor($id, $message, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pnh/action/monitor/', [
            'id' => $id,
            'message' => $message,
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function oracle($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pnh/action/oracle/', [
            'id' => $id,
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function startMonitoring($url, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pnh/action/startMonitoring/', [
            'url' => $url,
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function stopMonitoring($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'pnh/action/stopMonitoring/', [
            'id' => $id,
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function pnh($apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'pnh/other/pnh/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function manifest($apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'pnh/other/manifest/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function service($apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'pnh/other/service/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * This component is optional and therefore the API will only work if it is installed
     */
    public function fx_pnhxpi($apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'pnh/other/fx_pnh.xpi/', [
            'apikey' => $apikey,
        ]);
    }
}

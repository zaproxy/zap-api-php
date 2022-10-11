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
class Graphql
{
    public function __construct($zap)
    {
        $this->zap = $zap;
    }

    /**
     * Returns how arguments are currently specified. This component is optional and therefore the API will only work if
     * it is installed
     */
    public function optionArgsType($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionArgsType/', [
            'apikey' => $apikey,
        ])->ArgsType ?? null;
    }

    /**
     * Returns whether or not lenient maximum query generation depth is enabled. This component is optional and
     * therefore the API will only work if it is installed
     */
    public function optionLenientMaxQueryDepthEnabled($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionLenientMaxQueryDepthEnabled/', [
            'apikey' => $apikey,
        ])->LenientMaxQueryDepthEnabled ?? null;
    }

    /**
     * Returns the current maximum additional query generation depth. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function optionMaxAdditionalQueryDepth($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionMaxAdditionalQueryDepth/', [
            'apikey' => $apikey,
        ])->MaxAdditionalQueryDepth ?? null;
    }

    /**
     * Returns the current maximum arguments generation depth. This component is optional and therefore the API will
     * only work if it is installed
     */
    public function optionMaxArgsDepth($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionMaxArgsDepth/', [
            'apikey' => $apikey,
        ])->MaxArgsDepth ?? null;
    }

    /**
     * Returns the current maximum query generation depth. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function optionMaxQueryDepth($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionMaxQueryDepth/', [
            'apikey' => $apikey,
        ])->MaxQueryDepth ?? null;
    }

    /**
     * Returns whether or not optional arguments are currently specified. This component is optional and therefore the
     * API will only work if it is installed
     */
    public function optionOptionalArgsEnabled($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionOptionalArgsEnabled/', [
            'apikey' => $apikey,
        ])->OptionalArgsEnabled ?? null;
    }

    /**
     * Returns the current level for which a single query is generated. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function optionQuerySplitType($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionQuerySplitType/', [
            'apikey' => $apikey,
        ])->QuerySplitType ?? null;
    }

    /**
     * Returns the current request method. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function optionRequestMethod($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/view/optionRequestMethod/', [
            'apikey' => $apikey,
        ])->RequestMethod ?? null;
    }

    /**
     * Imports a GraphQL Schema from a File. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function importFile($endurl, $file, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/importFile/', [
            'endurl' => $endurl,
            'file' => $file,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Imports a GraphQL Schema from a URL. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function importUrl($endurl, $url = null, string $apikey = '')
    {
        $params = [
            'endurl' => $endurl,
            'apikey' => $apikey,
        ];
        if ($url !== null) {
            $params['url'] = $url;
        }
        return $this->zap->request($this->zap->base . 'graphql/action/importUrl/', $params);
    }

    /**
     * Sets how arguments are specified. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setOptionArgsType($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionArgsType/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the level for which a single query is generated. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setOptionQuerySplitType($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionQuerySplitType/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the request method. This component is optional and therefore the API will only work if it is installed
     */
    public function setOptionRequestMethod($string, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionRequestMethod/', [
            'String' => $string,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not Maximum Query Depth is enforced leniently. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function setOptionLenientMaxQueryDepthEnabled($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionLenientMaxQueryDepthEnabled/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum additional query generation depth (used if enforced leniently). This component is optional and
     * therefore the API will only work if it is installed
     */
    public function setOptionMaxAdditionalQueryDepth($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionMaxAdditionalQueryDepth/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum arguments generation depth. This component is optional and therefore the API will only work if
     * it is installed
     */
    public function setOptionMaxArgsDepth($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionMaxArgsDepth/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the maximum query generation depth. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setOptionMaxQueryDepth($integer, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionMaxQueryDepth/', [
            'Integer' => $integer,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not Optional Arguments should be specified. This component is optional and therefore the API will
     * only work if it is installed
     */
    public function setOptionOptionalArgsEnabled($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'graphql/action/setOptionOptionalArgsEnabled/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }
}

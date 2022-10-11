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
class Reports
{
    public function __construct($zap)
    {
        $this->zap = $zap;
    }

    /**
     * View available templates. This component is optional and therefore the API will only work if it is installed
     */
    public function templates($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'reports/view/templates/', [
            'apikey' => $apikey,
        ])->templates ?? null;
    }

    /**
     * View details of the specified template. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function templateDetails($template, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'reports/view/templateDetails/', [
            'template' => $template,
            'apikey' => $apikey,
        ])->templateDetails ?? null;
    }

    /**
     * Generate a report with the supplied parameters. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function generate(
        $title,
        $template,
        $theme = null,
        $description = null,
        $contexts = null,
        $sites = null,
        $sections = null,
        $includedconfidences = null,
        $includedrisks = null,
        $reportfilename = null,
        $reportfilenamepattern = null,
        $reportdir = null,
        $display = null,
        $apikey = ''
    ) {
        $params = [
            'title' => $title,
            'template' => $template,
            'apikey' => $apikey,
        ];
        if ($theme !== null) {
            $params['theme'] = $theme;
        }
        if ($description !== null) {
            $params['description'] = $description;
        }
        if ($contexts !== null) {
            $params['contexts'] = $contexts;
        }
        if ($sites !== null) {
            $params['sites'] = $sites;
        }
        if ($sections !== null) {
            $params['sections'] = $sections;
        }
        if ($includedconfidences !== null) {
            $params['includedConfidences'] = $includedconfidences;
        }
        if ($includedrisks !== null) {
            $params['includedRisks'] = $includedrisks;
        }
        if ($reportfilename !== null) {
            $params['reportFileName'] = $reportfilename;
        }
        if ($reportfilenamepattern !== null) {
            $params['reportFileNamePattern'] = $reportfilenamepattern;
        }
        if ($reportdir !== null) {
            $params['reportDir'] = $reportdir;
        }
        if ($display !== null) {
            $params['display'] = $display;
        }
        return $this->zap->request($this->zap->base . 'reports/action/generate/', $params);
    }
}

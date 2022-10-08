<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2022 the ZAP development team
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
 */
class Stats
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Statistics.
     *
     * @param null|mixed $keyprefix
     */
    public function stats($keyprefix = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $keyprefix) {
            $params['keyPrefix'] = $keyprefix;
        }

        return $this->zap->request(
            $this->zap->base.'stats/view/stats/',
            $params
        )['stats'] ?? null;
    }

    /**
     * Gets all of the site based statistics, optionally filtered by a key prefix.
     *
     * @param null|mixed $keyprefix
     */
    public function allSitesStats($keyprefix = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $keyprefix) {
            $params['keyPrefix'] = $keyprefix;
        }

        return $this->zap->request(
            $this->zap->base.'stats/view/allSitesStats/',
            $params
        )['allSitesStats'] ?? null;
    }

    /**
     * Gets all of the global statistics, optionally filtered by a key prefix.
     *
     * @param mixed      $site
     * @param null|mixed $keyprefix
     */
    public function siteStats(
        $site,
        $keyprefix = null,
        string $apikey = ''
    ) {
        $params = [
            'site' => $site, 'apikey' => $apikey,
        ];
        if (null !== $keyprefix) {
            $params['keyPrefix'] = $keyprefix;
        }

        return $this->zap->request(
            $this->zap->base.'stats/view/siteStats/',
            $params
        )['siteStats'] ?? null;
    }

    /**
     * Gets the Statsd service hostname.
     */
    public function optionStatsdHost(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/view/optionStatsdHost/',
            [
                'apikey' => $apikey,
            ]
        )['StatsdHost'] ?? null;
    }

    /**
     * Gets the Statsd service port.
     */
    public function optionStatsdPort(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/view/optionStatsdPort/',
            [
                'apikey' => $apikey,
            ]
        )['StatsdPort'] ?? null;
    }

    /**
     * Gets the prefix to be applied to all stats sent to the configured Statsd service.
     */
    public function optionStatsdPrefix(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/view/optionStatsdPrefix/',
            [
                'apikey' => $apikey,
            ]
        )['StatsdPrefix'] ?? null;
    }

    /**
     * Returns 'true' if in memory statistics are enabled, otherwise returns 'false'.
     */
    public function optionInMemoryEnabled(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/view/optionInMemoryEnabled/',
            [
                'apikey' => $apikey,
            ]
        )['InMemoryEnabled'] ?? null;
    }

    /**
     * Returns 'true' if a Statsd server has been correctly configured, otherwise returns 'false'.
     */
    public function optionStatsdEnabled(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/view/optionStatsdEnabled/',
            [
                'apikey' => $apikey,
            ]
        )['StatsdEnabled'] ?? null;
    }

    /**
     * Clears all of the statistics.
     *
     * @param null|mixed $keyprefix
     */
    public function clearStats($keyprefix = null, string $apikey = '')
    {
        $params = [
            'apikey' => $apikey,
        ];
        if (null !== $keyprefix) {
            $params['keyPrefix'] = $keyprefix;
        }

        return $this->zap->request(
            $this->zap->base.'stats/action/clearStats/',
            $params
        );
    }

    /**
     * Sets the Statsd service hostname, supply an empty string to stop using a Statsd service.
     *
     * @param mixed $string
     */
    public function setOptionStatsdHost($string, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/action/setOptionStatsdHost/',
            [
                'String' => $string, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets the prefix to be applied to all stats sent to the configured Statsd service.
     *
     * @param mixed $string
     */
    public function setOptionStatsdPrefix($string, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/action/setOptionStatsdPrefix/',
            [
                'String' => $string, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets whether in memory statistics are enabled.
     *
     * @param mixed $boolean
     */
    public function setOptionInMemoryEnabled($boolean, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/action/setOptionInMemoryEnabled/',
            [
                'Boolean' => $boolean, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets the Statsd service port.
     *
     * @param mixed $integer
     */
    public function setOptionStatsdPort($integer, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'stats/action/setOptionStatsdPort/',
            [
                'Integer' => $integer, 'apikey' => $apikey,
            ]
        );
    }
}

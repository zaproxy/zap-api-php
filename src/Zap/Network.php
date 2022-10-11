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
class Network
{
    public function __construct($zap)
    {
        $this->zap = $zap;
    }

    /**
     * Gets the Root CA certificate validity, in days. Used when generating a new Root CA certificate. This component is
     * optional and therefore the API will only work if it is installed
     */
    public function getRootCaCertValidity($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getRootCaCertValidity/', [
            'apikey' => $apikey,
        ])->{'getRootCaCertValidity'};
    }

    /**
     * Gets the server certificate validity, in days. Used when generating server certificates. This component is
     * optional and therefore the API will only work if it is installed
     */
    public function getServerCertValidity($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getServerCertValidity/', [
            'apikey' => $apikey,
        ])->{'getServerCertValidity'};
    }

    /**
     * Gets the aliases used to identify the local servers/proxies. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function getAliases($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getAliases/', [
            'apikey' => $apikey,
        ])->{'getAliases'};
    }

    /**
     * Gets the local servers/proxies. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function getLocalServers($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getLocalServers/', [
            'apikey' => $apikey,
        ])->{'getLocalServers'};
    }

    /**
     * Gets the authorities that will pass-through the local proxies. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function getPassThroughs($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getPassThroughs/', [
            'apikey' => $apikey,
        ])->{'getPassThroughs'};
    }

    /**
     * Gets the connection timeout, in seconds. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function getConnectionTimeout($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getConnectionTimeout/', [
            'apikey' => $apikey,
        ])->{'getConnectionTimeout'};
    }

    /**
     * Gets the default user-agent. This component is optional and therefore the API will only work if it is installed
     */
    public function getDefaultUserAgent($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getDefaultUserAgent/', [
            'apikey' => $apikey,
        ])->{'getDefaultUserAgent'};
    }

    /**
     * Gets the TTL (in seconds) of successful DNS queries. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function getDnsTtlSuccessfulQueries($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getDnsTtlSuccessfulQueries/', [
            'apikey' => $apikey,
        ])->{'getDnsTtlSuccessfulQueries'};
    }

    /**
     * Gets the HTTP proxy. This component is optional and therefore the API will only work if it is installed
     */
    public function getHttpProxy($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getHttpProxy/', [
            'apikey' => $apikey,
        ])->{'getHttpProxy'};
    }

    /**
     * Gets the HTTP proxy exclusions. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function getHttpProxyExclusions($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getHttpProxyExclusions/', [
            'apikey' => $apikey,
        ])->{'getHttpProxyExclusions'};
    }

    /**
     * Gets the SOCKS proxy. This component is optional and therefore the API will only work if it is installed
     */
    public function getSocksProxy($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/getSocksProxy/', [
            'apikey' => $apikey,
        ])->{'getSocksProxy'};
    }

    /**
     * Tells whether or not the HTTP proxy authentication is enabled. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function isHttpProxyAuthEnabled($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/isHttpProxyAuthEnabled/', [
            'apikey' => $apikey,
        ])->{'isHttpProxyAuthEnabled'};
    }

    /**
     * Tells whether or not the HTTP proxy is enabled. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function isHttpProxyEnabled($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/isHttpProxyEnabled/', [
            'apikey' => $apikey,
        ])->{'isHttpProxyEnabled'};
    }

    /**
     * Tells whether or not the SOCKS proxy is enabled. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function isSocksProxyEnabled($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/isSocksProxyEnabled/', [
            'apikey' => $apikey,
        ])->{'isSocksProxyEnabled'};
    }

    /**
     * Tells whether or not to use global HTTP state. This component is optional and therefore the API will only work if
     * it is installed
     */
    public function isUseGlobalHttpState($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/view/isUseGlobalHttpState/', [
            'apikey' => $apikey,
        ])->{'isUseGlobalHttpState'};
    }

    /**
     * Generates a new Root CA certificate, used to issue server certificates. This component is optional and therefore
     * the API will only work if it is installed
     */
    public function generateRootCaCert($apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/generateRootCaCert/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Imports a Root CA certificate to be used to issue server certificates. This component is optional and therefore
     * the API will only work if it is installed
     */
    public function importRootCaCert($filepath, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/importRootCaCert/', [
            'filePath' => $filepath,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the Root CA certificate validity. Used when generating a new Root CA certificate. This component is optional
     * and therefore the API will only work if it is installed
     */
    public function setRootCaCertValidity($validity, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setRootCaCertValidity/', [
            'validity' => $validity,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the server certificate validity. Used when generating server certificates. This component is optional and
     * therefore the API will only work if it is installed
     */
    public function setServerCertValidity($validity, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setServerCertValidity/', [
            'validity' => $validity,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds an alias for the local servers/proxies. This component is optional and therefore the API will only work if
     * it is installed
     */
    public function addAlias($name, $enabled = null, $apikey = '')
    {
        $params = [
            'name' => $name,
            'apikey' => $apikey,
        ];
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        return $this->zap->request($this->zap->base . 'network/action/addAlias/', $params);
    }

    /**
     * Adds a local server/proxy. This component is optional and therefore the API will only work if it is installed
     */
    public function addLocalServer(
        $address,
        $port,
        $api = null,
        $proxy = null,
        $behindnat = null,
        $decoderesponse = null,
        $removeacceptencoding = null,
        $apikey = ''
    ) {
        $params = [
            'address' => $address,
            'port' => $port,
            'apikey' => $apikey,
        ];
        if ($api !== null) {
            $params['api'] = $api;
        }
        if ($proxy !== null) {
            $params['proxy'] = $proxy;
        }
        if ($behindnat !== null) {
            $params['behindNat'] = $behindnat;
        }
        if ($decoderesponse !== null) {
            $params['decodeResponse'] = $decoderesponse;
        }
        if ($removeacceptencoding !== null) {
            $params['removeAcceptEncoding'] = $removeacceptencoding;
        }
        return $this->zap->request($this->zap->base . 'network/action/addLocalServer/', $params);
    }

    /**
     * Adds an authority to pass-through the local proxies. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function addPassThrough($authority, $enabled = null, $apikey = '')
    {
        $params = [
            'authority' => $authority,
            'apikey' => $apikey,
        ];
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        return $this->zap->request($this->zap->base . 'network/action/addPassThrough/', $params);
    }

    /**
     * Removes an alias. This component is optional and therefore the API will only work if it is installed
     */
    public function removeAlias($name, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/removeAlias/', [
            'name' => $name,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Removes a local server/proxy. This component is optional and therefore the API will only work if it is installed
     */
    public function removeLocalServer($address, $port, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/removeLocalServer/', [
            'address' => $address,
            'port' => $port,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Removes a pass-through. This component is optional and therefore the API will only work if it is installed
     */
    public function removePassThrough($authority, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/removePassThrough/', [
            'authority' => $authority,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not an alias is enabled. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setAliasEnabled($name, $enabled, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setAliasEnabled/', [
            'name' => $name,
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not a pass-through is enabled. This component is optional and therefore the API will only work if
     * it is installed
     */
    public function setPassThroughEnabled($authority, $enabled, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setPassThroughEnabled/', [
            'authority' => $authority,
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the timeout, for reads and connects. This component is optional and therefore the API will only work if it
     * is installed
     */
    public function setConnectionTimeout($timeout, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setConnectionTimeout/', [
            'timeout' => $timeout,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the default user-agent. This component is optional and therefore the API will only work if it is installed
     */
    public function setDefaultUserAgent($useragent, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setDefaultUserAgent/', [
            'userAgent' => $useragent,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the TTL of successful DNS queries. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setDnsTtlSuccessfulQueries($ttl, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setDnsTtlSuccessfulQueries/', [
            'ttl' => $ttl,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds a host to be excluded from the HTTP proxy. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function addHttpProxyExclusion($host, $enabled = null, $apikey = '')
    {
        $params = [
            'host' => $host,
            'apikey' => $apikey,
        ];
        if ($enabled !== null) {
            $params['enabled'] = $enabled;
        }
        return $this->zap->request($this->zap->base . 'network/action/addHttpProxyExclusion/', $params);
    }

    /**
     * Removes a HTTP proxy exclusion. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function removeHttpProxyExclusion($host, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/removeHttpProxyExclusion/', [
            'host' => $host,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the HTTP proxy configuration. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setHttpProxy($host, $port, $realm = null, $username = null, $password = null, $apikey = '')
    {
        $params = [
            'host' => $host,
            'port' => $port,
            'apikey' => $apikey,
        ];
        if ($realm !== null) {
            $params['realm'] = $realm;
        }
        if ($username !== null) {
            $params['username'] = $username;
        }
        if ($password !== null) {
            $params['password'] = $password;
        }
        return $this->zap->request($this->zap->base . 'network/action/setHttpProxy/', $params);
    }

    /**
     * Sets whether or not the HTTP proxy authentication is enabled. This component is optional and therefore the API
     * will only work if it is installed
     */
    public function setHttpProxyAuthEnabled($enabled, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setHttpProxyAuthEnabled/', [
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not the HTTP proxy is enabled. This component is optional and therefore the API will only work if
     * it is installed
     */
    public function setHttpProxyEnabled($enabled, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setHttpProxyEnabled/', [
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not a HTTP proxy exclusion is enabled. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function setHttpProxyExclusionEnabled($host, $enabled, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setHttpProxyExclusionEnabled/', [
            'host' => $host,
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the SOCKS proxy configuration. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setSocksProxy(
        $host,
        $port,
        $version = null,
        $usedns = null,
        $username = null,
        $password = null,
        $apikey = ''
    ) {
        $params = [
            'host' => $host,
            'port' => $port,
            'apikey' => $apikey,
        ];
        if ($version !== null) {
            $params['version'] = $version;
        }
        if ($usedns !== null) {
            $params['useDns'] = $usedns;
        }
        if ($username !== null) {
            $params['username'] = $username;
        }
        if ($password !== null) {
            $params['password'] = $password;
        }
        return $this->zap->request($this->zap->base . 'network/action/setSocksProxy/', $params);
    }

    /**
     * Sets whether or not the SOCKS proxy is enabled. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function setSocksProxyEnabled($enabled, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setSocksProxyEnabled/', [
            'enabled' => $enabled,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets whether or not to use the global HTTP state. This component is optional and therefore the API will only work
     * if it is installed
     */
    public function setUseGlobalHttpState($use, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setUseGlobalHttpState/', [
            'use' => $use,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Adds a client certificate contained in a PKCS#12 file, the certificate is automatically set as active and used.
     * This component is optional and therefore the API will only work if it is installed
     */
    public function addPkcs12ClientCertificate($filepath, $password, $index = null, $apikey = '')
    {
        $params = [
            'filePath' => $filepath,
            'password' => $password,
            'apikey' => $apikey,
        ];
        if ($index !== null) {
            $params['index'] = $index;
        }
        return $this->zap->request($this->zap->base . 'network/action/addPkcs12ClientCertificate/', $params);
    }

    /**
     * Sets whether or not to use the active client certificate. This component is optional and therefore the API will
     * only work if it is installed
     */
    public function setUseClientCertificate($use, $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'network/action/setUseClientCertificate/', [
            'use' => $use,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Provides a PAC file, proxying through the main proxy. This component is optional and therefore the API will only
     * work if it is installed
     */
    public function proxypac($apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'network/other/proxy.pac/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Sets the HTTP proxy configuration. This component is optional and therefore the API will only work if it is
     * installed
     */
    public function setProxy($proxy, $apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'network/other/setProxy/', [
            'proxy' => $proxy,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Gets the Root CA certificate used to issue server certificates. Suitable to import into client applications (e.g.
     * browsers). This component is optional and therefore the API will only work if it is installed
     */
    public function rootCaCert($apikey = '')
    {
        return $this->zap->requestOther($this->zap->base_other . 'network/other/rootCaCert/', [
            'apikey' => $apikey,
        ]);
    }
}

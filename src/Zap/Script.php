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
class Script
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Lists the script engines available.
     */
    public function listEngines(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/listEngines/',
            [
                'apikey' => $apikey,
            ]
        )['listEngines'] ?? null;
    }

    /**
     * Lists the script types available.
     */
    public function listTypes(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/listTypes/',
            [
                'apikey' => $apikey,
            ]
        )['listTypes'] ?? null;
    }

    /**
     * Lists the scripts available, with its engine, name, description, type and error state.
     */
    public function listScripts(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/listScripts/',
            [
                'apikey' => $apikey,
            ]
        )['listScripts'] ?? null;
    }

    /**
     * Gets the value of the global variable with the given key. Returns an API error (DOES_NOT_EXIST) if
     * no value was previously set.
     *
     * @param mixed $varkey
     */
    public function globalVar($varkey, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/globalVar/',
            [
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        )['globalVar'] ?? null;
    }

    /**
     * Gets the value (string representation) of a global custom variable. Returns an API error
     * (DOES_NOT_EXIST) if no value was previously set.
     *
     * @param mixed $varkey
     */
    public function globalCustomVar($varkey, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/globalCustomVar/',
            [
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        )['globalCustomVar'] ?? null;
    }

    /**
     * Gets all the global variables (key/value pairs).
     */
    public function globalVars(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/globalVars/',
            [
                'apikey' => $apikey,
            ]
        )['globalVars'] ?? null;
    }

    /**
     * Gets all the global custom variables (key/value pairs, the value is the string representation).
     */
    public function globalCustomVars(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/globalCustomVars/',
            [
                'apikey' => $apikey,
            ]
        )['globalCustomVars'] ?? null;
    }

    /**
     * Gets the value of the variable with the given key for the given script. Returns an API error
     * (DOES_NOT_EXIST) if no script with the given name exists or if no value was previously set.
     *
     * @param mixed $scriptname
     * @param mixed $varkey
     */
    public function scriptVar(
        $scriptname,
        $varkey,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'script/view/scriptVar/',
            [
                'scriptName' => $scriptname,
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        )['scriptVar'] ?? null;
    }

    /**
     * Gets the value (string representation) of a custom variable. Returns an API error (DOES_NOT_EXIST)
     * if no script with the given name exists or if no value was previously set.
     *
     * @param mixed $scriptname
     * @param mixed $varkey
     */
    public function scriptCustomVar(
        $scriptname,
        $varkey,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'script/view/scriptCustomVar/',
            [
                'scriptName' => $scriptname,
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        )['scriptCustomVar'] ?? null;
    }

    /**
     * Gets all the variables (key/value pairs) of the given script. Returns an API error (DOES_NOT_EXIST)
     * if no script with the given name exists.
     *
     * @param mixed $scriptname
     */
    public function scriptVars($scriptname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/scriptVars/',
            [
                'scriptName' => $scriptname, 'apikey' => $apikey,
            ]
        )['scriptVars'] ?? null;
    }

    /**
     * Gets all the custom variables (key/value pairs, the value is the string representation) of a
     * script. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists.
     *
     * @param mixed $scriptname
     */
    public function scriptCustomVars($scriptname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/view/scriptCustomVars/',
            [
                'scriptName' => $scriptname, 'apikey' => $apikey,
            ]
        )['scriptCustomVars'] ?? null;
    }

    /**
     * Enables the script with the given name.
     *
     * @param mixed $scriptname
     */
    public function enable($scriptname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/enable/',
            [
                'scriptName' => $scriptname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Disables the script with the given name.
     *
     * @param mixed $scriptname
     */
    public function disable($scriptname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/disable/',
            [
                'scriptName' => $scriptname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Loads a script into ZAP from the given local file, with the given name, type and engine, optionally
     * with a description, and a charset name to read the script (the charset name is required if the
     * script is not in UTF-8, for example, in ISO-8859-1).
     *
     * @param mixed      $scriptname
     * @param mixed      $scripttype
     * @param mixed      $scriptengine
     * @param mixed      $filename
     * @param null|mixed $scriptdescription
     * @param null|mixed $charset
     */
    public function load(
        $scriptname,
        $scripttype,
        $scriptengine,
        $filename,
        $scriptdescription = null,
        $charset = null,
        string $apikey = ''
    ) {
        $params = [
            'scriptName' => $scriptname,
            'scriptType' => $scripttype,
            'scriptEngine' => $scriptengine,
            'fileName' => $filename, 'apikey' => $apikey,
        ];
        if (null !== $scriptdescription) {
            $params['scriptDescription'] = $scriptdescription;
        }
        if (null !== $charset) {
            $params['charset'] = $charset;
        }

        return $this->zap->request(
            $this->zap->base.'script/action/load/',
            $params
        );
    }

    /**
     * Removes the script with the given name.
     *
     * @param mixed $scriptname
     */
    public function remove($scriptname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/remove/',
            [
                'scriptName' => $scriptname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Runs the stand alone script with the given name.
     *
     * @param mixed $scriptname
     */
    public function runStandAloneScript($scriptname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/runStandAloneScript/',
            [
                'scriptName' => $scriptname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Clears the global variable with the given key.
     *
     * @param mixed $varkey
     */
    public function clearGlobalVar($varkey, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/clearGlobalVar/',
            [
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Clears a global custom variable.
     *
     * @param mixed $varkey
     */
    public function clearGlobalCustomVar($varkey, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/clearGlobalCustomVar/',
            [
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Clears the global variables.
     */
    public function clearGlobalVars(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/clearGlobalVars/',
            [
                'apikey' => $apikey,
            ]
        );
    }

    /**
     * Clears the variable with the given key of the given script. Returns an API error (DOES_NOT_EXIST)
     * if no script with the given name exists.
     *
     * @param mixed $scriptname
     * @param mixed $varkey
     */
    public function clearScriptVar(
        $scriptname,
        $varkey,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'script/action/clearScriptVar/',
            [
                'scriptName' => $scriptname,
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Clears a script custom variable.
     *
     * @param mixed $scriptname
     * @param mixed $varkey
     */
    public function clearScriptCustomVar(
        $scriptname,
        $varkey,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'script/action/clearScriptCustomVar/',
            [
                'scriptName' => $scriptname,
                'varKey' => $varkey, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Clears the variables of the given script. Returns an API error (DOES_NOT_EXIST) if no script with
     * the given name exists.
     *
     * @param mixed $scriptname
     */
    public function clearScriptVars($scriptname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'script/action/clearScriptVars/',
            [
                'scriptName' => $scriptname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets the value of the variable with the given key of the given script. Returns an API error
     * (DOES_NOT_EXIST) if no script with the given name exists.
     *
     * @param mixed      $scriptname
     * @param mixed      $varkey
     * @param null|mixed $varvalue
     */
    public function setScriptVar(
        $scriptname,
        $varkey,
        $varvalue = null,
        string $apikey = ''
    ) {
        $params = [
            'scriptName' => $scriptname,
            'varKey' => $varkey, 'apikey' => $apikey,
        ];
        if (null !== $varvalue) {
            $params['varValue'] = $varvalue;
        }

        return $this->zap->request(
            $this->zap->base.'script/action/setScriptVar/',
            $params
        );
    }

    /**
     * Sets the value of the global variable with the given key.
     *
     * @param mixed      $varkey
     * @param null|mixed $varvalue
     */
    public function setGlobalVar(
        $varkey,
        $varvalue = null,
        string $apikey = ''
    ) {
        $params = [
            'varKey' => $varkey, 'apikey' => $apikey,
        ];
        if (null !== $varvalue) {
            $params['varValue'] = $varvalue;
        }

        return $this->zap->request(
            $this->zap->base.'script/action/setGlobalVar/',
            $params
        );
    }
}

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
class Script {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Lists the script engines available
	 */
	public function listEngines($apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/listEngines/', array('apikey' => $apikey))->{'listEngines'};
	}

	/**
	 * Lists the script types available.
	 */
	public function listTypes($apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/listTypes/', array('apikey' => $apikey))->{'listTypes'};
	}

	/**
	 * Lists the scripts available, with its engine, name, description, type and error state.
	 */
	public function listScripts($apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/listScripts/', array('apikey' => $apikey))->{'listScripts'};
	}

	/**
	 * Gets the value of the global variable with the given key. Returns an API error (DOES_NOT_EXIST) if no value was previously set.
	 */
	public function globalVar($varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/globalVar/', array('varKey' => $varkey, 'apikey' => $apikey))->{'globalVar'};
	}

	/**
	 * Gets the value (string representation) of a global custom variable. Returns an API error (DOES_NOT_EXIST) if no value was previously set.
	 */
	public function globalCustomVar($varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/globalCustomVar/', array('varKey' => $varkey, 'apikey' => $apikey))->{'globalCustomVar'};
	}

	/**
	 * Gets all the global variables (key/value pairs).
	 */
	public function globalVars($apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/globalVars/', array('apikey' => $apikey))->{'globalVars'};
	}

	/**
	 * Gets all the global custom variables (key/value pairs, the value is the string representation).
	 */
	public function globalCustomVars($apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/globalCustomVars/', array('apikey' => $apikey))->{'globalCustomVars'};
	}

	/**
	 * Gets the value of the variable with the given key for the given script. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists or if no value was previously set.
	 */
	public function scriptVar($scriptname, $varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/scriptVar/', array('scriptName' => $scriptname, 'varKey' => $varkey, 'apikey' => $apikey))->{'scriptVar'};
	}

	/**
	 * Gets the value (string representation) of a custom variable. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists or if no value was previously set.
	 */
	public function scriptCustomVar($scriptname, $varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/scriptCustomVar/', array('scriptName' => $scriptname, 'varKey' => $varkey, 'apikey' => $apikey))->{'scriptCustomVar'};
	}

	/**
	 * Gets all the variables (key/value pairs) of the given script. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists.
	 */
	public function scriptVars($scriptname, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/scriptVars/', array('scriptName' => $scriptname, 'apikey' => $apikey))->{'scriptVars'};
	}

	/**
	 * Gets all the custom variables (key/value pairs, the value is the string representation) of a script. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists.
	 */
	public function scriptCustomVars($scriptname, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/view/scriptCustomVars/', array('scriptName' => $scriptname, 'apikey' => $apikey))->{'scriptCustomVars'};
	}

	/**
	 * Enables the script with the given name
	 */
	public function enable($scriptname, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/enable/', array('scriptName' => $scriptname, 'apikey' => $apikey));
	}

	/**
	 * Disables the script with the given name
	 */
	public function disable($scriptname, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/disable/', array('scriptName' => $scriptname, 'apikey' => $apikey));
	}

	/**
	 * Loads a script into ZAP from the given local file, with the given name, type and engine, optionally with a description, and a charset name to read the script (the charset name is required if the script is not in UTF-8, for example, in ISO-8859-1).
	 */
	public function load($scriptname, $scripttype, $scriptengine, $filename, $scriptdescription=NULL, $charset=NULL, $apikey='') {
		$params = array('scriptName' => $scriptname, 'scriptType' => $scripttype, 'scriptEngine' => $scriptengine, 'fileName' => $filename, 'apikey' => $apikey);
		if ($scriptdescription !== NULL) {
			$params['scriptDescription'] = $scriptdescription;
		}
		if ($charset !== NULL) {
			$params['charset'] = $charset;
		}
		return $this->zap->request($this->zap->base . 'script/action/load/', $params);
	}

	/**
	 * Removes the script with the given name
	 */
	public function remove($scriptname, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/remove/', array('scriptName' => $scriptname, 'apikey' => $apikey));
	}

	/**
	 * Runs the stand alone script with the given name
	 */
	public function runStandAloneScript($scriptname, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/runStandAloneScript/', array('scriptName' => $scriptname, 'apikey' => $apikey));
	}

	/**
	 * Clears the global variable with the given key.
	 */
	public function clearGlobalVar($varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/clearGlobalVar/', array('varKey' => $varkey, 'apikey' => $apikey));
	}

	/**
	 * Clears a global custom variable.
	 */
	public function clearGlobalCustomVar($varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/clearGlobalCustomVar/', array('varKey' => $varkey, 'apikey' => $apikey));
	}

	/**
	 * Clears the global variables.
	 */
	public function clearGlobalVars($apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/clearGlobalVars/', array('apikey' => $apikey));
	}

	/**
	 * Clears the variable with the given key of the given script. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists.
	 */
	public function clearScriptVar($scriptname, $varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/clearScriptVar/', array('scriptName' => $scriptname, 'varKey' => $varkey, 'apikey' => $apikey));
	}

	/**
	 * Clears a script custom variable.
	 */
	public function clearScriptCustomVar($scriptname, $varkey, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/clearScriptCustomVar/', array('scriptName' => $scriptname, 'varKey' => $varkey, 'apikey' => $apikey));
	}

	/**
	 * Clears the variables of the given script. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists.
	 */
	public function clearScriptVars($scriptname, $apikey='') {
		return $this->zap->request($this->zap->base . 'script/action/clearScriptVars/', array('scriptName' => $scriptname, 'apikey' => $apikey));
	}

	/**
	 * Sets the value of the variable with the given key of the given script. Returns an API error (DOES_NOT_EXIST) if no script with the given name exists.
	 */
	public function setScriptVar($scriptname, $varkey, $varvalue=NULL, $apikey='') {
		$params = array('scriptName' => $scriptname, 'varKey' => $varkey, 'apikey' => $apikey);
		if ($varvalue !== NULL) {
			$params['varValue'] = $varvalue;
		}
		return $this->zap->request($this->zap->base . 'script/action/setScriptVar/', $params);
	}

	/**
	 * Sets the value of the global variable with the given key.
	 */
	public function setGlobalVar($varkey, $varvalue=NULL, $apikey='') {
		$params = array('varKey' => $varkey, 'apikey' => $apikey);
		if ($varvalue !== NULL) {
			$params['varValue'] = $varvalue;
		}
		return $this->zap->request($this->zap->base . 'script/action/setGlobalVar/', $params);
	}

}

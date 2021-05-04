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
class Context {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * List context names of current session
	 */
	public function contextList($apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/contextList/', array('apikey' => $apikey))->{'contextList'};
	}

	/**
	 * List excluded regexs for context
	 */
	public function excludeRegexs($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/excludeRegexs/', array('contextName' => $contextname, 'apikey' => $apikey))->{'excludeRegexs'};
	}

	/**
	 * List included regexs for context
	 */
	public function includeRegexs($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/includeRegexs/', array('contextName' => $contextname, 'apikey' => $apikey))->{'includeRegexs'};
	}

	/**
	 * List the information about the named context
	 */
	public function context($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/context/', array('contextName' => $contextname, 'apikey' => $apikey))->{'context'};
	}

	/**
	 * Lists the names of all built in technologies
	 */
	public function technologyList($apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/technologyList/', array('apikey' => $apikey))->{'technologyList'};
	}

	/**
	 * Lists the names of all technologies included in a context
	 */
	public function includedTechnologyList($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/includedTechnologyList/', array('contextName' => $contextname, 'apikey' => $apikey))->{'includedTechnologyList'};
	}

	/**
	 * Lists the names of all technologies excluded from a context
	 */
	public function excludedTechnologyList($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/excludedTechnologyList/', array('contextName' => $contextname, 'apikey' => $apikey))->{'excludedTechnologyList'};
	}

	/**
	 * Lists the URLs accessed through/by ZAP, that belong to the context with the given name.
	 */
	public function urls($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/view/urls/', array('contextName' => $contextname, 'apikey' => $apikey))->{'urls'};
	}

	/**
	 * Add exclude regex to context
	 */
	public function excludeFromContext($contextname, $regex, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/excludeFromContext/', array('contextName' => $contextname, 'regex' => $regex, 'apikey' => $apikey));
	}

	/**
	 * Add include regex to context
	 */
	public function includeInContext($contextname, $regex, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/includeInContext/', array('contextName' => $contextname, 'regex' => $regex, 'apikey' => $apikey));
	}

	/**
	 * Set the regexs to include and exclude for a context, both supplied as JSON string arrays
	 */
	public function setContextRegexs($contextname, $incregexs, $excregexs, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/setContextRegexs/', array('contextName' => $contextname, 'incRegexs' => $incregexs, 'excRegexs' => $excregexs, 'apikey' => $apikey));
	}

	/**
	 * Set the checking strategy for a context - this defines how ZAP checks that a request is authenticated
	 */
	public function setContextCheckingStrategy($contextname, $checkingstrategy, $pollurl=NULL, $polldata=NULL, $pollheaders=NULL, $pollfrequency=NULL, $pollfrequencyunits=NULL, $apikey='') {
		$params = array('contextName' => $contextname, 'checkingStrategy' => $checkingstrategy, 'apikey' => $apikey);
		if ($pollurl !== NULL) {
			$params['pollUrl'] = $pollurl;
		}
		if ($polldata !== NULL) {
			$params['pollData'] = $polldata;
		}
		if ($pollheaders !== NULL) {
			$params['pollHeaders'] = $pollheaders;
		}
		if ($pollfrequency !== NULL) {
			$params['pollFrequency'] = $pollfrequency;
		}
		if ($pollfrequencyunits !== NULL) {
			$params['pollFrequencyUnits'] = $pollfrequencyunits;
		}
		return $this->zap->request($this->zap->base . 'context/action/setContextCheckingStrategy/', $params);
	}

	/**
	 * Creates a new context with the given name in the current session
	 */
	public function newContext($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/newContext/', array('contextName' => $contextname, 'apikey' => $apikey));
	}

	/**
	 * Removes a context in the current session
	 */
	public function removeContext($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/removeContext/', array('contextName' => $contextname, 'apikey' => $apikey));
	}

	/**
	 * Exports the context with the given name to a file. If a relative file path is specified it will be resolved against the "contexts" directory in ZAP "home" dir.
	 */
	public function exportContext($contextname, $contextfile, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/exportContext/', array('contextName' => $contextname, 'contextFile' => $contextfile, 'apikey' => $apikey));
	}

	/**
	 * Imports a context from a file. If a relative file path is specified it will be resolved against the "contexts" directory in ZAP "home" dir.
	 */
	public function importContext($contextfile, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/importContext/', array('contextFile' => $contextfile, 'apikey' => $apikey));
	}

	/**
	 * Includes technologies with the given names, separated by a comma, to a context
	 */
	public function includeContextTechnologies($contextname, $technologynames, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/includeContextTechnologies/', array('contextName' => $contextname, 'technologyNames' => $technologynames, 'apikey' => $apikey));
	}

	/**
	 * Includes all built in technologies in to a context
	 */
	public function includeAllContextTechnologies($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/includeAllContextTechnologies/', array('contextName' => $contextname, 'apikey' => $apikey));
	}

	/**
	 * Excludes technologies with the given names, separated by a comma, from a context
	 */
	public function excludeContextTechnologies($contextname, $technologynames, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/excludeContextTechnologies/', array('contextName' => $contextname, 'technologyNames' => $technologynames, 'apikey' => $apikey));
	}

	/**
	 * Excludes all built in technologies from a context
	 */
	public function excludeAllContextTechnologies($contextname, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/excludeAllContextTechnologies/', array('contextName' => $contextname, 'apikey' => $apikey));
	}

	/**
	 * Sets a context to in scope (contexts are in scope by default)
	 */
	public function setContextInScope($contextname, $booleaninscope, $apikey='') {
		return $this->zap->request($this->zap->base . 'context/action/setContextInScope/', array('contextName' => $contextname, 'booleanInScope' => $booleaninscope, 'apikey' => $apikey));
	}

}

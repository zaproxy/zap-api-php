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
class Context
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * List context names of current session.
     */
    public function contextList(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/contextList/',
            [
                'apikey' => $apikey,
            ]
        )['contextList'] ?? null;
    }

    /**
     * List excluded regexs for context.
     *
     * @param mixed $contextname
     */
    public function excludeRegexs($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/excludeRegexs/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        )['excludeRegexs'] ?? null;
    }

    /**
     * List included regexs for context.
     *
     * @param mixed $contextname
     */
    public function includeRegexs($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/includeRegexs/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        )['includeRegexs'] ?? null;
    }

    /**
     * List the information about the named context.
     *
     * @param mixed $contextname
     */
    public function context($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/context/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        )['context'] ?? null;
    }

    /**
     * Lists the names of all built in technologies.
     */
    public function technologyList(string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/technologyList/',
            [
                'apikey' => $apikey,
            ]
        )['technologyList'] ?? null;
    }

    /**
     * Lists the names of all technologies included in a context.
     *
     * @param mixed $contextname
     */
    public function includedTechnologyList($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/includedTechnologyList/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        )['includedTechnologyList'] ?? null;
    }

    /**
     * Lists the names of all technologies excluded from a context.
     *
     * @param mixed $contextname
     */
    public function excludedTechnologyList($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/excludedTechnologyList/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        )['excludedTechnologyList'] ?? null;
    }

    /**
     * Lists the URLs accessed through/by ZAP, that belong to the context with the given name.
     *
     * @param mixed $contextname
     */
    public function urls($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/view/urls/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        )['urls'] ?? null;
    }

    /**
     * Add exclude regex to context.
     *
     * @param mixed $contextname
     * @param mixed $regex
     */
    public function excludeFromContext(
        $contextname,
        $regex,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'context/action/excludeFromContext/',
            [
                'contextName' => $contextname,
                'regex' => $regex, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Add include regex to context.
     *
     * @param mixed $contextname
     * @param mixed $regex
     */
    public function includeInContext(
        $contextname,
        $regex,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'context/action/includeInContext/',
            [
                'contextName' => $contextname,
                'regex' => $regex, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Set the regexs to include and exclude for a context, both supplied as JSON string arrays.
     *
     * @param mixed $contextname
     * @param mixed $incregexs
     * @param mixed $excregexs
     */
    public function setContextRegexs(
        $contextname,
        $incregexs,
        $excregexs,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'context/action/setContextRegexs/',
            [
                'contextName' => $contextname,
                'incRegexs' => $incregexs,
                'excRegexs' => $excregexs, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Set the checking strategy for a context - this defines how ZAP checks that a request is
     * authenticated.
     *
     * @param mixed      $contextname
     * @param mixed      $checkingstrategy
     * @param null|mixed $pollurl
     * @param null|mixed $polldata
     * @param null|mixed $pollheaders
     * @param null|mixed $pollfrequency
     * @param null|mixed $pollfrequencyunits
     */
    public function setContextCheckingStrategy(
        $contextname,
        $checkingstrategy,
        $pollurl = null,
        $polldata = null,
        $pollheaders = null,
        $pollfrequency = null,
        $pollfrequencyunits = null,
        string $apikey = ''
    ) {
        $params = [
            'contextName' => $contextname,
            'checkingStrategy' => $checkingstrategy, 'apikey' => $apikey,
        ];
        if (null !== $pollurl) {
            $params['pollUrl'] = $pollurl;
        }
        if (null !== $polldata) {
            $params['pollData'] = $polldata;
        }
        if (null !== $pollheaders) {
            $params['pollHeaders'] = $pollheaders;
        }
        if (null !== $pollfrequency) {
            $params['pollFrequency'] = $pollfrequency;
        }
        if (null !== $pollfrequencyunits) {
            $params['pollFrequencyUnits'] = $pollfrequencyunits;
        }

        return $this->zap->request(
            $this->zap->base.'context/action/setContextCheckingStrategy/',
            $params
        );
    }

    /**
     * Creates a new context with the given name in the current session.
     *
     * @param mixed $contextname
     */
    public function newContext($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/action/newContext/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Removes a context in the current session.
     *
     * @param mixed $contextname
     */
    public function removeContext($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/action/removeContext/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Exports the context with the given name to a file. If a relative file path is specified it will be
     * resolved against the "contexts" directory in ZAP "home" dir.
     *
     * @param mixed $contextname
     * @param mixed $contextfile
     */
    public function exportContext(
        $contextname,
        $contextfile,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'context/action/exportContext/',
            [
                'contextName' => $contextname,
                'contextFile' => $contextfile, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Imports a context from a file. If a relative file path is specified it will be resolved against the
     * "contexts" directory in ZAP "home" dir.
     *
     * @param mixed $contextfile
     */
    public function importContext($contextfile, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/action/importContext/',
            [
                'contextFile' => $contextfile, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Includes technologies with the given names, separated by a comma, to a context.
     *
     * @param mixed $contextname
     * @param mixed $technologynames
     */
    public function includeContextTechnologies(
        $contextname,
        $technologynames,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'context/action/includeContextTechnologies/',
            [
                'contextName' => $contextname,
                'technologyNames' => $technologynames, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Includes all built in technologies in to a context.
     *
     * @param mixed $contextname
     */
    public function includeAllContextTechnologies($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/action/includeAllContextTechnologies/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Excludes technologies with the given names, separated by a comma, from a context.
     *
     * @param mixed $contextname
     * @param mixed $technologynames
     */
    public function excludeContextTechnologies(
        $contextname,
        $technologynames,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'context/action/excludeContextTechnologies/',
            [
                'contextName' => $contextname,
                'technologyNames' => $technologynames, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Excludes all built in technologies from a context.
     *
     * @param mixed $contextname
     */
    public function excludeAllContextTechnologies($contextname, string $apikey = '')
    {
        return $this->zap->request(
            $this->zap->base.'context/action/excludeAllContextTechnologies/',
            [
                'contextName' => $contextname, 'apikey' => $apikey,
            ]
        );
    }

    /**
     * Sets a context to in scope (contexts are in scope by default).
     *
     * @param mixed $contextname
     * @param mixed $booleaninscope
     */
    public function setContextInScope(
        $contextname,
        $booleaninscope,
        string $apikey = ''
    ) {
        return $this->zap->request(
            $this->zap->base.'context/action/setContextInScope/',
            [
                'contextName' => $contextname,
                'booleanInScope' => $booleaninscope, 'apikey' => $apikey,
            ]
        );
    }
}

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
class Search
{
    public function __construct(private Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Returns the URLs of the HTTP messages that match the given regular expression in the URL optionally
     * filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function urlsByUrlRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/urlsByUrlRegex/',
            $params
        )['urlsByUrlRegex'] ?? null;
    }

    /**
     * Returns the URLs of the HTTP messages that match the given regular expression in the request
     * optionally filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function urlsByRequestRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/urlsByRequestRegex/',
            $params
        )['urlsByRequestRegex'] ?? null;
    }

    /**
     * Returns the URLs of the HTTP messages that match the given regular expression in the response
     * optionally filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function urlsByResponseRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/urlsByResponseRegex/',
            $params
        )['urlsByResponseRegex'] ?? null;
    }

    /**
     * Returns the URLs of the HTTP messages that match the given regular expression in the header(s)
     * optionally filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function urlsByHeaderRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/urlsByHeaderRegex/',
            $params
        )['urlsByHeaderRegex'] ?? null;
    }

    /**
     * Returns the HTTP messages that match the given regular expression in the URL optionally filtered by
     * URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function messagesByUrlRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/messagesByUrlRegex/',
            $params
        )['messagesByUrlRegex'] ?? null;
    }

    /**
     * Returns the HTTP messages that match the given regular expression in the request optionally
     * filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function messagesByRequestRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/messagesByRequestRegex/',
            $params
        )['messagesByRequestRegex'] ?? null;
    }

    /**
     * Returns the HTTP messages that match the given regular expression in the response optionally
     * filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function messagesByResponseRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/messagesByResponseRegex/',
            $params
        )['messagesByResponseRegex'] ?? null;
    }

    /**
     * Returns the HTTP messages that match the given regular expression in the header(s) optionally
     * filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function messagesByHeaderRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->request(
            $this->zap->base.'search/view/messagesByHeaderRegex/',
            $params
        )['messagesByHeaderRegex'] ?? null;
    }

    /**
     * Returns the HTTP messages, in HAR format, that match the given regular expression in the URL
     * optionally filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function harByUrlRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->requestOther(
            $this->zap->base_other.'search/other/harByUrlRegex/',
            $params
        );
    }

    /**
     * Returns the HTTP messages, in HAR format, that match the given regular expression in the request
     * optionally filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function harByRequestRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->requestOther(
            $this->zap->base_other.'search/other/harByRequestRegex/',
            $params
        );
    }

    /**
     * Returns the HTTP messages, in HAR format, that match the given regular expression in the response
     * optionally filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function harByResponseRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->requestOther(
            $this->zap->base_other.'search/other/harByResponseRegex/',
            $params
        );
    }

    /**
     * Returns the HTTP messages, in HAR format, that match the given regular expression in the header(s)
     * optionally filtered by URL and paginated with 'start' position and 'count' of messages.
     *
     * @param mixed      $regex
     * @param null|mixed $baseurl
     * @param null|mixed $start
     * @param null|mixed $count
     */
    public function harByHeaderRegex(
        $regex,
        $baseurl = null,
        $start = null,
        $count = null,
        string $apikey = ''
    ) {
        $params = [
            'regex' => $regex, 'apikey' => $apikey,
        ];
        if (null !== $baseurl) {
            $params['baseurl'] = $baseurl;
        }
        if (null !== $start) {
            $params['start'] = $start;
        }
        if (null !== $count) {
            $params['count'] = $count;
        }

        return $this->zap->requestOther(
            $this->zap->base_other.'search/other/harByHeaderRegex/',
            $params
        );
    }
}

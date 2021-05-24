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
class Websocket {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Returns all of the registered web socket channels
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function channels($apikey='') {
		return $this->zap->request($this->zap->base . 'websocket/view/channels/', array('apikey' => $apikey))->{'channels'};
	}

	/**
	 * Returns full details of the message specified by the channelId and messageId
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function message($channelid, $messageid, $apikey='') {
		return $this->zap->request($this->zap->base . 'websocket/view/message/', array('channelId' => $channelid, 'messageId' => $messageid, 'apikey' => $apikey))->{'message'};
	}

	/**
	 * Returns a list of all of the messages that meet the given criteria (all optional), where channelId is a channel identifier, start is the offset to start returning messages from (starting from 0), count is the number of messages to return (default no limit) and payloadPreviewLength is the maximum number bytes to return for the payload contents
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function messages($channelid=NULL, $start=NULL, $count=NULL, $payloadpreviewlength=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($channelid !== NULL) {
			$params['channelId'] = $channelid;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		if ($payloadpreviewlength !== NULL) {
			$params['payloadPreviewLength'] = $payloadpreviewlength;
		}
		return $this->zap->request($this->zap->base . 'websocket/view/messages/', $params)->{'messages'};
	}

	/**
	 * Returns a text representation of an intercepted websockets message
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function breakTextMessage($apikey='') {
		return $this->zap->request($this->zap->base . 'websocket/view/breakTextMessage/', array('apikey' => $apikey))->{'breakTextMessage'};
	}

	/**
	 * Sends the specified message on the channel specified by channelId, if outgoing is 'True' then the message will be sent to the server and if it is 'False' then it will be sent to the client
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function sendTextMessage($channelid, $outgoing, $message, $apikey='') {
		return $this->zap->request($this->zap->base . 'websocket/action/sendTextMessage/', array('channelId' => $channelid, 'outgoing' => $outgoing, 'message' => $message, 'apikey' => $apikey));
	}

	/**
	 * Sets the text message for an intercepted websockets message
	 * This component is optional and therefore the API will only work if it is installed
	 */
	public function setBreakTextMessage($message, $outgoing, $apikey='') {
		return $this->zap->request($this->zap->base . 'websocket/action/setBreakTextMessage/', array('message' => $message, 'outgoing' => $outgoing, 'apikey' => $apikey));
	}

}

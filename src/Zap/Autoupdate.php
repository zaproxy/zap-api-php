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
class Autoupdate {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Returns the latest version number
	 */
	public function latestVersionNumber($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/latestVersionNumber/', array('apikey' => $apikey))->{'latestVersionNumber'};
	}

	/**
	 * Returns 'true' if ZAP is on the latest version
	 */
	public function isLatestVersion($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/isLatestVersion/', array('apikey' => $apikey))->{'isLatestVersion'};
	}

	/**
	 * Return a list of all of the installed add-ons
	 */
	public function installedAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/installedAddons/', array('apikey' => $apikey))->{'installedAddons'};
	}

	/**
	 * Returns a list with all local add-ons, installed or not.
	 */
	public function localAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/localAddons/', array('apikey' => $apikey))->{'localAddons'};
	}

	/**
	 * Return a list of any add-ons that have been added to the Marketplace since the last check for updates
	 */
	public function newAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/newAddons/', array('apikey' => $apikey))->{'newAddons'};
	}

	/**
	 * Return a list of any add-ons that have been changed in the Marketplace since the last check for updates
	 */
	public function updatedAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/updatedAddons/', array('apikey' => $apikey))->{'updatedAddons'};
	}

	/**
	 * Return a list of all of the add-ons on the ZAP Marketplace (this information is read once and then cached)
	 */
	public function marketplaceAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/marketplaceAddons/', array('apikey' => $apikey))->{'marketplaceAddons'};
	}

	/**
	 * 
	 */
	public function optionAddonDirectories($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionAddonDirectories/', array('apikey' => $apikey))->{'AddonDirectories'};
	}

	/**
	 * 
	 */
	public function optionDayLastChecked($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastChecked/', array('apikey' => $apikey))->{'DayLastChecked'};
	}

	/**
	 * 
	 */
	public function optionDayLastInstallWarned($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastInstallWarned/', array('apikey' => $apikey))->{'DayLastInstallWarned'};
	}

	/**
	 * 
	 */
	public function optionDayLastUpdateWarned($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastUpdateWarned/', array('apikey' => $apikey))->{'DayLastUpdateWarned'};
	}

	/**
	 * 
	 */
	public function optionDownloadDirectory($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionDownloadDirectory/', array('apikey' => $apikey))->{'DownloadDirectory'};
	}

	/**
	 * 
	 */
	public function optionCheckAddonUpdates($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionCheckAddonUpdates/', array('apikey' => $apikey))->{'CheckAddonUpdates'};
	}

	/**
	 * 
	 */
	public function optionCheckOnStart($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionCheckOnStart/', array('apikey' => $apikey))->{'CheckOnStart'};
	}

	/**
	 * 
	 */
	public function optionDownloadNewRelease($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionDownloadNewRelease/', array('apikey' => $apikey))->{'DownloadNewRelease'};
	}

	/**
	 * 
	 */
	public function optionInstallAddonUpdates($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionInstallAddonUpdates/', array('apikey' => $apikey))->{'InstallAddonUpdates'};
	}

	/**
	 * 
	 */
	public function optionInstallScannerRules($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionInstallScannerRules/', array('apikey' => $apikey))->{'InstallScannerRules'};
	}

	/**
	 * 
	 */
	public function optionReportAlphaAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionReportAlphaAddons/', array('apikey' => $apikey))->{'ReportAlphaAddons'};
	}

	/**
	 * 
	 */
	public function optionReportBetaAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionReportBetaAddons/', array('apikey' => $apikey))->{'ReportBetaAddons'};
	}

	/**
	 * 
	 */
	public function optionReportReleaseAddons($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/view/optionReportReleaseAddons/', array('apikey' => $apikey))->{'ReportReleaseAddons'};
	}

	/**
	 * Downloads the latest release, if any 
	 */
	public function downloadLatestRelease($apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/downloadLatestRelease/', array('apikey' => $apikey));
	}

	/**
	 * Installs or updates the specified add-on, returning when complete (i.e. not asynchronously)
	 */
	public function installAddon($id, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/installAddon/', array('id' => $id, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function installLocalAddon($file, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/installLocalAddon/', array('file' => $file, 'apikey' => $apikey));
	}

	/**
	 * Uninstalls the specified add-on 
	 */
	public function uninstallAddon($id, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/uninstallAddon/', array('id' => $id, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionCheckAddonUpdates($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionCheckAddonUpdates/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionCheckOnStart($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionCheckOnStart/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionDownloadNewRelease($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionDownloadNewRelease/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionInstallAddonUpdates($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionInstallAddonUpdates/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionInstallScannerRules($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionInstallScannerRules/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionReportAlphaAddons($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportAlphaAddons/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionReportBetaAddons($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportBetaAddons/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

	/**
	 * 
	 */
	public function setOptionReportReleaseAddons($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportReleaseAddons/', array('Boolean' => $boolean, 'apikey' => $apikey));
	}

}

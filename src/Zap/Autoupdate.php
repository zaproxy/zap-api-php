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
 */
class Autoupdate
{
    private Zap $zap;

    public function __construct(Zap $zap)
    {
        $this->zap = $zap;
    }

    /**
     * Returns the latest version number
     */
    public function latestVersionNumber(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/latestVersionNumber/', [
            'apikey' => $apikey,
        ])->latestVersionNumber ?? null;
    }

    /**
     * Returns 'true' if ZAP is on the latest version
     */
    public function isLatestVersion(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/isLatestVersion/', [
            'apikey' => $apikey,
        ])->isLatestVersion ?? null;
    }

    /**
     * Return a list of all of the installed add-ons
     */
    public function installedAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/installedAddons/', [
            'apikey' => $apikey,
        ])->installedAddons ?? null;
    }

    /**
     * Returns a list with all local add-ons, installed or not.
     */
    public function localAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/localAddons/', [
            'apikey' => $apikey,
        ])->localAddons ?? null;
    }

    /**
     * Return a list of any add-ons that have been added to the Marketplace since the last check for updates
     */
    public function newAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/newAddons/', [
            'apikey' => $apikey,
        ])->newAddons ?? null;
    }

    /**
     * Return a list of any add-ons that have been changed in the Marketplace since the last check for updates
     */
    public function updatedAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/updatedAddons/', [
            'apikey' => $apikey,
        ])->updatedAddons ?? null;
    }

    /**
     * Return a list of all of the add-ons on the ZAP Marketplace (this information is read once and then cached)
     */
    public function marketplaceAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/marketplaceAddons/', [
            'apikey' => $apikey,
        ])->marketplaceAddons ?? null;
    }

    public function optionAddonDirectories(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionAddonDirectories/', [
            'apikey' => $apikey,
        ])->AddonDirectories ?? null;
    }

    public function optionDayLastChecked(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastChecked/', [
            'apikey' => $apikey,
        ])->DayLastChecked ?? null;
    }

    public function optionDayLastInstallWarned(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastInstallWarned/', [
            'apikey' => $apikey,
        ])->DayLastInstallWarned ?? null;
    }

    public function optionDayLastUpdateWarned(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastUpdateWarned/', [
            'apikey' => $apikey,
        ])->DayLastUpdateWarned ?? null;
    }

    public function optionDownloadDirectory(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionDownloadDirectory/', [
            'apikey' => $apikey,
        ])->DownloadDirectory ?? null;
    }

    public function optionCheckAddonUpdates(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionCheckAddonUpdates/', [
            'apikey' => $apikey,
        ])->CheckAddonUpdates ?? null;
    }

    public function optionCheckOnStart(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionCheckOnStart/', [
            'apikey' => $apikey,
        ])->CheckOnStart ?? null;
    }

    public function optionDownloadNewRelease(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionDownloadNewRelease/', [
            'apikey' => $apikey,
        ])->DownloadNewRelease ?? null;
    }

    public function optionInstallAddonUpdates(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionInstallAddonUpdates/', [
            'apikey' => $apikey,
        ])->InstallAddonUpdates ?? null;
    }

    public function optionInstallScannerRules(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionInstallScannerRules/', [
            'apikey' => $apikey,
        ])->InstallScannerRules ?? null;
    }

    public function optionReportAlphaAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionReportAlphaAddons/', [
            'apikey' => $apikey,
        ])->ReportAlphaAddons ?? null;
    }

    public function optionReportBetaAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionReportBetaAddons/', [
            'apikey' => $apikey,
        ])->ReportBetaAddons ?? null;
    }

    public function optionReportReleaseAddons(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/view/optionReportReleaseAddons/', [
            'apikey' => $apikey,
        ])->ReportReleaseAddons ?? null;
    }

    /**
     * Downloads the latest release, if any
     */
    public function downloadLatestRelease(string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/downloadLatestRelease/', [
            'apikey' => $apikey,
        ]);
    }

    /**
     * Installs or updates the specified add-on, returning when complete (i.e. not asynchronously)
     */
    public function installAddon($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/installAddon/', [
            'id' => $id,
            'apikey' => $apikey,
        ]);
    }

    public function installLocalAddon($file, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/installLocalAddon/', [
            'file' => $file,
            'apikey' => $apikey,
        ]);
    }

    /**
     * Uninstalls the specified add-on
     */
    public function uninstallAddon($id, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/uninstallAddon/', [
            'id' => $id,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionCheckAddonUpdates($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionCheckAddonUpdates/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionCheckOnStart($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionCheckOnStart/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionDownloadNewRelease($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionDownloadNewRelease/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionInstallAddonUpdates($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionInstallAddonUpdates/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionInstallScannerRules($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionInstallScannerRules/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionReportAlphaAddons($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportAlphaAddons/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionReportBetaAddons($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportBetaAddons/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }

    public function setOptionReportReleaseAddons($boolean, string $apikey = '')
    {
        return $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportReleaseAddons/', [
            'Boolean' => $boolean,
            'apikey' => $apikey,
        ]);
    }
}

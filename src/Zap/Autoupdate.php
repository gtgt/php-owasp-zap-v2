<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2016 the ZAP development team
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
class Autoupdate extends AbstractZapComponent {

	/**
	 * Returns the latest version number
	 */
	public function latestVersionNumber() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/latestVersionNumber/');
		return reset($res);
	}

	/**
	 * Returns 'true' if ZAP is on the latest version
	 */
	public function isLatestVersion() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/isLatestVersion/');
		return reset($res);
	}

	public function optionAddonDirectories() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionAddonDirectories/');
		return reset($res);
	}

	public function optionDayLastChecked() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionDayLastChecked/');
		return reset($res);
	}

	public function optionDayLastInstallWarned() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionDayLastInstallWarned/');
		return reset($res);
	}

	public function optionDayLastUpdateWarned() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionDayLastUpdateWarned/');
		return reset($res);
	}

	public function optionDownloadDirectory() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionDownloadDirectory/');
		return reset($res);
	}

	public function optionCheckAddonUpdates() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionCheckAddonUpdates/');
		return reset($res);
	}

	public function optionCheckOnStart() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionCheckOnStart/');
		return reset($res);
	}

	public function optionDownloadNewRelease() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionDownloadNewRelease/');
		return reset($res);
	}

	public function optionInstallAddonUpdates() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionInstallAddonUpdates/');
		return reset($res);
	}

	public function optionInstallScannerRules() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionInstallScannerRules/');
		return reset($res);
	}

	public function optionReportAlphaAddons() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionReportAlphaAddons/');
		return reset($res);
	}

	public function optionReportBetaAddons() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionReportBetaAddons/');
		return reset($res);
	}

	public function optionReportReleaseAddons() {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/view/optionReportReleaseAddons/');
		return reset($res);
	}

	/**
	 * Downloads the latest release, if any
	 */
	public function downloadLatestRelease($apikey='') {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/downloadLatestRelease/');
		return reset($res);
	}

	public function setOptionCheckAddonUpdates($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionCheckAddonUpdates/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionCheckOnStart($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionCheckOnStart/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionDownloadNewRelease($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionDownloadNewRelease/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionInstallAddonUpdates($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionInstallAddonUpdates/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionInstallScannerRules($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionInstallScannerRules/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionReportAlphaAddons($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionReportAlphaAddons/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionReportBetaAddons($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionReportBetaAddons/', array('Boolean' => $boolean));
		return reset($res);
	}

	public function setOptionReportReleaseAddons($boolean) {
		$res = $this->zap->request($this->zap->baseApiUrl . 'autoupdate/action/setOptionReportReleaseAddons/', array('Boolean' => $boolean));
		return reset($res);
	}

}

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
class Pscan extends AbstractZapComponent
{

    /**
     * The number of records the passive scanner still has to scan
     */
    public function recordsToScan()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/view/recordsToScan/');
        return reset($res);
    }

    /**
     * Lists all passive scanners with its ID, name, enabled state and alert threshold.
     */
    public function scanners()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/view/scanners/');
        return reset($res);
    }

    /**
     * Sets whether or not the passive scanning is enabled
     */
    public function setEnabled($enabled)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/action/setEnabled/', array('enabled' => $enabled));
        return reset($res);
    }

    /**
     * Enables all passive scanners
     */
    public function enableAllScanners()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/action/enableAllScanners/');
        return reset($res);
    }

    /**
     * Disables all passive scanners
     */
    public function disableAllScanners()
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/action/disableAllScanners/');
        return reset($res);
    }

    /**
     * Enables all passive scanners with the given IDs (comma separated list of IDs)
     */
    public function enableScanners($ids)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/action/enableScanners/', array('ids' => $ids));
        return reset($res);
    }

    /**
     * Disables all passive scanners with the given IDs (comma separated list of IDs)
     */
    public function disableScanners($ids)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/action/disableScanners/', array('ids' => $ids));
        return reset($res);
    }

    /**
     * Sets the alert threshold of the passive scanner with the given ID, accepted values for alert threshold: OFF, DEFAULT, LOW, MEDIUM and HIGH
     */
    public function setScannerAlertThreshold($id, $alertthreshold)
    {
        $res = $this->zap->request($this->zap->baseApiUrl . 'pscan/action/setScannerAlertThreshold/', array('id' => $id, 'alertThreshold' => $alertthreshold));
        return reset($res);
    }

}

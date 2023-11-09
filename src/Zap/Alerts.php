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
 * @TODO: alertCountsByRisk (url recurse )    Gets a count of the alerts, optionally filtered as per alertsPerRisk
 * @TODO: alertsByRisk (url recurse )    Gets a summary of the alerts, optionally filtered by a 'url'. If 'recurse' is true then all alerts that apply to urls that start with the specified 'url' will be returned, otherwise only those on exactly the same 'url' (ignoring url parameters)
 * @TODO: numberOfAlerts (baseurl riskId )    Gets the number of alerts, optionally filtering by URL or riskId
 */
class Alerts extends AbstractZapComponent {

    /**
     * Gets the alert with the given ID, the corresponding HTTP message can be obtained with the 'messageId' field and 'message' API method
     *
     * @param $id
     *
     * @return \stdClass|bool
     */
    public function alert(int $id) {
        $res = $this->zap->request($this->zap->baseApiUrl.'alert/view/alert/', ['id' => $id]);
        return reset($res);
    }

    /**
     * Gets number of alerts grouped by each risk level, optionally filtering by URL
     *
     * @param null $baseurl
     * @param int|null $start
     * @param int|null $count
     * @param int|null $riskId
     *
     * @return array|bool
     */
    public function alerts($baseurl = null, ?int $start = null, ?int $count = null, ?int $riskId = null) {
        $res = $this->zap->request($this->zap->baseApiUrl.'alert/view/alerts/', ['baseurl' => $baseurl, 'start' => $start, 'count' => $count, 'riskId' => $riskId]);
        return reset($res);
    }

    /**
     * Gets number of alerts grouped by each risk level, optionally filtering by URL
     *
     * @param string|null $baseurl
     *
     * @return \stdClass|bool
     */
    public function alertsSummary($baseurl = null) {
        $res = $this->zap->request($this->zap->baseApiUrl.'alert/view/alertsSummary/', ['baseurl' => $baseurl]);
        return reset($res);
    }

    /**
     * Deletes the alert with the given ID.
     *
     * @param int $id
     *
     * @return string|bool
     */
    public function deleteAlert(int $id) {
        $res = $this->zap->request($this->zap->baseApiUrl.'alert/action/deleteAlert/', ['id' => $id]);
        return reset($res);
    }

    /**
     * Deletes all alerts of the current session.
     *
     * @return string|bool
     */
    public function deleteAllAlerts() {
        $res = $this->zap->request($this->zap->baseApiUrl.'alert/action/deleteAllAlerts');
        return reset($res);
    }

}

<?php

namespace TobyMaxham\UptimeRobotApi\Api;

use TobyMaxham\UptimeRobotApi\Entity\Monitor as MonitorEntity;

/**
 * Class Monitor
 * @package TobyMaxham\UptimeRobotApi\Api
 * @author Tobias Maxham <git2018@maxham.de>
 */
class Monitor extends AbstractApi
{

    /**
     * @param array $parameters
     * @return MonitorEntity[]
     */
    public function getMonitors($parameters = []) : array
    {
        $data = [
            'api_key' => $this->adapter->getApiKey(),
        ];

        if (isset($parameters['monitors'])) {
            $dataMonitors = $parameters['monitors'];
            if (is_string($dataMonitors)) {
                $data['monitors'] = $dataMonitors;
            } elseif (is_int($dataMonitors)) {
                $data['monitors'] = (string) $dataMonitors;
            } elseif (is_array($dataMonitors)) {
                $data['monitors'] = implode('-', array_map(function($da) {
                    return (string) $da;
                }, $dataMonitors));
            }
        }

        $monitors =$this->adapter->post(sprintf('%s/getMonitors', $this->endpoint), $data);

        $monitors = json_decode($monitors);

        return array_map(function ($monitors) {
            return new MonitorEntity($monitors);
        }, $monitors->monitors);
    }

    public function getMonitor($id, $logs = true)
    {
        $data = [
            'api_key' => $this->adapter->getApiKey(),
            'monitors' => (string) $id,
            'logs' => $logs ? 1 : 0,
        ];

        $monitors =$this->adapter->post(sprintf('%s/getMonitors', $this->endpoint), $data);

        $monitors = json_decode($monitors);
        return new MonitorEntity($monitors->monitors[key($monitors->monitors)]);
    }
}

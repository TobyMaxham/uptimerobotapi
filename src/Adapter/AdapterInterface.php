<?php

namespace TobyMaxham\UptimeRobotApi\Adapter;

/**
 * Class AdapterInterface
 * @package TobyMaxham\UptimeRobotApi\Adapter
 * @author Tobias Maxham <git2018@maxham.de>
 */
interface AdapterInterface
{
    /**
     * @param $url
     * @return string
     */
    public function get($url) : string;

    /**
     * @param $url
     * @return string
     */
    public function put($url) : string;

    /**
     * @param $url
     * @param string $content
     * @return string
     */
    public function post($url, $content = '') : string;

    /**
     * @param $url
     * @param string $content
     * @return string
     */
    public function delete($url, $content = '') :string ;
}

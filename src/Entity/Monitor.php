<?php

namespace TobyMaxham\UptimeRobotApi\Entity;

/**
 * Class Monitor
 * @package TobyMaxham\UptimeRobotApi\Entity
 * @author Tobias Maxham <git2018@maxham.de>
 */
class Monitor extends AbstractEntity
{

    /**
     * @var int $id
     */
    public $id;

    /**
     * @var string $friendly_name
     */
    public $friendly_name;

    /**
     * @var string $url
     */
    public $url;

    /**
     * @var int $type
     */
    public $type;

    /**
     * @var string $sub_type
     */
    public $sub_type;

    /**
     * @var string $keyword_type
     */
    public $keyword_type;

    /**
     * @var string $keyword_value
     */
    public $keyword_value;

    /**
     * @var string $http_username
     */
    public $http_username;

    /**
     * @var string $http_password
     */
    public $http_password;

    /**
     * @var int $port
     */
    public $port;

    /**
     * @var int $interval
     */
    public $interval;

    /**
     * @var int $status
     */
    public $status;

    /**
     * @var int $create_datetime
     */
    public $create_datetime;

    /**
     * @var int $monitor_group
     */
    public $monitor_group;

    /**
     * @var int $is_group_main
     */
    public $is_group_main;

    /**
     * @var array $logs
     */
    public $logs = [];
}

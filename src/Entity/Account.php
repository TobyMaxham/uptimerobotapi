<?php

namespace TobyMaxham\UptimeRobotApi\Entity;

/**
 * Class Account
 * @package TobyMaxham\UptimeRobotApi\Entity
 * @author Tobias Maxham <git2018@maxham.de>
 */
class Account extends AbstractEntity
{
    /**
     * @var int $id
     */
    //public $id;

    /**
     * @var string $email
     */
    public $email;

    /**
     * @var int $monitor_limit
     */
    public $monitor_limit;

    /**
     * @var int $monitor_interval
     */
    public $monitor_interval;

    /**
     * @var int $up_monitors
     */
    public $up_monitors;


    /**
     * @var int $down_monitors
     */
    public $down_monitors;

    /**
     * @var int $paused_monitors
     */
    public $paused_monitors;
}

<?php

namespace TobyMaxham\UptimeRobotApi;

use TobyMaxham\UptimeRobotApi\Adapter\AdapterInterface;
use TobyMaxham\UptimeRobotApi\Api\Account;
use TobyMaxham\UptimeRobotApi\Api\Monitor;

/**
 * Class UptimeRobotV2
 * @package TobyMaxham\UptimeRobotApi
 * @author Tobias Maxham <git2018@maxham.de>
 */
class UptimeRobotV2
{
    /**
     * @var AdapterInterface $adapter
     */
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @return Account
     */
    public function Account() : Account
    {
        return new Account($this->adapter);
    }

    /**
     * @return Monitor
     */
    public function Monitor() : Monitor
    {
        return new Monitor($this->adapter);
    }
}

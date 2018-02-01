<?php

namespace TobyMaxham\UptimeRobotApi\Api;

use TobyMaxham\UptimeRobotApi\Adapter\AdapterInterface;

/**
 * Class AbstractApi
 * @package TobyMaxham\UptimeRobotApi\Api
 * @author Tobias Maxham <git2018@maxham.de>
 */
abstract class AbstractApi
{
    const ENDPOINT = 'https://api.uptimerobot.com/v2';

    /**
     * @var AdapterInterface $adapter
     */
    protected $adapter;

    /**
     * @var string $endpoint
     */
    protected $endpoint;

    public function __construct(AdapterInterface $adapter, $endpoint = null)
    {
        $this->adapter = $adapter;
        $this->endpoint = $endpoint ?: static::ENDPOINT;
    }
}

<?php

namespace TobyMaxham\UptimeRobotApi\Entity;

/**
 * Class AbstractEntity
 * @package TobyMaxham\UptimeRobotApi\Entity
 * @author Tobias Maxham <git2018@maxham.de>
 */
abstract class AbstractEntity
{
    /**
     * AbstractEntity constructor.
     * @param null $params
     */
    public function __construct($params = null)
    {
        if (!$params) {
            return;
        }

        if ($params instanceof \stdClass) {
            $params = get_object_vars($params);
        }
        $this->make($params);
    }

    /**
     * @param array $params
     */
    private function make(array $params)
    {
        foreach ($params as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}

<?php

namespace TobyMaxham\UptimeRobotApi\Api;

use GuzzleHttp\RequestOptions;
use TobyMaxham\UptimeRobotApi\Entity\Account as AccountEntity;

/**
 * Class Account
 * @package TobyMaxham\UptimeRobotApi\Api
 * @author Tobias Maxham <git2018@maxham.de>
 */
class Account extends AbstractApi
{

    /**
     * @return AccountEntity
     */
    public function getAccountDetails() : AccountEntity
    {
        $data = [
            'api_key' => $this->adapter->getApiKey(),
        ];

        $account =$this->adapter->post(sprintf('%s/getAccountDetails', $this->endpoint), $data);

        $account = json_decode($account);

        return new AccountEntity($account->account);
    }

}

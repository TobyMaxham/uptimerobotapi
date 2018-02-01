<?php

namespace TobyMaxham\UptimeRobotApi\Adapter;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

/**
 * Class GuzzleHttpAdapter
 * @package TobyMaxham\UptimeRobotApi\Adapter
 * @author Tobias Maxham <git2018@maxham.de>
 */
class GuzzleHttpAdapter implements AdapterInterface
{

    /**
     * @var ClientInterface $client
     */
    protected $client;

    /**
     * @var Response
     */
    protected $response;

    protected $api_key;

    public function __construct($api_key, ClientInterface $client = null)
    {
        $this->api_key = $api_key;
        $this->client = $client ?: new Client();
    }

    public function get($url) : string
    {
        // TODO: Implement get() method.
    }

    public function post($url, $content = '') : string
    {
        $options = [];

        $options[is_array($content) ? 'json' : 'body'] = $content;

        try {
            $this->response = $this->client->post($url, $options);
        } catch (RequestException $e) {
            $this->response = $e->getResponse();
            $this->handleError();
        }
        return $this->response->getBody();
    }

    public function put($url) : string
    {
        // TODO: Implement put() method.
    }

    public function delete($url, $content = '') :string
    {
        // TODO: Implement delete() method.
    }

    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @throws \Exception
     */
    protected function handleError()
    {
        $body = (string) $this->response->getBody();
        $code = (int) $this->response->getStatusCode();

        $content = json_decode($body);

        throw new \Exception(isset($content->message) ? $content->message : 'Request not processed.', $code);
    }
}

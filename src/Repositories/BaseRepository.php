<?php

namespace Zijinghua\Zchat\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class BaseRepository
{
    public function __construct()
    {
        $this->client = new Client(['verify' => false]);
    }
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params)
    {
        $uri = $this->baseUri;
        $result = $this->httpRequest('post', $uri, $params);
        return $result;
    }
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store($params)
    {
        $uri = $this->baseUri . '/store';
        $result = $this->httpRequest($uri, $params);
        return $result;
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($params)
    {
        $uri = $this->baseUri . '/delete';
        $result = $this->httpRequest($uri, $params);
        return $result;
    }
    /**
     * @param $method
     * @param $uri
     * @param null $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function httpRequest($uri, $params = null)
    {
        $response = $this->postData($uri, $params);
        return $response;
    }
    /**
     * @param $uri
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function postData($uri, $params, $method = 'POST')
    {
        try {
            $params = array_merge($params, [
                'headers' => [
                    'User-Agent' => 'Mozilla/5.0',
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ],
            ]);
            $formData = [
                'form_params' => $params
            ];
            $response = $this->client->request($method, $uri, $formData);
            $responseDecode = json_decode($response->getBody()->__toString(), true);
            return $responseDecode;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), $exception->getCode());
        } catch (ClientException $exception) {
            throw new \Exception($exception->getMessage(), $exception->getCode());
        }
    }
}

<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class HttpRequest
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://10.3.125.127',
            'timeout' => 5,
        ]);
    }

    protected function get($url)
    {
        $response = $this->client->request('GET', $url);
        return json_decode($response->getBody()->getContents());
    }

    protected function post($url, $datos)
    {
        $response = $this->client->request('POST', $url, [
            'json' => $datos
        ]);

        return json_decode($response->getBody()->getContents());
    }

    protected function put($url, $datos)
    {
        $response = $this->client->request('PUT', $url, [
            'json' => $datos
        ]);

        return json_decode($response->getBody()->getContents());
    }
}

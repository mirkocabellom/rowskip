<?php 
namespace App\Repositories;
use GuzzleHttp\Client;

class GuzzleHttpRequest 
{
	protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function get($url)
    {
        $response = $this->client->request('GET',$url);
        return json_decode( $response->getBody()->getContents() );
    }

    protected function post($url)
    {
        $response = $this->client->request('POST',$url);
        return json_decode( $response->getBody()->getContents() );
    }
}
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

    protected function post($url, $datos)
    {
        $response = $this->client->request('POST',$url, [
            'json' => $datos
        ]);

        return json_decode( $response->getBody()->getContents() );
    }
    
    protected function put($url, $datos)
    {
        $response = $client->request('PUT', $url, [
            'json' => $datos
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
<?php 
namespace App\Repositories;

class Consultas extends GuzzleHttpRequest
{
	public function obtener_token()
    {
        return $this->post2("api/auth/login");
    }

    protected function post2($url)
    {
        $response = $this->client->post($url, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'email' => config('api.email'),
                'password' => config('api.password'),
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
		$accessToken = $responseData['access_token'];

		return $accessToken;
    }

	public function datos_pac($pac_rut)
	{
		return $this->get("api/datos_pac/{$pac_rut}");
	}

	public function list_age_disp($est_cod)
	{
		$token = $this->obtener_token();
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];
		$response = $this->client->get("api/auth/{$est_cod}", [
		    'headers' => $headers
		]);

		return json_decode($response->getBody(), true);	
	}

	public function list_appointment($day, $mounth, $year, $est_cod)
	{
		$token = $this->obtener_token();
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];
		$response = $this->client->get("api/auth/{$day}/{$mounth}/{$year}/{$est_cod}", [
		    'headers' => $headers
		]);

		return json_decode($response->getBody(), true);	
	}

	public function list_appointment_prof($day, $mounth, $year, $est_cod,$prof_rut)
	{
		$token = $this->obtener_token();
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];
		$response = $this->client->get("api/auth/{$day}/{$mounth}/{$year}/{$est_cod}/{$prof_rut}", [
		    'headers' => $headers
		]);

		return json_decode($response->getBody(), true);	
	}

	public function find_appointment_pac($pac_rut,$est_cod)
	{
		$token = $this->obtener_token();
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];
		$response = $this->client->get("api/auth/{$pac_rut}/{$est_cod}", [
		    'headers' => $headers
		]);

		return json_decode($response->getBody(), true);	
	}

	public function confirmed_appointment($id)
	{
		$token = $this->obtener_token();
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];
		$response = $this->client->get("api/auth/{$id}", [
		    'headers' => $headers
		]);

		return json_decode($response->getBody(), true);	
	}

	public function atted_appointment($id, $est_cod)
	{
		$token = $this->obtener_token();
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];
		$response = $this->client->get("api/auth/{$id}/{$est_cod}", [
		    'headers' => $headers
		]);

		return json_decode($response->getBody(), true);	
	}

	public function listuser($est_cod)
	{
		$token = $this->obtener_token();
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];
		$response = $this->client->get("api/auth/datalist/user/{$est_cod}", [
		    'headers' => $headers
		]);

		return json_decode($response->getBody(), true);	
	}

	public function registrar_usuario($datos)
	{
		$token = $this->obtener_token();
		
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];

		$response = $this->client->post("api/auth/registrar_usuario", [
		    'headers' => $headers,
			'json' => $datos
		]);

		$jsonResponse = $response->getBody()->getContents();

    	return $jsonResponse;
	}

	public function cons_user($datos)
	{
		$token = $this->obtener_token();
		
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];

		$response = $this->client->post("api/auth/cons_user", [
		    'headers' => $headers,
			'json' => $datos
		]);

		$jsonResponse = $response->getBody()->getContents();

    	return $jsonResponse;
	}

	public function primera_pass($datos)
	{
		$token = $this->obtener_token();
		
		$headers = [
			'Content-Type' => 'application/json',
		    'X-Requested-with' => 'XMLHttpRequest',
		    'Authorization' => 'Bearer ' . $token,
		];

		$response = $this->client->post("api/auth/primera_pass", [
		    'headers' => $headers,
			'json' => $datos
		]);

		$jsonResponse = $response->getBody()->getContents();

    	return $jsonResponse;
	}
}
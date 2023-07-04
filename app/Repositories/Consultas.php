<?php 
namespace App\Repositories;

class Consultas extends GuzzleHttpRequest
{
	public function obtener_token()
	{
		try {
			$response = $this->post('api/auth/login', [
		        'headers' => [
		            'Content-Type' => 'application/json',
		        ],
		        'json' => [
		            'email' => config('api.email'),
		            'password' => config('api.password'),
		        ],
		    ]);
			if ($response !== null) {
		        $content = $response->getBody()->getContents();
		        echo $content;
		    } else {
		        // Manejar el caso en que no se recibe ninguna respuesta
		        echo "No se recibió ninguna respuesta";
		    }
		} catch (Exception $e) {
		    // Manejar la excepción lanzada
		    echo "Error en la solicitud: " . $e->getMessage();
		}

		// if (isset($response) && $response->getStatusCode() === 200) {
	    //     $token = json_decode($response->getBody(), true)['token'];
	    //     return $token;
	    // }
	    // // echo "dksjnfadjkn";
	    // return null;
	}

	public function datos_pac($pac_rut)
	{
		return $this->get("api/datos_pac/{$pac_rut}");
	}

	public function list_age_disp($est_cod)
	{
		return $this->get("api/auth/{$est_cod}");
	}

	public function list_appointment($day, $mounth, $year, $est_cod)
	{
		return $this->get("api/auth/{$day}/{$mounth}/{$year}/{$est_cod}");
	}

	public function list_appointment_prof($day, $mounth, $year, $est_cod,$prof_rut)
	{
		return $this->get("api/auth/{$day}/{$mounth}/{$year}/{$est_cod}/{$prof_rut}");
	}

	public function find_appointment_pac($pac_rut,$est_cod)
	{
		return $this->get("api/auth/{$pac_rut}/{$est_cod}");
	}

	public function confirmed_appointment($id)
	{
		return $this->put("api/auth/{$id}");
	}

	public function atted_appointment($id, $est_cod)
	{
		return $this->put("api/auth/{$id}/{$est_cod}");
	}
}
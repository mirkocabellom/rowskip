<?php 
namespace App\Repositories;

class Consultas extends GuzzleHttpRequest
{
	public function find()
	{
		return $this->get("api/datos_pac/18378651");
	}
}
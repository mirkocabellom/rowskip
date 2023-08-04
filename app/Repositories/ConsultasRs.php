<?php
namespace App\Repositories;

class ConsultasRs extends HttpRequest
{
    public function listuser($est_cod)
    {
        $response = $this->get("api/v1/usu/datalist/{$est_cod}");
        return $response;
    }

    public function registrar_usuario($datos)
    {
        $response = $this->post("api/v1/usu/registrar_usuario", $datos);
        return $response;
    }

    public function cons_user($datos)
    {
        $response = $this->post("api/v1/usu/cons_user", $datos);
        return $response;
    }

    public function primera_pass($datos)
    {
        $response = $this->post("api/v1/usu/primera_pass", $datos);
        return $response;
    }
}

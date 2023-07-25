<?php

namespace App\Http\Controllers;
use App\Repositories\Consultas;
use Illuminate\Http\Request;

class TotemController extends Controller
{
    protected $consultas;

    public function __construct(Consultas $consultas)
    {
        $this->consultas = $consultas;
    }
    
    public function find_appointment_pac(Request $request)
    {
        $pac_rut = $request->input('id_pac_rut');
        $est_cod = 100;
    
        if (!empty($pac_rut)) {
            $consultas = $this->consultas->find_appointment_pac($pac_rut, $est_cod);

            if (is_string($consultas)) {
                $consultas = json_decode($consultas, true);
            }
            return view('totem_result', compact('consultas'));
        } else {
            return view('totem');
        }
    }
}

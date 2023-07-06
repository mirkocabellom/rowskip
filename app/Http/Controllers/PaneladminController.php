<?php

namespace App\Http\Controllers;
use App\Repositories\Consultas;
use Illuminate\Http\Request;

class PaneladminController extends Controller
{
    protected $consultas;

    public function __construct(Consultas $consultas)
    {
        $this->consultas = $consultas;
    }

    public function index(Request $request)
    {
        $pac_rut='18378651';
        $consultas = $this->consultas->datos_pac($pac_rut);
        return view('monitor',compact('consultas'));
    }

    public function obtener_token(Request $request)
    {
        $consultas = $this->consultas->obtener_token();
        return view('monitor',compact('consultas'));
    }

    public function list_age_disp(Request $request)
    {
        $est_cod='100';
        $consultas = $this->consultas->list_age_disp($est_cod);
        return view('agenda',compact('consultas'));
    }

    public function list_appointment(Request $request)
    {
        $day='05';
        $mounth='07';
        $year='2023';
        $est_cod='100';
        $consultas = $this->consultas->list_appointment($day,$mounth,$year,$est_cod);
        return view('citas',compact('consultas'));
    }

    public function find_appointment_pac(Request $request)
    {
        $pac_rut='27364886-0';
        $est_cod='100';
        $consultas = $this->consultas->find_appointment_pac($pac_rut,$est_cod);
        return view('totem',compact('consultas'));
    }
}
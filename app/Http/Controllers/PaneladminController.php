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
}

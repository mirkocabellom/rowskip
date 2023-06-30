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
        $consultas = $this->consultas->find();
        return view('monitor',compact('consultas'));
    }
}

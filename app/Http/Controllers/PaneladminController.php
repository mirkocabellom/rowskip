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
        return view('panel',compact('consultas'));
    }

    public function obtener_token(Request $request)
    {
        $consultas = $this->consultas->obtener_token();
        return response()->json([
            'token' => $consultas,
        ]);
    }

    public function list_age_disp(Request $request)
    {
        $est_cod='100';
        $consultas = $this->consultas->list_age_disp($est_cod);
        return view('agenda',compact('consultas'));
    }

    public function list_appointment(Request $request)
    {
        $day=date("d");;
        $mounth=date("m");;
        $year=date("Y");;
        $est_cod='100';
        $consultas = $this->consultas->list_appointment($day,$mounth,$year,$est_cod);
        return view('citas',compact('consultas'));
    }

    public function find_appointment_pac(Request $request)
    {
        $pac_rut='14336486-0';
        $est_cod='100';
        $consultas = $this->consultas->find_appointment_pac($pac_rut,$est_cod);
        return view('totem',compact('consultas'));
    }

    public function listuser(Request $request)
    {
        $est_cod='100';
        $consultas = $this->consultas->listuser($est_cod);
        return view('usuario',compact('consultas'));
    }

    public function registrar_usuario(Request $request)
    {
        $datos = [
            'USU_RUT' => $request->input('txt_usu_rut'),
            'USU_NOMBRE' => $request->input('txt_usu_nombre'),
            'USU_APELLIDO' => $request->input('txt_usu_ape'),
            'EMAIL' => $request->input('txt_email'),
            'ROL' => $request->input('cmb_rol'),
            'EST_COD' => $request->input('cmb_estab')
        ];

        try {
            $response = $this->consultas->registrar_usuario($datos);
            $request->session()->flash('success', 'Usuario registrado correctamente');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Error 500: El usuario ya existe');
        }
    
        return redirect()->back();
    }

}
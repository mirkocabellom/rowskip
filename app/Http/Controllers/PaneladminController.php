<?php

namespace App\Http\Controllers;
use App\Repositories\Consultas;
use App\Repositories\ConsultasRs;
use Illuminate\Http\Request;

class PaneladminController extends Controller
{
    protected $consultas;
    protected $consrs;

    public function __construct(Consultas $consultas, ConsultasRs $consrs)
    {
        $this->consultas = $consultas;
        $this->consrs = $consrs;
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

    public function listuser(Request $request)
    {
        $est_cod='100';
        $consultas= $this->consrs->listuser($est_cod);
        return view('usuario',compact('consultas'));
    }

    public function confirmar(Request $request)
    {
        $id = $request->input('id_cita');
    
        try {
            $request->session()->flash('success', 'Cita confirmada exitosamente');
            $resultado = $this->consrs->confirmed_appointment($id);
    
            try {
                return $resultado;
            } catch (\Exception $e) {
                if ($e->getCode() == 403) {
                    return redirect()->back();
                }
                $request->session()->flash('error', $errorMessage);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No se pudo confirmar la cita. Inténtalo de nuevo más tarde.');
        }
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
            $response = $this->consrs->registrar_usuario($datos);
            $request->session()->flash('success', 'Usuario registrado correctamente');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Error 500: El usuario ya existe');
        }
    
        return redirect()->back();
    }

    public function panel_admin_login(Request $request)
    {
        $usu_rut = $request->input('usu_rut');
        $password = $request->input('usu_pass');

        $datos = [
            'USU_RUT' => $usu_rut,
            'PASSWORD' => $password
        ];
        try {
            $usuario = $this->consrs->cons_user($datos);
    
            if ($usuario) {
                $request->session()->flash('success', 'Usuario correcto');
                return redirect()->route('panel');
            } else {
                return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
        }
    
        return redirect()->back();
    }

    public function primera_pass(Request $request)
    {
        $usu_cod = $request->input('usu_cod');
        $password = $request->input('password');
        $estado = 0;

        // Cifrar la contraseña
        $hashedPassword = bcrypt($password);

        $datos = [
            'usu_cod' => $usu_cod,
            'password' => $hashedPassword,
            'estado' => $estado
        ];

        try {
            $response = $this->consrs->primera_password($datos);
            $request->session()->flash('success', 'Contraseña cambiada correctamente');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Error al cambiar la contraseña');
        }

        return redirect()->back();
    }
}
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Response;
use DB;
use Carbon\Carbon;
use App\Helpers\ResponseHelper;
use Illuminate\Support\Str;
use App\Models\Users; 

class UserController extends Controller
{
    public function listuser (Request $request, $est)
    {
        $usuarios = DB::table('Users')
                ->where( 'Users.est_cod', '=', $est )
                ->get();

        if (is_null($usuarios)) {
            return ResponseHelper::sendError('Usuarios not found.');
        }else{
            return $usuarios;
        }
    }

    public function registrar_usuario(Request $request)
    {
        $validatedData = $request->validate([
            'USU_RUT' => 'required',
            'USU_NOMBRE' => 'required',
            'USU_APELLIDO' => 'required',
            'EMAIL' => 'nullable|email',
            'ROL' => 'required',
            'EST_COD' => 'required'
        ]);

        $rut_completo = $request->input('USU_RUT');
        $pr = explode("-", $rut_completo);
        $rut = $pr[0];

        $usuario = Users::where('USU_COD', $rut)->first();
        if ($usuario) {
            // return response()->json(['message' => 'Error to create'], 500);
            return ResponseHelper::sendError('Usuario ya existe.');
        }else {

            $usuario = new Users();
            $usuario->USU_RUT = $request->input('USU_RUT');
            $usuario->USU_COD = $rut;
            $usuario->USU_NOMBRE = $request->input('USU_NOMBRE');
            $usuario->USU_APELLIDO = $request->input('USU_APELLIDO');
            $usuario->EMAIL = $request->input('EMAIL');
            $usuario->ROL = $request->input('ROL');
            $usuario->EST_COD = $request->input('EST_COD');
            $usuario->ESTADO = 1;
            $usuario->PASSWORD = bcrypt(Str::random(10));

            $usuario->save();
            return ResponseHelper::sendSuccess('Usuario creado.');
        }
    }

    public function primera_pass(Request $request)
    {
        $usu_rut = $request->input('usu_rut');
        $password = $request->input('password');

        $hashedPassword = bcrypt($password);

        $usuario = DB::table('Users')
                    ->where('usu_rut', $usu_rut)
                    ->where('estado', 0)
                    ->first();

        if ($usuario) {
            DB::table('Users')
            ->where('usu_rut', $usu_rut)
            ->where('estado', 0)
            ->update(['password' => $hashedPassword, 'estado' => 1]);


            return ResponseHelper::sendSuccess('Contraseña cambiada correctamente');
        } else {
            return response()->json(['message' => 'El usuario ya posee una contraseña inicial'], 400);
        }
    }

    public function cons_user(Request $request)
    {
        $usu_rut = $request->input('usu_rut');
        $password = $request->input('password');

        $usuario = Users::where('usu_rut', $usu_rut)->first();

        if ($usuario && password_verify($password, $usuario->password)) {
            return ResponseHelper::sendSuccess('Success');
        } else {
            return response()->json(['message' => 'error'], 400);
        }
    }

    public function reset_pass (Request $request)
    {
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function validarUsuario(Request $request){
        //Obtenemos el usuario y contrasena
        $usuario = $request->input('usuario');
        $password = $request->input('password');

        switch($usuario){
            case "cliente":
                if($usuario==$password){
                    return redirect(route('cliente'));
                }
            break;
            case "anonimo":
                if($usuario==$password){
                    return redirect(route('anonimo'));
                }
             break;
            case "empleado":
                if($usuario==$password){
                    return redirect(route('empleado'));
                }
            break;
            case "gerente":
                if($usuario==$password){
                    return redirect(route('gerenteUsuarios'));
                }
            break;
            //default: return redirect(route('login'));
        }
        //Retornamos a la vista anterior que es Login
        return redirect()->back();
    }
}

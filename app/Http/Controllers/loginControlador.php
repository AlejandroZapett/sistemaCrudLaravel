<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginControlador extends Controller
{   
    //metodo de login
    public function loginDatos(Request $request){
        $data = $request;
        $user = DB::table('user')->select('id','nombre', 'contrasenia')->where('nombre',$data['nombre']);
        if (empty($user)){
            return 'no estás registrado';
        }
        return 'login de '.$data['nombre'];
    }
    //metodo de registro
    public function registroDatos(Request $request){
        $data = $request;
        $user = DB::table('user')->insert(array(
            'nombre' => $data['nombre'],
            'contrasenia' => $data['contrasenia']
        ));
        return 'registro de '.$data['nombre'];
    }
}


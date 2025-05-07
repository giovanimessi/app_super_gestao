<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
         $titulo = 'Login';

        return view('site.login' ,compact('titulo'));
    }
    public function autenticar(Request $request){
        // Definir as regras de valida��o
        $regras = [
            'usuario' => 'required|email'
        ];
    
        // Mensagens de erro personalizadas
        $feedback = [
            'usuario' => 'O campo usu�rio � obrigat�rio.',

        ];
    
        // Realizar a valida��o
        $request->validate($regras, $feedback);
    }
}

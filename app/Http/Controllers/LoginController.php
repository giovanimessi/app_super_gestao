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
        // Definir as regras de validação
        $regras = [
            'usuario' => 'required|email'
        ];
    
        // Mensagens de erro personalizadas
        $feedback = [
            'usuario' => 'O campo usuário é obrigatório.',

        ];
    
        // Realizar a validação
        $request->validate($regras, $feedback);
    }
}

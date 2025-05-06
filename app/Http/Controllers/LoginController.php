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
        $regras = [
            'usuario' =>'email',
            'senha' => 'required'
        ];
        //mensagem de fadback de validacao
        $feedback = [
            'usuario.email' => 'O campos usuario (e-mail) é obrigatorio',
            'senha.required' => 'O campo senha e obrigatorio'

        ];
  
        $request->validate($regras,$feedback);
        print_r($request->all());
     }
}

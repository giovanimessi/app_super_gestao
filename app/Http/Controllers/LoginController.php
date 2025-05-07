<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {


        $titulo = 'Login';
        
        $erro = '';
      
        if ($request->get('erro') == 1) {
            $erro = 'Usuario ou senha nao existe';

        }
        if ($request->get('erro') == 2) {
            $erro = 'Preencha com seus dados de usuario par ter acesso a pagina.';

        }
        
        

        return view('site.login', compact('titulo', 'erro'));
    }
    public function autenticar(Request $request)
    {
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        //se não passar no validate
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password  = $request->get('senha');

        $user = new User();
        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();


        if (isset($usuario->name)) {

            session_start();

            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else {

            return redirect()->route('site.login', ['erro' => 1]);
        }
    }
    public function sair(){
        Auth::logout(); // Faz logout do usu�rio autenticado
        Session::flush(); // Limpa toda a sess�o
        return redirect('/login'); // Redireciona para a tela de login (ou onde quiser)

    }
}

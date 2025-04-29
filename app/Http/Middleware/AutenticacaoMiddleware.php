<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //  return Response('Acesso negado! Rota exige autenticacao');

            if(!session()->has('user')){
                return redirect()->route('site.login');
            }
              return $next($request);
    }
}

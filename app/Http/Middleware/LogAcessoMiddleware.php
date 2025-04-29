<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Log;
use \App\LoginAcesso;


class LogAcessoMiddleware
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
         // Logando a informação de acesso

      
         $dadosLog = [
            'ip' => $request->ip(),
            'url' => $request->url(),
            'porta' => $request->server->get('REMOTE_PORT'),
            'remote_addr' => $request->server->get('REMOTE_ADDR'),
            'porta' => $request->server->get('REMOTE_PORT'),
              'rota' => $request->server->get('REQUEST_URI'),
            'data' => now(),
        ];
       
        Log::info('Acesso registrado', $dadosLog);
      // Salva no banco
    LoginAcesso::create([
        'log' => json_encode($dadosLog),
    ]);

    return $next($request);


     
    }   
}

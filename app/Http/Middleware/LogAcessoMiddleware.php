<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Log;


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
         Log::info('Acesso registrado', [
            'ip' => $request->ip(),
            'url' => $request->url(),
            'data' => now(),
        ]);
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Secode
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->token;
        if ($token == '$2a$12$KecNKjzqK05GwlMG/bKie.gDAAx7VIIKpoGDQ/TbMwczYDwxxKYFi') {
            return $next($request);
        } else {
            abort(403);
        }
    }
}

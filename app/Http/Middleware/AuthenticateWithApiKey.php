<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AuthenticateWithApiKey
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
        dd($request->bearerToken());
        // $request->headers->add(['Authorization' => "Bearer {$request->access_token}"])

        return $next($request);
    }
}

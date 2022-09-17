<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
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
        header("Access-Control-Allow-Origin: *");
        $response = $next($request);
        $allow = $response->headers->get('Allow');
        // ALLOW OPTIONS METHOD
        if($request->getMethod() == "OPTIONS") {
            $headers = [
                'Access-Control-Allow-Methods'=> $allow,
                'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin, Authorization'
            ];
            // The client-side application can set only headers allowed in Access-Control-Allow-Headers
            // return Response::make('OK', 200, $headers);
            return $response->withHeaders($headers);
        } else {
            return $response;
        }

        // return $next($request)->withHeaders($headers);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $needed='yes')
    {
        header("Access-Control-Allow-Origin: *");

        // ALLOW OPTIONS METHOD
        $headers = [
            'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
        ];
        if($request->getMethod() == "OPTIONS") {
            // The client-side application can set only headers allowed in Access-Control-Allow-Headers
            return Response::make('OK', 200, $headers);
        }

        if ($needed == 'no') {
            return $next($request)->withHeaders($headers);
        }
        try {
            $authToken = $request->input('authtoken', null);
            
            if ($authToken) {
                $request->headers->set('Authorization', 'Bearer ' . $authToken);
            }

            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Invalid token'
                ]), 401)->header('Content-Type', 'text/json');
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Token expired'
                ]), 401)->header('Content-Type', 'text/json');
             }else {
                return response(json_encode([
                    'success' => false,
                    'message' => 'Token not found'
                ]), 404)->header('Content-Type', 'text/json');
            }
        }
        return $next($request)->withHeaders($headers);
    }
}

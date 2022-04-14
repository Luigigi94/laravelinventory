<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
            if(!auth()->check()){
                return response()->json([
                    'status' => 401,
                    'message' => 'Acceso no autorizado'
                ],401);
            }
            if(!$request->has('api_key')){
            return response()->json([
                'status' => 401,
                'message' => 'Acceso no autorizado'
            ], 401);
        }
        if($request->has('api_key')){
            $api_key ="key_cur_prod_aW52ZW50YXJpb2NvbmxhcmF2ZWw=";
            if($request->input("api_key") !== $api_key){
                return response()->json([
                    'status' => 401,
                    'message' => 'Acceso no Autorizado'
                ],401);
            }
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Api
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd("hello world");
        // dd(Auth::guard('api')->user()->id);
        if (!Auth::guard('api')->check()) {
            return response()->json(['message' => 'Vous n\'êtes authentifié'], 401);
        }

        return $next($request);
    }
}

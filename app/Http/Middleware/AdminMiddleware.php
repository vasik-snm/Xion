<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     // Check if the user is authenticated and is an admin
    //     if (!Auth::check() || !Auth::user()->isAdmin()) {
    //         // If not, redirect to login or any other route
    //         return redirect()->route('login');
    //     }

    //     // If the user is authenticated and is an admin, proceed with the request
    //     return $next($request);
    //}
}

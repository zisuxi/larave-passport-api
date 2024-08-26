<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Correct import

class StoreUserInSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // $name = "atif rehman";
        // if ($name == "atif rehman") {
        //     Session::put('user', $name); // Correct usage of Session facade
        // }

        return $next($request);
    }
}

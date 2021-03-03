<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "csc" && Auth::guard($guard)->check()) {
            return redirect('/csc');
        }

        if ($guard == "forwarder" && Auth::guard($guard)->check()) {
            return redirect('/forwarder');
        }

        if ($guard == "circle_officer" && Auth::guard($guard)->check()) {
            return redirect('/circle_officer');
        }

        if ($guard == "mandal_officer" && Auth::guard($guard)->check()) {
            return redirect('/mandal_officer');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}

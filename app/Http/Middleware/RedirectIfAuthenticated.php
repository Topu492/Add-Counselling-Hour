<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd(Auth::user() );
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->role->id == 1) {
                return redirect(route('admin.dashboard'));

            } elseif (Auth::user()->role->id == 2) {
                return redirect(route('doctor.dashboard'));

            } elseif (Auth::user()->role->id == 3) {
                return redirect(route('nurse.dashboard'));

            } elseif (Auth::user()->role->id == 3) {
                return redirect(route('search.doctor'));
            }
        }

        return $next($request);
    }
}

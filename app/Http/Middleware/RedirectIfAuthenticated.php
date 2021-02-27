<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if (Auth::guard($guard)->check() && Auth::user()->user_type == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->user_type == 'user') {
            return redirect()->route('user.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->user_type == 'agent') {
            return redirect()->route('agent.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->user_type == 'serviceprovider') {
            return redirect()->route('serviceprovider.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->user_type == 'corporate') {
            return redirect()->route('corporate.dashboard');
        } else{
            return $next($request);
        }
    }
}

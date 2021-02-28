<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if(Auth::check() && Auth::user()->user_type == 'user'){
            return $next($request);
        } else {
            return redirect()->route('home');
        }


        // if (Auth::guard($guard)->check() && Auth::user()->user_type == 'normal-user') {
        //     // return $next($request);
        //     return redirect()->route('user.dashboard');
        // }
        // else{
        //     return redirect()->route('home');
        // }
    }

    // public function handle($request, Closure $next, $guard = null)
    // {
    //     if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) {
    //         return redirect()->route('admin.dashboard');
    //     } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 2){
    //         return redirect()->route('user.home');
    //     } else {
    //         return $next($request);
    //     }
    // }

}

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
        if (Auth::guard($guard)->check()) {
            //return redirect(RouteServiceProvider::HOME);


            if(Auth::user()->isadmin =='true'){
                return redirect()->route('admin.home');
            }

            elseif(Auth::user()->isadmin == 'false'){
                return redirect()->route('home');
            }
           
            //redirection 
        }

        return $next($request);
    }
}

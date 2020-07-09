<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminLoginMiddlaware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->roles == 1){
            return $next($request);
        }
        elseif (Auth::user()->roles == 2) {
            return redirect('company-profile/companies');
        }
        else {
            return redirect('/');
        }
    }
}

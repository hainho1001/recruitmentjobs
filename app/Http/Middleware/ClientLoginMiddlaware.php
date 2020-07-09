<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ClientLoginMiddlaware
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
        if (Auth::user()->roles == 2) {
            return $next($request);
        }
        elseif (Auth::user()->roles == 1) {
            return redirect('dashboard');
        }
        else {
            return redirect('/');
        }
    }
}

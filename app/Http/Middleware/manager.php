<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class manager
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
        if(Auth::check() && Auth::user()->level=='manager'){
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}

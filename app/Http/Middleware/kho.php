<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class kho
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
        if(Auth::check() && Auth::user()->level=='kho'){
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}

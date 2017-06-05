<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class security
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if(Auth::check() && Auth::user()->level=='security'){
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if((Auth::user()->role->name != $role) ||  Auth::user()->role->name == 'khach'){
            return redirect()->route('home');
        }
        return $next($request);
    }
}

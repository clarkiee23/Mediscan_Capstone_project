<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;


class CheckedifLoggedOut
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route("loginpage");
        }
            return $next($request);
    }
}

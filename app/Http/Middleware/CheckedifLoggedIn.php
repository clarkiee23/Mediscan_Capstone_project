<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckedifLoggedIn
{
    
    public function handle(Request $request, Closure $next)
    {
        $role = $request->session()->get('role');

        if(Auth::check() && $role == "admin"){
            return redirect()->route("getUserupdate");
        }
        else if(Auth::check() && $role == "user"){
            return redirect()->route("user_consultation_record");
        }
            return $next($request);
    }
}

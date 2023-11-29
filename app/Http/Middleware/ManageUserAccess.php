<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManageUserAccess
{

    public function handle(Request $request, Closure $next): Response
    {
        $role = $request->session()->get('role');

        if($role == "user"){
            return redirect()->route("user_consultation_record");
        }
        else if($role == "admin"){
            return redirect()->route("getUserupdate");
        }
        
        return $next($request);
    }
}

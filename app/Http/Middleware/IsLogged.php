<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsLogged
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return $next($request);
        }
        else{
            throw new AuthenticationException();
        }
    }
}

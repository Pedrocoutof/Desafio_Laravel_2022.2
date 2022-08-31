<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $authUser = User::findOrFail(Auth::user()->getAuthIdentifier());
        if(strcmp($authUser->permission, 'administrator') == 0){
            return $next($request);
        }
        else{
            return redirect('erro-permissao');
        }
    }
}

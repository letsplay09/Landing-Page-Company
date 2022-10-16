<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsOperator
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->level == "Operator") {
            return $next($request);
        }
        abort(404);
    }
}

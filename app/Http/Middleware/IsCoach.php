<?php

namespace App\Http\Middleware;

use App\RoleUser;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsCoach
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
        if( Auth::user()->roles->keyBy('id')->has(2) === true)
        {
            return $next($request);
        }

        return redirect('/');

    }
}

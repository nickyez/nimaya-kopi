<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class MemberAuth extends Middleware
{
    /**
     * Handle a incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_admin == 0) {
            return $next($request);
        }
        return redirect()->route('memberLogin');
    }
}

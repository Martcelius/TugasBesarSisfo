<?php

namespace App\Http\Middleware;

use Closure;
//Auth Facade
use Auth;
class AuthenticateAdmin
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
        if (! Auth::guard('employee')->check()) {
           return redirect('/admin_login');
       }
        return $next($request);
    }
}

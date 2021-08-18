<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Auth::check()) {
            if (Auth::user()->is_role == 4) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect(url('login'));
            }
        } else {
            Auth::logout();
            return redirect(url('login'));
        }
    }
}

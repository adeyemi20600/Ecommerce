<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('user') && (url('') == $request->url() || url('login') == $request->url() || url('registration') == $request->url() || url('home') == $request->url())) {
            return back();
        }
        return $next($request);
    }
}
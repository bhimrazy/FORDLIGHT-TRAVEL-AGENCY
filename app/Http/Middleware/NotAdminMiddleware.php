<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class NotAdminMiddleware
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
        if (Auth::user()->usertype !='admin') {
            return $next($request);
        } else {
            return redirect()->back()->with('warning','You don\'t have permission to perform this action.');
        }
    }
}

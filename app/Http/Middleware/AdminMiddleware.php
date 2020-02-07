<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddleware
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
        if (Auth::user()->usertype=='admin') {
            return $next($request);
        } else {
            return redirect()->back()->with('warning','You don\'t have permission to perform this action.');
        }
        
    }
}

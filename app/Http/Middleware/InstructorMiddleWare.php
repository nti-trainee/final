<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InstructorMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->routeIs('enrollements.store') ) {
            return $next($request);
            
        }
        if (session()->has('user') && session('user')->type === 'instructor') {
            return $next($request);
        }

        return back()->with('error', __("site.not_allowed"));
    }
}

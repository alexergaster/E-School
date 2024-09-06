<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ParentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('parent')->check()) {
            $parent = Auth::guard('parent')->user();

            $id = $request->route()->parameter('id');

            if ($parent->id == $id) {
                return $next($request);
            }

            return redirect()->back();
        }
        return redirect()->route('home.index');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::guard('teacher')->check()) {
            $teacher = Auth::guard('teacher')->user();

            $id = $request->route()->parameter('id');

            if($teacher->id == $id){
                return $next($request);
            }

            return redirect()->back();
        }
        return redirect()->route('home.index');
    }
}

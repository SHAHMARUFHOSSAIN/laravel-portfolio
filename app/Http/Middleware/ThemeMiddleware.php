<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThemeMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('theme')) {
            $theme = session('theme');
        } else {
            $theme = 'light';
        }
        
        $request->attributes->set('theme', $theme);
        
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Role
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login'); // kalau gak login
        }
        
        if (Auth::user()->role !== $role) {
            abort(403, 'Forbidden'); // kalau bukan role yang dimaksud
        }
        
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || !Auth::user()->hasRole($role)) {
            // Redirect to unauthorized page or return 403
            return redirect('login'); // Change this to your unauthorized page if needed
        }

        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->email != 'admin@gmail.com') {
            // Redirect non-admins to the home page with an error message
            return redirect('home')->with('error', 'Access denied. Only admins can access that page.');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login'); // Redirect to login if not logged in
        }

        return $next($request); // Allow access if logged in
    }
}

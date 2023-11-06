<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('loginname')) {
            if ($request->session()->has('loginimage')) {
                // Admin is logged in, proceed with the request.
                 return $next($request);
            }
        }

        // Redirect to a different page (e.g., login page for non-admin users).
        return redirect('/adminLogin'); // You can change this URL as needed.
    }
}

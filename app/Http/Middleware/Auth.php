<?php

namespace App\Http\Middleware;

use Closure;

class Auth
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            // ユーザーはログインしています
            return $next($request);
        }
        return redirect('/admin/login');
    }
}

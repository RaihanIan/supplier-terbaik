<?php
// app/Http/Middleware/EnsureUserRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Jika pengguna belum login atau perannya tidak sesuai, larang akses
        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect('/');  // Atau ke halaman lain sesuai kebutuhan
        }

        return $next($request);
    }
}

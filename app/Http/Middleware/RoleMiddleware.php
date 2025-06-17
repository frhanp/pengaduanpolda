<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string $role  // Parameter ini akan kita isi di file route (misal: 'admin' atau 'reskrim')
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // 1. Pastikan user sudah login
        if (!Auth::check()) {
            return redirect('login');
        }

        // 2. Cek apakah role user yang login sesuai dengan role yang dibutuhkan oleh rute
        // Kita gunakan ->value karena 'role' di model User adalah Enum
        if ($request->user()->role->value === $role) {
            // 3. Jika sesuai, lanjutkan request ke controller
            return $next($request);
        }

        // 4. Jika tidak sesuai, hentikan request dan tampilkan halaman error 403 (Forbidden)
        abort(403, 'AKSES DITOLAK: ANDA TIDAK MEMILIKI HAK AKSES UNTUK HALAMAN INI.');
    }
}

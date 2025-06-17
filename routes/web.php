<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StplController;
use App\Http\Controllers\Reskrim\DashboardController as ReskrimDashboardController;


Route::get('/', [PengaduanController::class, 'index'])->name('landing');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // == RUTE KHUSUS ADMIN ==
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/pengaduan/{pengaduan}', [AdminDashboardController::class, 'show'])->name('dashboard.show');
        
        // Aksi untuk memproses pengaduan
        Route::post('/pengaduan/{pengaduan}/verify', [AdminDashboardController::class, 'verify'])->name('dashboard.verify');
        Route::post('/pengaduan/{pengaduan}/forward', [AdminDashboardController::class, 'forward'])->name('dashboard.forward');

        // Rute untuk membuat STPL
        Route::post('/pengaduan/{pengaduan}/stpl', [StplController::class, 'store'])->name('stpl.store');
    });

    // == RUTE KHUSUS RESKRIM ==
    Route::middleware('role:reskrim')->prefix('reskrim')->name('reskrim.')->group(function () {
        Route::get('/dashboard', [ReskrimDashboardController::class, 'index'])->name('dashboard');
        Route::get('/pengaduan/{pengaduan}', [ReskrimDashboardController::class, 'show'])->name('dashboard.show');

        // Aksi untuk update status
        Route::post('/pengaduan/{pengaduan}/update-status', [ReskrimDashboardController::class, 'updateStatus'])->name('dashboard.updateStatus');
    });
});

require __DIR__.'/auth.php';

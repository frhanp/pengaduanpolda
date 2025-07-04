<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StplController;
use App\Http\Controllers\Reskrim\DashboardController as ReskrimDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| File ini berisi semua rute untuk aplikasi web Anda.
|
*/

//======================================================================
// RUTE PUBLIK (Dapat Diakses Semua Pengunjung)
//======================================================================

Route::middleware('web')->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('landing');
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
    Route::get('/peta-rawan', [PengaduanController::class, 'petaRawan'])->name('peta.rawan');
    Route::get('/lacak-aduan', [PengaduanController::class, 'lacak'])->name('lacak.aduan');
    
    // Jika Anda punya rute lacak, masukkan juga di sini
    // Route::get('/lacak', [LacakController::class, 'index'])->name('lacak.index');
});

// Halaman utama untuk membuat pengaduan
// Route::get('/', [PengaduanController::class, 'index'])->name('landing');
// Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

// // Halaman khusus untuk melihat peta sebaran kerawanan
// Route::get('/peta-rawan', [PengaduanController::class, 'petaRawan'])->name('peta.rawan');

// Route::get('/lacak-aduan', [PengaduanController::class, 'lacak'])->name('lacak.aduan');


//======================================================================
// RUTE SETELAH LOGIN
//======================================================================

// Rute dashboard umum yang memerlukan verifikasi email
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grup untuk semua rute yang memerlukan pengguna untuk login
Route::middleware('auth')->group(function () {

    // --- Rute Profil Pengguna ---
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // == RUTE KHUSUS ADMIN ==
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        // Dashboard untuk statistik
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // [BARU] Rute untuk Manajemen Pengaduan
        Route::get('/pengaduan', [AdminDashboardController::class, 'listPengaduan'])->name('pengaduan.list');
        Route::get('/pengaduan/{pengaduan}', [AdminDashboardController::class, 'show'])->name('pengaduan.show');

        // Aksi untuk memproses pengaduan (tidak berubah)
        Route::post('/pengaduan/{pengaduan}/verify', [AdminDashboardController::class, 'verify'])->name('pengaduan.verify');
        Route::post('/pengaduan/{pengaduan}/forward', [AdminDashboardController::class, 'forward'])->name('pengaduan.forward');

        // [PERUBAHAN] Rute untuk Manajemen STPL
        Route::get('/stpl', [StplController::class, 'index'])->name('stpl.index');
        // Mengembalikan rute untuk menampilkan form
        Route::get('/stpl/create/{pengaduan}', [StplController::class, 'create'])->name('stpl.create');
        Route::post('/stpl', [StplController::class, 'store'])->name('stpl.store');
        Route::get('/stpl/{stpl}/download', [StplController::class, 'download'])->name('stpl.download');
    });

    // == RUTE KHUSUS RESKRIM ==
    Route::middleware('role:reskrim')->prefix('reskrim')->name('reskrim.')->group(function () {
        // Dashboard untuk ringkasan
        Route::get('/dashboard', [ReskrimDashboardController::class, 'index'])->name('dashboard');

        // [BARU] Rute untuk Manajemen Tugas
        Route::get('/tugas', [ReskrimDashboardController::class, 'listTugas'])->name('tugas.list');
        Route::get('/tugas/{pengaduan}', [ReskrimDashboardController::class, 'show'])->name('tugas.show');

        // Aksi untuk update status
        Route::post('/tugas/{pengaduan}/update-status', [ReskrimDashboardController::class, 'updateStatus'])->name('tugas.updateStatus');
    });
});


//======================================================================
// RUTE AUTENTIKASI BAWAAN (Login, Register, dll)
//======================================================================
require __DIR__ . '/auth.php';

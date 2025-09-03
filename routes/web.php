<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StplController;
use App\Http\Controllers\Reskrim\DashboardController as ReskrimDashboardController;
use App\Http\Controllers\Reskrim\SuratPernyataanController;
use App\Http\Controllers\UploadTestController;

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
    Route::get('/perbaiki-laporan/verifikasi/{pengaduan}', [PengaduanController::class, 'showVerificationForm'])->name('laporan.verifikasi.form');
    Route::post('/perbaiki-laporan/verifikasi/{pengaduan}', [PengaduanController::class, 'handleVerification'])->name('laporan.verifikasi.handle');

    // [PENAMBAHAN] Rute untuk menampilkan form edit
    Route::get('/perbaiki-laporan/edit/{pengaduan}', [PengaduanController::class, 'showEditForm'])->name('laporan.edit.form');
    // [PENAMBAHAN] Rute untuk memproses update laporan
    Route::post('/perbaiki-laporan/update/{pengaduan}', [PengaduanController::class, 'handleUpdate'])->name('laporan.update.handle');

    Route::get('/profil', [PengaduanController::class, 'showProfil'])->name('page.profil');
    Route::get('/fitur', [PengaduanController::class, 'showFitur'])->name('page.fitur');
    Route::get('/kontak', [PengaduanController::class, 'showKontak'])->name('page.kontak');
});


//======================================================================
// RUTE SETELAH LOGIN
//======================================================================

Route::get('/dashboard', function () {
    $role = Auth::user()->role->value;

    if ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    if ($role === 'reskrim') {
        return redirect()->route('reskrim.dashboard');
    }

    // Fallback jika ada peran lain atau tidak ada peran sama sekali
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

        // [PERUBAHAN] Rute untuk Pengembalian Pengaduan
        Route::post('/pengaduan/{pengaduan}/kembalikan', [AdminDashboardController::class, 'kembalikan'])->name('pengaduan.kembalikan');

        Route::get('/stpl/{stpl}/preview', [StplController::class, 'preview'])->name('stpl.preview');
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

        // [PENAMBAHAN] Rute untuk upload dan download surat pernyataan
        Route::post('/tugas/{pengaduan}/upload-surat', [SuratPernyataanController::class, 'store'])->name('tugas.surat.store');
        Route::get('/surat/{suratPernyataan}/download', [SuratPernyataanController::class, 'download'])->name('surat.download');
    });
});


//======================================================================
// RUTE AUTENTIKASI BAWAAN (Login, Register, dll)
//======================================================================
require __DIR__ . '/auth.php';

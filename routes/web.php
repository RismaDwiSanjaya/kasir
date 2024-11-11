<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\JenisPembayaranController;  // Tambahkan use statement ini
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('layouts.master');  // Halaman landing
});

// Rute dashboard untuk pengguna yang sudah login
Route::get('/dashboard', function () {
    return view('layouts.dashboard'); // Ganti dengan view yang sesuai
})->name('dashboard')->middleware('auth');

// Rute untuk pengguna tamu (guest)
Route::middleware(['guest'])->group(function () {
    // Menampilkan form login
    Route::get('/login', [SesiController::class, 'index'])->name('login');

    // Menangani pengiriman form login (POST)
    Route::post('/login', [SesiController::class, 'login']); // POST ke rute login
});

// Rute untuk pengguna yang sudah terautentikasi
Route::middleware(['auth'])->group(function () {
    // Rute untuk admin
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    
    // Rute untuk petugas
    Route::get('/petugas', [AdminController::class, 'petugas'])->middleware('userAkses:petugas');

    // Rute untuk pimpinan
    Route::get('/pimpinan', [AdminController::class, 'pimpinan'])->middleware('userAkses:pimpinan');
    
    // Rute resource untuk petugas (termasuk index, create, store, edit, update, destroy)
    Route::resource('/petugas', PetugasController::class);
    
    Route::middleware(['auth'])->group(function () {
        Route::resource('jenis_pembayaran', JenisPembayaranController::class);
    });
});

// Rute untuk logout menggunakan POST (lebih aman daripada GET)
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');

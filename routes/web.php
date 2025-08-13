<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AdminController;

// Routes Autentikasi
Route::get('/', [AuthController::class, 'tampilkanLogin'])->name('login');
Route::get('/login', [AuthController::class, 'tampilkanLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'tampilkanDaftar'])->name('register');
Route::post('/register', [AuthController::class, 'daftar']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes Pengguna
Route::middleware(['auth', 'pengguna'])->group(function () {
    Route::get('/pengguna/dashboard', [PenggunaController::class, 'dashboard'])->name('pengguna.dashboard');
    Route::get('/pengguna/input-data', [PenggunaController::class, 'inputData'])->name('pengguna.input-data');
    Route::post('/pengguna/simpan-data', [PenggunaController::class, 'simpanData'])->name('pengguna.simpan-data');
    Route::get('/pengguna/cetak-struk', [PenggunaController::class, 'cetakStruk'])->name('pengguna.cetakStruk');

});

// Routes Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/verifikasi', [AdminController::class, 'daftarVerifikasi'])->name('admin.verifikasi');
    Route::get('/admin/setujui/{id}', [AdminController::class, 'setujuiData'])->name('admin.setujui');
    Route::get('/admin/tolak/{id}', [AdminController::class, 'tolakData'])->name('admin.tolak');
    Route::get('/admin/tagihan', [AdminController::class, 'daftarTagihan'])->name('admin.tagihan');
    Route::get('/admin/buat-tagihan/{id}', [AdminController::class, 'buatTagihan'])->name('admin.buat-tagihan');
});
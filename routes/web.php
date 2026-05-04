<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AdminController;
use App\Models\Pendaftaran;
use App\Models\Aspirasi;

// Landing Pages
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/programs', [LandingController::class, 'programs'])->name('programs');
Route::get('/prestasi', [LandingController::class, 'prestasi'])->name('prestasi');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/daftar', [LandingController::class, 'daftar']);
Route::get('/aspirasi', [AspirasiController::class, 'index']);
Route::post('/aspirasi', [AspirasiController::class, 'store']);
Route::post('/daftar', [PendaftaranController::class, 'store']);

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/anggota', [AuthController::class, 'loginAnggota'])->name('login.anggota');
Route::post('/login/admin', [AuthController::class, 'loginAdmin'])->name('login.admin');
Route::get('/logout/anggota', [AuthController::class, 'logoutAnggota'])->name('logout.anggota');
Route::get('/logout/admin', [AuthController::class, 'logoutAdmin'])->name('logout.admin');

// Anggota Routes (Cookie-based)
Route::prefix('anggota')->group(function () {
    Route::get('/dashboard', [AnggotaController::class, 'dashboard'])->name('anggota.dashboard');
    Route::get('/edit-profile', [AnggotaController::class, 'editProfile'])->name('anggota.edit-profile');
    Route::post('/update-profile', [AnggotaController::class, 'updateProfile'])->name('anggota.update-profile');
    Route::post('/change-password', [AnggotaController::class, 'changePassword'])->name('anggota.change-password');
});

// Admin Routes (Session-based)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/list-anggota', [AdminController::class, 'listAnggota'])->name('admin.list-anggota');
    Route::get('/create-anggota', [AdminController::class, 'createAnggota'])->name('admin.create-anggota');
    Route::post('/store-anggota', [AdminController::class, 'storeAnggota'])->name('admin.store-anggota');
    Route::get('/edit-anggota/{id}', [AdminController::class, 'editAnggota'])->name('admin.edit-anggota');
    Route::post('/update-anggota/{id}', [AdminController::class, 'updateAnggota'])->name('admin.update-anggota');
    Route::get('/delete-anggota/{id}', [AdminController::class, 'deleteAnggota'])->name('admin.delete-anggota');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/update-profile', [AdminController::class, 'updateProfile'])->name('admin.update-profile');
});

// Old Admin Routes (kept for compatibility)
Route::get('/admin/pendaftar', function () {
    $data = Pendaftaran::all();
    return view('admin.pendaftar', compact('data'));
});
Route::get('/admin/aspirasi', function () {
    $data = Aspirasi::latest()->get();
    return view('admin.aspirasi', compact('data'));
});


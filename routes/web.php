<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataPendaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengumumanController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (Auth::user()->role == 'admin') {
        return redirect('/admin/dashboard');
    }
    
    return redirect('/user/dashboard'); // Diarahkan ke user dashboard jika bukan admin
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth');

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/pengumuman', [PengumumanController::class, 'index']);
    Route::post('/admin/pengumuman', [PengumumanController::class, 'store']);
    
});

Route::get('/admin/data-pendaftar', [DataPendaftarController::class, 'index']);
require __DIR__.'/auth.php';

Route::get('/user/formulir', function () {
    return view('user.formulir');
    })->middleware('auth');
    
 Route::get('/admin/formulir', function () {
    return view('admin.formulir'); 
    })->middleware('auth');

Route::get('/user/pengumuman', [PengumumanController::class, 'userIndex'])
    ->middleware('auth')
    ->name('user.pengumuman');
    
Route::get('/formulir', [FormulirController::class, 'create'])
    ->name('formulir.create');

Route::post('/formulir', [FormulirController::class, 'store'])
    ->name('formulir.store');

Route::get('/admin/data-pendaftar/{id}',
    [DataPendaftarController::class, 'show']);

Route::get('/admin/data-pendaftar',
    [DataPendaftarController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    
    // --- RUTE KHUSUS ADMIN ---
    Route::get('/admin/pendaftar/{id}', [AdminController::class, 'show'])->name('admin.pendaftar.show');
    Route::post('/admin/pendaftar/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.pendaftar.status');
    Route::post('/admin/pendaftar/{id}/catatan', [AdminController::class, 'simpanCatatan'])->name('admin.pendaftar.catatan');

    // --- RUTE KHUSUS USER ---
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    
    // (Rute simpan pendaftaran tetap menggunakan FormulirController)
    Route::post('/formulir', [FormulirController::class, 'store'])->name('formulir.store');
});

Route::middleware(['auth'])->group(function () {
    // Ubah AdminController menjadi PengumumanController
    Route::get('/admin/pengumuman', [App\Http\Controllers\PengumumanController::class, 'index'])->name('admin.pengumuman');
    Route::get('/admin/pengumuman/create', [App\Http\Controllers\PengumumanController::class, 'create'])->name('admin.pengumuman.create');
    Route::post('/admin/pengumuman', [App\Http\Controllers\PengumumanController::class, 'store'])->name('admin.pengumuman.store');
});

Route::middleware(['auth'])->group(function () {
  
    Route::get('/user/formulir', [FormulirController::class, 'panduan'])->name('user.formulir.panduan');
    Route::get('/user/formulir/isi', [FormulirController::class, 'create'])->name('user.formulir.create');

    Route::get('/admin/panduan', [AdminController::class, 'panduan'])->name('admin.panduan');
    Route::get('/admin/formulir/create', [AdminController::class, 'create'])->name('admin.formulir.create');
});
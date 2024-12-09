<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PotensiDesaController;


Route::resource('Berita', NewsController::class);
Route::get('/Berita', function () {
    return view('Berita');
});
Route::get('/Statistik', [DashboardController::class, 'index'])->name('Statistik');
Route::get('/potensi-desa', [PotensiDesaController::class, 'index']);
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/posts', [AdminController::class, 'posts'])->name('admin.posts');
});


Route::get('/', function () {
    return view('welcome');
});

<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EkowisataController as AdminEkowisataController;
use App\Http\Controllers\Admin\FaunaController as AdminFaunaController;
use App\Http\Controllers\Admin\FloraController as AdminFloraController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EkowisataController;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/flora', [FloraController::class, 'index'])->name('flora.index');
Route::get('/fauna', [FaunaController::class, 'index'])->name('fauna.index');
Route::get('/ekowisata', [EkowisataController::class, 'index'])->name('ekowisata.index');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

/*
|--------------------------------------------------------------------------
| Login Admin (manual, tanpa Breeze — tidak ada register/lupa password)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Panel Admin (wajib login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('flora', AdminFloraController::class)->except('show');
    Route::resource('fauna', AdminFaunaController::class)->except('show');
    Route::resource('ekowisata', AdminEkowisataController::class)->except('show')->parameters(['ekowisata' => 'ekowisata']);
});

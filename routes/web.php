<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PencegahanController;
use App\Http\Controllers\KeselamatanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\RadioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => 'revalidate','approved'], function()
{
    Route::resource('post', PostController::class)->middleware('auth');
    Route::get('/pengajuan', [PostController::class, 'create'])->name('create')->middleware('auth');
    Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::resource('/pencegahan', PencegahanController::class)->middleware('auth');
    Route::get('/keselamatan', [KeselamatanController::class, 'index'])->name('keselamatan')->middleware('auth');
    Route::get('/radio', [RadioController::class, 'index'])->name('radio')->middleware('auth');
    Route::get('/permohonan',[PermohonanController::class, 'index'])->name('permohonan')->middleware('auth');
    Route::get('/dataPermohonan',[PermohonanController::class, 'permohonanBaru'])->name('dataPermohonan')->middleware('auth');
    Route::get('home', [PostController::class, 'index'])->name('home')->middleware('auth');
    Route::get('/approval', [HomeController::class, 'approval'])->name('approval')->middleware('auth');
    Route::get('/approval2', [HomeController::class, 'unlogin'])->name('unlogin')->middleware('auth');
    Route::get('/profile', [PostController::class, 'profile'])->name('profile')->middleware('auth');
    Route::post('/ubahData', [PostController::class, 'ubahData'])->name('ubahData')->middleware('auth');
    Route::post('/daftar',[PermohonanController::class, 'daftar'])->name('daftar')->middleware('auth');
    Route::get('/cetak', [HomeController::class, 'cetak'])->name('cetak')->middleware('auth');
});

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('register');

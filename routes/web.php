<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'prosesLogin'])->name('login.post');
Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');

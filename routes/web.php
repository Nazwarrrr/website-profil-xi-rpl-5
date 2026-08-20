<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KontakController;

/*
|--------------------------------------------------------------------------
| Web Routes — Website Profil XI RPL 05
|--------------------------------------------------------------------------
| Setiap route diarahkan ke controller sesuai role masing-masing.
*/

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('/profil', [ProfileController::class, 'index'])->name('profil.index');

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

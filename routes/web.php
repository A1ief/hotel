<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ReservasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::get('detail/{id_kamar}', [App\Http\Controllers\UsersController::class, 'view']);

Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});

Auth::routes();

Route::resource('kamar', KamarController::class);
Route::resource('tamu', TamuController::class);
Route::resource('reservasi', ReservasiController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

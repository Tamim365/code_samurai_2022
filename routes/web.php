<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard');
})->name('/');

Route::view('auth', 'auth')->name('auth');

Route::any('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::any('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::any('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');

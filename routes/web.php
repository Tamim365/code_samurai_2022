<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::any('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::any('/auth/login', [AuthController::class, 'login'])->name('auth.login');
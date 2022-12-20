<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/auth/register', [AuthController::class, 'save_user'])->name('auth.register');
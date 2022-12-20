<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard');
})->name('/');

Route::get('pending', 'App\Http\Controllers\UsersController@pending')->name('pending');
Route::get('active', 'App\Http\Controllers\UsersController@active')->name('active');

Route::view('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::any('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::any('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::any('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');


Route::post('accept_user/{id}','App\Http\Controllers\UsersController@accept')->name('user.accept');
Route::post('decline_user/{id}','App\Http\Controllers\UsersController@decline')->name('user.decline');



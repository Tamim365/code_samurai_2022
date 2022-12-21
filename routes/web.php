<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// <<<<<<< HEAD
// // Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
// // Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');




// Route::group(['middleware'=>['AuthCheck']], function(){
//     Route::get('/', function () {
//         return view('dashboard');
//     })->name('/');
    
//     Route::get('pending', 'App\Http\Controllers\UsersController@pending')->name('pending');
//     Route::get('active', 'App\Http\Controllers\UsersController@active')->name('active');
//     Route::get('proposals', 'App\Http\Controllers\ProposalController@proposals')->name('proposals');
//     Route::any('proposals/add', 'App\Http\Controllers\ProposalController@add')->name('proposals.add');
//     Route::get('projects', 'App\Http\Controllers\ProjectController@projects')->name('projects');
    
//     Route::view('/auth', [AuthController::class, 'index'])->name('auth.index');
//     Route::any('/auth/login', [AuthController::class, 'login'])->name('auth.login');
//     Route::any('/auth/register', [AuthController::class, 'register'])->name('auth.register');
//     Route::any('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');
//     Route::get('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');
    
//     Route::post('accept_user/{id}','App\Http\Controllers\UsersController@accept')->name('user.accept');
//     Route::post('decline_user/{id}','App\Http\Controllers\UsersController@decline')->name('user.decline');
//     Route::any('proposals/accept/{id}', 'App\Http\Controllers\ProposalController@accept')->name('proposals.accept');
//     Route::any('proposals/decline/{id}', 'App\Http\Controllers\ProposalController@decline')->name('proposals.decline');

// });    




// =======
Route::get('/', function () {
    return view('dashboard');
})->name('/');

Route::get('pending', 'App\Http\Controllers\UsersController@pending')->name('pending');
Route::get('active', 'App\Http\Controllers\UsersController@active')->name('active');
Route::get('proposals', 'App\Http\Controllers\ProposalController@proposals')->name('proposals');
Route::any('proposals/add', 'App\Http\Controllers\ProposalController@add')->name('proposals.add');
Route::get('projects', 'App\Http\Controllers\ProjectController@projects')->name('projects');

Route::view('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::any('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::any('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::any('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');


Route::post('accept_user/{id}','App\Http\Controllers\UsersController@accept')->name('user.accept');
Route::post('decline_user/{id}','App\Http\Controllers\UsersController@decline')->name('user.decline');
Route::any('proposals/accept/{id}', 'App\Http\Controllers\ProposalController@accept')->name('proposals.accept');
Route::any('proposals/decline/{id}', 'App\Http\Controllers\ProposalController@decline')->name('proposals.decline');
Route::get('posts', 'App\Http\Controllers\PostController@create')->name('posts');
Route::any('posts/add', 'App\Http\Controllers\PostController@add')->name('posts.add');

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\User;

Route::get('/', function () {
    return view('home');
})->middleware('auth');


    // LOGIN Y REGISTER
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

    // USUARIO
Route::get('/configuracion', [UserController::class, 'config'])
    ->middleware('auth')
    ->name('user.update');

Route::get('/perfil/{id}', [UserController::class, 'profile'])
    ->name('user.profile');

Route::get('/gente/{search?}', [UserController::class, 'index'])
    ->name('user.index');

    Route::post('/gente', [SessionsController::class, 'store'])
    ->name('login.store');

    // IMAGENES
Route::get('/subir-imagen', [ImageController::class, 'create'])
    ->middleware('auth')
    ->name('image.create');

Route::get('/user.avatar', [ImageController::class, 'avatar'])
    ->name('image.save');

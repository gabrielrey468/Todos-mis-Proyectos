<?php

//use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PostController::class, 'index'] );
    //return view('welcome');

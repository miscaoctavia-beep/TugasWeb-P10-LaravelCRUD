<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', [PageController::class, 'layout']);

Route::get('/contact', [PageController::class, 'contact']);

Route::resource('posts', PostController::class);
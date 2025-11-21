<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', [HolaController::class, 'index']);

Route::resource('articles', ArticleController::class);

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
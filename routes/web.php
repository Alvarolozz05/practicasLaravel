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

Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
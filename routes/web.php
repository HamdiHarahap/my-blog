<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/{blog:slug}', [BlogController::class, 'single'])->name('blog.slug');
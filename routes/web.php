<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegistForm'])->name('regist');
Route::post('/register', [AuthController::class, 'regist'])->name('register.post');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{blog:slug}', [BlogController::class, 'single'])->name('blog.slug');
    Route::post('/blog/{blog:slug}/comment', [CommentController::class, 'store'])->name('comment.store');
});

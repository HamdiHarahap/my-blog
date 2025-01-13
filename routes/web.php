<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegistForm'])->name('regist');
Route::post('/register', [AuthController::class, 'regist'])->name('register.post');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        $account = Auth::user();
        return view('welcome', compact('account'));
    })->name('home');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{blog:slug}', [BlogController::class, 'single'])->name('blog.slug');
    Route::post('/blog/{blog:slug}/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::delete('/blog/{blog:slug}/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
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

    Route::get('/admin/dashboard', [AdminController::class, 'dataDashboard'])->name('admin');
    Route::get('/admin/manage/tambah', function () {
        return view('admin.tambah', [
            'title' => 'Tambah Tulisan',
            'active' => 'manage',
            'back' => true,
        ]);
    });
    Route::get('/admin/manage/edit/{id}', function ($id) {
        $data = Blog::where('id', $id)->first();
        return view('admin.edit', [
            'title' => 'Tambah Tulisan',
            'active' => 'manage',
            'back' => true,
            'data' => $data,
        ]);
    });
    Route::get('/admin/users', [AdminController::class, 'showUser'])->name('admin.user');
    Route::get('/admin/comments', [AdminController::class, 'showComment'])->name('admin.comment');
    Route::get('/admin/manage', [AdminController::class, 'manage'])->name('admin.manage');
    Route::delete('/admin/manage/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::post('/admin/manage', [AdminController::class, 'store'])->name('admin.store');
    Route::put('/admin/manage/edit/{id}', [AdminController::class, 'update'])->name('admin.update');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{blog:slug}', [BlogController::class, 'single'])->name('blog.slug');
    Route::post('/blog/{blog:slug}/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::delete('/blog/{blog:slug}/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

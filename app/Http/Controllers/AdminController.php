<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manage() 
    {
        $data = Blog::orderBy('id', 'asc')->get();

        return view('admin.kelola', [
            'title' => 'Kelola',
            'active' => 'manage',
            'data' => $data,
            'back' => false,
        ]);
    }

    public function destroy(string $id)
    {
        Blog::where('id', $id)->delete();
        return redirect()->route('admin.manage');
    }
    
    public function store(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'body' => $request->input('body'),
        ];

        Blog::create($data);
        return redirect()->route('admin.manage');
    }

    public function update(Request $request, string $id)
    {
        $data = [
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'body' => $request->input('body'),
        ];

        Blog::where('id', $id)->update($data);
        return redirect()->route('admin.manage');
    }

    public function showUser()
    {
        $users = User::where('email_verified_at', null)->get();
        $data = [
            'title' => 'User',
            'active' => 'user',
            'data' => $users,
            'back' => false,
        ];

        return view('admin.user', $data);
    }

    public function showComment()
    {
        $comments = Comment::orderBy('id', 'asc')->get();
        $data = [
            'title' => 'Comments',
            'active' => 'comments',
            'data' => $comments,
            'back' => false,
        ];
        return view('admin.comment', $data);
    }

    public function dataDashboard()
    {
        $newBlog = Blog::orderBy('created_at', 'desc')->first();
        $countBlog = Blog::count();
        $countUser = User::count();
        $countComment = Comment::count();
        $mostCommentedBlog = Blog::withCount('comments')
        ->orderBy('comments_count', 'desc')
        ->first();
        $mostActiveUser = User::withCount('comments')
        ->orderBy('comments_count', 'desc')
        ->first();
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'back' => false,
            'newBlog' => $newBlog,
            'countBlog' => $countBlog,
            'countUser' => $countUser,
            'countComment' => $countComment,
            'mostCommentedBlog' => $mostCommentedBlog,
            'mostActiveUser' => $mostActiveUser,
        ];

        return view('admin.dashboard', $data);
    }
}

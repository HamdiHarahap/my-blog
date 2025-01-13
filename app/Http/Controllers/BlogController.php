<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index() 
    {
        $data = Blog::orderBy('id', 'asc')->get();
        $account = Auth::user();
        return view('blogs', [
            'title' => 'Blogpage',
            'data' => $data,
            'account' => $account
        ]);
    }   

    public function single($slug)
    {
        $data = Blog::where('slug', $slug)->first();
        $comment = Comment::where('blog_id', $data->id)->get();
        $user = Auth::user();
        $account = Auth::user();
        return view('blog', [
            'title' => 'Blogpage',
            'blog' => $data,
            'user' => $user,
            'comment' => $comment,
            'account' => $account
        ]);
    }
}

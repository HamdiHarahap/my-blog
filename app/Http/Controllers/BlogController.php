<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() 
    {
        $data = Blog::orderBy('id', 'asc')->get();
        return view('blogs', [
            'title' => 'Blogpage',
            'data' => $data
        ]);
    }   

    public function single($slug)
    {
        $data = Blog::where('slug', $slug)->first();
        return view('blog', [
            'title' => 'Blogpage',
            'blog' => $data
        ]);
    }
}

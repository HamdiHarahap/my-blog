<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() 
    {
        $data = Blog::orderBy('id', 'asc')->get();
        return view('blog', [
            'title' => 'Blogpage',
            'data' => $data
        ]);
    }   
}

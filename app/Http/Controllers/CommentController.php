<?php

namespace App\Http\Controllers;

use id;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $slug)
    {
        $request->validate([
            'komentar' => 'required|string|max:1000',
        ]);

        $blog = Blog::where('slug', $slug)->first();

        if (!$blog) {
            return redirect()->route('blog')->with('error', 'Blog tidak ditemukan.');
        }

        Comment::create([
            'komentar' => $request->komentar,
            'user_id' => $request->user_id,  
            'blog_id' => $blog->id,
        ]);

        // Redirect kembali ke blog yang sesuai
        return redirect()->route('blog.slug', $blog->slug)->with('success', 'Komentar berhasil ditambahkan!');
    }


}

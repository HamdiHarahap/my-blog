<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
}

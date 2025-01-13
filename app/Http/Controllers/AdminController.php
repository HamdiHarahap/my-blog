<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
}

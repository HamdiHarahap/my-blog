<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegistForm()
    {
        return view('auth.register');
    }

    public function regist(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required',
            'password' => 'required',
            'confirm' => 'required|same:password'
        ], [
            'name.required' => 'Username harus diisi',
            'name.min' => 'Username memiliki minimal 3 karakter',
            'name.max' => 'Username memiliki maksimal 20 karakter',
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
            'confirm.required' => 'Konfirmasi password harus diisi',
            'confirm.same' => 'Konfirmasi password tidak sama dengan password'
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ];  

        User::create($data);
        return redirect()->route('login');  
    }

    public function login(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Silahkan isi username',
            'password.required' => 'Silahkan isi password',
        ]);

        $user = User::where('name', $request->input('name'))->first();

        if(!$user || !Hash::check($request->input('password'), $user->password)) {
            return back()->withErrors(['login_error' => 'Username atau password salah'])->withInput();
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}

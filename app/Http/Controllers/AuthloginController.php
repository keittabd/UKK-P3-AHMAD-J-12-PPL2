<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthloginController extends Controller
{
    public function create()
    {
        return view('Login', [
            'title' => 'Login',
            'activate' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
       ]);

       $messages = [
        'required' => ':attribute wajib diisi!!!',
        'unique' => ':attribute sudah ada yang pakai cuy!!!',
        'username' => 'Format username tidak valid cuy!!!',
        'confirmed' => 'Konfirmasi password tidak sama cepet beneriin!!!',
    ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } 

       return back()->withError('error', 'Login gagal');
    }

        public function logout(Request $request): RedirectResponse
    {
        Auth::Logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/Login');
    }
}

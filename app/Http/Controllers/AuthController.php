<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function create()
    {
        return view('Register', [
            'title' => 'Register',
            'activate' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'password_confirmation' => 'required|min:5|max:255|same:password',
        ]);

        $messages = [
            'required' => ':attribute wajib diisi!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'unique' => ':attribute sudah ada yang pakai cuy!!!',
            'email' => 'Format email tidak valid cuy!!!',
            'confirmed' => 'Konfirmasi password tidak sama cepet beneriin!!!',
        ];

        $validatedData['password'] = Hash::make($validatedData['password']);
    
        User::create($validatedData);

        $request = session();
        $request->flash('success', 'Registration successfull! Please login');

        return redirect('/Login');
    }
} 
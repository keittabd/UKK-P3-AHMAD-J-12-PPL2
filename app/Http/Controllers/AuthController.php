<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class AuthController extends Controller
{
    public function index()
    {
        return view('Register', [
            'title' => 'Register',
            'activate' => 'register'
        ]);
    }


    public function store(Request $request)
    {

        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users,username|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255|confirmed',
            'password_confirmation' => 'required|min:8|max:255|confirmed',
        ];
    
        // Define custom error messages
        $messages = [
            'required' => ':attribute wajib diisi bitchh!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'unique' => ':attribute sudah ada yang pakai cuy!!!',
            'email' => 'Format email tidak valid cuy!!!',
            'confirmed' => 'Konfirmasi password tidak sama cepet beneriin!!!',
        ];
    
        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Create new user instance
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_confirmation = Hash::make($request->password_confirmation);
    
        // Save the user to the database
        $user->save();

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/Login');
        } else {
            dd($request->all());
        }
    
        // Authenticate the user
        auth()->login($user);

        return redirect()->intended('/login');
    
        // Redirect to success page or view
        return view('/Login', ['data' => $request]);
    }

}    
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function Register()
    {
        return view('Register');
    }

    public function RegisterPost(Request $request)
    {
        $user = new User();

        $user->Name = $request->name;
        $user->Username = $request->username;
        $user->Email = $request->email;
        $user->Password = Hash::make($request->password);
        $user->Confirm_password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register succesfully');

    }

    public function Login()
    {
        return view('Login');
    }

}
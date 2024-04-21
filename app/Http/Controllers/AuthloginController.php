<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthloginController extends Controller
{
    public function Login()
    {
        return view('Login', [
            'title' => 'Login',
            'activate' => 'Login'
        ]);
    }
    
}

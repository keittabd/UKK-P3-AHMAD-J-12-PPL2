<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman_registerController extends Controller
{
    public function index(){
        return view('halaman_register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|max:255',
            'Username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'Email' => 'required|email|unique:users',
            'Password' =>'required|min:5|max:255',
            'Confirm password' => ['required', 'confirmed', 'password::max(225)'],
        ]);

        dd($request->all());
    }
} 

<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;


class AccountController extends Controller
{
    public function Account()
    {
        return view('Account', [
            'title' => 'Account',
            'activate' => 'Account'
        ]);
    }

    public function au(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'nomor' => 'required'
        ]);


    }
}
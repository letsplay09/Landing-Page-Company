<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->level == "Admin") {
                return redirect('kelurahan');
            } else if (Auth::user()->level == "Operator") {
                return redirect('pasien');
            }
        }
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->level == "Admin") {
                return redirect('kelurahan');
            } else if (Auth::user()->level == "Operator") {
                return redirect('pasien');
            }
        }

        return back()->with('loginError', 'Please check again your email or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

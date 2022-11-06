<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // * Admin Authentication Controller
    public function index()
    {
        return view('admin.page.login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/admin');
        }
        return redirect()->route('login')->with('status','Username dan Password salah');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
}

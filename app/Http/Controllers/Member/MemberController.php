<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;

class MemberController extends Controller
{
    public function login()
    {
        return view('member.page.login');
    }
    public function register()
    {
        return view('member.page.register');
    }
    public function authLogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))){
            if (Auth::user()->is_admin != 0){
                Auth::logout();
                return redirect()->route('memberLogin')->with('status','Hanya Member yang dapat masuk');
            }
            return redirect('/');
        }
        return redirect()->route('memberLogin')->with('status','Email dan Password salah');
    }
    public function postRegister(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->photo =  $request->file('photo')->store('user');
        $user->is_admin = 0;
        $user->save();
        return redirect()->route('memberLogin')->with('status','Register Berhasil, Silahkan Login');
    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
}

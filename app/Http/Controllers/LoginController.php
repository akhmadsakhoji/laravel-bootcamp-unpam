<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $param = [
            "title" => "Login",
            'moduleName' => 'login',
        ];
        return view("Login", $param);
    }

    public function signin(Request $request)
    {
        $credentials = $request->validate(
            [
                "email" => "required|email",
                "password" => "required"
            ]
        );
        // @dd('asdfaw');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        // @dd('asdfaw');
        return back()->with('loginerror', 'Login Gagal');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(url('login'));
    }
}

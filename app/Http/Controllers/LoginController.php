<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function store(Request $request)
    {
        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ])) {
            $request->session()->regenerate();
            return redirect()->intended("/");
        }

        return back()->withErrors([
            "email" => "Email atau password salah",
            "password" => "Email atau password salah",
        ]);
    }
}

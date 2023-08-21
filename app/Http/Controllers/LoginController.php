<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $validasiData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validasiData)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        // $request->session()->invalidate(); // cara 1
        // $request->session()->regenerateToken(); // cara 1
        // CARA 1 Harus inisiasi parameter $request pada fungsi Request

        request()->session()->invalidate(); // cara 2
        request()->session()->regenerateToken(); // cara 2
        // CARA 2 tanpa inisiasi parameter, cukup ambil fungsi request()

        return redirect('/');
    }
}

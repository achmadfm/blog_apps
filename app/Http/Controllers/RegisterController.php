<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //    $validasiData['password'] = bcrypt($validasiData['password']); cara 1
        $validasiData['password'] = Hash::make($validasiData['password']); // cara 2
        User::create($validasiData);

        //  $request->session()->flash('success', 'Registration Complete! Please Login'); cara 1

        return redirect('/login')->with('success', 'Registration Complete! Please Login'); // cara 2
    }
}

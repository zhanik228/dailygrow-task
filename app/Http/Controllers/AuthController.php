<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect('/')->with([
                'username' => $request->user()->username
            ]);
        }

        return redirect()->back()->withErrors([
            'login' => 'Email or password is not correct'
        ]);
    }

    public function register(Request $request) {
        $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $newUser = User::create([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'created_at' => now(),
            'updated_at' => null,
        ]);

        Auth::login($newUser);

        return redirect('/')->with([
            'username' => $newUser->username
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        return redirect('/');
    }
}

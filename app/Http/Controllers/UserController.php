<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index ()
    {
        return view('pages.login.index');
    }

    public function login (LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Email or password is incorrect'
        ]);

    }

    public function logout ()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
    //
}

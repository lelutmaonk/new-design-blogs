<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:3', 'max:12']
        ]);

        // bycrypt
        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success', 'Registration Success');

        return redirect('/login')->with('success', 'Registration Success');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function create()
    {
        return Inertia::render('auth/Register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min: 6'
        ]);

        $newUser = [
            'id' => Str::uuid()->toString(),
            'names' => $request->names,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::insert($newUser);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        return redirect('/');
    }
}

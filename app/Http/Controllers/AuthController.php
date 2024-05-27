<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'username' => 'required|unique:users|min:3|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'username' => $validatedData['username'],
            'name' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Log in the user after registration
        Auth::login($user);

        // Redirect to a specific page after successful registration
        return redirect()->route('index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan pengguna ke halaman index
            return redirect()->route('user.index');
        }

        // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan kesalahan
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}

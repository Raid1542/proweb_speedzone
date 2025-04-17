<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // ganti dengan halaman tujuan
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    public function showRegisterForm()
{
    return view('register');
}

public function register(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email|unique:users,email',
        'username' => 'required|string|unique:users,username',
        'password' => 'required|confirmed|min:6',
    ]);

    $user = \App\Models\User::create([
        'email' => $validated['email'],
        'username' => $validated['username'],
        'password' => bcrypt($validated['password']),
    ]);

    Auth::login($user); // Auto login setelah register

    return redirect('/dashboard'); // Ganti sesuai tujuan kamu
}

public function showResetPasswordForm()
{
    return view('reset-password');
}

public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:6',
    ]);

    $user = auth()->user();

    if (!\Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'Kata sandi lama salah.']);
    }

    $user->password = bcrypt($request->new_password);
    $user->save();

    return redirect()->back()->with('success', 'Kata sandi berhasil diubah.');
}

}

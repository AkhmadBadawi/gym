<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    // dd($request->all()); // Debugging: tampilkan semua input yang diterima

    // Ambil user dari database berdasarkan username
    $user = User::where('username', $request->username)->first();

    // Cek apakah user ditemukan dan password cocok
    if ($user && Hash::check($request->password, $user->password)) {
        // Simpan data user ke session
        session([
            'user_id' => $user->id,
            'username' => $user->username,
            'access' => $user->access,
        ]);

        return redirect('/'); // arahkan ke halaman dashboard
    }

    // Jika gagal
    return back()->withErrors(['username' => 'Username atau password salah'])->withInput();
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
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
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        // Gagal
        return back()->withErrors([
            'username' => 'Username and Password are incorrect',
        ])->withInput();
    }

    public function logout()
    {
        // Hapus data user dari session
        session()->forget(['user_id', 'username', 'access']);
        Auth::logout();

        // Redirect ke halaman login
        return redirect('/login');
    }

    public function landingPage()
{
    $activity = Activity::all();
    return view('index', compact('activity'));
}
}

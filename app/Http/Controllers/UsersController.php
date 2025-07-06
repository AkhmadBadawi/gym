<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('layouts.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'fullname' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users',
                'phone' => 'required|string|max:15',
                'access' => 'required|string',
                'password' => 'required|string|min:8',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $user = new User();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);   // Encrypt the password
        $user->access = $request->access ?? '0'; // Default access level if not provided
        $user->save();
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('layouts.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'fullname' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users,username,' . $id,
                'phone' => 'required|string|max:15',
                'access' => 'required|string',
                'password' => 'nullable|string|min:8',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        $user = User::findOrFail($id);
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->phone = $request->phone;
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Encrypt the password
        }
        $user->access = $request->access ?? '0'; // Default access level if not provided
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

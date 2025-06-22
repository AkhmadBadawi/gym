<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Members::all();
        return view('member.index', data: compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'status' => 'required',
                'payment_receipt' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        $member = new Members();
        $member->name = $request->name;
        $member->address = $request->address;
        $member->phone = $request->phone;
        $member->status = $request->status;

        if ($request->hasFile('payment_receipt')) {
            $member->payment_receipt = $request->file('payment_receipt')->store('receipts', 'public');
        }

        if ($request->hasFile('photo')) {
            $member->photo = $request->file('photo')->store('photos', 'public');
        }

        $member->save();

        return redirect()->route('member.index')->with('success', 'Member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Members $member)
    {
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Members $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Members $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Members $member)
    {
        //
    }
}

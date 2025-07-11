<?php

namespace App\Http\Controllers;

use App\Models\Member;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        $this->inActiveMember($members);
        return view('layouts.index', data: compact('members'));
    }

    private function inActiveMember($members)
    {
        foreach ($members as $member) {
            if ($member->status == '1') {
                $activityDate = Carbon::parse($member->activity_date);
                if (now()->greaterThanOrEqualTo($activityDate->copy()->addMonth())) {
                    $member->status = '0';
                    $member->save();
                }
            }
        }
    }

    public function dashboard()
    {
        
        $members = Member::all();
        $this->inActiveMember($members);
        $membersCount = $members->count();
        $activeMembers = $members->where('status', '1')->count();
        $inactiveMembers = $members->where('status', '0')->count();
        $newMembers = $members->where('created_at', '>=', now()->subMonth())->count();
        return view('layouts.index', data: compact('members', 'membersCount', 'activeMembers', 'inactiveMembers', 'newMembers'));
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

        $member = new Member();
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

        if($request->status == '1') {
            $member->activity_date = Carbon::now()->format('Y-m-d');
        } else {
            $member->activity_date = null;
        }

        $member->save();

        return redirect()->route('member.index')->with('success', 'Member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('layouts.index', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
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

        $member = Member::findOrFail($id);
        $member->name = $request->name;
        $member->address = $request->address;
        $member->phone = $request->phone;

        if ($member->status == '0' && $request->status == '1') {
            $member->activity_date = Carbon::now()->format('Y-m-d');
        }

        $member->status = $request->status;

        if ($request->hasFile('payment_receipt')) {
            if ($member->photo && Storage::disk('public')->exists($member->photo)) {
                Storage::disk('public')->delete($member->photo);
            }
            $member->payment_receipt = $request->file('payment_receipt')->store('receipts', 'public');
        }

        if ($request->hasFile('photo')) {
            if ($member->photo && Storage::disk('public')->exists($member->photo)) {
                Storage::disk('public')->delete($member->photo);
            }
            $member->photo = $request->file('photo')->store('photos', 'public');
        }

        $member->save();

        return redirect()->route('member.index')->with('success', 'Member updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        if ($member->payment_receipt) {
            Storage::disk('public')->delete($member->payment_receipt);
        }
        if ($member->photo) {
            Storage::disk('public')->delete($member->photo);
        }

        $member->delete();

        return redirect()->route('member.index')->with('success', 'Member deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('layouts.index', compact('activities'));
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
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'date' => 'required|date',
                'picture' => 'required|image|mimes:jpg,png,jpeg',
            ]);

            $activity = new Activity();
            $activity->name = $request->name;
            $activity->description = $request->description;
            $activity->date = $request->date;
            if ($request->hasFile('picture')) {
                // Ambil ekstensi file
                $extension = $request->file('picture')->getClientOriginalExtension();

                // Buat nama file berdasarkan input 'name' (bersihkan spasi, simbol)
                $fileName = Str::slug($request->name) . '.' . $extension;

                // Simpan file dengan nama yang ditentukan
                $path = $request->file('picture')->storeAs('activities', $fileName, 'public');

                // Simpan path ke database
                $activity->picture = $path;
            }
            $activity->save();

            return redirect()->route('activity.index')->with('success', 'Activity updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('layouts.index', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'date' => 'required|date',
                'picture' => 'nullable|image|mimes:jpg,png,jpeg',
            ]);

            $activity = Activity::findOrFail($id);
            $activity->name = $request->name;
            $activity->description = $request->description;
            $activity->date = $request->date;

            if ($request->hasFile('picture')) {
                // Hapus gambar lama jika ada
                if ($activity->picture) {
                    Storage::disk('public')->delete($activity->picture);
                }

                // Ambil ekstensi file
                $extension = $request->file('picture')->getClientOriginalExtension();

                // Buat nama file berdasarkan input 'name' (bersihkan spasi, simbol)
                $fileName = Str::slug($request->name) . '.' . $extension;

                // Simpan file dengan nama yang ditentukan
                $path = $request->file('picture')->storeAs('activities', $fileName, 'public');

                // Simpan path ke database
                $activity->picture = $path;
            }

            $activity->save();

            return redirect()->route('activity.index')->with('success', 'Activity updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->picture) {
            Storage::disk('public')->delete($activity->picture);
        }

        $activity->delete();

        return redirect()->route('activity.index')->with('success', 'Activity deleted successfully.');
    }
}

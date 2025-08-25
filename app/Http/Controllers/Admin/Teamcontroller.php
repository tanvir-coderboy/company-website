<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Team::latest()->get();
        return view('admin.teams.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'bio'         => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'facebook'    => 'nullable|url|max:255',
            'twitter'     => 'nullable|url|max:255',
            'instagram'   => 'nullable|url|max:255',
            'linkedin'    => 'nullable|url|max:255',
            'serial'      => 'nullable|integer',
            'status'      => 'required|in:0,1',
        ]);


        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['image'] = $image;
        Team::create($data);
        return redirect()->route('admin.teams.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Team::findOrFail($id);
        return view('admin.teams.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Team::findOrFail($id);
        return view('admin.teams.view', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Team::findOrFail($id);


        $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'bio'         => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'facebook'    => 'nullable|url|max:255',
            'twitter'     => 'nullable|url|max:255',
            'instagram'   => 'nullable|url|max:255',
            'linkedin'    => 'nullable|url|max:255',
            'serial'      => 'nullable|integer',
            'status'      => 'required|in:0,1',
        ]);


        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;

        if ($request->hasFile('image') && $data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $update = $request->all();
        if ($image) {
            $update['image'] = $image;
        }
        $data->update($update);
        return redirect()->route('admin.teams.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = Team::findOrFail($id);
        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}

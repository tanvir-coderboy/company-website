<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AboutUs::first();
        return view('admin.abouts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = AboutUs::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:1000',
            'description' => 'nullable|string',

            'mission_title' => 'nullable|string|max:1000',
            'mission_description' => 'nullable|string',

            'vision_title' => 'nullable|string|max:1000',
            'vision_description' => 'nullable',

            'core_value_text' => 'nullable|max:5000',
        ]);

        $input = $request->all();

        $data->update($input);

        return redirect()->back()->with('success', 'Information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

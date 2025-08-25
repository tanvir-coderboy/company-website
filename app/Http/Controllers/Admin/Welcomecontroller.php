<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Welcome::first();
        return view('admin.welcomes.index',compact('data'));
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
    public function store(Request $request)
    {
        //
    }

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

        $data = Welcome::findOrFail($id);

        $update = $request->validate([
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'item1' => 'nullable|string|max:255',
        'item2' => 'nullable|string|max:255',
        'item3' => 'nullable|string|max:255',
        'item4' => 'nullable|string|max:255',
        'item5' => 'nullable|string|max:255',
        'button_name' => 'nullable|string|max:255',
        'button_link' => 'nullable|string|max:255',
        'button_type' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|',
        'exprience_one_year' => 'nullable|string|max:50',
        'exprience_one_text' => 'nullable|string|max:255',
        'exprience_two_year' => 'nullable|string|max:50',
        'exprience_two_text' => 'nullable|string|max:255',
        'status' => 'required|in:0,1',
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
        return redirect()->route('admin.welcomes.index')->with('success','Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

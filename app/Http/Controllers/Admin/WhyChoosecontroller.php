<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\WhyChoose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WhyChoose::first();
        return view('admin.whychooses.index', compact('data'));
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

        $data = WhyChoose::findOrFail($id);

        $request->validate([
            'title'      => 'required|string|max:255',
            'experience' => 'required|string',
            'status'     => 'required|in:0,1',
        ]);


        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;

        if ($request->hasFile('image') && $data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $update = $request->all();
        if ($image) {
            $input['image'] = $image;
        }
        $data->update($update);
        return redirect()->route('admin.whychooses.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

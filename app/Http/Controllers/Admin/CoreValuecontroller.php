<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\CoreValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoreValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CoreValue::latest()->get();
        return view('admin.abouts.core.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.core.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title'           => 'required|string|max:255',
            'serial'          => 'required',
            'description'     => 'nullable|string',
            'meta_title'      => 'nullable|string|max:255',
            'meta_description'=> 'nullable|string',
            'meta_keyword'    => 'nullable|string',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'          => 'required|boolean',
        ]);

        $data = $request->only([
            'title','serial','description','meta_title','meta_description','meta_keyword','status'
        ]);

        // Image Upload
        $data['image'] = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['meta_image'] = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;

        CoreValue::create($data);

        return redirect()->route('admin.cores.index')->with('success','Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = CoreValue::findOrFail($id);
        return view('admin.abouts.core.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = CoreValue::findOrFail($id);
        return view('admin.abouts.core.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = CoreValue::findOrFail($id);

        // Validation
        $request->validate([
            'title'           => 'required|string|max:255',
            'serial'          => 'required',
            'description'     => 'nullable|string',
            'meta_title'      => 'nullable|string|max:255',
            'meta_description'=> 'nullable|string',
            'meta_keyword'    => 'nullable|string',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'          => 'required|boolean',
        ]);

        $update = $request->only([
            'title','serial','description','meta_title','meta_description','meta_keyword','status'
        ]);

        // Image Upload
        if ($request->hasFile('image')) {
            if ($data->image) {
                Storage::disk('public')->delete($data->image);
            }
            $update['image'] = ImageHelper::uploadImage($request->file('image'));
        }

        if ($request->hasFile('meta_image')) {
            if ($data->meta_image) {
                Storage::disk('public')->delete($data->meta_image);
            }
            $update['meta_image'] = ImageHelper::uploadImage($request->file('meta_image'));
        }

        $data->update($update);

        return redirect()->route('admin.cores.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = CoreValue::findOrFail($id);

        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }

        if ($data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }

        $data->delete();

        return redirect()->back()->with('success','Data Deleted Successfully');
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FaqCategory::latest()->get();
        return view('admin.faq.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|string|max:555',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:0,1',
        ]);


        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['image'] = $image;
        FaqCategory::create($data);
        return redirect()->route('admin.faq-categories.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = FaqCategory::findOrFail($id);
        return view('admin.faq.category.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = FaqCategory::findOrFail($id);
        return view('admin.faq.category.view', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = FaqCategory::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:555',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
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
        return redirect()->route('admin.faq-categories.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = FaqCategory::findOrFail($id);
        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}

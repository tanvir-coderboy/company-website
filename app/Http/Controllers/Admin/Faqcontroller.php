<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Faq::latest()->get();
        return view('admin.faq.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = FaqCategory::where('status', 1)->get();
        return view('admin.faq.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $request->validate([
            'category_id'      => 'required',
            'title'            => 'required|string|max:255',
            'description'      => 'nullable|string',

            'serial'           => 'nullable|integer|min:1',

            'button_name'      => 'nullable|string|max:100',
            'button_link'      => 'nullable|url|max:255',
            'button_type'      => 'required|in:1,2',
            'button_status'    => 'nullable|in:1,2',

            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:5000',
            'meta_keyword'     => 'nullable|string|max:5000',
            'meta_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'status'           => 'required|in:0,1',
        ]);



        $image = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;
        $data['meta_image'] = $image;
        Faq::create($data);
        return redirect()->route('admin.faqs.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Faq::findOrFail($id);
        return view('admin.faq.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Faq::findOrFail($id);
        $category = FaqCategory::where('status', 1)->get();
        return view('admin.faq.view', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Faq::findOrFail($id);


        $request->validate([
            'category_id'      => 'required',
            'title'            => 'required|string|max:255',
            'description'      => 'nullable|string',

            'serial'           => 'nullable|integer|min:1',

            'button_name'      => 'nullable|string|max:100',
            'button_link'      => 'nullable|url|max:255',
            'button_type'      => 'required|in:1,2',
            'button_status'    => 'nullable|in:1,2',

            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:5000',
            'meta_keyword'     => 'nullable|string|max:5000',
            'meta_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'status'           => 'required|in:0,1',
        ]);



        $image = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;

        if ($request->hasFile('meta_image') && $data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }
        $update = $request->all();

        if ($image) {
            $update['meta_image'] = $image;
        }
        $data->update($update);
        return redirect()->route('admin.faqs.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = Faq::findOrFail($id);
        if ($data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}

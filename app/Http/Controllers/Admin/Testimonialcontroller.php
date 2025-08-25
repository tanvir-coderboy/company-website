<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Testimonial::latest()->get();
        return view('admin.testimonial.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name'         => 'nullable|string|max:255',
            'designation'  => 'nullable|string|max:255',
            'review'       => 'nullable|',
            'review_text'  => 'nullable|',
            'status'       => 'nullable|',
        ]);
        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['image'] = $image;
        Testimonial::create($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Testimonial::findOrFail($id);
        return view('admin.testimonial.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Testimonial::findOrFail($id);
        return view('admin.testimonial.view', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Testimonial::findOrFail($id);

        $request->validate([
            'name'         => 'nullable|string|max:255',
            'designation'  => 'nullable|string|max:255',
            'review'       => 'nullable|',
            'review_text'  => 'nullable|',
            'status'       => 'nullable|',
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
        return redirect()->route('admin.testimonials.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = Testimonial::findOrFail($id);
        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::all();
        return view('admin.blogs.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:5000',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:555',
            'meta_description' => 'nullable|string|max:5000',
            'meta_keyword' => 'nullable|string|max:5000',

            'status' => 'required|in:0,1',
        ]);


        $image = $request->hasFile('featured_image') ? ImageHelper::uploadImage($request->file('featured_image')) : null;
        $meta = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;

        $data['featured_image'] = $image;
        $data['meta_image'] = $meta;

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Data Create Successfully');
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
        $data = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $data = Blog::findOrFail($id);
        

        $image = $request->hasFile('featured_image') ? ImageHelper::uploadImage($request->file('featured_image')) : null;
        $meta = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;



        if ($request->hasFile('featured_image') && $data->featured_image) {
            Storage::disk('public')->delete($data->featured_image);
        }

        if ($request->hasFile('meta_image') && $data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }

        $input = $request->all();
        if ($image) {
            $input['featured_image'] = $image;
        }

        if ($meta) {
            $input['meta_image'] = $meta;
        }

        $data->update($input);

        return redirect()->route('admin.blogs.index')->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Blog::findOrFail($id);

        if ($data->featured_image) {
            Storage::disk('public')->delete($data->featured_image);
        }

        if ($data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }

        $data->delete();

        return redirect()->back()->with('message', 'Data Delete Successfully');
    }
}

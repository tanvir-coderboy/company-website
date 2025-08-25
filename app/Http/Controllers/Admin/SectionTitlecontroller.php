<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionTitle;
use Illuminate\Http\Request;

class SectionTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SectionTitle::first();
        return view('admin.sectin-title.index', compact('data'));
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = SectionTitle::findOrFail($id);

        $request->validate([
            'service_title' => 'nullable|string|max:255',
            'service_description' => 'nullable|string',
            'chosse_title' => 'nullable|string|max:255',
            'chosse_description' => 'nullable|string',
            'testimonial_title' => 'nullable|string|max:255',
            'testimonial_description' => 'nullable|string',
            'portfolio_title' => 'nullable|string|max:255',
            'portfolio_description' => 'nullable|string',
            'blog_title' => 'nullable|string|max:255',
            'blog_description' => 'nullable|string',
            'contact_title' => 'nullable|string|max:255',
            'contact_description' => 'nullable|string',
        ]);

        $data->update($request->only([
            'service_title',
            'service_description',
            'chosse_title',
            'chosse_description',
            'testimonial_title',
            'testimonial_description',
            'portfolio_title',
            'portfolio_description',
            'blog_title',
            'blog_description',
            'contact_title',
            'contact_description',
        ]));

        return redirect()->route('admin.section-title.index')->with('success', 'Section titles updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

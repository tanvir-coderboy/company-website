<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Page::latest()->get();
        return view('admin.page.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $image = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;

        $data['meta_image'] = $image;

        Page::create($data);
        return redirect()->route('admin.pages.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Page::findOrFail($id);
        return view('admin.page.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Page::findOrFail($id);
        return view('admin.page.view', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Page::findOrFail($id);




        $image = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;

        if ($request->hasFile('meta_image') && $data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }


        $update = $request->all();

        if ($image) {
            $update['meta_image'] = $image;
        }
        $data->update($update);
        return redirect()->route('admin.pages.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = Page::findOrFail($id);
        if ($data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }

     public function updateStatus(Request $request)
    {
        $item = Page::findOrFail($request->id);
        $item->status = $request->status;
        $item->save();

        // Check if the request is an AJAX request
        if ($request->ajax()) {
            return response()->json([
                'status' => $item->status,
                'message' => $item->status == 1
                    ? 'Status has been activated successfully.'
                    : 'Status has been deactivated successfully.'
            ]);
        }

        // In case it's not an AJAX request, redirect with a success message
        return back()->with('success', 'Status has been updated successfully.');
    }

}

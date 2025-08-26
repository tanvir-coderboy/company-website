<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portfolio::latest()->get();
        return view('admin.portfolio.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = PortfolioCategory::where('status', 1)->get();
        return view('admin.portfolio.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $meta = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;


        $data['image'] = $image;
        $data['meta_image'] = $meta;

        Portfolio::create($data);
        return redirect()->route('admin.portfolios.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Portfolio::findOrFail($id);
        return view('admin.portfolio.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Portfolio::findOrFail($id);
        $category = PortfolioCategory::where('status', 1)->get();

        return view('admin.portfolio.view', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Portfolio::findOrFail($id);

        if ($request->hasFile('image') && $data->image) {
            Storage::disk('public')->delete($data->image);
        }

        if ($request->hasFile('meta_image') && $data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }


        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;

        $meta = $request->hasFile('meta_image') ? ImageHelper::uploadImage($request->file('meta_image')) : null;

        $update = $request->all();

        if ($image) {
            $update['image'] = $image;
        }

        if ($meta) {
            $update['meta_image'] = $meta;
        }

        $data->update($update);
        return redirect()->route('admin.portfolios.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = Portfolio::findOrFail($id);


        if ($data->meta_image) {
            Storage::disk('public')->delete($data->meta_image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }

     public function updateStatus(Request $request)
    {
        $item = Portfolio::findOrFail($request->id);
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

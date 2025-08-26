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
        $data = WhyChoose::latest()->get();
        return view('admin.whychooses.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.whychooses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        WhyChoose::create($data);
        return redirect()->route('admin.whychooses.index')->with('success', 'Data Updated Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = WhyChoose::findOrFail($id);
         return view('admin.whychooses.edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = WhyChoose::findOrFail($id);
         return view('admin.whychooses.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = WhyChoose::findOrFail($id);

        $update = $request->all();
        $data->update($update);
        return redirect()->route('admin.whychooses.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = WhyChoose::findOrFail($id);
        $data->delete();
         return redirect()->back()->with('success', 'Data Deleted Successfully');
    }


    public function updateStatus(Request $request)
    {
        $item = WhyChoose::findOrFail($request->id);
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

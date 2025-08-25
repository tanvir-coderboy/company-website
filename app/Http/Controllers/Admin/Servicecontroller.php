<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::latest()->get();
        return view('admin.services.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
        'title'       => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'status'      => 'nullable|in:0,1',
    ]);

        Service::create($data);
        return redirect()->route('admin.services.index')->with('success','Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Service::findOrFail($id);
        return view('admin.services.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Service::findOrFail($id);
        return view('admin.services.view',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Service::findOrFail($id);

        $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'nullable|string',
        'status'      => 'required|in:0,1',
    ]);

        $update = $request->all();
        $data->update($update);
        return redirect()->route('admin.services.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        $data = Service::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }
}

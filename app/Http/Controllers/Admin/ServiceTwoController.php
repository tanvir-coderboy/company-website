<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceTwo;
use Illuminate\Http\Request;

class ServiceTwoController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view service')->only('index');
        $this->middleware('permission:create service')->only(['create', 'store']);
        $this->middleware('permission:edit service')->only(['edit', 'update']);
        $this->middleware('permission:delete service')->only('destroy');
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ServiceTwo::all();
        return view('admin.servicetwo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.servicetwo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
        ServiceTwo::create($data);
        return redirect()->route('admin.servicetwo.index')->with('success', 'Data Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ServiceTwo::findOrFail($id);
        return view('admin.servicetwo.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ServiceTwo::findOrFail($id);
        return view('admin.servicetwo.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $data = ServiceTwo::findOrFail($id);
        
        $input = $request->all();
        $data->update($input);

        return redirect()->route('admin.servicetwo.index')->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ServiceTwo::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('message', 'Data Delete Successfully');
    }



      public function updateStatus(Request $request)
    {
        $item = ServiceTwo::findOrFail($request->id);
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

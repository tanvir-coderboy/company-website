<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\WorkingArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkingAreaController extends Controller
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
        $data = WorkingArea::all();
        return view('admin.workingarea.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.workingarea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();


        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;

        $data['image'] = $image;


        WorkingArea::create($data);

        return redirect()->route('admin.workingarea.index')->with('success', 'Data Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = WorkingArea::findOrFail($id);
        return view('admin.workingarea.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = WorkingArea::findOrFail($id);
        return view('admin.workingarea.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $data = WorkingArea::findOrFail($id);
        

        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;




        if ($request->hasFile('image') && $data->image) {
            Storage::disk('public')->delete($data->image);
        }

        $input = $request->all();

        if ($image) {
            $input['image'] = $image;
        }


        $data->update($input);

        return redirect()->route('admin.workingarea.index')->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = WorkingArea::findOrFail($id);

        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }


        $data->delete();

        return redirect()->back()->with('message', 'Data Delete Successfully');
    }



      public function updateStatus(Request $request)
    {
        $item = WorkingArea::findOrFail($request->id);
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

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\SectionTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionTitleController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view section-title')->only('index');
        $this->middleware('permission:create section-title')->only(['create', 'store']);
        $this->middleware('permission:edit section-title')->only(['edit', 'update']);
        $this->middleware('permission:delete section-title')->only('destroy');
    }

    
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

        $chosse_image = $request->hasFile('chosse_image') ? ImageHelper::uploadImage($request->file('chosse_image')) : null;
    
        if ($request->hasFile('chosse_image') && $data->chosse_image) {
            Storage::disk('public')->delete($data->chosse_image);
        }

        $update = $request->all();

        if($chosse_image){
            $update['chosse_image'] = $chosse_image;
        }

        $data->update($update);
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

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ServiceItem::latest()->get();
        return view('admin.services.item.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = Service::where('status', 1)->get();
        return view('admin.services.item.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $request->validate([
            'service_id' => 'required|string',
            'title'      => 'required|string|max:255',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|',
            'status'     => 'required|in:0,1',
        ]);



        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['image'] = $image;
        ServiceItem::create($data);
        return redirect()->route('admin.service-items.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ServiceItem::findOrFail($id);
        return view('admin.services.item.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ServiceItem::findOrFail($id);
        $service = Service::where('status', 1)->get();
        return view('admin.services.item.view', compact('data', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ServiceItem::findOrFail($id);

        $request->validate([
            'service_id' => 'required|string',
            'title'      => 'required|string|max:255',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|',
            'status'     => 'required|in:0,1',
        ]);

        if ($request->hasFile('image') && $data->image) {
            Storage::disk('public')->delete($data->image);
        }

        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $update = $request->all();
        if ($image) {
            $update['image'] = $image;
        }
        $data->update($update);
        return redirect()->route('admin.service-items.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = ServiceItem::findOrFail($id);
        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}

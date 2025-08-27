<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::latest()->get();
        return view('admin.contact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{

    Contact::create($request->only([
        'reaching',
        'email',
        'phone',
        'address',
        'message',
        'status'
    ]));

    return redirect()->back()->with('success','Data Created Successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Contact::findOrFail($id);
        return view('admin.contact.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Contact::findOrFail($id);
        return view('admin.contact.view',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{

    $data = Contact::findOrFail($id);

    $data->update($request->only([
        'reaching',
        'email',
        'phone',
        'address',
        'message',
        'status'
    ]));

    return redirect()->route('admin.contacts.index')->with('success', 'Data Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Contact::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success','Data Deleted Successfully');
    }


     public function updateStatus(Request $request)
    {
        $item = Contact::findOrFail($request->id);
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

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
    $request->validate([
        'reaching' => 'nullable|string|max:255',
        'email'    => 'nullable|email|max:255',
        'phone'    => 'nullable|string|max:20',
        'address'  => 'nullable|string|max:255',
        'message'  => 'nullable|string',
        'status'   => 'required|boolean',
    ]);

    Contact::create($request->only([
        'reaching',
        'email',
        'phone',
        'address',
        'message',
        'status'
    ]));

    return redirect()->route('admin.contacts.index')->with('success','Data Created Successfully');
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
    $request->validate([
        'reaching' => 'nullable|string|max:255',
        'email'    => 'nullable|email|max:255',
        'phone'    => 'nullable|string|max:20',
        'address'  => 'nullable|string|max:255',
        'message'  => 'nullable|string',
        'status'   => 'required|boolean',
    ]);

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
}

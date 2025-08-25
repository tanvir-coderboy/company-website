<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PortfolioCategory::latest()->get();
        return view('admin.portfolio.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolio.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required',
            'status' => 'required|in:0,1',

        ]);
        PortfolioCategory::create($data);
        return redirect()->route('admin.portfolio-categories.index')->with('success', 'Data Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = PortfolioCategory::findOrFail($id);
        return view('admin.portfolio.category.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = PortfolioCategory::findOrFail($id);
        return view('admin.portfolio.category.view', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = PortfolioCategory::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'status' => 'required|in:0,1',

        ]);

        $update = $request->all();
        $data->update($update);
        return redirect()->route('admin.portfolio-categories.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = PortfolioCategory::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}

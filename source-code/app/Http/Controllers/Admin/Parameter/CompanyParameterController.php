<?php

namespace App\Http\Controllers\Admin\Parameter;

use App\Http\Controllers\Controller;
use App\Models\CompanyParameter;
use Illuminate\Http\Request;

class CompanyParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyParameters = CompanyParameter::all();
        return view('admin.parameter.index', compact('companyParameters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.parameter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'no_telepon' => 'required|string',
            'no_wa' => 'required|string',
            'alamat' => 'required|string',
            'maps' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'logo' => 'nullable|image',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'ekatalog' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('uploads/parameter', 'public');
        }

        CompanyParameter::create($validated);

        return redirect()->route('parameter.index')->with('success', 'Company parameter created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $companyParameter = CompanyParameter::findOrFail($id);
        return view('admin.parameter.show', compact('companyParameter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $companyParameter = CompanyParameter::findOrFail($id);
        return view('admin.parameter.edit', compact('companyParameter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'no_telepon' => 'required|string',
            'no_wa' => 'required|string',
            'alamat' => 'required|string',
            'maps' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'logo' => 'nullable|image',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'ekatalog' => 'nullable|string',
        ]);

        $companyParameter = CompanyParameter::findOrFail($id);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('uploads/parameter', 'public');
        }

        $companyParameter->update($validated);

        return redirect()->route('parameter.index')->with('success', 'Company parameter updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $companyParameter = CompanyParameter::findOrFail($id);
        $companyParameter->delete();

        return redirect()->route('parameter.index')->with('success', 'Company parameter deleted successfully.');
    }
}

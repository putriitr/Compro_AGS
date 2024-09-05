<?php

namespace App\Http\Controllers\Admin\Locations;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    // Display a listing of locations
    public function index()
    {
        $locations = Location::all();
        if (request()->wantsJson()) {
            return response()->json($locations);
        }
        return view('Admin.Locations.index', compact('locations'));
    }

    // Show the form for creating a new location
    public function create()
    {
        return view('Admin.Locations.create');
    }

    // Store a newly created location in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle image upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/locations'), $imageName);
        }

        $location = Location::create([
            'name' => $request->input('name'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'image' => $imageName,
        ]);

        if (request()->wantsJson()) {
            return response()->json($location, 201);
        }
        
        return redirect()->route('admin.locations.index')->with('success', 'Location created successfully.');
    }

    // Display the specified location
    public function show(Location $location)
    {
        if (request()->wantsJson()) {
            return response()->json($location);
        }
        return view('Admin.Locations.show', compact('location'));
    }

    // Show the form for editing the specified location
    public function edit(Location $location)
    {
        return view('Admin.Locations.edit', compact('location'));
    }

    // Update the specified location in storage
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/img/locations'), $imageName);
            $request->merge(['image' => $imageName]);
        }

        $location->update($request->all());

        if (request()->wantsJson()) {
            return response()->json($location);
        }
        
        return redirect()->route('admin.locations.index')->with('success', 'Location updated successfully.');
    }

    // Remove the specified location from storage
    public function destroy(Location $location)
    {
        $location->delete();
        if (request()->wantsJson()) {
            return response()->json(['message' => 'Location deleted successfully.']);
        }
        
        return redirect()->route('admin.locations.index')->with('success', 'Location deleted successfully.');
    }
}

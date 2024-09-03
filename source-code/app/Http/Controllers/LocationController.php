<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return response()->json($locations);
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048' // Validasi gambar
        ]);

        // Jika ada gambar, simpan di public/assets/img/collab dan ambil nama file-nya
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Membuat nama file yang unik
            $image->move(public_path('assets/img/collab'), $imageName); // Menyimpan file di folder yang ditentukan
        } else {
            $imageName = null;
        }

        // Simpan data ke database
        $location = Location::create([
            'name' => $request->input('name'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'description' => $request->input('description'),
            'image' => $imageName, // Simpan nama file gambar
        ]);

        // Kembalikan response JSON
        return response()->json($location, 201); // 201 untuk Created
    }
}

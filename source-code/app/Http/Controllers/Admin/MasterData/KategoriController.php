<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.masterdata.kategori.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masterdata.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('gambar') ? $request->file('gambar')->move('kategori', $request->file('gambar')->getClientOriginalName()) : null;

        Kategori::create([
            'nama' => $request->nama,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.masterdata.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $kategori = Kategori::findOrFail($id);

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($kategori->gambar && file_exists(public_path($kategori->gambar))) {
            unlink(public_path($kategori->gambar));
        }

        // Simpan gambar baru
        $path = $request->file('gambar')->move('kategori', $request->file('gambar')->getClientOriginalName());
        $kategori->gambar = $path;
    }

    $kategori->nama = $request->nama;
    $kategori->save();

    return redirect()->route('admin.kategori.index')->with('success', 'Kategori updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
    
        // Hapus gambar jika ada
        if ($kategori->gambar && file_exists(public_path($kategori->gambar))) {
            unlink(public_path($kategori->gambar));
        }
    
        // Hapus data kategori
        $kategori->delete();
    
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori deleted successfully.');
    }
    
}

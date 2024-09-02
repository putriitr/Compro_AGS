<?php

namespace App\Http\Controllers\Admin\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\ProdukImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        $kategori = Kategori::all();
        return view('admin.produk.index', compact('produks','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.produk.create', (compact('kategori')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'via' => 'required|in:labtek,labverse',
            'kategori_id' => 'required|exists:kategori,id',
            'gambar.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:15000',
        ]);
        
        $produk = new Produk;
        $produk->fill($request->all());
        $produk->save();

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $imgProduk) {
                $slug = Str::slug(pathinfo($imgProduk->getClientOriginalName(), PATHINFO_FILENAME));
                $newImageName = time() . '_' . $slug . '.' . $imgProduk->getClientOriginalExtension();
                $imgProduk->move('uploads/produk/', $newImageName);
    
                $produkImage = new ProdukImage;
                $produkImage->produk_id = $produk->id;
                $produkImage->gambar = 'uploads/produk/' . $newImageName;
                $produkImage->save();
            }
        }

            return redirect()->route('admin.produk.index')->with('success', 'Produk created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.produk.edit', compact('produk','kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'merk' => 'required|string|max:255',
        'via' => 'required|in:labtek,labverse',
        'kategori_id' => 'required|exists:kategori,id',
        'gambar.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:15000',
    ]);

    $produk = Produk::findOrFail($id);
    $produk->update($request->all());

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama yang terkait dengan produk jika diperlukan
        foreach ($produk->images as $image) {
            if (file_exists(public_path($image->gambar))) {
                unlink(public_path($image->gambar));
            }
            $image->delete();
        }

        // Simpan gambar baru
        foreach ($request->file('gambar') as $imgProduk) {
            $slug = Str::slug(pathinfo($imgProduk->getClientOriginalName(), PATHINFO_FILENAME));
            $newImageName = time() . '_' . $slug . '.' . $imgProduk->getClientOriginalExtension();
            $imgProduk->move('uploads/produk/', $newImageName);

            $produkImage = new ProdukImage;
            $produkImage->produk_id = $produk->id;
            $produkImage->gambar = 'uploads/produk/' . $newImageName;
            $produkImage->save();
        }
    }

    return redirect()->route('admin.produk.index')->with('success', 'Produk updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk deleted successfully.');
    }
}

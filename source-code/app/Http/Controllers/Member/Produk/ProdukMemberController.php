<?php

namespace App\Http\Controllers\Member\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukMemberController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();

        return view('member.product.product' , compact('kategori'));
    }

    public function productByCategory($id)
    {
    // Mengambil kategori berdasarkan ID
    $kategori = Kategori::findOrFail($id);

    // Mengambil produk berdasarkan kategori yang dipilih
    $produks = Produk::where('kategori_id', $id)->get();

    return view('member.category-Product.category', compact('kategori', 'produks'));
    }

    public function show($id)
    {
            // Mengambil detail produk berdasarkan ID
            $produk = Produk::findOrFail($id);

            return view('member.category-product.detail', compact('produk'));
    }

    

}

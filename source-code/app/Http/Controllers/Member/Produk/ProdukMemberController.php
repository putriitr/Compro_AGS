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
        $produks = Produk::all();
        $kategori = Kategori::all();

        return view('member.product.product' , compact('produks','kategori'));
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

            $produkSerupa = Produk::where('kategori_id', $produk->kategori_id)
            ->where('id', '!=', $id) // Exclude the current product
            ->take(4) // Limit to 4 similar products
            ->get();
    
        return view('member.product.detail', compact('produk', 'produkSerupa'));    }

    

}

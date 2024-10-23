<?php

namespace App\Http\Controllers\Member\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukMemberController extends Controller
{
    public function index($categoryId = null)
    {
        // Ambil semua kategori
        $kategori = Kategori::all();

        // Cek apakah ada kategori yang dipilih, jika iya, filter produk berdasarkan kategori tersebut
        if ($categoryId) {
            $produks = Produk::where('kategori_id', $categoryId)->paginate(9);
            $selectedCategory = Kategori::find($categoryId);
        } else {
            $produks = Produk::paginate(6);
            $selectedCategory = null;
        }

        return view('member.product.product', compact('produks', 'kategori', 'selectedCategory'));
    }


    public function search(Request $request)
    {
        $kategori = Kategori::all();
        $keyword = $request->keyword;

        // Ganti get() dengan paginate(9)
        $produks = Produk::where('nama', 'LIKE', '%' . $keyword . '%')->paginate(9);

        $selectedCategory = null;

        return view('member.product.product', compact('produks', 'kategori', 'selectedCategory'));
    }


    public function filterByCategory($id)
    {
        $kategori = Kategori::all();

        // Ganti get() dengan paginate(9)
        $produks = Produk::where('kategori_id', $id)->paginate(9);

        $selectedCategory = Kategori::find($id);

        return view('member.product.product', compact('produks', 'kategori', 'selectedCategory'));
    }



    public function show($id)
    {
        // Mengambil detail produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        $produkSerupa = Produk::where('kategori_id', $produk->kategori_id)
            ->where('id', '!=', $id) // Exclude the current product
            ->take(4) // Limit to 4 similar products
            ->get();

        return view('member.product.detail', compact('produk', 'produkSerupa'));
    }
}

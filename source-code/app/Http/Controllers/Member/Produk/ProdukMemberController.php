<?php

namespace App\Http\Controllers\Member\Produk;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    public function addToQuotation(Request $request, $id)
{
    // Check if the product exists by ID
    $produk = DB::table('produk')->where('id', $id)->first();
    
    if (!$produk) {
        // Redirect back with an error message if the product doesn't exist
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

    // Get the authenticated user's ID
    $userId = auth()->id();

    // Check if a quotation request already exists for this user and product
    $existingQuotation = DB::table('quotations')
        ->where('user_id', $userId)
        ->where('product_id', $id)
        ->first();

    if ($existingQuotation) {
        // If the product is already in the quotation list, show a warning message
        return redirect()->back()->with('warning', 'Produk ini sudah ada dalam permintaan quotation Anda.');
    }

    // Validate the quantity if it's coming from a form (optional)
    $request->validate([
        'quantity' => 'required|integer|min:1'
    ]);

    // Get the quantity from the request, default to 1 if not provided
    $quantity = $request->input('quantity', 1);

    // Insert a new quotation entry for the user
    DB::table('quotations')->insert([
        'user_id' => $userId,
        'product_id' => $id,
        'quantity' => $quantity,
        'status' => 'pending', // Set a default status for the quotation
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke permintaan quotation.');
}
    
}

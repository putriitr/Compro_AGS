<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Models\BidangPerusahaan;
use App\Models\Produk;
use App\Models\User;
use App\Models\UserProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;



class MemberController extends Controller
{
    public function index()
    {
        $members = User::where('type', 0)->paginate(10); // Assuming type 0 is for members
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        $bidangPerusahaan = BidangPerusahaan::all();
        return view('admin.members.create', compact('bidangPerusahaan'));
    }
    

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'nama_perusahaan' => 'nullable|string|max:255',
        'bidang_perusahaan' => 'nullable|exists:bidang_perusahaan,id',
        'no_telp' => 'nullable|string|max:20',
        'alamat' => 'nullable|string|max:255',
    ]);

    $randomPassword = Str::random(8);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($randomPassword),
        'type' => 0, // member
        'nama_perusahaan' => $request->nama_perusahaan,
        'bidang_id' => $request->bidang_perusahaan, // Simpan bidang_id ke tabel users
        'no_telp' => $request->no_telp,
        'alamat' => $request->alamat,
    ]);

    session()->flash('password', $randomPassword);

    return redirect()->route('members.show', $user->id);
}


    public function show($id)
    {
        $member = User::findOrFail($id);
        $password = session('password'); 
        

        return view('admin.members.show', compact('member', 'password'));
    }


    public function edit($id)
{
    $member = User::findOrFail($id);
    $bidangPerusahaan = BidangPerusahaan::all(); // Assuming this comes from your database
    return view('admin.members.edit', compact('member', 'bidangPerusahaan'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'nama_perusahaan' => 'nullable|string|max:255',
        'bidang_perusahaan' => 'nullable|exists:bidang_perusahaan,id',
        'no_telp' => 'nullable|string|max:20',
        'alamat' => 'nullable|string|max:255',
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $member = User::findOrFail($id);

    $member->update([
        'name' => $request->name,
        'email' => $request->email,
        'nama_perusahaan' => $request->nama_perusahaan,
        'bidang_id' => $request->bidang_perusahaan,
        'no_telp' => $request->no_telp,
        'alamat' => $request->alamat,
    ]);

    if ($request->filled('password')) {
        $member->update(['password' => Hash::make($request->password)]);
    }

    return redirect()->route('members.index')->with('success', 'Member updated successfully.');
}

    

    public function destroy($id)
    {
        $member = User::findOrFail($id);
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');
    }

    public function addProducts($id)
    {
        $member = User::findOrFail($id);
        $produks = Produk::all(); // Mendapatkan semua produk yang tersedia
    
        return view('admin.members.add-products', compact('member', 'produks'));
    }

    public function storeProducts(Request $request, $id)
    {
        $request->validate([
            'produk_id.*' => 'exists:produk,id',
            'pembelian.*' => 'date', 
        ]);
    
        $member = User::findOrFail($id);
    
        foreach ($request->produk_id as $index => $produk_id) {
            UserProduk::create([
                'user_id' => $member->id,
                'produk_id' => $produk_id,
                'pembelian' => $request->pembelian[$index],
            ]);
        }
    
        return redirect()->route('members.show', $member->id)->with('success', 'Products added to member successfully.');
    }
    

    public function editProducts($id)
    {
        $member = User::with('userProduk')->findOrFail($id);
    
        $userProduks = $member->userProduk;
    
        return view('admin.members.edit-products', compact('member', 'userProduks'));
    }
    

    public function updateProducts(Request $request, $id)
    {
        $request->validate([
            'produk_id.*' => 'exists:produk,id',
            'pembelian.*' => 'nullable|date', // Mengizinkan tanggal kosong atau null
        ]);
    
        $member = User::findOrFail($id);
    
        // Hapus semua produk yang ada terlebih dahulu
        UserProduk::where('user_id', $member->id)->delete();
    
        // Jika ada produk yang dipilih, tambahkan kembali ke dalam database
        if ($request->has('produk_id')) {
            foreach ($request->produk_id as $index => $produk_id) {
                UserProduk::create([
                    'user_id' => $member->id,
                    'produk_id' => $produk_id,
                    'pembelian' => $request->pembelian[$index] ?? null, // Mengisi null jika tanggal tidak diberikan
                ]);
            }
        }
    
        return redirect()->route('members.show', $member->id)->with('success', 'Products updated successfully.');
    }

    public function validatePassword(Request $request)
{
    $adminPassword = $request->input('password');
    
    if (Hash::check($adminPassword, Auth::user()->password)) {
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false]);
    }
}


public function updatePassword(Request $request, $id)
{
    $request->validate([
        'password' => 'required|confirmed|min:8',
    ]);

    $member = User::find($id);
    $member->password = Hash::make($request->input('password'));
    $member->save();

    return response()->json(['success' => true]);
}

    







    


}

<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Models\BidangPerusahaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
        $password = session('password'); // Retrieve the password from the session

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

    // Check if password is provided
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
}

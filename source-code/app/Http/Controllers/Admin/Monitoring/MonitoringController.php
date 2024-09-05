<?php

namespace App\Http\Controllers\Admin\Monitoring;

use App\Http\Controllers\Controller;
use App\Models\Inspeksi;
use App\Models\InspeksiMaintenance;
use App\Models\Maintenance;
use App\Models\Monitoring;
use App\Models\User;
use App\Models\UserProduk;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        // Assuming role = 0 represents 'member' users
        $users = User::where('type', 0)->with('userProduk')->get();
    
        return view('admin.monitoring.index', compact('users'));
    }
    

    public function show($id)
    {
        // Get the user and their products
        $user = User::with('userProduk')->findOrFail($id);
    
        return view('admin.monitoring.show', compact('user'));
    }
    

    public function monitoringDetail($id)
    {
        $produk = UserProduk::with('user')->findOrFail($id);
        $user = $produk->user;
    
        // Fetch monitoring data
        $monitoring = $produk->monitoring()->first();
    
        // Fetch all related inspections
        $inspeksi = InspeksiMaintenance::where('user_produk_id', $id)->get();
    
        return view('admin.monitoring.detail', compact('user', 'produk', 'monitoring', 'inspeksi'));
    }
    

    public function create($userProdukId)
    {
        // Get the user product with the related product data
        $userProduk = UserProduk::with('produk')->findOrFail($userProdukId);
    
        return view('admin.monitoring.create', compact('userProduk'));
    }
    


public function store(Request $request)
{
    $validated = $request->validate([
        'user_produk_id' => 'required|exists:user_produk,id',
        'status_barang' => 'required|string|max:255',
        'kondisi_terakhir_produk' => 'required|string|max:255',
    ]);

    Monitoring::create($validated);

    return redirect()->route('admin.monitoring.index')->with('success', 'Monitoring data successfully created.');
}

public function edit($id)
{
    // Get the monitoring data to edit
    $monitoring = Monitoring::with('userProduk.produk')->findOrFail($id);
    $userProduk = $monitoring->userProduk;

    return view('admin.monitoring.edit', compact('monitoring', 'userProduk'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'status_barang' => 'required|string|max:255',
        'kondisi_terakhir_produk' => 'required|string|max:255',
    ]);

    $monitoring = Monitoring::findOrFail($id);
    $monitoring->update($validated);

    return redirect()->route('monitoring.detail', $monitoring->user_produk_id)->with('success', 'Monitoring data successfully updated.');
}

    public function inspeksiIndex($userProdukId)
    {
        $inspeksi = InspeksiMaintenance::where('user_produk_id', $userProdukId)->get();
        $userProduk = UserProduk::findOrFail($userProdukId);

        return view('admin.inspeksi.index', compact('inspeksi', 'userProduk'));
    }

    public function inspeksiShow($id)
    {
        $inspeksi = InspeksiMaintenance::with('userProduk')->findOrFail($id);

        return view('admin.inspeksi.show', compact('inspeksi'));
    }

    public function inspeksiCreate($userProdukId)
    {
        $userProduk = UserProduk::findOrFail($userProdukId);

        return view('admin.inspeksi.create', compact('userProduk'));
    }

    public function inspeksiStore(Request $request, $userProdukId)
    {
        $validated = $request->validate([
            'pic' => 'required|string|max:255',
            'waktu' => 'required|date',
            'gambar' => 'nullable|image',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'status' => 'required|in:Inspeksi,Maintenance',
        ]);

        $validated['user_produk_id'] = $userProdukId;

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('inspeksi', 'public');
            $validated['gambar'] = $imagePath;
        }

        InspeksiMaintenance::create($validated);

        return redirect()->route('monitoring.detail', $userProdukId)->with('success', 'Inspection data successfully created.');
    }

    // Show form to edit an existing inspection
    public function inspeksiEdit($id)
    {
        $inspeksi = InspeksiMaintenance::findOrFail($id);

        return view('admin.inspeksi.edit', compact('inspeksi'));
    }

    // Update inspection data
    public function inspeksiUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'pic' => 'required|string|max:255',
            'waktu' => 'required|date',
            'gambar' => 'nullable|image',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'status' => 'required|in:Inspeksi,Maintenance',
        ]);

        $inspeksi = InspeksiMaintenance::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('inspeksi', 'public');
            $validated['gambar'] = $imagePath;
        }

        $inspeksi->update($validated);

        return redirect()->route('monitoring.detail', $inspeksi->user_produk_id)->with('success', 'Inspection data successfully updated.');
    }

    // Delete an inspection
    public function inspeksiDestroy($id)
    {
        $inspeksi = InspeksiMaintenance::findOrFail($id);
        $userProdukId = $inspeksi->user_produk_id;
        $inspeksi->delete();

        return redirect()->route('monitoring.detail', $userProdukId)->with('success', 'Inspection data successfully deleted.');
    }

    
    






    

    
    






}

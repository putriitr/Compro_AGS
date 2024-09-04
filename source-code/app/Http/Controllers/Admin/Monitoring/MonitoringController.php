<?php

namespace App\Http\Controllers\Admin\Monitoring;

use App\Http\Controllers\Controller;
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
    
        $monitoring = $produk->monitoring()->first();
    
        return view('admin.monitoring.detail', compact('user', 'produk', 'monitoring'));
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






    

    
    






}

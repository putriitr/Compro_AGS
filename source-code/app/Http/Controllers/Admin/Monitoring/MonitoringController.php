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
    

    public function show($userId)
    {
        // Get the user and their products
        $user = User::with('userProduk')->findOrFail($userId);

        return view('admin.monitoring.show', compact('user'));
    }

    public function monitoringDetail($userId, $produkId)
{
    // Fetch user, product, and monitoring details
    $user = User::findOrFail($userId);
    $produk = $user->userProduk()->where('produk_id', $produkId)->first();
    
    if (!$produk) {
        abort(404, 'Product not found for this user');
    }

    $monitoring = $produk->monitoring()->first();

    return view('admin.monitoring.detail', compact('user', 'produk', 'monitoring'));
}






}

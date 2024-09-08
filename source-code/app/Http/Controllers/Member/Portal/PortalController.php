<?php

namespace App\Http\Controllers\Member\Portal;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Produk;
use App\Models\UserProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PortalController extends Controller
{
    public function index()
    {
        return view('member.portal.portal');
    }

    public function userProduk()
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to access your product catalog.');
        }
        
        $produks = $user->userProduk; // Fetch products associated with the authenticated user
        
        return view('member.portal.user-product', compact('produks'));
    }

    public function detailProduk($id)
    {
        $produk = Produk::with(['images', 'videos', 'documentCertificationsProduk', 'brosur'])->findOrFail($id);

        $user = Auth::user();
        
        $userProduk = $user ? $user->userProduk->where('produk_id', $id)->first() : null;

    return view('member.portal.detail-product', compact('produk', 'userProduk'));
    }
    

    public function Instructions()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
        
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their manuals
        $userProduks = $user->userProduk; // Get the user's `UserProduk` records
        $produks = $userProduks->map(function($userProduk) {
            return $userProduk->produk; // Get the related `Produk` model for each `UserProduk`
        });
    
        return view('member.portal.instructions', compact('produks'));
    }
    


    public function videos()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
        
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their manuals
        $userProduks = $user->userProduk; // Get the user's `UserProduk` records
        $produks = $userProduks->map(function($userProduk) {
            return $userProduk->produk; // Get the related `Produk` model for each `UserProduk`
        });
    
        // Remove duplicate products based on a unique identifier, e.g., product ID
        $uniqueProduks = $produks->unique('id');
    
        return view('member.portal.tutorials', compact('uniqueProduks'));
    }
    


    public function document()
    {
        // Mendapatkan data pengguna saat ini
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
        
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their manuals
        $userProduks = $user->userProduk; // Get the user's `UserProduk` records
        $produks = $userProduks->map(function($userProduk) {
            return $userProduk->produk; // Get the related `Produk` model for each `UserProduk`
        });
    
        // Mengembalikan tampilan dengan data produk dan dokumen sertifikasi
        return view('member.portal.document', compact('produks'));
    }

    public function Monitoring()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your monitoring.');
        }
    
        // Fetch all UserProduk records where 'user_id' matches the logged-in user's ID
        $userProduks = UserProduk::where('user_id', Auth::id())
                        ->with(['produk', 'monitoring', 'inspeksiMaintenance'])
                        ->get();
    
        return view('member.portal.monitoring', compact('userProduks'));
    }
    


    
    
    
    

    public function Faq(){
        $faqs = Faq::all();
        return view('member.portal.qna', compact('faqs'));

    }

    


}




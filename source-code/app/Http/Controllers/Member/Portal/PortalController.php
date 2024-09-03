<?php

namespace App\Http\Controllers\Member\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PortalController extends Controller
{
    public function index()
    {
        return view('member.portal.portal');
    }

    public function catalog()
    {
        $user = Auth::user();
    
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to access your product catalog.');
        }
    
        $produks = $user->produks; // Fetch products associated with the authenticated user
    
        return view('member.portal.catalog', compact('produks'));
    }

    public function photos()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
    
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their images
        $produks = $user->produks; // Fetch products associated with the authenticated user
    
        return view('member.portal.photos', compact('produks'));
    }

    public function Instructions()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
    
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their images
        $produks = $user->produks; // Fetch products associated with the authenticated user

        return view('member.portal.instructions', compact('produks'));
    }

    public function videos()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
    
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their images
        $produks = $user->produks; // Fetch products associated with the authenticated user

        return view('member.portal.tutorials', compact('produks'));
    }

    public function ControllerGenerations()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
    
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their images
        $produks = $user->produks; // Fetch products associated with the authenticated user

        return view('member.portal.controller-generations', compact('produks'));
    }

    public function Document()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access your photos.');
        }
    
        $user = Auth::user();
        
        // Fetch the products associated with the user along with their images
        $produks = $user->produks; // Fetch products associated with the authenticated user

        return view('member.portal.document', compact('produks'));
    }

    public function FaqProduk()
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please login to access your FAQs.');
    }

    $user = Auth::user();

    // Fetch all products associated with the authenticated user and their FAQs
    $produks = $user->produks->load('faqs');

    return view('member.portal.qna', compact('produks'));
}



}

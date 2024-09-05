<?php

namespace App\Http\Controllers;

use App\Models\BrandPartner;
use App\Models\CompanyParameter;
use App\Models\Kategori;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = Kategori::all();
        $sliders = Slider::all();
        $company = CompanyParameter::first();
        $brand = BrandPartner::where('type', 'brand')->get();
        $partners = BrandPartner::where('type', 'partner')->get();  // Filter by 'partner'
        $principals = BrandPartner::where('type', 'principal')->get();  // Filter by 'principal'
        
        return view('home', compact('kategori', 'sliders', 'company', 'brand', 'partners', 'principals'));
    }
    
    

    public function dashboard()
    {
        return view('dashboard');
    }

    public function about()
    {
        $company = CompanyParameter::first();
        $brand = BrandPartner::where('type', 'brand')->get();
        $partners = BrandPartner::where('type', 'partner')->get();  // Filter by 'partner'
        $principals = BrandPartner::where('type', 'principal')->get();  // Filter by 'principal'


        return view('Member.About.about', compact('company','brand', 'partners', 'principals'));
    }
}

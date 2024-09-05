<?php

namespace App\Http\Controllers;

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
        
        return view('home', compact('kategori', 'sliders'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function about()
    {
        return view('Member.About.about');
    }
}

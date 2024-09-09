<?php

namespace App\Http\Controllers\Admin\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        // Mengelompokkan data visitor berdasarkan tanggal kunjungan
        $visitorData = Visitor::selectRaw('DATE(last_visited) as date, COUNT(*) as total_visits')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        // Menyusun array untuk tanggal dan jumlah kunjungan
        $dates = $visitorData->pluck('date')->toArray();
        $visits = $visitorData->pluck('total_visits')->toArray();

        // Kirim data ke view
        return view('admin.visitor.index', compact('dates', 'visits'));
    }
}

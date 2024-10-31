<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\AfterSales;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = AfterSales::all(); // Admin melihat semua tiket
        return view('admin.tickets.index', compact('tickets'));
    }

    public function show($id)
    {
        $ticket = AfterSales::findOrFail($id);
        return view('admin.tickets.show', compact('ticket'));
    }

    public function process($id)
    {
        $ticket = AfterSales::findOrFail($id);
        $ticket->status = 'progress';
        $ticket->tgl_mulai_tindakan = now();
        $ticket->save();

        return redirect()->route('admin.tickets.index')->with('success', 'Tiket berhasil diproses.');
    }

    public function complete($id)
    {
        $ticket = AfterSales::findOrFail($id);
        $ticket->status = 'close';
        $ticket->tgl_selesai_tindakan = now();
        $ticket->save();

        return redirect()->route('admin.tickets.index')->with('success', 'Tiket berhasil diselesaikan.');
    }
}

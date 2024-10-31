<?php

namespace App\Http\Controllers\Member\Ticket;

use App\Http\Controllers\Controller;
use App\Models\AfterSales;
use Illuminate\Http\Request;

class TicketMemberController extends Controller

    {
        public function index()
        {
            $tickets = AfterSales::where('id_users', auth()->id())->get();
            return view('Member.Portal.Ticket.index', compact('tickets'));
        }
    
        public function create()
        {
            return view('Member.Portal.Ticket.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'jenis_layanan' => 'required|string',
                'keterangan_layanan' => 'required|string',
                'file_pendukung_layanan' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            ]);
    
            $ticket = new AfterSales();
            $ticket->jenis_layanan = $request->jenis_layanan;
            $ticket->keterangan_layanan = $request->keterangan_layanan;
            $ticket->tgl_pengajuan = now();
            $ticket->status = 'open';
            $ticket->id_users = auth()->id();
    
            if ($request->hasFile('file_pendukung_layanan')) {
                $ticket->file_pendukung_layanan = $request->file('file_pendukung_layanan')->store('pendukung_layanan', 'public');
            }
    
            $ticket->save();
    
            return redirect()->route('tickets.index')->with('success', 'Tiket layanan berhasil diajukan.');
        }
    
        public function show($id)
        {
            $ticket = AfterSales::where('id', $id)->where('id_users', auth()->id())->firstOrFail();
            return view('member.tickets.show', compact('ticket'));
        }
    
        public function edit($id)
        {
            $ticket = AfterSales::where('id', $id)->where('id_users', auth()->id())->firstOrFail();
            return view('member.tickets.edit', compact('ticket'));
        }
    
        public function cancel($id)
        {
            $ticket = AfterSales::where('id', $id)->where('id_users', auth()->id())->firstOrFail();
            $ticket->status = 'batal';
            $ticket->save();
    
            return redirect()->route('tickets.index')->with('success', 'Tiket berhasil dibatalkan.');
        }
    }

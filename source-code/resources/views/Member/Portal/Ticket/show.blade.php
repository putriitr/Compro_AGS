@extends('layouts.Member.master')

@section('content')
<div class="container">
    <h2>Detail Tiket Layanan</h2>
    <p><strong>Jenis Layanan:</strong> {{ $ticket->jenis_layanan }}</p>
    <p><strong>Keterangan Pengajuan:</strong> {{ $ticket->keterangan_layanan }}</p>
    <p><strong>Tanggal Pengajuan:</strong> {{ $ticket->tgl_pengajuan }}</p>
    <p><strong>Status:</strong> {{ $ticket->status }}</p>

    @if($ticket->file_pendukung_layanan)
        <p><strong>Dokumen Pendukung:</strong> <a href="{{ asset('storage/' . $ticket->file_pendukung_layanan) }}" target="_blank">Lihat Dokumen</a></p>
    @endif

    <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection

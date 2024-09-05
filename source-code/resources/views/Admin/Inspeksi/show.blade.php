@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Inspection Details for {{ $inspeksi->userProduk->produk->name }}</h1>

        <p><strong>PIC:</strong> {{ $inspeksi->pic }}</p>
        <p><strong>Time:</strong> {{ $inspeksi->waktu }}</p>
        <p><strong>Title:</strong> {{ $inspeksi->judul }}</p>
        <p><strong>Deskripsi :</strong> {!! $inspeksi->deskripsi !!}</p>
        
        @if($inspeksi->gambar)
            <p><strong>Image:</strong></p>
            <img src="{{ asset('storage/' . $inspeksi->gambar) }}" alt="Inspeksi Image" width="200">
        @endif

        <a href="{{ route('admin.inspeksi.index', $inspeksi->user_produk_id) }}" class="btn btn-primary">Back to Inspections</a>
    </div>
@endsection

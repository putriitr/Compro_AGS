@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Maintenance Details for {{ $maintenance->userProduk->produk->nama }}</h1>

        <p><strong>Date of Maintenance:</strong> {{ $maintenance->tanggal_perbaiki }}</p>
        <p><strong>Description:</strong> {{ $maintenance->maintenance }}</p>

        @if($maintenance->bukti)
            <p><strong>Proof:</strong></p>
            <img src="{{ asset('storage/' . $maintenance->bukti) }}" alt="Proof" width="200">
        @endif

        <a href="{{ route('admin.maintenance.index', $maintenance->userProduk->id) }}" class="btn btn-primary">Back to Maintenance List</a>
    </div>
@endsection

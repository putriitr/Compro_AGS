@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Monitoring for {{ $produk->produk->nama }}</h1>

        <h3>Product Details</h3>
        <p><strong>Name:</strong> {{ $produk->produk->nama }}</p>
        <p><strong>Purchase Date:</strong> {{ $produk->pembelian }}</p>

        <h3>Monitoring Data</h3>
        @if ($monitoring)
            <p><strong>Status Barang:</strong> {{ $monitoring->status_barang }}</p>
            <p><strong>Kondisi Terakhir Produk:</strong> {{ $monitoring->kondisi_terakhir_produk }}</p>
        @else
            <p>No monitoring data available for this product.</p>
        @endif

        <div class="btn-group" role="group">
            @if ($monitoring)
                <a href="{{ route('admin.monitoring.edit', $monitoring->id) }}" class="btn btn-warning mb-3">Edit Monitoring Data</a>
            @else
            <a href="{{ route('admin.monitoring.create', ['userProdukId' => $produk->id]) }}" class="btn btn-success mb-3">Create Monitoring Data</a>
            @endif
            <a href="{{ route('admin.inspeksi.index', ['userProdukId' => $produk->id]) }}" class="btn btn-primary mb-3">Inspeksi</a>
            <a href="{{ route('admin.maintenance.index', ['userProdukId' => $produk->id]) }}" class="btn btn-secondary mb-3">Maintenance</a>
        </div>
        
    </div>
@endsection

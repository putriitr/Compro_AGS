@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Edit Monitoring Data for {{ $userProduk->produk->nama }}</h1>

    <form action="{{ route('admin.monitoring.update', $monitoring->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Status Barang input -->
        <div class="form-group">
            <label for="status_barang">Status Barang</label>
            <input type="text" name="status_barang" id="status_barang" class="form-control" value="{{ $monitoring->status_barang }}" required>
        </div>

        <!-- Kondisi Terakhir Produk input -->
        <div class="form-group">
            <label for="kondisi_terakhir_produk">Kondisi Terakhir Produk</label>
            <input type="text" name="kondisi_terakhir_produk" id="kondisi_terakhir_produk" class="form-control" value="{{ $monitoring->kondisi_terakhir_produk }}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Monitoring Data</button>
    </form>
</div>
@endsection

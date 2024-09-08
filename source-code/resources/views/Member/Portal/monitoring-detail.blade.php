@extends('layouts.Member.master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">{{ $userProduk->produk->nama }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($userProduk->produk->images->first()->gambar ?? 'assets/img/default.jpg') }}" class="img-fluid" alt="Product Image">
        </div>
        <div class="col-md-6">
            <h3>Monitoring Details</h3>
            @if($userProduk->monitoring)
                <p>Status Barang: {{ $userProduk->monitoring->status_barang }}</p>
                <p>Kondisi Terakhir Produk: {{ $userProduk->monitoring->kondisi_terakhir_produk }}</p>
            @else
                <p>Monitoring information is not available.</p>
            @endif

            <h3>Inspeksi Maintenance</h3>
            @if($userProduk->inspeksiMaintenance)
                <p>PIC: {{ $userProduk->inspeksiMaintenance->pic }}</p>
                <p>Waktu: {{ $userProduk->inspeksiMaintenance->waktu }}</p>
                <p>Deskripsi: {{ $userProduk->inspeksiMaintenance->deskripsi }}</p>
                <p>Status: {{ $userProduk->inspeksiMaintenance->status }}</p>
            @else
                <p>Inspeksi maintenance details are not available.</p>
            @endif
        </div>
    </div>
</div>
@endsection

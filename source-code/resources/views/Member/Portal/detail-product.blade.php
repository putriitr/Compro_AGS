<!-- resources/views/member/portal/product-detail.blade.php -->

@extends('layouts.Member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Product Details</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/portal') }}">Portal Member</a></li>
            <li class="breadcrumb-item active text-primary">Product Details</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<div class="container mt-5 mb-5">
    <div class="card shadow">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6 mt-2 mb-2">
            <div class="card">
                <div class="card-body">
                    @if ($produk->images->isNotEmpty())
                        <!-- Display all images if available -->
                        <div class="row">
                            @foreach ($produk->images as $image)
                                <div class="col-md-6 mb-3">
                                    <img src="{{ asset($image->gambar) }}" class="img-fluid" alt="{{ $produk->nama }}">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <!-- Display a default image if there are no images -->
                        <img src="{{ asset('assets/img/default.jpg') }}" class="img-fluid" alt="{{ $produk->nama }}">
                    @endif
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6 mt-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $produk->nama }}</h2>
                    <p><strong>Merk:</strong> {{ $produk->merk }}</p>
                    <p><strong>Kegunaan:</strong> {{ $produk->kegunaan }}</p>
                    <p><strong>Via:</strong> {{ $produk->via }}</p>
                    <p><strong>Kategori:</strong> {{ $produk->kategori->nama ?? 'N/A' }}</p>
                    <p><strong>Purchase Date:</strong> {{ $userProduk->pembelian ?? 'N/A' }}</p>

                        <a href="{{ asset('portal') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

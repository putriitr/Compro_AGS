@extends('layouts.Member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">My Product</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/portal')}}">Portal Member</a></li>
            <li class="breadcrumb-item active text-primary">My Product</li>
        </ol>
    </div>
</div>
<!-- Header End --><br><br>

<div class="row mb-5">
    @forelse($produks as $produk)
        <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                <img src="{{ asset($produk->produk->images->first()->gambar ?? 'assets/img/default.jpg') }}" class="img-fluid rounded-top w-100" alt="{{ $produk->produk->nama }}">
                <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                    <small><strong>Purchase Date:</strong> {{ $produk->pembelian ?? 'N/A' }}</small>
                    <a href="{{ route('user-product.show', $produk->produk->id) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">View Details</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <p class="text-center">You don't have any products in your catalog.</p>
            <p class="text-center">Member belum memiliki produk yang di-claim oleh admin.</p>
        </div>
    @endforelse
</div>




@endsection

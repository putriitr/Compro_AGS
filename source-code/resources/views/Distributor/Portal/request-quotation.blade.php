@extends('layouts.Member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Pilih Produk & Permintaan Quotation</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('distribution') }}">Distributor Portal</a></li>
            <li class="breadcrumb-item active text-primary">Pilih Produk & Permintaan Quotation</li>
        </ol>
    </div>
</div>
<!-- Header End --><br><br>

<div class="container">
    <h2>Pilih Produk & Permintaan Quotation</h2>
    <p>Di sini Anda dapat memilih produk dan mengajukan permintaan quotation.</p>
    
    <!-- Quotation Requests Table -->
    <h3 class="mt-5">Daftar Permintaan Quotation</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($quotations as $key => $quotation)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $quotation->product->nama ?? 'Produk tidak tersedia' }}</td>
                    <td>{{ $quotation->quantity }}</td>
                    <td>{{ ucfirst($quotation->status) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Belum ada permintaan quotation.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.admin.master')

@section('content')
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h2 class="mb-4">Add Products for {{ $member->name }}</h2>

    <form action="{{ route('members.store-products', $member->id) }}" method="POST">
        @csrf

        <div class="row">
            @foreach($produks as $produk)
                <div class="col-md-4 mb-4">
                    <div class="card d-flex flex-column h-100">
                        <div class="card-body">
                            <!-- Display the first product image if available -->
                            @if($produk->images->isNotEmpty())
                                <div class="mb-3">
                                    @php
                                        $firstImage = $produk->images->first();
                                    @endphp
                                    <img src="{{ asset($firstImage->gambar) }}" class="img-fluid mb-3" alt="{{ $produk->nama }}" style="max-height: 150px; object-fit: cover;">
                                </div>
                            @else
                                <img src="{{ asset('assets/img/default.jpg') }}" class="img-fluid mb-3" alt="Default Image" style="max-height: 150px; object-fit: cover;">
                            @endif

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="produk_id[{{ $produk->id }}]" value="{{ $produk->id }}" id="produk_{{ $produk->id }}">
                                <label class="form-check-label" for="produk_{{ $produk->id }}">
                                    {{ $produk->nama }}
                                </label>
                            </div>

                            <div class="form-group mt-3">
                                <label for="pembelian_{{ $produk->id }}">Purchase Date</label>
                                <input type="date" name="pembelian[{{ $produk->id }}]" id="pembelian_{{ $produk->id }}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Products</button>
    </form>
</div>
@endsection

@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Edit Products for {{ $member->name }}</h2>

    <form action="{{ route('members.update-products', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div id="product-list">
            @foreach($member->userProduk as $userProduk)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="produk_id[]" value="{{ $userProduk->produk->id }}"
                    id="produk_{{ $userProduk->produk->id }}" checked>
                    
                    <label class="form-check-label" for="produk_{{ $userProduk->produk->id }}">
                        {{ $userProduk->produk->nama }}
                    </label>

                    <div class="form-group mt-2">
                        <label for="pembelian_{{ $userProduk->produk->id }}">Purchase Date</label>
                        <input type="date" name="pembelian[]" id="pembelian_{{ $userProduk->produk->id }}" class="form-control" value="{{ $userProduk->pembelian }}">
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Products</button>
    </form>
</div>
@endsection

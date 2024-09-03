@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Edit Products for {{ $member->name }}</h2>

    <form action="{{ route('members.update-products', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div id="product-list">
            @foreach($produks as $produk)
                @php
                    // Periksa apakah user memiliki produk ini
                    $userProduk = $member->produks->where('id', $produk->id)->first();
                @endphp
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="produk_id[]" value="{{ $produk->id }}"
                    id="produk_{{ $produk->id }}" 
                    {{ $userProduk ? 'checked' : '' }}>
                    
                    <label class="form-check-label" for="produk_{{ $produk->id }}">
                        {{ $produk->nama }}
                    </label>

                    @if($userProduk)
                        <div class="form-group mt-2">
                            <label for="pembelian_{{ $produk->id }}">Purchase Date</label>
                            <input type="date" name="pembelian[]" id="pembelian_{{ $produk->id }}" class="form-control" value="{{ $userProduk->pivot->pembelian }}">
                        </div>
                    @else
                        <div class="form-group mt-2">
                            <label for="pembelian_{{ $produk->id }}">Purchase Date</label>
                            <input type="date" name="pembelian[]" id="pembelian_{{ $produk->id }}" class="form-control">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Products</button>
    </form>
</div>
@endsection

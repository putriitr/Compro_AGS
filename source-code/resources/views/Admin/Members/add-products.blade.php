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

    <h2>Add Products for {{ $member->name }}</h2>

    <form action="{{ route('members.store-products', $member->id) }}" method="POST">
        @csrf

        <div id="product-list">
            @foreach($produks as $produk)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="produk_id[{{ $produk->id }}]" value="{{ $produk->id }}" id="produk_{{ $produk->id }}">
                    <label class="form-check-label" for="produk_{{ $produk->id }}">
                        {{ $produk->nama }}
                    </label>

                    <div class="form-group mt-2">
                        <label for="pembelian_{{ $produk->id }}">Purchase Date</label>
                        <input type="date" name="pembelian[{{ $produk->id }}]" id="pembelian_{{ $produk->id }}" class="form-control">
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Products</button>
    </form>
</div>
@endsection


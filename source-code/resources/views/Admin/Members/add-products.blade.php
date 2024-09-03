@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Add Products to {{ $member->name }}</h1>

    <form action="{{ route('members.store-products', $member->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Select Products</label>
            <div>
                @foreach($produks as $produk)
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="produk_id[]" value="{{ $produk->id }}" id="produk_{{ $produk->id }}">
                        <label class="form-check-label d-flex align-items-center" for="produk_{{ $produk->id }}">
                            <img src="{{ asset($produk->images->first()->gambar ?? 'assets/img/default.jpg') }}" alt="{{ $produk->nama }}" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover; margin-right: 10px;">
                            {{ $produk->nama }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Products</button>
    </form>
</div>
@endsection

@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Brand/Partner Details</h1>

        <div class="card">
            <div class="card-header">
                <h3>Details</h3>
            </div>
            <div class="card-body">
                <p><strong>Type: </strong>{{ ucfirst($brandPartner->type) }}</p>

                <p><strong>URL: </strong>
                    @if($brandPartner->url)
                        <a href="{{ $brandPartner->url }}" target="_blank">{{ $brandPartner->url }}</a>
                    @else
                        N/A
                    @endif
                </p>

                <p><strong>Image: </strong></p>
                @if($brandPartner->gambar)
                    <img src="{{ asset('storage/' . $brandPartner->gambar) }}" alt="Image" width="200">
                @else
                    <p>No Image Available</p>
                @endif
            </div>
        </div>

        <a href="{{ route('admin.brand_partner.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection

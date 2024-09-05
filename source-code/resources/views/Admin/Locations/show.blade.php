@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Detail Lokasi</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <p><strong>Nama:</strong> {{ $location->name }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Latitude:</strong> {{ $location->latitude }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Longitude:</strong> {{ $location->longitude }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Deskripsi:</strong> {{ $location->description }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Alamat:</strong> {{ $location->address }}</p>
                </div>

                @if ($location->image)
                    <div class="mb-3">
                        <p><strong>Gambar:</strong></p>
                        <img src="{{ asset('storage/' . $location->image) }}" alt="Location Image" class="img-thumbnail" width="150">
                    </div>
                @endif

                <div class="mb-3">
                    <a href="{{ route('admin.locations.edit', $location) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.locations.destroy', $location) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this location?');">Delete</button>
                    </form>
                </div>

                <a href="{{ route('admin.locations.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
            </div>
        </div>
    </div>
</div>
@endsection

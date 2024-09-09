@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Edit Brand/Partner</h1>

        <form action="{{ route('admin.brand.update', $brandPartner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="gambar">Current Image</label>
                @if($brandPartner->gambar)
                    <img src="{{ asset('storage/' . $brandPartner->gambar) }}" alt="Image" width="100" class="mb-3">
                @endif
                <input type="file" name="gambar" class="form-control">
                @error('gambar')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" class="form-control">
                    <option value="brand" {{ $brandPartner->type == 'brand' ? 'selected' : '' }}>Brand</option>
                    <option value="partner" {{ $brandPartner->type == 'partner' ? 'selected' : '' }}>Partner</option>
                    <option value="principal" {{ $brandPartner->type == 'principal' ? 'selected' : '' }}>Principal</option>
                </select>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">URL (Optional)</label>
                <input type="text" name="url" class="form-control" value="{{ old('url', $brandPartner->url) }}">
                @error('url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">nama (Optional)</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $brandPartner->nama) }}">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Update Brand/Partner</button>
        </form>
    </div>
@endsection

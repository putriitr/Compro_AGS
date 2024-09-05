@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Create New Brand/Partner</h1>

        <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="gambar">Image</label>
                <input type="file" name="gambar" class="form-control">
                @error('gambar')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" class="form-control">
                    <option value="brand">Brand</option>
                    <option value="partner">Partner</option>
                    <option value="principal">Principal</option>
                </select>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">URL (Optional)</label>
                <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                @error('url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Brand/Partner</button>
        </form>
    </div>
@endsection

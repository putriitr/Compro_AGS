@extends('layouts.admin.master')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header">
                <h1 class="h4">Create New Brand/Partner</h1>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="gambar">Image</label>
                        <input type="file" name="gambar" class="form-control">
                        @error('gambar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
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

                    <div class="form-group mb-3">
                        <label for="url">URL (Optional)</label>
                        <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                        @error('url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Nama (Optional)</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                        @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Create Brand/Partner</button>
                </form>
            </div>
        </div>
    </div>
@endsection

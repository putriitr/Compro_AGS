@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Edit Lokasi</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.locations.update', $location->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $location->name) }}" required>
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="latitude" class="form-label">Latitude:</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $location->latitude) }}">
                        @if ($errors->has('latitude'))
                            <small class="text-danger">{{ $errors->first('latitude') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="longitude" class="form-label">Longitude:</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $location->longitude) }}">
                        @if ($errors->has('longitude'))
                            <small class="text-danger">{{ $errors->first('longitude') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Deskripsi:</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description', $location->description) }}</textarea>
                        @if ($errors->has('description'))
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="address" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $location->address) }}">
                        @if ($errors->has('address'))
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="image" class="form-label">Gambar:</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @if ($errors->has('image'))
                            <small class="text-danger">{{ $errors->first('image') }}</small>
                        @endif
                    </div>

                    @if ($location->image)
                        <div class="form-group mb-3">
                            <label>Current Image:</label>
                            <div>
                                <img src="{{ asset('storage/' . $location->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                            </div>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.locations.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

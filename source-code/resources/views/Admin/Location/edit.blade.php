@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Edit Location</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.location.update', $location->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="province">Province</label>
            <input type="text" class="form-control" id="province" name="province" value="{{ old('province', $location->province) }}" required>
        </div>

        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $location->latitude) }}" required>
        </div>

        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $location->longitude) }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Location</button>
    </form>
</div>
@endsection

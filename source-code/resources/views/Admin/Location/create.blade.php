@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header">
            <h2 class="h4">Add New Location</h2>
        </div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.location.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="latitude">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="longitude">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude') }}" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Add Location</button>
            </form>
        </div>
    </div>
</div>
@endsection

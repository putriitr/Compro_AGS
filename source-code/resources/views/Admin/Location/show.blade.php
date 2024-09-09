@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Location Details</h2>

    <a href="{{ route('admin.location.index') }}" class="btn btn-secondary mb-3">Back to List</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $location->province }}</h5>
            <p class="card-text"><strong>Latitude:</strong> {{ $location->latitude }}</p>
            <p class="card-text"><strong>Longitude:</strong> {{ $location->longitude }}</p>

            <a href="{{ route('admin.location.edit', $location->id) }}" class="btn btn-warning mt-3">Edit</a>
            <form action="{{ route('admin.location.destroy', $location->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Are you sure you want to delete this location?');">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

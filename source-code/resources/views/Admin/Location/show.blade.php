@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <h2>Location Details</h2>


    <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">{{ $location->province }}</h5>
            <p class="card-text"><strong>Latitude:</strong> {{ $location->latitude }}</p>
            <p class="card-text"><strong>Longitude:</strong> {{ $location->longitude }}</p>

            <div class="mt-3">
                <a href="{{ route('admin.location.edit', $location->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.location.destroy', $location->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this location?');">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <a href="{{ route('admin.location.index') }}" class="btn btn-secondary mb-3">Back to List</a>

</div>
@endsection

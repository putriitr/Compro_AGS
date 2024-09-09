@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Locations</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.location.create') }}" class="btn btn-primary mb-3">Add New Location</a>

    @if($locations->isEmpty())
        <p>No Locations found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Province</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td>{{ $location->province }}</td>
                        <td>{{ $location->latitude }}</td>
                        <td>{{ $location->longitude }}</td>
                        <td>
                            <a href="{{ route('admin.location.show', $location->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.location.edit', $location->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.location.destroy', $location->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this location?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Activity Details</h2>

    <div class="card mt-4">
        <div class="card-header">
            <h4>{{ $activity->title }}</h4>
        </div>
        <div class="card-body">
            @if ($activity->image)
                <div class="mb-3">
                    <img src="{{ asset('images/' . $activity->image) }}" class="img-fluid" alt="{{ $activity->title }}">
                </div>
            @else
                <p>No image available</p>
            @endif
            <p><strong>Date:</strong> {{ $activity->date->format('d M Y') }}</p>
            <p><strong>Description:</strong></p>
            <p>{{ $activity->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.activity.edit', $activity->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.activity.destroy', $activity->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this activity?');">Delete</button>
            </form>
        </div>
    </div>

    <a href="{{ route('admin.activity.index') }}" class="btn btn-secondary mt-3">Back to Activities</a>
</div>
@endsection

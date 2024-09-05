@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Activities</h1>
    <a href="{{ route('admin.activity.create') }}" class="btn btn-primary">Add New Activity</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Date</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td><img src="{{ asset('images/'.$activity->image) }}" alt="{{ $activity->title }}" width="100"></td>
                    <td>{{ $activity->date->format('d-m-Y') }}</td>
                    <td>{{ $activity->title }}</td>
                    <td>{{ Str::limit($activity->description, 50) }}</td>
                    <td>

                        <a href="{{ route('admin.activity.edit', $activity) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.activity.show', $activity) }}" class="btn btn-info">View</a>
                        <form action="{{ route('admin.activity.destroy', $activity) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

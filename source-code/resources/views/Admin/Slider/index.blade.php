@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>All Sliders</h1>
        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary mb-3">Add New Slider</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Description</th>
                    <th>Button Text</th>
                    <th>Button URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td><img src="{{ asset($slider->image_url) }}" alt="slider image" width="100"></td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->subtitle }}</td>
                        <td>{{ $slider->description }}</td>
                        <td>{{ $slider->button_text }}</td>
                        <td>{{ $slider->button_url }}</td>
                        <td>
                            <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this slider?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

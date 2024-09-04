@extends('layouts.admin.master')

@section('content')
    <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">Create Slider</a>

    @foreach($sliders as $slider)
        <div class="slider-item">
            <img src="{{ asset('storage/' . $slider->image_url) }}" alt="Slider Image" class="img-fluid">
            <h5>{{ $slider->subtitle }}</h5>
            <h1>{{ $slider->title }}</h1>
            <p>{{ $slider->description }}</p>
            <a href="{{ $slider->button_url }}" class="btn btn-primary">{{ $slider->button_text }}</a>
            <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach
@endsection

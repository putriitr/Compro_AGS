@extends('layouts.admin.master')

@section('content')
    <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image_url">Image</label>
            <input type="file" class="form-control" id="image_url" name="image_url">
            <img src="{{ asset('storage/' . $slider->image_url) }}" alt="Slider Image" class="img-fluid mt-2">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $slider->title }}">
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $slider->subtitle }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $slider->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="button_text">Button Text</label>
            <input type="text" class="form-control" id="button_text" name="button_text" value="{{ $slider->button_text }}">
        </div>
        <div class="form-group">
            <label for="button_url">Button URL</label>
            <input type="text" class="form-control" id="button_url" name="button_url" value="{{ $slider->button_url }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

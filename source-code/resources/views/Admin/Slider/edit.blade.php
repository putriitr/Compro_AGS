@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Edit Slider</h1>

        <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="image_url">Image</label>
                <input type="file" name="image_url" class="form-control">
                <img src="{{ asset($slider->image_url) }}" alt="slider image" width="100" class="mt-3">
                @error('image_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" value="{{ $slider->subtitle }}">
                @error('subtitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ $slider->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="button_text">Button Text</label>
                <input type="text" name="button_text" class="form-control" value="{{ $slider->button_text }}">
                @error('button_text')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="button_url">Button URL</label>
                <input type="text" name="button_url" class="form-control" value="{{ $slider->button_url }}">
                @error('button_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Slider</button>
        </form>
    </div>
@endsection

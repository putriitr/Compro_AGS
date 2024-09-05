@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Create New Slider</h1>

        <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image_url">Image</label>
                <input type="file" name="image_url" class="form-control">
                @error('image_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}">
                @error('subtitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="button_text">Button Text</label>
                <input type="text" name="button_text" class="form-control" value="{{ old('button_text') }}">
                @error('button_text')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="button_url">Button URL</label>
                <select name="button_url" class="form-control">
                    <option value="">Select a predefined route or activity</option>
            
                    <!-- Predefined Routes -->
                    @foreach ($routes as $name => $url)
                        <option value="{{ $url }}" {{ old('button_url') == $url ? 'selected' : '' }}>
                            {{ ucfirst($name) }} (Predefined)
                        </option>
                    @endforeach
            
                    <!-- Dynamic Activities -->
                    @foreach ($activities as $activity)
                        <option value="{{ route('activity.show', $activity->id) }}" 
                            {{ old('button_url') == route('activity.show', $activity->id) ? 'selected' : '' }}>
                            {{ $activity->title }} (Activity)
                        </option>
                    @endforeach
                </select>
            
                @error('button_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            

            <button type="submit" class="btn btn-primary">Create Slider</button>
        </form>
    </div>
@endsection

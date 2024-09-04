@extends('layouts.admin.master')

@section('content')
    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image_url">Image</label>
            <input type="file" class="form-control" id="image_url" name="image_url">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="button_text">Button Text</label>
            <input type="text" class="form-control" id="button_text" name="button_text">
        </div>
        <div class="form-group">
            <label for="button_url">Button URL</label>
            <input type="url" class="form-control" id="button_url" name="button_url">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection

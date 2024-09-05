@extends('layouts.admin.master')

@section('content')
<div class="container">
    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{ $contact->address }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="work_time">Work Time:</label>
            <input type="text" name="work_time" value="{{ $contact->work_time }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $contact->email }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="website">Website:</label>
            <input type="url" name="website" value="{{ $contact->website }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

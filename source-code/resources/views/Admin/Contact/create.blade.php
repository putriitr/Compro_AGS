@extends('layouts.admin.master')

@section('content')
<div class="container">
    <form action="{{ route('admin.contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="work_time">Work Time:</label>
            <input type="text" name="work_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="website">Website:</label>
            <input type="text" name="website" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection

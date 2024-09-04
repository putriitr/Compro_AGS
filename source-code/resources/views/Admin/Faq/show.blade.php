@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>FAQ Details</h2>

    <div class="card mt-4">
        <div class="card-header">
            <h4>{{ $faq->pertanyaan }}</h4>
        </div>
        <div class="card-body">
            <p>{{ $faq->jawaban }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this FAQ?');">Delete</button>
            </form>
        </div>
    </div>

    <a href="{{ route('admin.faq.index') }}" class="btn btn-secondary mt-3">Back to FAQs</a>
</div>
@endsection

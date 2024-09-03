@extends('layouts.app')

@section('content')
<div class="container">
    <h2>FAQ Details for {{ $produk->nama }}</h2>

    <div class="card mt-4">
        <div class="card-header">
            <h4>{{ $faq->pertanyaan }}</h4>
        </div>
        <div class="card-body">
            <p>{{ $faq->jawaban }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.faq.edit', [$produk->id, $faq->id]) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.faq.destroy', [$produk->id, $faq->id]) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this FAQ?');">Delete</button>
            </form>
        </div>
    </div>

    <a href="{{ route('admin.faq.index', $produk->id) }}" class="btn btn-secondary mt-3">Back to FAQs</a>
</div>
@endsection

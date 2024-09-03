@extends('layouts.app')

@section('content')
<div class="container">
    <h2>FAQs for {{ $produk->nama }}</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.faq.create', $produk->id) }}" class="btn btn-primary mb-3">Add New FAQ</a>

    @if($faqs->isEmpty())
        <p>No FAQs found for this product.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>pertanyaan</th>
                    <th>jawaban</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faqs as $faq)
                    <tr>
                        <td>{{ $faq->pertanyaan }}</td>
                        <td>{{ Str::limit($faq->jawaban, 100) }}</td>
                        <td>
                            <a href="{{ route('admin.faq.show', [$produk->id, $faq->id]) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.faq.edit', [$produk->id, $faq->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.faq.destroy', [$produk->id, $faq->id]) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

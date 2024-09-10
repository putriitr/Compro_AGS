@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h4">FAQs</h2>
            <a href="{{ route('admin.faq.create') }}" class="btn btn-primary">Add New FAQ</a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($faqs->isEmpty())
                <p>No FAQs found.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                                <tr>
                                    <td>{{ $faq->pertanyaan }}</td>
                                    <td>{{ Str::limit($faq->jawaban, 100) }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this FAQ?');">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

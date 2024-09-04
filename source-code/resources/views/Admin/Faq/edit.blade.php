@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Edit FAQ</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="{{ old('pertanyaan', $faq->pertanyaan) }}" required>
        </div>
        <div class="form-group">
            <label for="jawaban">Jawaban</label>
            <textarea class="form-control" id="jawaban" name="jawaban" rows="5" required>{{ old('jawaban', $faq->jawaban) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update FAQ</button>
    </form>
</div>
@endsection

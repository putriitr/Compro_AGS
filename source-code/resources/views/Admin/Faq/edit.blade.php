@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit FAQ for {{ $produk->nama }}</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.faq.update', [$produk->id, $faq->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pertanyaan">pertanyaan</label>
            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="{{ old('pertanyaan', $faq->pertanyaan) }}" required>
        </div>
        <div class="form-group">
            <label for="jawaban">jawaban</label>
            <textarea class="form-control" id="jawaban" name="jawaban" rows="5" required>{{ old('jawaban', $faq->jawaban) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update FAQ</button>
    </form>
</div>
@endsection

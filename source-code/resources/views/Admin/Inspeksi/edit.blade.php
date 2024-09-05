@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Edit Inspection for {{ $inspeksi->userProduk->produk->name }}</h1>

        <form action="{{ route('admin.inspeksi.update', $inspeksi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="pic">PIC</label>
                <input type="text" name="pic" class="form-control" value="{{ $inspeksi->pic }}" required>
            </div>

            <div class="form-group">
                <label for="waktu">Time</label>
                <input type="datetime-local" name="waktu" class="form-control" value="{{ $inspeksi->waktu }}" required>
            </div>

            <div class="form-group">
                <label for="judul">Title</label>
                <input type="text" name="judul" class="form-control" value="{{ $inspeksi->judul }}" required>
            </div>

            <div class="form-group">
                <label for="gambar">Image (optional)</label>
                <input type="file" name="gambar" class="form-control">
                @if($inspeksi->gambar)
                    <img src="{{ asset('storage/' . $inspeksi->gambar) }}" alt="Inspeksi Image" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

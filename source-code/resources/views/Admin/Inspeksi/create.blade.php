@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Add New Inspection for {{ $userProduk->produk->name }}</h1>

        <form action="{{ route('admin.inspeksi.store', $userProduk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="pic">PIC</label>
                <input type="text" name="pic" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="waktu">Time</label>
                <input type="datetime-local" name="waktu" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="judul">Title</label>
                <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="gambar">Image (optional)</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

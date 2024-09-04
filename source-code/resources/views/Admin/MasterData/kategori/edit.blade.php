@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary mb-3">Back</a>
            <div class="card">
                <div class="card-header">
                    <h3>Edit Kategori</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Kategori</label>
                            <input type="file" name="gambar" class="form-control">
                            <img src="{{ asset($kategori->gambar) }}" width="100" alt="{{ $kategori->nama }}" class="mt-2">
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

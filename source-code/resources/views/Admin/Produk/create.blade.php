@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Buat Produk Baru</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="merk">Merk Produk:</label>
                    <input type="text" name="merk" class="form-control" value="{{ old('merk') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="via">Via:</label>
                    <select name="via" class="form-control" required>
                        <option value="labtek" {{ old('via') == 'labtek' ? 'selected' : '' }}>Labtek</option>
                        <option value="labverse" {{ old('via') == 'labverse' ? 'selected' : '' }}>Labverse</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kategori_id">Kategoris:</label>
                    <select name="kategori_id" class="form-control" required>
                        @foreach ($kategori as $kategoris)
                            <option value="{{ $kategoris->id }}" {{ old('kategori_id') == $kategoris->id ? 'selected' : '' }}>
                                {{ $kategoris->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="gambar">Gambar Produk:</label>
                    <input type="file" name="gambar[]" class="form-control" multiple required>
                    <small class="form-text text-muted">Unggah beberapa gambar produk jika diperlukan.</small>
                </div>

                <button type="submit" class="btn btn-success">Simpan Produk</button>
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection

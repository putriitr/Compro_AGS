@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Produk</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="merk">Merk Produk:</label>
                    <input type="text" name="merk" class="form-control" value="{{ old('merk', $produk->merk) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="via">Via:</label>
                    <select name="via" class="form-control" required>
                        <option value="labtek" {{ old('via', $produk->via) == 'labtek' ? 'selected' : '' }}>Labtek</option>
                        <option value="labverse" {{ old('via', $produk->via) == 'labverse' ? 'selected' : '' }}>Labverse</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kategori_id">Kategori:</label>
                    <select name="kategori_id" class="form-control" required>
                        @foreach ($kategori as $kategoris)
                            <option value="{{ $kategoris->id }}" {{ old('kategori_id', $produk->kategoris_id) == $kategoris->id ? 'selected' : '' }}>
                                {{ $kategoris->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="gambar">Gambar Produk (Optional):</label>
                    <input type="file" name="gambar[]" class="form-control" multiple>
                    <div class="mt-3">
                        @foreach ($produk->images as $image)
                            <img src="{{ asset($image->gambar) }}" alt="{{ $produk->nama }}" width="100" class="img-thumbnail">
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update Produk</button>
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection

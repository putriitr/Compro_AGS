@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Produk</h2>
            <a href="{{ route('admin.produk.create') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Produk</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Merk</th>
                                <th>Via</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk)
                                <tr>
                                    <td>{{ $produk->id }}</td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>{{ $produk->merk }}</td>
                                    <td>{{ ucfirst($produk->via) }}</td>
                                    <td>{{ $produk->kategori->nama }}</td>
                                    <td>
                                        @foreach ($produk->images as $image)
                                            <img src="{{ asset($image->gambar) }}" width="50" height="50" alt="{{ $produk->nama }}">
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

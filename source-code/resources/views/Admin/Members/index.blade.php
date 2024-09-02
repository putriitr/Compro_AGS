@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Produk List</h1>
    <a href="{{ route('admin.produk.create') }}" class="btn btn-primary mb-3">Add New Produk</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Merk</th>
                <th>Via</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
                <tr>
                    <td>{{ $produk->id }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->merk }}</td>
                    <td>{{ $produk->via }}</td>
                    <td>
                        <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

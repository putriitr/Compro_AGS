@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Monitoring for {{ $produk->produk->nama }}</h1>

        <h3>Product Details</h3>
        <p><strong>Name:</strong> {{ $produk->produk->nama }}</p>
        <p><strong>Purchase Date:</strong> {{ $produk->pembelian }}</p>

        <h3>Monitoring Data</h3>
        @if ($monitoring)
            <p><strong>Status Barang:</strong> {{ $monitoring->status_barang }}</p>
            <p><strong>Kondisi Terakhir Produk:</strong> {{ $monitoring->kondisi_terakhir_produk }}</p>
        @else
            <p>No monitoring data available for this product.</p>
        @endif

        <div class="btn-group" role="group">
            @if ($monitoring)
                <a href="{{ route('admin.monitoring.edit', $monitoring->id) }}" class="btn btn-warning mb-3">Edit Monitoring Data</a>
            @else
                <a href="{{ route('admin.monitoring.create', ['userProdukId' => $produk->id]) }}" class="btn btn-success mb-3">Create Monitoring Data</a>
            @endif
        </div>

        <h3>Inspections - Maintenance Produk</h3>
<a href="{{ route('admin.inspeksi.create', ['userProdukId' => $produk->id]) }}" class="btn btn-primary mb-3">Create Inspeksi</a>

        @if ($inspeksi->isNotEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>PIC</th>
                        <th>Time</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inspeksi as $item)
                        <tr>
                            <td>{{ $item->pic }}</td>
                            <td>{{ $item->waktu }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{!! $item->deskripsi !!}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('admin.inspeksi.show', $item->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('admin.inspeksi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.inspeksi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this inspection?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No inspections found for this product.</p>
        @endif
    </div>
@endsection




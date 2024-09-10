@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h2>Monitoring for {{ $produk->produk->nama }}</h2>
                </div>
                <div class="card-body">
                    <h3 class="mb-4">Product Details</h3>
                    <div class="mb-3">
                        <table class="table table-bordered mb-4">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $produk->produk->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Purchase Date</th>
                                    <td>{{ $produk->pembelian }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 class="mb-4">Monitoring Data</h3>
                    @if ($monitoring)
                    <table class="table table-borderless mb-3" style="width: auto;">
                        <tbody>
                            <tr>
                                <th scope="row">Status Barang:</th>
                                <td>{{ $monitoring->status_barang }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kondisi Terakhir Produk:</th>
                                <td>{{ $monitoring->kondisi_terakhir_produk }}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    @else
                        <p class="text-muted">No monitoring data available for this product.</p>
                    @endif

                    <div class="mb-4">
                        @if ($monitoring)
                            <a href="{{ route('admin.monitoring.edit', $monitoring->id) }}" class="btn btn-warning">Edit Monitoring Data</a>
                        @else
                            <a href="{{ route('admin.monitoring.create', ['userProdukId' => $produk->id]) }}" class="btn btn-success">Create Monitoring Data</a>
                        @endif
                    </div>

                    <h3 class="mb-4">Inspections - Maintenance Produk</h3>
                    <a href="{{ route('admin.inspeksi.create', ['userProdukId' => $produk->id]) }}" class="btn btn-primary mb-4">Create Inspeksi</a>

                    @if ($inspeksi->isNotEmpty())
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>PIC</th>
                                    <th>Time</th>
                                    <th>Title</th>
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
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.inspeksi.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('admin.inspeksi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('admin.inspeksi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this inspection?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-muted">No inspections found for this product.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('admin.monitoring.index') }}" class="btn btn-secondary">Back to Monitoring List</a>

</div>
@endsection

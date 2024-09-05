@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Maintenance Records for {{ $userProduk->produk->nama }}</h1>
        <a href="{{ route('admin.maintenance.create', $userProduk->id) }}" class="btn btn-primary mb-3">Add New Maintenance</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date of Maintenance</th>
                    <th>Description</th>
                    <th>Proof (Image)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($maintenance as $item)
                    <tr>
                        <td>{{ $item->tanggal_perbaiki }}</td>
                        <td>{{ $item->maintenance }}</td>
                        <td>
                            @if($item->bukti)
                                <img src="{{ asset('storage/' . $item->bukti) }}" alt="Proof" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.maintenance.show', $item->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('admin.maintenance.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.maintenance.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this maintenance record?')">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No maintenance records found for this product.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

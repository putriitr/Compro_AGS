@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>{{ $monitoring->exists ? 'Edit Monitoring Data' : 'Add Monitoring Data' }}</h1>

        <form action="{{ $monitoring->exists ? route('monitoring.update', $monitoring->id) : route('monitoring.store') }}" method="POST">
            @csrf
            @if($monitoring->exists)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="status_barang">Status Barang</label>
                <input type="text" class="form-control" id="status_barang" name="status_barang" value="{{ $monitoring->status_barang ?? '' }}" required>
            </div>

            <div class="form-group">
                <label for="kondisi_terakhir_produk">Kondisi Terakhir Produk</label>
                <textarea class="form-control" id="kondisi_terakhir_produk" name="kondisi_terakhir_produk" rows="4" required>{{ $monitoring->kondisi_terakhir_produk ?? '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">{{ $monitoring->exists ? 'Save Changes' : 'Add Monitoring Data' }}</button>
            <a href="{{ route('monitoring.detail', $monitoringId) }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

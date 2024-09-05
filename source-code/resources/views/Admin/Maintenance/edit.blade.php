@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Edit Maintenance for {{ $maintenance->userProduk->produk->nama }}</h1>

        <form action="{{ route('admin.maintenance.update', $maintenance->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tanggal_perbaiki">Date of Maintenance</label>
                <input type="date" name="tanggal_perbaiki" class="form-control" value="{{ $maintenance->tanggal_perbaiki }}" required>
            </div>

            <div class="form-group">
                <label for="maintenance">Maintenance Description</label>
                <textarea name="maintenance" class="form-control" required>{{ $maintenance->maintenance }}</textarea>
            </div>

            <div class="form-group">
                <label for="bukti">Proof (optional)</label>
                <input type="file" name="bukti" class="form-control">
                @if($maintenance->bukti)
                    <img src="{{ asset('storage/' . $maintenance->bukti) }}" alt="Proof" width="100" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

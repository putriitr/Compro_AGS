@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Add New Maintenance for {{ $userProduk->produk->nama }}</h1>

        <form action="{{ route('admin.maintenance.store', $userProduk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="tanggal_perbaiki">Date of Maintenance</label>
                <input type="date" name="tanggal_perbaiki" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="maintenance">Maintenance Description</label>
                <textarea name="maintenance" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="bukti">Proof (optional)</label>
                <input type="file" name="bukti" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

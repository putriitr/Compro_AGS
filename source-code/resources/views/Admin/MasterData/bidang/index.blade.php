@extends('layouts.admin.master')

@section('content')

<div class="container">
    <h1>Daftar Bidang Perusahaan</h1>
    <a href="{{ route('bidangperusahaan.create') }}" class="btn btn-primary mb-3">Tambah Bidang Perusahaan</a>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        @foreach ($bidangPerusahaans as $bidangPerusahaan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $bidangPerusahaan->name }}</td>
            <td>
                <a href="{{ route('bidangperusahaan.edit', $bidangPerusahaan->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('bidangperusahaan.destroy', $bidangPerusahaan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection

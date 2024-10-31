@extends('layouts.Member.master')

@section('content')
<div class="container">
    <h2>Edit Tiket Layanan</h2>
    <form action="{{ route('tickets.update', $ticket->id_after_sales) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="jenis_layanan">Jenis Layanan</label>
            <select name="jenis_layanan" id="jenis_layanan" class="form-control" disabled>
                <option value="{{ $ticket->jenis_layanan }}" selected>{{ $ticket->jenis_layanan }}</option>
            </select>
        </div>

        <div class="form-group">
            <label for="keterangan_layanan">Keterangan Pengajuan</label>
            <textarea name="keterangan_layanan" id="keterangan_layanan" class="form-control" rows="4">{{ $ticket->keterangan_layanan }}</textarea>
        </div>

        <div class="form-group">
            <label for="file_pendukung_layanan">Dok Pendukung</label>
            <input type="file" name="file_pendukung_layanan" id="file_pendukung_layanan" class="form-control-file">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection

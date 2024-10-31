@extends('layouts.Member.master')

@section('content')
<div class="container">
    <h2>Buat Tiket Layanan Baru</h2>
    <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="jenis_layanan">Jenis Layanan</label>
            <select name="jenis_layanan" id="jenis_layanan" class="form-control">
                <option value="Permintaan Data">Permintaan Data</option>
                <option value="Maintanance">Maintanance</option>
                <option value="Visit">Visit</option>
                <option value="Installasi">Installasi</option>
            </select>
        </div>

        <div class="form-group">
            <label for="keterangan_layanan">Keterangan Pengajuan</label>
            <textarea name="keterangan_layanan" id="keterangan_layanan" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="file_pendukung_layanan">Dok Pendukung</label>
            <input type="file" name="file_pendukung_layanan" id="file_pendukung_layanan" class="form-control-file">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
    </form>
</div>
@endsection

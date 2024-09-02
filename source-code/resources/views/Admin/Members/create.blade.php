@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Membuat Akun Member</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('members.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan:</label>
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}">
                        @if ($errors->has('nama_perusahaan'))
                            <small class="text-danger">{{ $errors->first('nama_perusahaan') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="bidang_perusahaan" class="form-label">Bidang Perusahaan</label>
                        <select name="bidang_perusahaan" id="bidang_perusahaan" class="form-control">
                            <option value="" disabled selected>Pilih Bidang Perusahaan</option>
                            @foreach($bidangPerusahaan as $bidang)
                                <option value="{{ $bidang->id }}">{{ $bidang->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    

                    <div class="form-group mb-3">
                        <label for="no_telp" class="form-label">Nomor Telepon:</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                        @if ($errors->has('no_telp'))
                            <small class="text-danger">{{ $errors->first('no_telp') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
                        @if ($errors->has('alamat'))
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('members.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

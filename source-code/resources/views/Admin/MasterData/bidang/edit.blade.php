@extends('layouts.admin.master')

@section('content')

<div class="container">
    <h1>Edit Bidang Perusahaan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bidangperusahaan.update', $bidangPerusahaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Bidang Perusahaan:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $bidangPerusahaan->name }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>

@endsection

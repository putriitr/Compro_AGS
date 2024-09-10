@extends('layouts.admin.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Kategori</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.kategori.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Save</button>
            <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary mt-3">Back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

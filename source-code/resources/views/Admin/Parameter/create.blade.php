@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header">
            <h2 class="h4">Add New Company Parameter</h2>
        </div>

        <div class="card-body">
            <form action="{{ route('parameter.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @include('admin.parameter.partials.form')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection

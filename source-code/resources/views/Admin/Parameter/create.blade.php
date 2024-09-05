@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Add New Company Parameter</h1>

        <form action="{{ route('parameter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.parameter.partials.form')

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

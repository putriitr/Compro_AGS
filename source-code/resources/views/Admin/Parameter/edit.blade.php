@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Edit Company Parameter</h1>

        <form action="{{ route('parameter.update', $companyParameter->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('admin.parameter.partials.form')

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

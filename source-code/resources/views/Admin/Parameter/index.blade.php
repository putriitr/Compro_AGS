@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="h4">Company Parameters</h1>
            <a href="{{ route('parameter.create') }}" class="btn btn-primary">Add New Parameter</a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>WhatsApp</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companyParameters as $parameter)
                            <tr>
                                <td>{{ $parameter->email }}</td>
                                <td>{{ $parameter->no_telepon }}</td>
                                <td>{{ $parameter->no_wa }}</td>
                                <td>{{ $parameter->alamat }}</td>
                                <td>
                                    <a href="{{ route('parameter.edit', $parameter->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('parameter.destroy', $parameter->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

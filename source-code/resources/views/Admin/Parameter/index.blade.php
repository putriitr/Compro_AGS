@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Company Parameters</h1>

        <a href="{{ route('parameter.create') }}" class="btn btn-primary mb-3">Add New Parameter</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
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
                            <a href="{{ route('parameter.edit', $parameter->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('parameter.destroy', $parameter->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Brand & Partner List</h1>
        <a href="{{ route('admin.brand.create') }}" class="btn btn-primary mb-3">Add New Brand/Partner</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brandPartners as $brandPartner)
                    <tr>
                        <td>{{ $brandPartner->id }}</td>
                        <td><img src="{{ asset('storage/' . $brandPartner->gambar) }}" alt="Image" width="100"></td>
                        <td>{{ ucfirst($brandPartner->type) }}</td>
                        <td>{{ $brandPartner->url ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.brand.edit', $brandPartner->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.brand.destroy', $brandPartner->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

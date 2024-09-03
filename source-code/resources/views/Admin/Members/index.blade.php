@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Member List</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('members.create') }}" class="btn btn-primary">Add New Member</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->nama_perusahaan }}</td>
                    <td>{{ $member->no_telp }}</td>
                    <td>{{ $member->alamat }}</td>
                    <td>
                        <a href="{{ route('members.show', $member->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this member?');">Delete</button>
                        </form>
                        <a href="{{ route('members.add-products', $member->id) }}" class="btn btn-secondary btn-sm">Add Products</a>
                        <a href="{{ route('members.edit-products', $member->id) }}" class="btn btn-warning btn-sm">Edit Products</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $members->links() }}
    </div>
</div>
@endsection

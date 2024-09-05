@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>User List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.monitoring.show', $user->id) }}" class="btn btn-primary">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

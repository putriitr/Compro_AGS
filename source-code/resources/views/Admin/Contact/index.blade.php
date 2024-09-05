@extends('layouts.admin.master')

@section('content')
<div class="container">
    <a href="{{ route('admin.contact.create') }}" class="btn btn-success">Add Contact</a>
    <table class="table">
        <thead>
            <tr>
                <th>Phone</th>
                <th>Address</th>
                <th>Work Time</th>
                <th>Email</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->work_time }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->website }}</td>
                    <td>
                        <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
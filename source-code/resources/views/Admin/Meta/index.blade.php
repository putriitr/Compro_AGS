@extends('layouts.admin.master')

@section('content')
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3">Meta List</h1>
            <a href="{{ route('admin.meta.create') }}" class="btn btn-primary">Create New Meta</a>
        </div>

        <div class="card shadow-lg">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Content</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metas as $meta)
                            <tr>
                                <td>{{ $meta->title }}</td>
                                <td>{{ $meta->slug }}</td>
                                <td>{{ $meta->start_date }}</td>
                                <td>{{ $meta->end_date }}</td>
                                <td>{!! $meta->content !!}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.meta.edit', $meta->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.meta.destroy', $meta->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection

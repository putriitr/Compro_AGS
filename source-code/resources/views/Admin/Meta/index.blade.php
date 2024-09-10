@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">
                    <h1 class="h3">Meta List</h1>
                    </div>
        <a href="{{ route('admin.meta.create') }}" class="btn btn-primary">Create New Meta</a>

    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <div class="card-body">
            <div class="row">
                <div class="table-responsive">

            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Start Date</th>
                        <th>End Date</th>
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
                            <td class="text-center">
                                <a href="{{ route('admin.meta.edit', $meta->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.meta.destroy', $meta->id) }}" method="POST"
                                    style="display:inline;">
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
        </div>
</div>
</div>
    </div>
</div>
@endsection

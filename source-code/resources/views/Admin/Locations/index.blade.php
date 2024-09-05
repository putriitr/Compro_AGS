@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Locations</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('admin.locations.create') }}" class="btn btn-primary">Create New Location</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
                <tr>
                    <td>{{ $location->name }}</td>
                    <td>
                        <a href="{{ route('admin.locations.show', $location) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.locations.edit', $location) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.locations.destroy', $location) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm delete-button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection

<!-- Include SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // SweetAlert confirmation for deletion
        document.querySelectorAll('.delete-button').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent form submission
                
                var form = this.closest('form'); // Get the form
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form if confirmed
                    }
                });
            });
        });
    });
</script>


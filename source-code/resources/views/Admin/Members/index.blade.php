@extends('layouts.admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Member</h2>
                <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">Tambahkan Member</a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            
            <div class="card-body">
                <table class="table table-striped table-hover table-responsive">
                    <thead class="thead-dark">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Perusahaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->nama_perusahaan }}</td>
                                <td>
                                    <a href="{{ route('members.show', $member->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Add pagination if necessary -->
                {{ $members->links() }}
            </div>
        </div>
    </div>
</div>

@endsection

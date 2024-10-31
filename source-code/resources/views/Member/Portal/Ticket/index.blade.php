@extends('layouts.Member.master')

@section('content')
<div class="container">
    <h2>Daftar Tiket Layanan</h2>
    <a href="{{ route('tickets.create') }}" class="btn btn-primary mb-3">Buat Tiket Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Layanan</th>
                <th>Keterangan Pengajuan</th>
                <th>Tgl Pengajuan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $key => $ticket)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $ticket->jenis_layanan }}</td>
                    <td>{{ $ticket->keterangan_layanan }}</td>
                    <td>{{ $ticket->tgl_pengajuan }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id_after_sales) }}" class="btn btn-info btn-sm">View</a>
                        @if($ticket->status == 'open')
                            <a href="{{ route('tickets.edit', $ticket->id_after_sales) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tickets.cancel', $ticket->id_after_sales) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h2>Daftar Tiket Layanan (Admin)</h2>

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
                        <a href="{{ route('admin.tickets.show', $ticket->id_after_sales) }}" class="btn btn-info btn-sm">View</a>
                        @if($ticket->status == 'open')
                            <form action="{{ route('admin.tickets.process', $ticket->id_after_sales) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary btn-sm">Proses</button>
                            </form>
                        @elseif($ticket->status == 'progress')
                            <form action="{{ route('admin.tickets.complete', $ticket->id_after_sales) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Selesai</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

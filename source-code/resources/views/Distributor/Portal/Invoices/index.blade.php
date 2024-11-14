@extends('layouts.Member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Daftar Invoice</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('distribution') }}">Distributor Portal</a></li>
            <li class="breadcrumb-item active text-primary">Daftar Invoice</li>
        </ol>
    </div>
</div>
<!-- Header End --><br><br>
<div class="container mt-5">
    <h2>Daftar Invoice Anda</h2>

    @if ($invoices->isEmpty())
        <div class="alert alert-info">
            <p>Belum ada Invoice tersedia.</p>
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Invoice Number</th>
                    <th>Invoice Date</th>
                    <th>Due Date</th>
                    <th>Subtotal</th>
                    <th>PPN</th>
                    <th>Grand Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->id }}</td>
                        <td>{{ $invoice->invoice_number }}</td>
                        <td>{{ \Carbon\Carbon::parse($invoice->invoice_date)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($invoice->due_date)->format('d M Y') ?? '-' }}</td>
                        <td>{{ number_format($invoice->subtotal, 2) }}</td>
                        <td>{{ number_format($invoice->ppn, 2) }}</td>
                        <td>{{ number_format($invoice->grand_total_include_ppn, 2) }}</td>
                        <td>{{ ucfirst($invoice->status) }}</td>
                        <td>
                            <!-- Tombol untuk melihat dan mengunduh PDF Invoice -->
                            <a href="{{ asset($invoice->file_path) }}" target="_blank" class="btn btn-info btn-sm">View PDF</a>
                            <a href="{{ asset($invoice->file_path) }}" download class="btn btn-secondary btn-sm">Download PDF</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

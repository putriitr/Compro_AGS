@extends('layouts.Member.master')

@section('content')
   <!-- Header Start -->
   <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Daftar Proforma Invoices</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('distribution') }}">Distributor Portal</a></li>
            <li class="breadcrumb-item active text-primary">Daftar Proforma Invoices</li>
        </ol>
    </div>
</div>
<!-- Header End --><br><br>
    <div class="container mt-5">
        <h2>Daftar Proforma Invoices Anda</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Cek apakah ada Proforma Invoices -->
        @if ($proformaInvoices->isEmpty())
            <div class="alert alert-info">
                <p>Belum ada Proforma Invoice tersedia.</p>
                <p>Silakan buat Purchase Order (PO) terlebih dahulu untuk memulai proses.</p>
                <a href="{{ route('distributor.purchase-orders.index') }}" class="btn btn-primary">Lihat Purchase Orders</a>
            </div>
        @else
         <!-- Tombol untuk mengarahkan ke halaman index invoice -->
         <div class="mb-3">
            <a href="{{ route('distributor.invoices.index') }}" class="btn btn-secondary">Lihat Invoices</a>
        </div>
            <!-- Jika ada Proforma Invoices, tampilkan tabelnya -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">PI Number</th>
                        <th class="text-center">PI Date</th>
                        <th class="text-center">PO Number</th>
                        <th class="text-center">Subtotal</th>
                        <th class="text-center">PPN</th>
                        <th class="text-center">Grand Total</th>
                        <th class="text-center">DP</th>
                        <th class="text-center">Remaining Payment</th>
                        <th class="text-center">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($proformaInvoices as $invoice)
                        <tr>
                            <td class="text-center">{{ $invoice->id }}</td>
                            <td class="text-center">{{ $invoice->pi_number }}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($invoice->pi_date)->format('d M Y') }}</td>
                            <td class="text-center">{{ $invoice->purchaseOrder->po_number }}</td>
                            <td class="text-center">{{ number_format($invoice->subtotal, 2) }}</td>
                            <td class="text-center">{{ number_format($invoice->ppn, 2) }}</td>
                            <td class="text-center">{{ number_format($invoice->grand_total_include_ppn, 2) }}</td>
                            <td class="text-center">{{ number_format($invoice->dp, 2) }} ({{ $invoice->dp_percent }}%)</td>
                            <td class="text-center">{{ number_format($invoice->remaining_payment, 2) }}</td> <!-- Menampilkan sisa pembayaran -->
                
                            <td>
                                <div class="d-flex flex-column gap-2">
                                    <!-- Tombol View dan Download PDF Proforma Invoice -->
                                    <a href="{{ asset($invoice->file_path) }}" target="_blank" class="btn btn-info btn-sm">View PDF</a>
                                    <a href="{{ asset($invoice->file_path) }}" download class="btn btn-secondary btn-sm">Download PDF</a>
                                    
                                    <!-- Cek apakah ada bukti pembayaran DP -->
                                    @if($invoice->payment_proof_path)
                                        <!-- Tampilkan tombol View dan Download Bukti Pembayaran DP jika sudah diunggah -->
                                        <a href="{{ asset($invoice->payment_proof_path) }}" target="_blank" class="btn btn-success btn-sm">View DP Proof</a>
                                        <a href="{{ asset($invoice->payment_proof_path) }}" download class="btn btn-secondary btn-sm">Download DP Proof</a>
                                        
                                        <!-- Cek apakah ada bukti pembayaran kedua (untuk sisa pembayaran) -->
                                        @if($invoice->second_payment_proof_path)
                                            <!-- Tampilkan tombol View dan Download Bukti Pembayaran Sisa jika sudah diunggah -->
                                            <a href="{{ asset($invoice->second_payment_proof_path) }}" target="_blank" class="btn btn-success btn-sm">View Remaining Payment Proof</a>
                                            <a href="{{ asset($invoice->second_payment_proof_path) }}" download class="btn btn-secondary btn-sm">Download Remaining Payment Proof</a>
                                        @else
                                            <!-- Form untuk Upload Bukti Pembayaran Sisa jika belum ada -->
                                            <form action="{{ route('distributor.proforma-invoices.upload', $invoice->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                                                @csrf
                                                <input type="file" name="payment_proof" class="form-control mb-2" accept=".pdf,.jpg,.jpeg,.png" required>
                                                <button type="submit" class="btn btn-warning btn-sm">Upload Remaining Payment Proof</button>
                                                <p class="text-muted">Remaining Payment: Rp{{ number_format($invoice->remaining_payment, 2) }}</p>
                                            </form>
                                        @endif
                                    @else
                                        <!-- Form untuk Upload Bukti Pembayaran DP jika belum ada -->
                                        <form action="{{ route('distributor.proforma-invoices.upload', $invoice->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                                            @csrf
                                            <input type="file" name="payment_proof" class="form-control mb-2" accept=".pdf,.jpg,.jpeg,.png" required>
                                            <button type="submit" class="btn btn-success btn-sm">Upload DP Proof</button>
                                            <p class="text-muted">DP: Rp{{ number_format($invoice->dp, 2) }} ({{ $invoice->dp_percent }}%)</p>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
                
            </table>
        @endif
    </div>
@endsection

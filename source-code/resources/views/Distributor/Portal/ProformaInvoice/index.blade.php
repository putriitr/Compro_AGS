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
   <!-- Header End -->

   <div class="container mt-5">
       <div class="card shadow-lg p-4 rounded-3">
           <div class="card-body">
               <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #00796b;">Daftar Proforma Invoices Anda</h2>

               <!-- Flash Message -->
               @if (session('success'))
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
               @endif

               <!-- Jika Tidak Ada Proforma Invoices -->
               @if ($proformaInvoices->isEmpty())
                   <div class="alert alert-info text-center">
                       <p class="mb-3">Belum ada Proforma Invoice tersedia.</p>
                       <p>Silakan buat Purchase Order (PO) terlebih dahulu untuk memulai proses.</p>
                       <a href="{{ route('distributor.purchase-orders.index') }}" class="btn btn-primary btn-lg shadow-sm">
                           <i class="fas fa-arrow-left me-2"></i>Lihat Purchase Orders
                       </a>
                   </div>
               @else
                   <!-- Tombol untuk melihat Invoice -->
                   <div class="mb-4 text-end">
                       <a href="{{ route('distributor.invoices.index') }}" class="btn btn-secondary btn-lg shadow-sm">
                           <i class="fas fa-file-invoice me-2"></i>Lihat Invoices
                       </a>
                   </div>

                   <!-- Tabel Proforma Invoices -->
                   <div class="table-responsive">
                       <table class="table table-hover shadow-sm rounded">
                           <thead style="background: linear-gradient(135deg, #00796b, #004d40); color: #fff;">
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
                           <tbody style="background-color: #f9f9f9;">
                               @foreach($proformaInvoices as $invoice)
                                   <tr>
                                       <td class="text-center">{{ $invoice->id }}</td>
                                       <td class="text-center">{{ $invoice->pi_number }}</td>
                                       <td class="text-center">{{ \Carbon\Carbon::parse($invoice->pi_date)->format('d M Y') }}</td>
                                       <td class="text-center">{{ $invoice->purchaseOrder->po_number }}</td>
                                       <td class="text-center">Rp{{ number_format($invoice->subtotal, 2) }}</td>
                                       <td class="text-center">Rp{{ number_format($invoice->ppn, 2) }}</td>
                                       <td class="text-center">Rp{{ number_format($invoice->grand_total_include_ppn, 2) }}</td>
                                       <td class="text-center">Rp{{ number_format($invoice->dp, 2) }} ({{ $invoice->dp_percent }}%)</td>
                                       <td class="text-center">Rp{{ number_format($invoice->remaining_payment, 2) }}</td>
                                       <td>
                                           <div class="d-flex flex-column gap-2">
                                               <a href="{{ asset($invoice->file_path) }}" target="_blank" class="btn btn-info btn-sm rounded-pill">
                                                   <i class="fas fa-file-pdf"></i> View PDF
                                               </a>
                                               <a href="{{ asset($invoice->file_path) }}" download class="btn btn-secondary btn-sm rounded-pill">
                                                   <i class="fas fa-download"></i> Download PDF
                                               </a>
                                               @if($invoice->payment_proof_path)
                                                   <a href="{{ asset($invoice->payment_proof_path) }}" target="_blank" class="btn btn-success btn-sm rounded-pill">
                                                       <i class="fas fa-receipt"></i> View DP Proof
                                                   </a>
                                                   <a href="{{ asset($invoice->payment_proof_path) }}" download class="btn btn-secondary btn-sm rounded-pill">
                                                       <i class="fas fa-download"></i> Download DP Proof
                                                   </a>
                                                   @if($invoice->second_payment_proof_path)
                                                       <a href="{{ asset($invoice->second_payment_proof_path) }}" target="_blank" class="btn btn-success btn-sm rounded-pill">
                                                           <i class="fas fa-receipt"></i> View Remaining Payment Proof
                                                       </a>
                                                       <a href="{{ asset($invoice->second_payment_proof_path) }}" download class="btn btn-secondary btn-sm rounded-pill">
                                                           <i class="fas fa-download"></i> Download Remaining Payment Proof
                                                       </a>
                                                   @else
                                                       <form action="{{ route('distributor.proforma-invoices.upload', $invoice->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                                                           @csrf
                                                           <input type="file" name="payment_proof" class="form-control mb-2" accept=".pdf,.jpg,.jpeg,.png" required>
                                                           <button type="submit" class="btn btn-warning btn-sm rounded-pill">
                                                               <i class="fas fa-upload"></i> Upload Remaining Payment Proof
                                                           </button>
                                                           <small class="text-muted">Remaining Payment: Rp{{ number_format($invoice->remaining_payment, 2) }}</small>
                                                       </form>
                                                   @endif
                                               @else
                                                   <form action="{{ route('distributor.proforma-invoices.upload', $invoice->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                                                       @csrf
                                                       <input type="file" name="payment_proof" class="form-control mb-2" accept=".pdf,.jpg,.jpeg,.png" required>
                                                       <button type="submit" class="btn btn-success btn-sm rounded-pill">
                                                           <i class="fas fa-upload"></i> Upload DP Proof
                                                       </button>
                                                       <small class="text-muted">DP: Rp{{ number_format($invoice->dp, 2) }} ({{ $invoice->dp_percent }}%)</small>
                                                   </form>
                                               @endif
                                           </div>
                                       </td>
                                   </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>
               @endif
           </div>
       </div>
   </div>
@endsection

@extends('layouts.Member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Pilih Produk & Permintaan Quotation</h3>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('distribution') }}">Distributor Portal</a></li>
                <li class="breadcrumb-item active text-primary">Pilih Produk & Permintaan Quotation</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <div class="container mt-5">
        <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #00796b;">Pilih Produk & Permintaan Quotation</h2>
        <p class="text-center text-muted">Di sini Anda dapat memilih produk dan mengajukan permintaan quotation.</p>

        <!-- Button to Redirect to Products Page -->
        <div class="text-end mb-4">
            <a href="{{ url('/en/products') }}" class="btn btn-primary btn-lg shadow-sm" style="border-radius: 10px; padding: 10px 20px;">
                <i class="fas fa-plus-circle me-2"></i>Ajukan Quotation
            </a>
            <a href="{{ route('quotations.cart') }}" class="btn btn-secondary btn-lg shadow-sm" style="border-radius: 10px; padding: 10px 20px; margin-left: 10px;">
                <i class="fas fa-shopping-cart me-2"></i>Lihat Keranjang
            </a>
        </div>

        <!-- Quotation Requests Table -->
        <div class="table-responsive">
            <h3 class="mt-5 text-center" style="font-family: 'Poppins', sans-serif; color: #004d40;">Daftar Permintaan Quotation</h3>
            <table class="table table-hover shadow rounded">
                <thead style="background: linear-gradient(135deg, #00796b, #004d40); color: #fff;">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nomor Pengajuan</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f9f9f9;">
                    @forelse($quotations as $key => $quotation)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class="text-center">{{ $quotation->nomor_pengajuan ?? 'Nomor pengajuan tidak tersedia' }}</td>
                            <td>
                                @foreach ($quotation->quotationProducts as $product)
                                    - {{ $product->equipment_name ?? 'Produk tidak tersedia' }} <br>
                                @endforeach
                            </td>
                            <td class="text-center">
                                @foreach ($quotation->quotationProducts as $product)
                                    {{ $product->quantity }} <br>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <span class="badge 
                                    @if ($quotation->status === 'cancelled') bg-danger
                                    @elseif ($quotation->status === 'quotation') bg-success
                                    @else bg-warning @endif">
                                    {{ ucfirst($quotation->status) }}
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('quotations.show', $quotation->id) }}" class="btn btn-info btn-sm rounded-pill">
                                    <i class="fas fa-eye"></i> View
                                </a>

                                @if ($quotation->status === 'pending')
                                    <form action="{{ route('quotations.cancel', $quotation->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill"
                                            onclick="return confirm('Apakah Anda yakin ingin membatalkan permintaan quotation ini?');">
                                            <i class="fas fa-times-circle"></i> Batal
                                        </button>
                                    </form>
                                @elseif ($quotation->status === 'quotation' && !$quotation->purchaseOrder)
                                    <a href="{{ route('distributor.quotations.negotiations.create', $quotation->id) }}" class="btn btn-warning btn-sm rounded-pill">
                                        <i class="fas fa-handshake"></i> Nego
                                    </a>
                                    <a href="{{ route('quotations.create_po', $quotation->id) }}" class="btn btn-success btn-sm rounded-pill">
                                        <i class="fas fa-file-invoice-dollar"></i> Create PO
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada permintaan quotation.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

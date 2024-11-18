@extends('layouts.Member.master')
@section('content')
  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Daftar Negosiasi</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('distribution') }}">Distributor Portal</a></li>
            <li class="breadcrumb-item active text-primary">Daftar Negosiasi</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<div class="container mt-5">
    <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #00796b;">Daftar Negosiasi</h2>
    <div class="table-responsive">
        <table class="table table-hover shadow-sm rounded">
            <thead style="background: linear-gradient(135deg, #00796b, #004d40); color: #fff;">
                <tr>
                    <th scope="col" class="text-center" style="vertical-align: middle;">ID</th>
                    <th scope="col" class="text-center" style="vertical-align: middle;">Quotation Number</th>
                    <th scope="col" class="text-center" style="vertical-align: middle;">Negotiated Price</th>
                    <th scope="col" class="text-center" style="vertical-align: middle;">Status</th>
                    <th scope="col" class="text-center" style="vertical-align: middle;">Notes</th>
                    <th scope="col" class="text-center" style="vertical-align: middle;">Admin Notes</th>
                </tr>
            </thead>
            <tbody style="background-color: #f9f9f9;">
                @foreach($negotiations as $negotiation)
                    <tr style="vertical-align: middle;">
                        <td class="text-center">{{ $negotiation->id }}</td>
                        <td class="text-center">{{ $negotiation->quotation->quotation_number }}</td>
                        <td class="text-center text-success">
                            <strong>{{ number_format($negotiation->negotiated_price, 2) }}</strong>
                        </td>
                        <td class="text-center">
                            <span class="badge {{ $negotiation->status == 'accepted' ? 'bg-success' : ($negotiation->status == 'rejected' ? 'bg-danger' : 'bg-warning') }} text-uppercase">
                                {{ ucfirst($negotiation->status) }}
                            </span>
                        </td>
                        <td class="text-center">{{ $negotiation->notes }}</td>
                        <td class="text-center">{{ $negotiation->admin_notes ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
         <!-- Tombol Kembali -->
         <div class="text-end mt-4">
            <a href="{{ route('distribution.request-quotation') }}" class="btn btn-secondary btn-lg rounded-pill shadow-sm">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </div>
</div>
@endsection

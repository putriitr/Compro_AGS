@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Member Detail</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <p><strong>Nama:</strong> {{ $member->name }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Email:</strong> {{ $member->email }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Nama Perusahaan:</strong> {{ $member->nama_perusahaan }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Bidang Perusahaan:</strong> {{ $member->bidangPerusahaan->name ?? '-' }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Nomor Telepon:</strong> {{ $member->no_telp }}</p>
                </div>
                <div class="mb-3">
                    <p><strong>Alamat:</strong> {{ $member->alamat }}</p>
                </div>

                @if(isset($password))
                    <div class="mb-3">
                        <p><strong>Password:</strong> {{ $password }}</p>
                        <p class="text-danger">Please note: This password will not be shown again.</p>
                    </div>
                @endif

                <div class="mb-3">
                    <h4>Products Owned</h4>
                    @if($member->userProduk->isEmpty())
                        <p>This member has no products.</p>
                    @else
                        <div class="row">
                            @foreach($member->userProduk as $userProduk)
                                @php
                                    $firstImage = $userProduk->produk->images->first();
                                    $imageSrc = $firstImage ? $firstImage->gambar : 'assets/img/default.jpg';
                                @endphp
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ asset($imageSrc) }}" class="card-img-top" alt="{{ $userProduk->produk->nama }}" style="height: 100; object-fit: cover; width:100%;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $userProduk->produk->nama }}</h5>
                                            <p class="card-text"><strong>Purchase Date:</strong> {{ $userProduk->pembelian ? $userProduk->pembelian : 'N/A' }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                
                
                
                <a href="{{ route('members.index') }}" class="btn btn-secondary">Back to Members List</a>
            </div>
        </div>
    </div>
</div>
@endsection

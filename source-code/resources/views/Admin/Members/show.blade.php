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
                        <ul>
                            @foreach($member->userProduk as $userProduk)
                                <li>
                                    <strong>{{ $userProduk->produk->nama }}</strong><br>
                                    @php
                                        $firstImage = $userProduk->produk->images->first();
                                        $imageSrc = $firstImage ? $firstImage->gambar : 'assets/img/default.jpg';
                                    @endphp
                                    <img src="{{ asset($imageSrc) }}" alt="{{ $userProduk->produk->nama }}" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover; margin-top: 5px;"><br>
                                    <small><strong>Purchase Date:</strong> {{ $userProduk->pembelian ? $userProduk->pembelian : 'N/A' }}</small>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                
                
                <a href="{{ route('members.index') }}" class="btn btn-secondary">Back to Members List</a>
            </div>
        </div>
    </div>
</div>
@endsection

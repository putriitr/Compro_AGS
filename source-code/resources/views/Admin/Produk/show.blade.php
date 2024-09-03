@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Detail Produk</h2>
                </div>
                <div class="card-body">
                    <!-- Product Name -->
                    <div class="form-group mb-4">
                        <label for="nama" class="font-weight-bold">Nama Produk:</label>
                        <p class="text-muted">{{ $produk->nama }}</p>
                    </div>

                    <!-- Product Brand -->
                    <div class="form-group mb-4">
                        <label for="merk" class="font-weight-bold">Merk Produk:</label>
                        <p class="text-muted">{{ $produk->merk }}</p>
                    </div>

                    <!-- Product Usage -->
                    <div class="form-group mb-4">
                        <label for="kegunaan" class="font-weight-bold">Kegunaan:</label>
                        <p class="text-muted">{{ $produk->kegunaan }}</p>
                    </div>

                    <!-- Via -->
                    <div class="form-group mb-4">
                        <label for="via" class="font-weight-bold">Via:</label>
                        <p class="text-muted">{{ ucfirst($produk->via) }}</p>
                    </div>

                    <!-- Category -->
                    <div class="form-group mb-4">
                        <label for="kategori" class="font-weight-bold">Kategori:</label>
                        <p class="text-muted">{{ $produk->kategori->nama }}</p>
                    </div>

                    <!-- Product Images -->
                    <div class="form-group mb-4">
                        <label for="gambar" class="font-weight-bold">Gambar Produk:</label>
                        <div class="d-flex flex-wrap">
                            @foreach($produk->images as $image)
                                <img src="{{ asset($image->gambar) }}" alt="Gambar Produk" class="img-thumbnail mr-2 mb-2" style="max-width: 150px;">
                            @endforeach
                        </div>
                    </div>

                    <!-- Product Videos -->
                    <div class="form-group mb-4">
                        <label for="video" class="font-weight-bold">Video Tutorial:</label>
                        <div class="d-flex flex-wrap">
                            @foreach($produk->videos as $video)
                                <video width="320" height="240" controls class="mr-2 mb-2">
                                    <source src="{{ asset($video->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endforeach
                        </div>
                    </div>

                    <!-- User Manual -->
                    <div class="form-group mb-4">
                        <label for="user_manual" class="font-weight-bold">User Manual:</label>
                        @if($produk->user_manual)
                            <a href="{{ asset($produk->user_manual) }}" target="_blank" class="btn btn-outline-primary">Download User Manual</a>
                        @else
                            <p class="text-muted">No user manual available.</p>
                        @endif
                    </div>

 <!-- Control Generation PDF -->
<div class="form-group mb-4">
    <label for="control_generation_pdf" class="font-weight-bold">Control Generation PDF:</label>
    @forelse($produk->controlGenerationsProduk as $congeneration)
        <div class="mb-2">
            <a href="{{ asset($congeneration->pdf) }}" target="_blank" class="btn btn-outline-primary">View Control Generation PDF</a>
        </div>
    @empty
        <p class="text-muted">No Control Generation PDF available.</p>
    @endforelse
</div>

<!-- Document Certification PDF -->
<div class="form-group mb-4">
    <label for="document_certification_pdf" class="font-weight-bold">Document Certification PDF:</label>
    @forelse($produk->documentCertifications as $certification)
        <div class="mb-2">
            <a href="{{ asset($certification->pdf) }}" target="_blank" class="btn btn-outline-primary">View Document Certification PDF</a>
        </div>
    @empty
        <p class="text-muted">No Document Certification PDF available.</p>
    @endforelse
</div>


                    <!-- Back Button -->
                    <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Back to Product List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

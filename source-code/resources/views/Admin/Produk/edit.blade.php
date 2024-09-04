@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Produk</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Product Name -->
                <div class="form-group mb-3">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama) }}" required>
                </div>

                <!-- Product Brand -->
                <div class="form-group mb-3">
                    <label for="merk">Merk Produk:</label>
                    <input type="text" name="merk" class="form-control" value="{{ old('merk', $produk->merk) }}" required>
                </div>

                <!-- Product Usage -->
                <div class="form-group mb-3">
                    <label for="kegunaan">Kegunaan:</label>
                    <textarea name="kegunaan" class="form-control" required>{{ old('kegunaan', $produk->kegunaan) }}</textarea>
                </div>

                <!-- Via -->
                <div class="form-group mb-3">
                    <label for="via">Via:</label>
                    <select name="via" class="form-control" required>
                        <option value="labtek" {{ old('via', $produk->via) == 'labtek' ? 'selected' : '' }}>Labtek</option>
                        <option value="labverse" {{ old('via', $produk->via) == 'labverse' ? 'selected' : '' }}>Labverse</option>
                    </select>
                </div>

                <!-- Category -->
                <div class="form-group mb-3">
                    <label for="kategori_id">Kategori:</label>
                    <select name="kategori_id" class="form-control" required>
                        @foreach ($kategori as $kategoris)
                            <option value="{{ $kategoris->id }}" {{ old('kategori_id', $produk->kategori_id) == $kategoris->id ? 'selected' : '' }}>
                                {{ $kategoris->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Product Images -->
                <div class="form-group mb-3">
                    <label for="gambar">Gambar Produk:</label>
                    <input type="file" name="gambar[]" class="form-control" multiple>
                    @if($produk->images)
                        <div class="mt-2">
                            @foreach($produk->images as $image)
                                <div class="d-inline-block text-center mb-3">
                                    <img src="{{ asset($image->gambar) }}" alt="Gambar Produk" style="max-width: 100px; margin-right: 10px;">
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <small class="form-text text-muted">Unggah beberapa gambar produk jika diperlukan.</small>
                </div>

                <!-- Product Videos -->
                <div class="form-group mb-3">
                    <label for="video">Video Tutorial (MP4, AVI, MKV)</label>
                    <input type="file" class="form-control" name="video[]" id="video" accept="video/*" multiple>
                    @if($produk->videos)
                        <div class="mt-2">
                            @foreach($produk->videos as $video)
                                <div class="d-inline-block text-center mb-3">
                                    <video width="200" controls>
                                        <source src="{{ asset($video->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- User Manual -->
                <div class="form-group mb-3">
                    <label for="user_manual">User Manual (PDF/DOC)</label>
                    <input type="file" class="form-control" name="user_manual" id="user_manual" accept=".pdf,.doc,.docx">
                    @if($produk->user_manual)
                        <a href="{{ asset($produk->user_manual) }}" target="_blank" class="btn btn-link">View Current Manual</a>
                    @endif
                </div>

                <!-- Control Generation PDF -->
                <div class="form-group mb-3">
                    <label for="control_generation_pdf">Control Generation PDF</label>
                    <input type="file" class="form-control" name="control_generation_pdf" id="control_generation_pdf" accept=".pdf">
                
                    @if($produk->controlGenerationsProduk)
                        <a href="{{ asset($produk->controlGenerationsProduk->pdf) }}" target="_blank" class="btn btn-link">View Current Control Generation PDF</a>
                    @endif
                </div>
                
                <!-- Document Certification PDF -->
                <div class="form-group mb-3">
                    <label for="document_certification_pdf">Document Certification PDF</label>
                    <input type="file" class="form-control" name="document_certification_pdf" id="document_certification_pdf" accept=".pdf">
                    @if($produk->documentCertificationsProduk)
                        <a href="{{ asset($produk->documentCertificationsProduk->pdf) }}" target="_blank" class="btn btn-link">View Current Document Certification PDF</a>
                    @endif
                </div>

                <div class="form-group">
                    <label for="file">Brosur (PDF/Image)</label>
                    <input type="file" class="form-control" id="file" name="file">
                    @if($produk->brosur)
                        <a href="{{ asset($produk->brosur->file) }}" target="_blank">View Current Brosur</a>
                    @endif
                </div>
                </div>
                

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success">Update Produk</button>
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection

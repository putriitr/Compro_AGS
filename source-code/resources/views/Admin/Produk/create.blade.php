@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Buat Produk Baru</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="user-manual-tab" data-toggle="tab" href="#user-manual" role="tab" aria-controls="user-manual" aria-selected="false">User Manual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="documents-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="documents" aria-selected="false">Documents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="brosur-tab" data-toggle="tab" href="#brosur" role="tab" aria-controls="brosur" aria-selected="false">Brosur</a>
                    </li>
                </ul>

                <!-- Tabs Content -->
                <div class="tab-content" id="productTabsContent">
                    <!-- General Tab -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="form-group mb-3 mt-3">
                            <label for="nama">Nama Produk:</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="merk">Merk Produk:</label>
                            <input type="text" name="merk" class="form-control" value="{{ old('merk') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kegunaan">Kegunaan Produk:</label>
                            <textarea name="kegunaan" class="form-control" required>{{ old('kegunaan') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="via">Via:</label>
                            <select name="via" class="form-control" required>
                                <option value="labtek" {{ old('via') == 'labtek' ? 'selected' : '' }}>Labtek</option>
                                <option value="labverse" {{ old('via') == 'labverse' ? 'selected' : '' }}>Labverse</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori_id">Kategoris:</label>
                            <select name="kategori_id" class="form-control" required>
                                @foreach ($kategori as $kategoris)
                                    <option value="{{ $kategoris->id }}" {{ old('kategori_id') == $kategoris->id ? 'selected' : '' }}>
                                        {{ $kategoris->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="gambar">Gambar Produk:</label>
                            <input type="file" name="gambar[]" class="form-control" multiple required>
                            <small class="form-text text-muted">Unggah beberapa gambar produk jika diperlukan.</small>
                        </div>
                    </div>

                    <!-- User Manual Tab -->
                    <div class="tab-pane fade" id="user-manual" role="tabpanel" aria-labelledby="user-manual-tab">
                        <div class="form-group mb-3 mt-3">
                            <label for="video">Video Tutorial (MP4, AVI, MKV)</label>
                            <input type="file" class="form-control" name="video[]" id="video" accept="video/*" multiple>
                            <small class="form-text text-muted">Unggah beberapa video tutorial produk jika diperlukan.</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="user_manual">User Manual (PDF/DOC)</label>
                            <input type="file" class="form-control" name="user_manual" id="user_manual">
                            @if(isset($produk) && $produk->user_manual)
                                <a href="{{ asset($produk->user_manual) }}" target="_blank">View Current Manual</a>
                            @endif
                        </div>
                    </div>

                    <!-- Documents Tab -->
                    <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                        <div class="form-group mb-3">
                            <label for="document_certification_pdf">Document Certification PDF:</label>
                            <input type="file" class="form-control" name="document_certification_pdf[]" id="document_certification_pdf" accept=".pdf" multiple>
                            <small class="form-text text-muted">Unggah beberapa Document Certification PDF jika diperlukan.</small>
                        </div>                    
                    </div>

                    <!-- Brosur Tab -->
                    <div class="tab-pane fade" id="brosur" role="tabpanel" aria-labelledby="brosur-tab">
                        <div class="form-group mb-3 mt-3">
                            <label for="file">Brosur (PDF/Image)</label>
                            <input type="file" class="form-control" id="file" name="file[]" multiple>
                            <small class="form-text text-muted">Unggah beberapa file brosur (PDF atau gambar).</small>
                            @error('file')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success mt-3">Simpan Produk</button>
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary mt-3">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin.master')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Inspection for {{ $inspeksi->userProduk->produk->nama }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.inspeksi.update', $inspeksi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="pic" class="font-weight-bold">PIC (Person in Charge)</label>
                                <input type="text" name="pic" class="form-control" value="{{ old('pic', $inspeksi->pic) }}" placeholder="Enter PIC" required>
                            </div>

                            <div class="form-group">
                                <label for="waktu" class="font-weight-bold">Time</label>
                                <input type="datetime-local" name="waktu" class="form-control" value="{{ old('waktu', date('Y-m-d\TH:i', strtotime($inspeksi->waktu))) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="judul" class="font-weight-bold">Title</label>
                                <input type="text" name="judul" class="form-control" value="{{ old('judul', $inspeksi->judul) }}" placeholder="Enter title" required>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi" class="font-weight-bold">Description</label>
                                <textarea name="deskripsi" id="summernote" class="form-control" rows="4" placeholder="Enter description..." required>{{ old('deskripsi', $inspeksi->deskripsi) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="status" class="font-weight-bold">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="Inspeksi" {{ $inspeksi->status == 'Inspeksi' ? 'selected' : '' }}>Inspeksi</option>
                                    <option value="Maintenance" {{ $inspeksi->status == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gambar" class="font-weight-bold">Image (optional)</label>
                                <input type="file" name="gambar" class="form-control-file">
                                @if($inspeksi->gambar)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $inspeksi->gambar) }}" alt="Inspection Image" width="100">
                                    </div>
                                @endif
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm">Update Inspection</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

<!-- jQuery and Summernote Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

<!-- Initialize Summernote -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Enter description here...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ]
        });
    });
</script>

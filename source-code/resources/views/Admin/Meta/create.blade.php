@extends('layouts.admin.master')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Add New Meta</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.meta.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title" class="font-weight-bold">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                            </div>

                            <div class="form-group">
                                <label for="type" class="font-weight-bold">Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="pengumuman">Pengumuman</option>
                                    <option value="promosi">Promosi</option>
                                </select>
                            </div>
                            

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="start_date" class="font-weight-bold">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="end_date" class="font-weight-bold">End Date</label>
                                    <input type="date" name="end_date" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="content" class="font-weight-bold">Content</label>
                                <textarea id="froala-editor" name="content"></textarea>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    new FroalaEditor('#froala-editor', {
                                        imageUploadURL: '{{ route('froala.upload_image') }}',  // Rute untuk upload gambar
                                        imageUploadParams: {
                                            _token: '{{ csrf_token() }}'  // Token CSRF untuk keamanan
                                        },
                                        toolbarButtons: [
                                            'bold', 'italic', 'underline', 'strikeThrough', 'align', 'formatOL', 'formatUL', 
                                            'insertLink', 'insertImage', 'insertVideo', 'insertTable', 'html', 'undo', 'redo',
                                            'paragraphFormat', 'paragraphStyle', 'quote', 'fontFamily', 'fontSize', 
                                            'textColor', 'backgroundColor', 'inlineStyle', 'subscript', 'superscript', 
                                            'outdent', 'indent', 'clearFormatting', 'insertHR', 'fullscreen'
                                        ],
                                        heightMin: 300,
                                        heightMax: 500,
                                        imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif'],
                                    });

                                });
                            </script>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm">Save Meta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/css/froala_editor.pkgd.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/js/froala_editor.pkgd.min.js"></script>

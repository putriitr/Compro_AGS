@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Edit Member</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('members.update', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $member->name) }}" required>
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $member->email) }}" required>
                        @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan:</label>
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan', $member->nama_perusahaan) }}">
                        @if ($errors->has('nama_perusahaan'))
                            <small class="text-danger">{{ $errors->first('nama_perusahaan') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="bidang_perusahaan" class="form-label">Bidang Perusahaan</label>
                        <select name="bidang_perusahaan" id="bidang_perusahaan" class="form-control">
                            <option value="" disabled selected>Pilih Bidang Perusahaan</option>
                            @foreach($bidangPerusahaan as $bidang)
                                <option value="{{ $bidang->id }}" {{ old('bidang_perusahaan', $member->bidang_perusahaan) == $bidang->id ? 'selected' : '' }}>{{ $bidang->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="no_telp" class="form-label">Nomor Telepon:</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ old('no_telp', $member->no_telp) }}">
                        @if ($errors->has('no_telp'))
                            <small class="text-danger">{{ $errors->first('no_telp') }}</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $member->alamat) }}">
                        @if ($errors->has('alamat'))
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                 <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                    Ubah Password
                </button>
                    <a href="{{ route('members.index') }}" class="btn btn-secondary">Back</a>
                </form>



                <!-- Modal for changing password -->
                <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="changePasswordModalLabel">Ubah Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Admin Password Validation -->
                                <div class="form-group mb-3">
                                    <label for="admin_password" class="form-label">Masukkan Password Admin:</label>
                                    <input type="password" class="form-control" id="admin_password" name="admin_password" required>
                                    <small class="text-danger" id="admin_password_error"></small>
                                </div>

                                <!-- New Password Fields -->
                                <div id="passwordFields" style="display:none;">
                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">Password Baru:</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        <small class="text-danger" id="password_error"></small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation" class="form-label">Konfirmasi Password Baru:</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                        <small class="text-danger" id="password_confirmation_error"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" id="validateAdminPassword">Validasi Password Admin</button>
                                <button type="button" class="btn btn-success" id="updatePassword" style="display:none;">Update Password</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#validateAdminPassword').click(function() {
            var adminPassword = $('#admin_password').val();
            var memberId = {{ $member->id }};

            $.ajax({
                url: "{{ route('admin.validatePassword') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    password: adminPassword
                },
                success: function(response) {
                    if (response.success) {
                        $('#admin_password_error').text('');
                        $('#passwordFields').slideDown();
                        $('#validateAdminPassword').hide();
                        $('#updatePassword').show();
                    } else {
                        $('#admin_password_error').text('Password Admin salah.');
                    }
                }
            });
        });

        $('#updatePassword').click(function() {
            var newPassword = $('#password').val();
            var confirmPassword = $('#password_confirmation').val();
            var memberId = {{ $member->id }};

            $.ajax({
                url: "{{ route('members.updatePassword', $member->id) }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    password: newPassword,
                    password_confirmation: confirmPassword
                },
                success: function(response) {
                    if (response.success) {
                        alert('Password berhasil diubah');
                        location.reload();
                    } else {
                        // Handle validation errors
                        $('#password_error').text(response.errors.password || '');
                        $('#password_confirmation_error').text(response.errors.password_confirmation || '');
                    }
                }
            });
        });
    });
</script>

@endsection

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $companyParameter->email ?? '') }}" required>
</div>

<div class="form-group">
    <label for="no_telepon">Phone</label>
    <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon', $companyParameter->no_telepon ?? '') }}" required>
</div>

<div class="form-group">
    <label for="no_wa">WhatsApp</label>
    <input type="text" name="no_wa" class="form-control" value="{{ old('no_wa', $companyParameter->no_wa ?? '') }}" required>
</div>

<div class="form-group">
    <label for="alamat">Address</label>
    <textarea name="alamat" class="form-control" required>{{ old('alamat', $companyParameter->alamat ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="maps">Maps URL</label>
    <input type="text" name="maps" class="form-control" value="{{ old('maps', $companyParameter->maps ?? '') }}">
</div>

<div class="form-group">
    <label for="visi">Vision</label>
    <textarea name="visi" class="form-control">{{ old('visi', $companyParameter->visi ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="misi">Mission</label>
    <textarea name="misi" class="form-control">{{ old('misi', $companyParameter->misi ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="logo">Logo</label>
    <input type="file" name="logo" class="form-control">
    @if(isset($companyParameter->logo))
        <img src="{{ asset('storage/' . $companyParameter->logo) }}" alt="Logo" width="100">
    @endif
</div>

<div class="form-group">
    <label for="instagram">Instagram</label>
    <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $companyParameter->instagram ?? '') }}">
</div>

<div class="form-group">
    <label for="linkedin">LinkedIn</label>
    <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin', $companyParameter->linkedin ?? '') }}">
</div>

<div class="form-group">
    <label for="ekatalog">E-Katalog Link</label>
    <input type="text" name="ekatalog" class="form-control" value="{{ old('ekatalog', $companyParameter->ekatalog ?? '') }}">
</div>

@extends('admin/template_admin')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
            <div class="card-header d-flex justify-content-between" style="background-color:#0B2447">
                    <h6 class="text-white">Ubah User Unit</h6>
                    <span>
                        <a href="<?php echo url("admin/user_unit/".$id_unit); ?>" class="text-white">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form action="<?php echo url("admin/user_unit/ubah_user/".$id_unit."/".$uu['id_user_unit']); ?>" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #0B2447">Unit</label>
                            <select name="id_unit" class="form-control">
                                <option disabled selected>--Pilih Unit--</option>
                                <?php foreach ($unit as $key => $value): ?>
                                    <option value="<?php echo $value['id_unit'] ?>" <?php if($value['id_unit']==$uu['id_unit']){echo "selected";}?>><?php echo $value['nama_unit']; ?></option>
                                <?php endforeach ?>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #0B2447">Username</label>
                        <input type="text" class="form-control @error('username_user_unit') is-invalid @enderror" name="username_user_unit" value="<?php echo $uu['username_user']; ?>">
                        @if ($errors->has('username_user_unit'))
                            <div class="invalid-feedback">{{ $errors->first('username_user_unit') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #0B2447">Password</label>
                        <input type="text" class="form-control" name="password_user_unit">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #0B2447">Nama</label>
                        <input type="text" class="form-control @error('nama_user_unit') is-invalid @enderror" name="nama_user_unit" value="<?php echo $uu['nama_user']; ?>">
                        @if ($errors->has('nama_user_unit'))
                            <div class="invalid-feedback">{{ $errors->first('nama_user_unit') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #0B2447">Email</label>
                        <input type="text" class="form-control @error('email_user_unit') is-invalid @enderror" name="email_user_unit" value="<?php echo $uu['email_user']; ?>">
                        @if ($errors->has('email_user_unit'))
                            <div class="invalid-feedback">{{ $errors->first('email_user_unit') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <button class="btn text-white" style="background-color:#0B2447;">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
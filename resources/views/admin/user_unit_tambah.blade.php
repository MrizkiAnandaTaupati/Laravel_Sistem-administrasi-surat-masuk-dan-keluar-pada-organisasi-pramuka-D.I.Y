@extends('admin/template_admin')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between" style="background-color:#0B2447">
                    <h6 class="text-white">Tambah User Unit</h6>
                    <span>
                        <a href="<?php echo url("admin/user_unit/".$unit['id_unit']); ?>" class="text-white">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form action="<?php echo url('admin/user_unit/tambah_user_unit/'.$unit['id_unit']); ?>"
                        method="post">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Unit</label>
                            <select name="id_unit" class="form-control">
                                <option value="<?php echo $unit['id_unit'] ?>"><?php echo $unit['nama_unit']; ?>
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Username</label>
                            <input type="text" class="form-control @error('username_user_unit') is-invalid @enderror"
                                name="username_user_unit">
                            @if ($errors->has('username_user_unit'))
                                <div class="invalid-feedback">{{ $errors->first('username_user_unit') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Password</label>
                            <input type="password" class="form-control @error('password_user_unit') is-invalid @enderror" name="password_user_unit">
                            @if ($errors->has('password_user_unit'))
                                <div class="invalid-feedback">{{ $errors->first('password_user_unit') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Nama</label>
                            <input type="text" class="form-control @error('nama_user_unit') is-invalid @enderror" name="nama_user_unit">
                            @if ($errors->has('nama_user_unit'))
                                <div class="invalid-feedback">{{ $errors->first('nama_user_unit') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Email</label>
                            <input type="email" class="form-control  @error('email_user_unit') is-invalid @enderror" name="email_user_unit">
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
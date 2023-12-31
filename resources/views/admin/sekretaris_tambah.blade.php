@extends('admin/template_admin')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between" style="background-color:#0B2447">
                    <h6 class="text-white">Tambah Sekretaris</h6>
                    <span>
                        <a href="<?php echo url("admin/sekretaris"); ?>" class="text-white">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post" action="<?php echo url('admin/sekretaris/simpan'); ?>">
                        @method("post")
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror">
                            @if ($errors->has('username'))
                                <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                            @if ($errors->has('nama'))
                                <div class="invalid-feedback">{{ $errors->first('nama') }}</div>
                            @endif
                        </div>
                        <button class="btn text-white" style="background-color:#0B2447;">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
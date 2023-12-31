@extends("admin/template_admin")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between" style="background-color:#0B2447;">
                    <h6 class="text-white">Tambah Admin</h6>
                    <span>
                        <a href="<?php echo url("admin/"); ?>" class="text-white">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post" action="{{ url('admin/admin_tambah')}}">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Username</label>
                            <input type="text" class="form-control @error('username_admin') is-invalid @enderror" name="username_admin">
                            @if ($errors->has('username_admin'))
                                <div class="invalid-feedback">{{ $errors->first('username_admin') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Password</label>
                            <input type="password" class="form-control @error('password_admin') is-invalid @enderror" name="password_admin">
                            @if ($errors->has('password_admin'))
                                <div class="invalid-feedback">{{ $errors->first('password_admin') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Nama</label>
                            <input type="text" class="form-control @error('nama_admin') is-invalid @enderror" name="nama_admin">
                            @if ($errors->has('nama_admin'))
                                <div class="invalid-feedback">{{ $errors->first('nama_admin') }}</div>
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
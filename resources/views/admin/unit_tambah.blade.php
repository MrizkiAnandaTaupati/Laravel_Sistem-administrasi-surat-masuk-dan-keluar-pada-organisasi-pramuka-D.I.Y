@extends('admin/template_admin')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between" style="background-color:#0B2447">
                    <h6 class="text-white">Tambah Unit</h6>
                    <span>
                        <a href="<?php echo url("admin/unit"); ?>" class="text-white">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form action="<?php echo url("admin/tambah_unit"); ?>" method="post">
                        @csrf
                        @method("post")
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Tipe Unit</label>
                            <select name="tipe_unit" class="form-control @error('tipe_unit') is-invalid @enderror">
                                <option disabled selected>--Pilih--</option>
                                <option value="Pimpinan">Pimpinan</option>
                                <option value="Bidang">Bidang</option>
                                <option value="Badan">Badan</option>
                            </select>
                            @if ($errors->has('tipe_unit'))
                            <div class="invalid-feedback">{{ $errors->first('tipe_unit') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Nama Unit</label>
                            <input type="text" class="form-control @error('nama_unit') is-invalid @enderror"
                                name="nama_unit">
                            @if ($errors->has('nama_unit'))
                            <div class="invalid-feedback">{{ $errors->first('nama_unit') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #0B2447">Kode Unit</label>
                            <input type="text" class="form-control @error('kode_unit') is-invalid @enderror"
                                name="kode_unit">
                            @if ($errors->has('kode_unit'))
                            <div class="invalid-feedback">{{ $errors->first('kode_unit') }}</div>
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
@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Tambah Surat Masuk</h6>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post" action="<?php echo url("sekretariat/surat_masuk/tambah_surat"); ?>"
                        enctype="multipart/form-data">
                        @method("post")
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">No Surat</label>
                            <input type="text" class="form-control" name="no_surat">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Klasifikasi</label>
                            <select name="klasifikasi_surat" class="form-control">
                                <option value="" disabled selected>--Pilih Klasifikasi--</option>
                                <option value="Rahasia">Rahasia</option>
                                <option value="Terbatas">Terbatas</option>
                                <option value="Biasa">Biasa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Sifat Surat</label>
                            <select name="sifat_surat" class="form-control">
                                <option value="" disabled selected>--Pilih Sifat--</option>
                                <option value="Sangat Segera">Sangat Segera</option>
                                <option value="Segera">Segera</option>
                                <option value="Biasa">Biasa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Asal Surat</label>
                            <input type="text" class="form-control" name="asal_surat">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Lampiran</label>
                            <input type="text" class="form-control" name="lampiran">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Perihal</label>
                            <input type="text" class="form-control" name="perihal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">File</label>
                            <input type="file" class="form-control" name="file_surat_masuk" required>
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
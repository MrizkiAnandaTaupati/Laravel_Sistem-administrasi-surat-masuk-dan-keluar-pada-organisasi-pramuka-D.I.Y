@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Ubah Surat Masuk</h6>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post"
                        action="<?php echo url("sekretariat/surat_masuk/ubah_surat/".$surat['id_surat_masuk']); ?>"
                        enctype="multipart/form-data">
                        @method("put")
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">No Surat</label>
                            <input type="text" class="form-control" name="no_surat"
                                value="<?php echo $surat['no_surat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Klasifikasi</label>
                            <select name="klasifikasi_surat" class="form-control">
                                <option value="" disabled selected>--Pilih Klasifikasi--</option>
                                <option value="Rahasia" <?php if($surat['klasifikasi']=="Rahasia"){echo "selected";} ?>>
                                    Rahasia</option>
                                <option value="Terbatas"
                                    <?php if($surat['klasifikasi']=="Terbatas"){echo "selected";} ?>>Terbatas</option>
                                <option value="Biasa" <?php if($surat['klasifikasi']=="Biasa"){echo "selected";} ?>>
                                    Biasa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Sifat Surat</label>
                            <select name="sifat_surat" class="form-control">
                                <option value="" disabled selected>--Pilih Sifat--</option>
                                <option value="Sangat Segera"
                                    <?php if($surat['sifat_surat']=="Sangat Segera"){echo "selected";} ?>>Sangat Segera
                                </option>
                                <option value="Segera" <?php if($surat['sifat_surat']=="Segera"){echo "selected";} ?>>
                                    Segera</option>
                                <option value="Biasa" <?php if($surat['sifat_surat']=="Biasa"){echo "selected";} ?>>
                                    Biasa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Asal Surat</label>
                            <input type="text" class="form-control" name="asal_surat"
                                value="<?php echo $surat['asal_surat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal"
                                value="<?php echo $surat['tanggal']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Lampiran</label>
                            <input type="text" class="form-control" name="lampiran"
                                value="<?php echo $surat['lampiran']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Perihal</label>
                            <input type="text" class="form-control" name="perihal"
                                value="<?php echo $surat['perihal']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">File</label>
                            <a href="<?php echo asset("file_surat/".$surat['file_surat_masuk']) ?>"><?php echo $surat['file_surat_masuk']; ?></a>
                            <input type="file" class="form-control" name="file_surat_masuk">
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
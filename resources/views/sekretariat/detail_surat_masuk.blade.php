@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Detail Surat Masuk</h3>
            <hr>
        </div>
    </div>
    <div class="card shadow p-2 my-5">
        <div class="card-header text-white fw-bold" style="background-color:#0B2447">Surat Masuk</div>
        <div class="card-body bg-primary-subtle">
            <form>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">No Surat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['no_surat']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Klasifikasi</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control"
                                value="<?php echo $surat['klasifikasi']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Sifat Surat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control"
                                value="<?php echo $surat['sifat_surat']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Asal Surat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control"
                                value="<?php echo $surat['asal_surat']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Tanggal</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['tanggal']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Lampiran</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['lampiran']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Perihal</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['perihal']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">File Surat</label>
                        </div>
                        <div class="col-10">
                            <a class="form-control" readonly href="<?php echo asset("
                                file_surat/".$surat['file_surat_masuk']); ?>">
                                <?php echo $surat['file_surat_masuk']; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if (isset($disposisi)): ?>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Unit</label>
                        </div>
                        <div class="col-10">
                            <select class="form-control" name="id_unit" readonly>
                                <option>
                                    <?php echo $disposisi['nama_unit']; ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Catatan</label>
                        </div>
                        <div class="col-10">
                            <textarea readonly class="form-control" cols="30" rows="10"
                                name="catatan_disposisi"><?php echo $disposisi['catatan_disposisi'] ?></textarea>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Unit</label>
                            </div>
                            <div class="col-10">
                                <select class="form-control" name="id_unit" readonly>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Catatan</label>
                            </div>
                            <div class="col-10">
                                <textarea readonly class="form-control" cols="30" rows="10"
                                    name="catatan_disposisi"></textarea>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
            </form>
        </div>
    </div>
</div>
@endsection
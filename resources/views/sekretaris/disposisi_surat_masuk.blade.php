@extends("sekretaris/template_sekretaris")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Disposisi Surat Masuk</h3>
            <hr>
        </div>
    </div>
    <div class="card shadow p-2 my-5">
        <div class="card-body">
            <?php if (!isset($surat)): ?>
                <!-- Belum disposisi -->
                <form method="post" action="<?php echo url("sekretaris/surat_masuk/tambah_disposisi_surat_masuk/".$surat_m['id_surat_masuk']); ?>">
                    @csrf   
                    @method('post')
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">No Surat</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly class="form-control" value="<?php echo $surat_m['no_surat']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Klasifikasi</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly class="form-control" value="<?php echo $surat_m['klasifikasi']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Sifat</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly class="form-control" value="<?php echo $surat_m['sifat_surat']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Asal Surat</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly class="form-control" value="<?php echo $surat_m['asal_surat']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Tanggal</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly class="form-control" value="<?php echo $surat_m['tanggal']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Lampiran</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly class="form-control" value="<?php echo $surat_m['lampiran']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Perihal</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly class="form-control" value="<?php echo $surat_m['perihal']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">File Surat</label>
                            </div>
                            <div class="col-10">
                                <a class="form-control" readonly href="<?php echo asset("file_surat/".$surat_m['file_surat_masuk']); ?>">
                                    <?php echo $surat_m['file_surat_masuk']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Unit</label>
                            </div>
                            <div class="col-10">
                                <div class="mb-3">
                                    <select class="form-control" name="id_unit">
                                       <option value="" disabled selected>--Pilih Unit--</option>
                                       <?php foreach ($unit as $ku => $vu): ?>
                                           <option value="<?php echo $vu['id_unit'] ?>"><?php echo $vu['nama_unit']; ?></option>
                                       <?php endforeach ?>
                                   </select>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="mb-3">
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold" style="color: #OB22447">Catatan</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" cols="30" rows="10" name="catatan_disposisi"></textarea>
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
<!-- akhir percabangan -->
<!-- udah disposisi -->
        <?php else: ?>
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
                            <input type="text" readonly class="form-control" value="<?php echo $surat['klasifikasi']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Sifat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['sifat_surat']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Asal Surat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['asal_surat']; ?>">
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
                            <a class="form-control" readonly href="<?php echo asset("file_surat/".$surat['file_surat_masuk']); ?>">
                                <?php echo $surat['file_surat_masuk']; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Unit</label>
                        </div>
                        <div class="col-10">
                            <select class="form-control" name="id_unit" readonly>
                            <option><?php echo $surat['nama_unit']; ?></option>
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
                            <textarea readonly class="form-control" cols="30" rows="10" name="catatan_disposisi"><?php echo $surat['catatan_disposisi'] ?></textarea>
                        </div>
                    </div>
                </div>
        </form>
    <?php endif ?>
</div>
</div>
</div>
@endsection
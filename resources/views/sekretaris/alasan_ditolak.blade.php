@extends("sekretaris/template_sekretaris")
@section("konten")
<div class="container">
    <div class="card p-2 mt-5 shadow">
        <div class="card-body">
            <h3 class="fw-bold">Alasan Surat Keluar Ditolak</h3>
            <hr>
        </div>
    </div>
    <div class="card shadow p-2 my-5">
        <div class="card-header text-white fw-bold" style="background-color:#0B2447; height: 40px;">Surat Keluar</div>
            <div class="card-body bg-primary-subtle">
                <form action="<?php echo("/sekretaris/surat_keluar/tambah_alasan_ditolak/".$surat['no_surat']) ?>" method="post">
                    @method ("post")
                    @csrf
                    <div class="mb-3 row">
                            <div class="col-2">
                                <label for="" class="form-label fw-bold" style="color: #OB2447;">No Surat</label>
                            </div>
                            <div class="col-10">
                                <input type="text" readonly name="" class="form-control" value="<?php echo $surat['no_surat']; ?>/1200-<?php echo $surat['kode_unit']; ?>">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="" class="form-label fw-bold" style="color: #OB2447;">Jenis</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly name="" class="form-control" value="<?php echo $surat['jenis_surat']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="" class="form-label fw-bold" style="color: #OB2447;">Sifat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly name="" class="form-control" value="<?php echo $surat['sifat_surat']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="" class="form-label fw-bold" style="color: #OB2447;">Pengirim</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly name="" class="form-control" value="<?php echo $surat['nama_unit']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="" class="form-label fw-bold" style="color: #OB2447;">Tujuan</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly name="" class="form-control" value="<?php echo $surat['tujuan']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="" class="form-label fw-bold" style="color: #OB2447;">Tanggal</label>
                        </div>
                        <div class="col-10">
                            <input type="date" readonly name="" class="form-control" value="<?php echo $surat['tanggal']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="" class="form-label fw-bold" style="color: #OB2447;">Perihal</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly name="" class="form-control" value="<?php echo $surat['perihal']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-2">
                            <label for="" class="form-label fw-bold" style="color: #OB2447;">Status</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly name="" class="form-control" value="<?php echo $surat['status_surat']; ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #OB22447">Isi</label>
                        <textarea readonly class="form-control" name="isi" id="" cols="30" rows="10"><?php echo $surat['isi_surat']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #OB22447">Alasan Ditolak</label>
                        <textarea class="form-control" name="alasan_ditolak" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn text-white" style="background-color:#0B2447;">Simpan</button>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
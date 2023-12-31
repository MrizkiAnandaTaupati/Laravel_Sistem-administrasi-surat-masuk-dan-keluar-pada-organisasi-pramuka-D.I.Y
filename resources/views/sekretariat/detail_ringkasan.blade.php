@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Detail Ringkasan Kegiatan</h6>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Nama Kegiatan</label>
                            <input readonly type="text" class="form-control" name="nama_kegiatan" value="<?php echo $ringkasan_kegiatan['nama_kegiatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tanggal Kegiatan</label>
                            <input readonly type="date" class="form-control" name="tanggal_kegiatan" value="<?php echo $ringkasan_kegiatan['tanggal_kegiatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Waktu Kegiatan</label>
                            <input readonly type="time" class="form-control" name="waktu" value="<?php echo $ringkasan_kegiatan['waktu']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tempat Kegiatan</label>
                            <input readonly type="text" class="form-control" name="tempat" value="<?php echo $ringkasan_kegiatan['tempat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Unit</label>
                            <input readonly type="text" class="form-control" name="unit" value="<?php echo $ringkasan_kegiatan['nama_unit']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Notulensi Rapat</label>
                            <textarea readonly class="form-control" name="isi" id="" cols="30" rows="10"><?php echo $ringkasan_kegiatan['isi']; ?></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
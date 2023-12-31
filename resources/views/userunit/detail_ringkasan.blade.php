@extends("userunit/template_user")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Detail Ringkasan_Kegiatan</h3>
            <hr>
        </div>
    </div>
    <div class="card shadow p-2 my-5">
        <div class="card-header text-white fw-bold" style="background-color:#0B2447">Ringkasan_kegiatan</div>
            <div class="card-body bg-primary-subtle">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $ringkasan_kegiatan['nama_kegiatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tanggal_kegiatan" value="<?php echo $ringkasan_kegiatan['tanggal_kegiatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Waktu Kegiatan</label>
                            <input type="time" class="form-control" name="waktu" value="<?php echo $ringkasan_kegiatan['waktu']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tempat Kegiatan</label>
                            <input type="text" class="form-control" name="tempat" value="<?php echo $ringkasan_kegiatan['tempat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Unit</label>
                            <input type="text" class="form-control" name="unit" value="<?php echo $ringkasan_kegiatan['nama_unit']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Ringkasan Kegiatan</label>
                            <textarea class="form-control" name="isi" id="" cols="30" rows="10"><?php echo $ringkasan_kegiatan['isi']; ?></textarea>
                        </div>
                    </form>
            </div>
    </div>
</div>
@endsection
@extends("sekretaris/template_sekretaris")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Ubah Notulen</h6>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post" action="<?php echo url("sekretaris/notulen/ubah_notulen/".$notulen['id_notulen']); ?>">
                        @method("put")
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $notulen['nama_kegiatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tanggal_kegiatan" value="<?php echo $notulen['tanggal_kegiatan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Waktu Kegiatan</label>
                            <input type="time" class="form-control" name="waktu" value="<?php echo $notulen['waktu']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tempat Kegiatan</label>
                            <input type="text" class="form-control" name="tempat" value="<?php echo $notulen['tempat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Notulensi Rapat</label>
                            <textarea class="form-control" name="isi" id="" cols="30" rows="10"><?php echo $notulen['isi']; ?></textarea>
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
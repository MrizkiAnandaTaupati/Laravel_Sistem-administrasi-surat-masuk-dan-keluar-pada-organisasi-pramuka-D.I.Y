@extends("userunit/template_user")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Ubah Ringkasan Kegiatan</h6>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post" action="<?php echo url("userunit/ringkasan_kegiatan/ubah_ringkasan/".$ringkasan_kegiatan['id_ringkasan_kegiatan']); ?>">
                        @method("put")
                        @csrf
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
                            <label class="form-label fw-bold" style="color: #0B22447">Unit</label>
                            <select name="unit" class="form-control">
                                <option value="">--Pilih Unit--</option>
                                <?php foreach ($unit as $value): ?>
                                    <option value="<?php echo $value['id_unit']; ?>" <?php if($value['id_unit'] == $ringkasan_kegiatan['id_unit']){echo "selected";} ?>>
                                        <?php echo $value['nama_unit']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Ringkasan Kegiatan</label>
                            <textarea class="form-control" name="isi" id="" cols="30" rows="10"><?php echo $ringkasan_kegiatan['isi']; ?></textarea>
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
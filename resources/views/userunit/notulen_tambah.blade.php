@extends("userunit/template_user")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Tambah Notulen</h6>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post" action="<?php echo url("userunit/notulen/tambah_notulen"); ?>">
                        @method("post")
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Nama Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tanggal_kegiatan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Waktu Kegiatan</label>
                            <input type="time" class="form-control" name="waktu">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Tempat Kegiatan</label>
                            <input type="text" class="form-control" name="tempat">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Unit</label>
                            <select name="unit" class="form-control">
                                <option value="">--Pilih Unit--</option>
                                <?php foreach ($unit as $key => $value): ?>
                                    <option value="<?php echo $value['id_unit']; ?>"> <?php echo $value['nama_unit']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #OB22447">Notulensi Rapat</label>
                            <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
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
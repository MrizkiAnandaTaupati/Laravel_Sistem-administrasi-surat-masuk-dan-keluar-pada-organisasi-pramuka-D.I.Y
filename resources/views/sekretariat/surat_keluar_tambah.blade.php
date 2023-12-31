@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">
                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Tambah Surat Keluar</h6>
                </div>
                <div class="card-body bg-primary-subtle">
                    <form method="post" action="<?php echo url("sekretariat/surat_keluar/tambah_surat"); ?>"
                        enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Jenis Surat</label>
                            <select name="jenis_surat" class="form-control">
                                <option disabled selected>--Pilih Jenis Surat--</option>
                                <option value="Surat Umum/Edaran">Surat Umum/Edaran</option>
                                <option value="Surat Undangan">Surat Undangan</option>
                                <option value="Surat Tugas">Surat Tugas</option>
                                <option value="Surat Kuasa">Surat Kuasa</option>
                                <option value="Surat Izin">Surat Izin</option>
                                <option value="Surat Keterangan">Surat Keterangan</option>
                                <option value="Surat Perjalanan Dinas">Surat Perjalanan Dinas</option>
                                <option value="Surat Pengantar">Surat Pengantar</option>
                                <option value="Surat Panggilan">Surat Panggilan</option>
                                <option value="Surat Rekomendasi">Surat Rekomendasi</option>
                                <option value="Surat Pengumuman">Surat Pengumuman</option>
                                <option value="Nota Dinas">Nota Dinas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Sifat Surat</label>
                            <select name="sifat_surat" class="form-control">
                                <option disabled selected>-- Pilih Sifat Surat --</option>
                                <option value="Rahasia">Rahasia</option>
                                <option value="Terbatas">Terbatas</option>
                                <option value="Biasa">Biasa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Pengirim</label>
                            <select name="id_unit" class="form-control">
                                <option disabled selected>--Pilih Unit--</option>
                                <?php foreach ($unit as $key => $value): ?>
                                    <option value="<?php echo $value['id_unit']?>"> <?php echo $value['nama_unit']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Tujuan</label>
                            <input type="text" class="form-control" name="tujuan">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Perihal</label>
                            <input type="text" class="form-control" name="perihal">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Tanggal Surat</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Isi Surat</label>
                            <textarea class="form-control" name="isi_surat" id="" cols="30" rows="10"></textarea>
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
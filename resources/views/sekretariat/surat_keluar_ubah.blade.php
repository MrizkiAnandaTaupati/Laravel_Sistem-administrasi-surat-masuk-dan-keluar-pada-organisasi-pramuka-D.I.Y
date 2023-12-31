@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">

                <div class="card-header" style="background-color:#0B2447;">
                    <h6 class="text-white">Ubah Surat Keluar</h6>
                </div>

                <div class="card-body bg-primary-subtle">
                    <form method="post"
                        action="<?php echo url("sekretariat/surat_keluar/ubah_surat/".$surat['no_surat']); ?>"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Jenis Surat</label>
                            <select name="jenis_surat" class="form-control">
                                <option disabled selected value="">-- Pilih Jenis Surat --</option>
                                <option value="Surat Umum/Edaran"
                                    <?php if($surat['jenis_surat'] == "Surat Umum/Edaran") {echo "selected";} ?>>Surat
                                    Umum/Edaran</option>
                                <option value="Surat Undangan"
                                    <?php if($surat['jenis_surat'] == "Surat Undangan") {echo "selected";} ?>>Surat
                                    Undangan</option>
                                <option value="Surat Tugas"
                                    <?php if($surat['jenis_surat'] == "Surat Tugas") {echo "selected";} ?>>Surat Tugas
                                </option>
                                <option value="Surat Kuasa"
                                    <?php if($surat['jenis_surat'] == "Surat Kuasa") {echo "selected";} ?>>Surat Kuasa
                                </option>
                                <option value="Surat Izin"
                                    <?php if($surat['jenis_surat'] == "Surat Izin") {echo "selected";} ?>>Surat Izin
                                </option>
                                <option value="Surat Keterangan"
                                    <?php if($surat['jenis_surat'] == "Surat Keterangan") {echo "selected";} ?>>Surat
                                    Keterangan</option>
                                <option value="Surat Perjalanan Dinas"
                                    <?php if($surat['jenis_surat'] == "Surat Perjalanan Dinas") {echo "selected";} ?>>
                                    Surat Perjalanan Dinas</option>
                                <option value="Surat Pengantar"
                                    <?php if($surat['jenis_surat'] == "Surat Pengantar") {echo "selected";} ?>>Surat
                                    Pengantar</option>
                                <option value="Surat Panggilan"
                                    <?php if($surat['jenis_surat'] == "Surat Panggilan") {echo "selected";} ?>>Surat
                                    Panggilan</option>
                                <option value="Surat Rekomendasi"
                                    <?php if($surat['jenis_surat'] == "Surat Rekomendasi") {echo "selected";} ?>>Surat
                                    Rekomendasi</option>
                                <option value="Surat Pengumuman"
                                    <?php if($surat['jenis_surat'] == "Surat Pengumuman") {echo "selected";} ?>>Surat
                                    Pengumuman</option>
                                <option value="Nota Dinas"
                                    <?php if($surat['jenis_surat'] == "Nota Dinas") {echo "selected";} ?>>Nota Dinas
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Sifat Surat</label>
                            <select name="sifat_surat" class="form-control">
                                <option disabled selected>-- Pilih Sifat Surat --</option>
                                <option value="Rahasia"
                                    <?php if($surat['sifat_surat'] == "Rahasia") {echo "selected";} ?>>Rahasia</option>
                                <option value="Terbatas"
                                    <?php if($surat['sifat_surat'] == "Terbatas") {echo "selected";} ?>>Terbatas
                                </option>
                                <option value="Biasa" <?php if($surat['sifat_surat'] == "Biasa") {echo "selected";} ?>>
                                    Biasa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Pengirim</label>
                            <select name="id_unit" class="form-control">
                                <option disabled selected>--Pilih Unit--</option>
                                <?php foreach ($unit as $key => $value): ?>
                                    <option value="<?php echo $value['id_unit'];?>"  <?php if($value['id_unit'] == $surat['id_unit']) {echo "selected";} ?> > <?php echo $value['nama_unit']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Tujuan</label>
                            <input type="text" class="form-control" name="tujuan"
                                value="<?php echo $surat['tujuan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Perihal</label>
                            <input type="text" class="form-control" name="perihal"
                                value="<?php echo $surat['perihal']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Tanggal Surat</label>
                            <input type="date" class="form-control" name="tanggal"
                                value="<?php echo $surat['tanggal']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Isi Surat</label>
                            <textarea name="isi_surat" class="form-control" id="" cols="30" rows="10"> <?php echo $surat['isi_surat']; ?></textarea>
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
@extends("sekretaris/template_sekretaris")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Data Surat Keluar</h3>
            <hr>
        </div>
    </div>
    <div class="card shadow p-2 my-5">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Tanggal</th>
                            <th>Tujuan</th>
                            <th>Pengirim</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($surat as $key => $value): ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value['no_surat']; ?>/1200-<?php echo $value['kode_unit']; ?></td>
                            <td><?php echo date("d M Y",strtotime($value['tanggal'])); ?></td>
                            <td><?php echo $value['tujuan']; ?></td>
                            <td><?php echo $value['nama_unit']; ?></td>
                            <td class="text-center">
                                <a href="<?php echo url("sekretaris/file_surat_keluar/".$value['no_surat']); ?>" target="_blank">
                                    <span class="bi bi-envelope-fill display-6"></span>
                                    <br>
                                </a>
                            </td>
                            <td>
                                <?php if ($value['status_surat']=="Ditolak"): ?>
                                    <form method="post" action="<?php echo url("sekretaris/status_surat_ubah/".$value['no_surat']); ?>">
                                        @csrf
                                        @method('put')
                                        <select name="status_surat" class="form-control">
                                            <option value="Diolah" <?php if($value['status_surat']=="Diolah"){echo "selected";} ?> >Diolah</option>
                                            <option value="Ditolak" <?php if($value['status_surat']=="Ditolak"){echo "selected";} ?> >Ditolak</option>
                                            <option value="Disetujui" <?php if($value['status_surat']=="Disetujui"){echo "selected";} ?> >Disetujui</option>
                                        </select>
                                        <div class="mt-2 d-grid gap-2">
                                            <button class="btn btn-sm btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                <?php else: ?>
                                    <form method="post" action="<?php echo url("sekretaris/status_surat_ubah/".$value['no_surat']); ?>">
                                        @csrf
                                        @method('put')
                                        <select name="status_surat" class="form-control">
                                            <option value="Diolah" <?php if($value['status_surat']=="Diolah"){echo "selected";} ?> >Diolah</option>
                                            <option value="Ditolak" <?php if($value['status_surat']=="Ditolak"){echo "selected";} ?> >Ditolak</option>
                                            <option value="Disetujui" <?php if($value['status_surat']=="Disetujui"){echo "selected";} ?> >Disetujui</option>
                                        </select>
                                        <div class="mt-2 d-grid gap-2">
                                            <button class="btn btn-sm btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                <?php endif ?>
                            </td>
                            <td>
                                <a href="<?php echo url('sekretaris/surat_keluar/detail_surat/'.$value['no_surat']) ?>" class="btn btn-sm btn-info text-white">Detail</a>
                                <?php if ($value['status_surat']=="Ditolak"): ?>
                                    <?php if (empty($value['alasan_ditolak'])): ?>
                                        <a href="<?php echo ('/sekretaris/surat_keluar/alasan_ditolak/'.$value['no_surat']) ?>" class="btn btn-sm btn-danger">Beri Alasan</a>
                                    <?php else: ?>
                                        <a href="<?php echo ('/sekretaris/surat_keluar/tampil_alasan_ditolak/'.$value['no_surat']) ?>" class="btn btn-sm btn-primary">Alasan Ditolak</a>
                                    <?php endif ?>
                                <?php endif ?>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
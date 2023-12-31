@extends("admin/template_admin")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Data Arsip Surat Keluar</h3>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($surat as $key => $value): ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value['no_surat']; ?>/1200-<?php echo $value['kode_unit'] ?></td>
                            <td><?php echo date("d M Y",strtotime($value['tanggal'])); ?></td>
                            <td><?php echo $value['tujuan']; ?></td>
                            <td><?php echo $value['nama_unit']; ?></td>
                            <td class="text-center">
                                <a href="<?php echo url("admin/file_surat_keluar/".$value['no_surat']); ?>" target="_blank">
                                    <span class="bi bi-envelope-fill display-6"></span>
                                    <br>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo url('admin/arsip_surat_keluar/detail_surat_keluar_arsip/'.$value['no_surat']) ?>" class="btn btn-sm btn-info text-white">Detail</a>
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
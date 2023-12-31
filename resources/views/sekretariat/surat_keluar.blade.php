@extends("sekretariat/template_sekretariat")
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
                            <td><?php echo $value['no_surat']; ?>/1200-<?php echo $value['kode_unit'] ?></td>
                            <td><?php echo date("d M Y",strtotime($value['tanggal'])); ?></td>
                            <td><?php echo $value['tujuan']; ?></td>
                            <td><?php echo $value['nama_unit']; ?></td>
                            <td class="text-center">
                                <a href="<?php echo url("sekretariat/file_surat_keluar/".$value['no_surat']); ?>" target="_blank">
                                    <span class="bi bi-envelope-fill display-6"></span>
                                    <br>
                                </a>
                            </td>
                            <td><?php echo $value["status_surat"]; ?></td>
                            <td>
                                <a href="<?php echo url('sekretariat/surat_keluar/detail_surat/'.$value['no_surat']) ?>" class="btn btn-sm btn-info text-white">Detail</a>
                                <a href="<?php echo url("sekretariat/surat_keluar/surat_ubah/".$value['no_surat']); ?>" class="btn btn-sm btn-warning text-white">Ubah</a>
                                <form class="mt-2" method="post" action="<?php echo url("sekretariat/surat_keluar/hapus_surat/".$value['no_surat']); ?>">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?php echo url("sekretariat/surat_keluar/surat_tambah"); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
@endsection
@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Data Surat Masuk</h3>
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
                            <th>Disposisi</th>
                            <th>No Surat</th>
                            <th>Tanggal</th>
                            <th>Sifat Surat</th>
                            <th>Perihal</th>
                            <th>Asal Surat</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($surat as $key => $value): ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td> 
                                <?php if($value['posisi_surat']=="tercatat"):?>
                                Tercatat
                                <?php else: ?>
                                Disposisi
                                <?php endif ?>
                            </td>
                            <td><?php echo $value['no_surat']; ?></td>
                            <td><?php echo date("d M Y",strtotime($value['tanggal'])); ?></td>
                            <td><?php echo $value['sifat_surat']; ?></td>
                            <td><?php echo $value["perihal"]; ?></td>
                            <td><?php echo $value['asal_surat']; ?></td>
                            <td class="text-center">
                                <a href="<?php echo asset("file_surat/".$value['file_surat_masuk']); ?>">
                                    <span class="bi bi-envelope-fill display-6"></span>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo url("sekretariat/surat_masuk/detail_surat/".$value['id_surat_masuk']); ?>" class="btn btn-sm btn-info text-white">Detail</a>
                                <a href="<?php echo url("sekretariat/surat_masuk/surat_ubah/".$value['id_surat_masuk']); ?>" class="btn btn-sm btn-warning text-white">Ubah</a>
                                <form class="mt-2 d-inline" method="post" action="<?php echo url("sekretariat/surat_masuk/hapus_surat/".$value['id_surat_masuk']); ?>">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                                <a href="<?php echo url("sekretariat/file_cetak_qr/".$value['id_surat_masuk']); ?>" target="_blank" class="d-inline mt-2 btn btn-sm btn-primary text-white">Cetak</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?php echo url("sekretariat/surat_masuk/surat_tambah"); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
@endsection
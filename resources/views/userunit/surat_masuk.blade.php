@extends("userunit/template_user")
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
                                <?php if($value['posisi_surat']=="tercatat"): ?>
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
                                <a href="<?php echo url("userunit/surat_masuk/detail_surat_masuk/".$value['id_surat_masuk']); ?>" class="btn btn-sm btn-info text-white">Detail</a>
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
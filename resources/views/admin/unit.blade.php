@extends("admin/template_admin")
@section("konten")
<div class="container">
    <div class="card p-2 mt-5 shadow">
        <div class="card-body">
            <h3 class="fw-bold">Data Unit</h3>
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
                            <th>Tipe Unit</th>
                            <th>Nama Unit</th>
                            <th>Kode Unit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($unit as $key => $value) : ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value['tipe_unit']; ?></td>
                                <td><?php echo $value['nama_unit']; ?></td>
                                <td><?php echo $value['kode_unit']; ?></td>
                                <td class="">
                                    <a href="<?php echo url("admin/user_unit/".$value['id_unit']); ?>" class="btn btn-sm btn-info text-white">User</a>
                                    <a href="<?php echo url("admin/unit_ubah/".$value['id_unit']); ?>" class="btn btn-sm btn-warning text-white">Ubah</a>
                                    <form method="post" action="<?php echo url('admin/hapus_unit/'.$value['id_unit']) ?>" class="d-inline">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?php echo url("admin/unit_tambah"); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
@endsection
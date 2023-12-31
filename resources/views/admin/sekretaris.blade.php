@extends("admin/template_admin")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Data Sekretaris</h3>
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
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sekretaris as $key => $value): ?>
                            <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value['nama_sekretaris']; ?></td>
                            <td><?php echo $value['username_sekretaris']; ?></td>
                            <td><?php echo $value['email_sekretaris']; ?></td>
                            <td>
                                <a href="<?php echo url('admin/sekretaris/edit/'.$value['id_sekretaris']); ?>" class="btn btn-warning btn-sm text-white">Ubah</a>
                                <form method="post" action="<?php echo url('admin/sekretaris/hapus/'.$value['id_sekretaris']); ?>" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?php echo url('admin/sekretaris/tambah'); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
@endsection
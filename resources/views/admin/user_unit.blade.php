@extends('admin/template_admin')
@section('konten')
<div class="container">
    <div class="card p-2 mt-5 shadow">
        <div class="card-body">
            <h3 class="fw-bold">Data User Unit</h3>
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
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($user as $key => $value): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value["username_user"] ?></td>
                                <td><?php echo $value["nama_user"] ?></td>
                                <td><?php echo $value["email_user"] ?></td>
                                <td>    
                                    <a href="<?php echo url("admin/user_unit/ubah/".$id_unit."/".$value['id_user_unit']); ?>" class="btn btn-warning text-white btn-sm">Ubah</a>
                                    <form method="post" action="<?php echo url('admin/user_unit/hapus/'.$id_unit.'/'.$value['id_user_unit']); ?>" class="d-inline">
                                        @csrf
                                        @method("put")
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?php echo url("admin/user_unit/tambah/".$id_unit); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin/template_admin')
@section('konten')
<div class="container">
    <div class="card p-2 mt-5 shadow">
        <div class="card-body">
            <h3 class="fw-bold">Data Admin</h3>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admin as $key => $value): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value["username_admin"] ?></td>
                                <td><?php echo $value["nama_admin"] ?></td>
                                <td>
                                    <a href="{{ url('admin/ubah_admin/'.$value['id_admin']) }}" class="btn btn-warning text-white btn-sm">Ubah</a>
                                    <form method="post" action="{{ url('/admin/hapus/'.$value['id_admin']) }}" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?php echo url("admin/tambah_admin"); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
@endsection
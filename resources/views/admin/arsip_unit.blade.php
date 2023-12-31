@extends("admin/template_admin")
@section("konten")
<div class="container">
    <div class="card p-2 mt-5 shadow">
        <div class="card-body">
            <h3 class="fw-bold">Data Arsip Unit</h3>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($unit as $key => $value) : ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value['tipe_unit']; ?></td>
                                <td><?php echo $value['nama_unit']; ?></td>
                                <td><?php echo $value['kode_unit']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
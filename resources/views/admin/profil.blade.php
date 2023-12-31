@extends("admin/template_admin")
@section("konten")
    <div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-2 shadow rounded bg-white p-5 my-5">
            <h3>Profil</h3>
            <form method="post" action="{{ url('admin/profil/'.$admin['id_admin']) }}">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username_admin" value="<?php echo $admin['username_admin'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password_admin" value="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_admin" value="<?php echo $admin['nama_admin'] ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Ubah</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
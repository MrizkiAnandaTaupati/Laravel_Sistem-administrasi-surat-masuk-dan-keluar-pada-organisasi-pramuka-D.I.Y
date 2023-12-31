@extends("sekretariat/template_sekretariat")
@section("konten")
    <div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-2 shadow rounded bg-white p-5 my-5">
            <h3>Profil</h3>
            <form method="post" action="<?php echo url('sekretariat/profil/'.$sekretariat['id_sekretariat']) ?>">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username_sekretariat" value="<?php echo $sekretariat['username_sekretariat'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password_sekretariat" value="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_sekretariat" value="<?php echo $sekretariat['nama_sekretariat'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email_sekretariat" value="<?php echo $sekretariat['email_sekretariat'] ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Ubah</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
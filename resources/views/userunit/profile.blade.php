@extends("userunit/template_user")
@section("konten")
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 shadow rounded bg-white p-5 my-5">
                <h3>Profil</h3>
                <form method="post" action="<?php echo url('userunit/profil/'.$user['id_user_unit']) ?>">
                @csrf
                @method('put')

                @if(session('update_berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('update_berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                    <div class="mb-3">
                        <label class="form-label">Nama Unit</label>
                        <input type="text" class="form-control" readonly name="" value="<?php echo $user['nama_unit'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username_user" value="<?php echo $user['username_user'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password_user" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_user" value="<?php echo $user['nama_user'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email_user" value="<?php echo $user['email_user'] ?>">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
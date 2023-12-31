@extends("admin/template_admin")
@section("konten")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-5">
            <div class="card shadow">

                <div class="card-header d-flex justify-content-between" style="background-color:#0B2447;">
                    <h6 class="text-white">Ubah Sekretariat</h6>
                    <span>
                        <a href="<?php echo url("admin/sekretariat"); ?>" class="text-white">
                            <i class="fas fa-times"></i>
                        </a>
                    </span>
                </div>
                
                <div class="card-body bg-primary-subtle">
                    <form action="<?php echo url('admin/sekretariat/edit_sekretariat/'.$sekretariat['id_sekretariat']) ?>" method="post">
                        @method("put")
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Username</label>
                            <input type="text" name="username" id="" class="form-control @error('username') is-invalid @enderror" value="<?php echo $sekretariat['username_sekretariat'] ?>">
                            @if ($errors->has('username'))
                                <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Email</label>
                            <input type="email" name="email" id="" class="form-control @error('email') is-invalid @enderror" value="<?php echo $sekretariat['email_sekretariat'] ?> ">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold" style="color: #OB22447">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" value="<?php echo $sekretariat['nama_sekretariat'] ?>">
                        </div>
                        <button class="btn text-white" style="background-color:#0B2447;">Simpan</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
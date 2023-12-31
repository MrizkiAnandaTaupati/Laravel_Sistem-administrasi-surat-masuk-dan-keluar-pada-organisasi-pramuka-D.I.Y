@extends("sekretaris/template_sekretaris")
@section("konten")
<div class="container my-5">
    <div class="card p-3 shadow mb-5">
        <div class="card-body">
            <p>Selamat datang <b><?php echo session("nama_sekretaris"); ?>!</b><br>
            Nikmati kemudahan mengelola surat dan data penting lainnya di Panel Manajemen kami. Selamat bekerja efisien dan sukses!
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-6 mb-3">
            <div class="card" style="background-color:#0B2447;">
                <div class="card-header">
                    <span class="text-white fw-bold"><i class="bi bi-envelope-check-fill"></i> Surat Masuk</span>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h6 class="fw-bold text-white" style="font-size: 50px"><?php echo $masuk ?></h6>
                    </div>
                </div>
                <div class="card-footer bg-primary-subtle">
                    <h6 class="text-end text-dark">Total Surat Masuk</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 mb-3">
            <div class="card" style="background-color:#19376D;">
                <div class="card-header">
                    <span class="text-white fw-bold"><i class="bi bi-envelope-paper-fill"></i> Surat Keluar</span>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h6 class="fw-bold text-white" style="font-size: 50px"><?php echo $keluar ?></h6>
                    </div>
                </div>
                <div class="card-footer bg-primary-subtle">
                    <h6 class="text-end text-dark">Total Surat Keluar</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 mb-3">
            <div class="card" style="background-color:#576CBC;">
                <div class="card-header">
                    <span class="text-white fw-bold"><i class="bi bi-bag-fill"></i> Unit Kerja</span>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h6 class="fw-bold text-white" style="font-size: 50px"><?php echo $unit ?></h6>
                    </div>
                </div>
                <div class="card-footer bg-primary-subtle">
                    <h6 class="text-end text-dark">Total Unit Kerja</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends("template_user")
@section("konten")
<div class="container">
    <div class="card shadow p-2 mt-5">
        <div class="card-body">
            <h3 class="fw-bold">Tracking Surat</h3>
            <hr>
        </div>
    </div>
    <div class="card shadow p-2 my-5">
        <div class="card-header text-white fw-bold" style="background-color:#0B2447">Surat Masuk</div>
        <div class="card-body bg-primary-subtle">
            <form>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">No Surat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['no_surat']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Asal Surat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['asal_surat']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Perihal</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['perihal']; ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label fw-bold" style="color: #OB22447">Posisi Surat</label>
                        </div>
                        <div class="col-10">
                            <input type="text" readonly class="form-control" value="<?php echo $surat['posisi_surat']; ?>">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
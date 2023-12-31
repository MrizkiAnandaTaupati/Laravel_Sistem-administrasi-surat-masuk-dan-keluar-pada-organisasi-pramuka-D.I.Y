@extends("sekretariat/template_sekretariat")
@section("konten")
<div class="container">
	<div class="card p-2 mt-5 shadow">
		<div class="card-body">
			<h3 class="fw-bold">Laporan Surat Masuk</h3>
			<hr>
		</div>
	</div>
	<div class="card shadow p-2 my-5">
		<div class="card-body">
			<form method="post" action="<?php echo url("dashboard/laporan_surat_masuk_filter"); ?>">
				@csrf
				@method('post')
				<div class="row">
					<div class="col-4 col-md-3">
						<label class="form-label fw-bold">Tanggal Mulai</label>
						<input type="date" name="tgl_mulai" class="form-control" value="<?php echo $mulai ?>">
					</div>
					<div class="col-4 col-md-3">
						<label class="form-label fw-bold">Tanggal Selesai</label>
						<input type="date" name="tgl_selesai" class="form-control" value="<?php echo $selesai ?>">
					</div>
					<div class="col-4 col-md-3">
						<label class="form-label fw-bold">Unit</label>
						<div class="input-group">
							<select name="id_unit_tertentu" class="form-control">
								<option disabled selected value="">Semua Unit</option>
								<?php foreach ($unit as $ku => $vu): ?>
									<option value="<?php echo $vu['id_unit'] ?>">
										<?php echo $vu['nama_unit']; ?>
									</option>
								<?php endforeach ?>
							</select>
							<span class="input-group-text"><i class="bi bi-caret-down-fill"></i></span>
						</div>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary">Filter</button>	
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
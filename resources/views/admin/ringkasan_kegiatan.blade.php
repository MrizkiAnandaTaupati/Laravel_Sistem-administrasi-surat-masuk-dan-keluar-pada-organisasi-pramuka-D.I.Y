@extends("admin/template_admin")
@section("konten")
<div class="container">
	<div class="card p-2 mt-5 shadow">
		<div class="card-body">
			<h3 class="fw-bold">Data Ringkasan Kegiatan</h3>
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
							<th>Unit</th>
							<th>Nama Kegiatan</th>
							<th>Tanggal</th>
							<th>Waktu</th>
							<th>Tempat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($ringkasan_kegiatan as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['nama_unit']; ?></td>
								<td><?php echo $value['nama_kegiatan']; ?></td>
								<td><?php echo date("d M Y",strtotime($value['tanggal'])); ?></td>
								<td><?php echo date("H:i:s",strtotime($value['waktu'])); ?></td>
								<td><?php echo $value['tempat']; ?></td>
								<td>
									<a href="<?php echo url('admin/ringkasan_kegiatan/detail_ringkasan/'.$value['id_ringkasan_kegiatan']); ?>" class="btn-sm btn btn-info text-white">Detail</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
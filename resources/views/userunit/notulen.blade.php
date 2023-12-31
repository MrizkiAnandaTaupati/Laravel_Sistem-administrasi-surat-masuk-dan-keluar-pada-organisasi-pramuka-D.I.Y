@extends("userunit/template_user")
@section("konten")
<div class="container">
	<div class="card p-2 mt-5 shadow">
		<div class="card-body">
			<h3 class="fw-bold">Data Notulen</h3>
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
						<?php foreach ($notulen as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['nama_unit']; ?></td>
								<td><?php echo $value['nama_kegiatan']; ?></td>
								<td><?php echo date("d M Y",strtotime($value['tanggal_kegiatan'])); ?></td>
								<td><?php echo date("H:i:s",strtotime($value['waktu'])); ?></td>
								<td><?php echo $value['tempat']; ?></td>
								<td>
									<a href="<?php echo url("userunit/notulen/detail_notulen/".$value['id_notulen']); ?>" class="btn-sm btn btn-info text-white">Detail</a>
									<a href="<?php echo url("userunit/notulen/notulen_ubah/".$value['id_notulen']); ?>" class="btn btn-sm btn-warning text-white">Ubah</a>
									<form class="mt-2" method="post" action="<?php echo url("userunit/notulen/hapus_notulen/".$value['id_notulen']); ?>" class="d-inline">
										@csrf
										@method('delete')
										<button class="btn btn-sm btn-danger">Hapus</button>
									</form>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
                    <a href="<?php echo url("userunit/notulen/notulen_tambah"); ?>" class="btn btn-primary">Tambah</a>
			</div>
		</div>
	</div>
</div>
@endsection
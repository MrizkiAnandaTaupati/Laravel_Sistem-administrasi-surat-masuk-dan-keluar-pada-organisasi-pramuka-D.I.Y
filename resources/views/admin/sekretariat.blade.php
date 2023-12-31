@extends("admin/template_admin")
@section("konten")
<div class="container">
	<div class="card p-2 mt-5 shadow">
		<div class="card-body">
			<h3 class="fw-bold">Data Sekretariat</h3>
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
							<th>Nama</th>
							<th>Username</th>
							<th>Email</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($sekretariat as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['nama_sekretariat']; ?></td>
								<td><?php echo $value['username_sekretariat']; ?></td>
								<td><?php echo $value['email_sekretariat']; ?></td>
								<td>
									<a href="<?php echo url('admin/sekretariat/edit/'.$value['id_sekretariat']); ?>" class="btn btn-warning btn-sm text-white">Ubah</a>
									<form method="post" action="<?php echo url('admin/sekretariat/hapus/'.$value['id_sekretariat']) ?>" class="d-inline">
										@method("delete")
										@csrf 
										<button class="btn btn-danger btn-sm">Hapus</button>
									</form>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<a href="<?php echo url('admin/sekretariat/tambah'); ?>" class="btn btn-primary">Tambah</a>
			</div>
		</div>
	</div>
</div>
@endsection
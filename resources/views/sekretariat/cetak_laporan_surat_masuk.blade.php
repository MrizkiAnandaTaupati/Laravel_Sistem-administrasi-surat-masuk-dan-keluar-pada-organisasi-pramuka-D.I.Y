@extends("sekretariat/template_cetak")
@section("konten")
<div class="container">
	<div class="card p-2 mt-5 shadow">
		<div class="card-body">
			<h3 class="fw-bold">Laporan Surat Masuk</h3>
			<p>Periode : <?php echo date("d M Y",strtotime($mulai)) ?> - <?php echo date('d M Y',strtotime($selesai)) ?></p>
			<hr>
		</div>
	</div>
	<div class="card shadow p-2 my-5">
		<div class="card-body">
			<div class="table-responsive mt-5">
				<table class="table table-bordered table-hover" id="example">
					<thead>
						<tr>
							<th>No</th>
							<th>Disposisi</th>
							<th>No Surat</th>
							<th>Tanggal</th>
							<th>Sifat Surat</th>
							<th>Perihal</th>
							<th>Asal Surat</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($surat_masuk as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['nama_unit']; ?></td>
								<td><?php echo $value['no_surat']; ?></td>
								<td><?php echo date("d M Y",strtotime($value['tanggal'])); ?></td>
								<td><?php echo $value['sifat_surat']; ?></td>
								<td><?php echo $value["perihal"]; ?></td>
								<td><?php echo $value['asal_surat']; ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<?php if (isset($id_unit_tertentu)): ?>
					<a href="<?php echo url("sekretariat/print_laporan_surat_masuk/".$mulai."/".$selesai."/".$id_unit_tertentu) ?>" class="btn btn-primary" target="_blank">Cetak</a>
				<?php else: ?>
					<a href="<?php echo url("sekretariat/print_laporan_surat_masuk/".$mulai."/".$selesai) ?>" class="btn btn-primary" target="_blank">Cetak</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
@endsection
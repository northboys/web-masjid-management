<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
<div class="container">

	<div class="card bg-success mb-2">
		<div class="card-body text-white">
			<h4>Total Pemasukan Masjid</h4>
			<b>Rp.<?= $pemasukan['totalMasuk'] ?></b>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5>Kas Masjid Masuk</h5>
			<a href="<?= base_url('kas_masjid/create') ?>" class="btn btn-primary btn-sm my-2">Create</a>
			<div class="table-responsive">
				<table class="table table-bordered table-striped" id="tableku">
					<thead>
						<tr>
							<th>No</th>
							<th>Tgl Kas Masuk</th>
							<th>Uraian</th>
							<th>Jumlah</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach ($kasmasjid as $get): ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $get['tgl_kas_masjid']; ?></td>
								<td><?= $get['uraian_kas_masjid']; ?></td>
								<td>Rp.<?= $get['masukkas']; ?></td>
								<td>
									<a href="">Update</a>
									<a onclick="confirm('Yakin ingin menghapus data?')" href="<?= base_url('kas_masjid/hapuskas/') . $get['id_kas_masjid'] ?>">Delete</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>		
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#tableku').DataTable();
	} );
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
<div class="container">

	<div class="card bg-success mb-2">
		<div class="card-body text-white">
			<h4>Total Pengeluaran Masjid</h4>
			<b>Rp.<?= $pengeluaran['totalKeluar'] ?></b>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5>Kas Masjid Keluar</h5>
			<a href="<?= base_url('kas_masjid/createkeluar') ?>" class="btn btn-dark btn-sm my-2">Tambah Data</a>
			<div class="table-responsive">
				<table class="table table-bordered table-striped" id="tableku">
					<thead>
						<tr>
							<th>No</th>
							<th>Tgl Kas Keluar</th>
							<th>Uraian</th>
							<th>Jumlah</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach ($kaskeluar as $get): ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $get['tgl_kas_masjid']; ?></td>
								<td><?= $get['uraian_kas_masjid']; ?></td>
								<td>Rp.<?= $get['keluarkas']; ?></td>
								<td>
									<a href="">Update</a>
									<a href="">Delete</a>
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
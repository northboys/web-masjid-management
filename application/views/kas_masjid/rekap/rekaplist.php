<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
<div class="container">

	<div class="card bg-primary mb-2">
		<div class="card-body text-white">
			<h5>Saldo Kas Masjid</h5>
			<h6>Pemasukan : Rp.<?= $pemasukan['totalMasuk']; ?></h6>
			<h6>Pengeluaran : Rp.<?= $pengeluaran['totalKeluar']; ?></h6>
			<hr>
			<h6>Saldo Akhir : Rp.<?= number_format(($pemasukan['totalMasukNorp'] - $pengeluaran['totalKeluarNoRp']),0,',','.') ?></h6>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<table class="table table-bordered table-striped" id="tableku">
				<thead>
					<tr>
						<th width="10">No</th>
						<th>Tanggal</th>
						<th>Uraian</th>
						<th>Pemasukan</th>
						<th>Pengeluaran</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;; foreach ($rekap as $get): ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $get['tgl_kas_masjid']; ?></td>
							<td><?= $get['uraian_kas_masjid']; ?></td>
							<td>Rp.<?= $get['masukRp']; ?></td>
							<td>Rp.<?= $get['keluarRp']; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>	

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#tableku').DataTable();
	} );
</script>
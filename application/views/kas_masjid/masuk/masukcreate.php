<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="<?= base_url('kas_masjid/create_action') ?>" method="post">
				<div class="form-group">
		            <label for="tgl_kas_masjid">Tgl Kas Masjid</label>
		            <input required="" type="date" class="form-control" name="tgl_kas_masjid" id="tgl_kas_masjid" placeholder="Tgl Kas Masjid" value="" />
		        </div>
		        <div class="form-group">
		        	<label for="uraian">Uraian</label>
		        	<textarea required="" name="uraian" id="uraian" class="form-control" cols="10" rows="10"></textarea>
		        </div>
		        <div class="form-group">
		        	<label for="jumlah">Jumlah</label>
		        	<input required="" type="number" class="form-control" name="jumlah" id="jumlah">
		        </div>

		        <button class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>
<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Kegiatan Read</h2>
        <table class="table">
	    <tr><td>Id Kategori</td><td><?php echo $id_kategori; ?></td></tr>
	    <tr><td>Nama Kegiatan</td><td><?php echo $nama_kegiatan; ?></td></tr>
	    <tr><td>Waktu Kegiatan</td><td><?php echo $waktu_kegiatan; ?></td></tr>
	    <tr><td>Gambar Kegiatan</td><td><?php echo $gambar_kegiatan; ?></td></tr>
	    <tr><td>Keterangan Kegiatan</td><td><?php echo $keterangan_kegiatan; ?></td></tr>
	    <tr><td>Materi Kegiatan</td><td><?php echo $materi_kegiatan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kegiatan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>
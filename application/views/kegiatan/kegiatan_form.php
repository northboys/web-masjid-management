<div class="container">
    <div class="card">
        <div class="card-body">

            <h2 style="margin-top:0px">Kegiatan <?php echo $button ?></h2>
            <form enctype="multipart/form-data" action="<?php echo $action; ?>" method="post">
                <div class="form-group">
                    <label for="int">Kategori <?php echo form_error('id_kategori') ?></label>
                    <!-- <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" /> -->
                            <select name="id_kategori" id="id_kategori" class="form-control">
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach ($kategori as $get): ?>
                                    <?php if($get['id_kategori'] == $id_kategori) { ?>
                                        <option selected="" value="<?= $get['id_kategori'] ?>"><?= $get['nama_kategori'] ?></option>
                                    <?php } else { ?>
                                        <option value="<?= $get['id_kategori'] ?>"><?= $get['nama_kategori'] ?></option>
                                    <?php } ?>
                                <?php endforeach ?>
                            </select>
                </div>
                <div class="form-group">
                    <label for="varchar">Nama Kegiatan <?php echo form_error('nama_kegiatan') ?></label>
                    <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" placeholder="Nama Kegiatan" value="<?php echo $nama_kegiatan; ?>" />
                </div>
                <div class="form-group">
                    <label for="date">Waktu Kegiatan <?php echo form_error('waktu_kegiatan') ?></label>
                    <input type="date" class="form-control" name="waktu_kegiatan" id="waktu_kegiatan" placeholder="Waktu Kegiatan" value="<?php echo $waktu_kegiatan; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Gambar Kegiatan <?php echo form_error('gambar_kegiatan') ?></label>
                    <input type="file" class="form-control" name="gambar_kegiatan" id="gambar_kegiatan" placeholder="Gambar Kegiatan" value="<?php echo $gambar_kegiatan; ?>" />
                </div>


                <div class="form-group">
                    <label for="keterangan_kegiatan">Keterangan Kegiatan <?php echo form_error('keterangan_kegiatan') ?></label>
                    <textarea class="form-control" rows="3" name="keterangan_kegiatan" id="keterangan_kegiatan" placeholder="Keterangan Kegiatan"><?php echo $keterangan_kegiatan; ?></textarea>
                </div>
                
                <input type="hidden" name="id_kegiatan" value="<?php echo $id_kegiatan; ?>" /> 
                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                <a href="<?php echo site_url('kegiatan') ?>" class="btn btn-default">Cancel</a>
            </form>

        </div>
    </div>
</div>
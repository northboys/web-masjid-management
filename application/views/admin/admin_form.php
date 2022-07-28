<div class="container">
    <div class="card">
        <div class="card-body">
            
        <h2 style="margin-top:0px">Admin <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Nama Admin <?php echo form_error('nama_admin') ?></label>
            <input type="text" class="form-control" name="nama_admin" id="nama_admin" placeholder="Nama Admin" value="<?php echo $nama_admin; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Username Admin <?php echo form_error('username_admin') ?></label>
            <input type="text" class="form-control" name="username_admin" id="username_admin" placeholder="Username Admin" value="<?php echo $username_admin; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Password Admin <?php echo form_error('password_admin') ?></label>
            <input type="password" class="form-control" name="password_admin" id="password_admin" placeholder="Password Admin" value="<?php echo $password_admin; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Level Admin <?php echo form_error('level_admin') ?></label>
            <select name="level_admin" id="level_admin" class="form-control">
                <option value="1">Admin</option>
                <option value="2">Sekretaris</option>
                <option value="3">Bendahara</option>
            </select>
        </div>
        <input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('admin') ?>" class="btn btn-default">Cancel</a>
    </form>

        </div>
    </div>
</div>
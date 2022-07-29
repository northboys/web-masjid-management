<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="<?php echo $action; ?>" method="post">
             <div class="form-group">
                <label for="varchar">Nama User <?php echo form_error('nama_user') ?></label>
                <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User" value="<?php echo $nama_user; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Username <?php echo form_error('username') ?></label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Password <?php echo form_error('password') ?></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
            </div>
            <div class="form-group">
                <label for="int">Level <?php echo form_error('level') ?></label>
                <!-- <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" /> -->
                <select name="level" id="level" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
            <a href="<?php echo site_url('data_user') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>
</div>
</div>
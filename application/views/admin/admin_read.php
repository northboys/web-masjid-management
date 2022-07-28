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
        <h2 style="margin-top:0px">Admin Read</h2>
        <table class="table">
	    <tr><td>Nama Admin</td><td><?php echo $nama_admin; ?></td></tr>
	    <tr><td>Username Admin</td><td><?php echo $username_admin; ?></td></tr>
	    <tr><td>Password Admin</td><td><?php echo $password_admin; ?></td></tr>
	    <tr><td>Level Admin</td><td><?php echo $level_admin; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>
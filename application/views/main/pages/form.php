<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Menambahkan Data Baru</title>
	<link href="<?php echo base_url('./style/css/home.css'); ?>" rel="stylesheet">
	
</head>
<body>
    <main>
        <div class="container">
            <h2>Menambahkan Data Baru</h2>
            <?php if ($this->session->flashdata('success')): ?>
            <div>
                <?php echo $this->session->flashdata('success');?>
            </div>
            <?php endif; ?>
            <div>
                <form method="post" action="<?php echo site_url('phonebook/addnew'); ?>">
                    <div class="label">
						<label>Nama : </label><input class="<?php echo form_error('nama') ? 'is-invalid':''; ?>"
								 type="text" name="nama" placeholder="Nama Lengkap" maxlength="50"/>
                        <div>
                            <?php echo form_error('nama'); ?>
                        </div>
					</div>
					<div class="label">
						<label>No. HP : </label><input class="<?php echo form_error('noTelp') ? 'is-invalid':'' ?>"
								 type="number" name="noTelp" placeholder="No. Telp"/>
                        <div>
                            <?php echo form_error('noTelp'); ?>
                        </div>
					</div>
					
					<input class="Submit" type="submit" name="submit" value="Add">
                </form>
                <div>
                    <a href="<?php echo site_url('phonebook');?>" style="color: black;"><br>Kembali</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
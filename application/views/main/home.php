<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="<?php echo base_url('./style/css/home.css'); ?>" rel="stylesheet">
	
</head>
<body>
	<main>
		<div class="container">
			<h2>Buku Telepon</h2>
			<button type="button"><a href="<?php echo site_url('phonebook/addnew'); ?>" style="<?php echo base_url('./style/css/home.css'); ?>">+ Tambah</a></button>
			<!-- <div class="card-header">
				<a href="ok/addnew') ?>"><i class="fas fa-plus"></i> Add New</a>
			</div> -->
			<div class="data">
				<h4>List No. Telp</h4>
				<table>
					<thead>
						<tr>
							<th>No. </th>
							<th>Nama</th>
							<th>No. Telp</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
							foreach($list as $phones):
						?>
						<tr>
							<td>
								<?php echo $i++;?>
							</td>
							<td>
								<?php echo $phones->name;?>
							</td>
							<td>
								<?php echo $phones->no_phone;?>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</main>
</body>
</html>

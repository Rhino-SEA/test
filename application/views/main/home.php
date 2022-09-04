<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style type="text/css">
		.container {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			padding: 20px;
			margin-top: 20px;
		}

		h2, .isi {
			padding-bottom: 5px;
			border-bottom: 2px solid black;
		}

		form {
			display: flex;
		}

		form label {
			/* padding: 5px; */
			box-sizing: border-box;
		}
		form .label {
			flex: 1;
		}

		input[type=submit] {
			width: 75px;  
			height: 23px;
			text-align: center;

		}

		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}
		
		.data h4 {
			margin-bottom: 3px;
		}

		table {
			width: 100%;
			margin: 0 auto 0 auto;
			overflow: scroll;
			overflow-x: hidden;
		}

		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}

		th {
			background-color: #007acc;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #d2d2d2;
		}

		th:nth-child(1) {
			width: 5%;
			text-align: center;
		}

		td:nth-child(1) {
			text-align: center;
		}

		th:nth-child(2) {
			width: 47.5%;
		}
	</style>
	
</head>
<body>
	<main>
		<div class="container">
			<h2>Buku Telepon</h2>
			<div class="isi">
				<h4>Menambahkan Data</h4>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<div class="label">
						<label>Nama : </label><input type="string" name="nama">
					</div>
					<div class="label">
						<label>No. HP : </label><input type="number" name="noTelp">
					</div>
					
					<input class="Submit" type="submit" name="submit" value="Add">
                    
                </form>
				<?php
					$data = array (
						array("Fadil", "08356234"),
						array("Adit", "082346234")
					);
					if(isset($_POST['submit'])) {
						$nama = ucwords($_POST['nama']);
						$noHP = $_POST['noTelp'];
						$data[] = array($nama, $noHP);
					}
					//sorting data berdasarkan Abjad Nama
					array_multisort(array_column($data, 0), SORT_ASC, $data);
				?>
			</div>
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
							//check apakah $data kosong atau tidak
							if(!$data) {
								echo "<p style='color: red'>Belum ada data sama sekali</p>";
							}
							else {
								//Menampilkan data yang ada di $data
								for($i = 0; $i < count($data); $i++) {
									echo "<tr>";
									echo "<td>";
									echo $i+1;
									echo "</td>";
									for($j = 0; $j < 2; $j++) {
										echo "<td>";
										echo $data[$i][$j];
										echo "</td>";
									}
									echo "</tr>";
								}
							}
						?>
						<!-- <tr>
							<td>1.1</td>
							<td>1.2</td>
							<td>1.3</td>
						</tr>
						<tr>
							<td>2.1</td>
							<td>2.2</td>
							<td>2.3</td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</div>
	</main>
</body>
</html>

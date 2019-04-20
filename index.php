<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Validation</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Membuat Form Validation dengan php</h1>
	<?php 
		if (isset($_GET['nama'])) {
			if ($_GET['nama'] == "kosong") {
				echo "<h4 style='color: red'>Nama belum di masukan</h4>";
			}
		}
	?>
	<h4>Masukan nama anda</h4>
	<form action="cek.php" method="post">
		<table>
			<tbody>
				<tr>
					<td>Nama</td>
					<td>
						<input type="text" name="nama">
					</td>
					<td>
						<input type="submit" value="Cek">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
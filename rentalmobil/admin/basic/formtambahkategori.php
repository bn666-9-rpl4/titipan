<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="prosestambahkategori.php" method="post">
		<table cellpadding="3" cellspacing="0">

			<tr>
				<td>Nama kategori</td>
				<td>:</td>
				<td><input type="text" name="nama_kategori" size="30" required></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
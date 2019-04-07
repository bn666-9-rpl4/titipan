<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<form action="proseseditkategori.php" method="post">
	<?php
	include('config.php');
	$id_kategori = $_GET['id'];
		$query = mysql_query("SELECT * FROM kategori WHERE id_kategori='$id_kategori'") or die(mysql_error());
		$data = mysql_fetch_assoc($query);
		?>
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>nama kategori</td>
				<td>:</td>
				<td>
				<input type="hidden" name="id_kategori" size="30" value="<?php echo $data['id_kategori']; ?>">	
				<input type="text" name="nama_kategori" size="30" value="<?php echo $data['nama_kategori']; ?>" required></td> 
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
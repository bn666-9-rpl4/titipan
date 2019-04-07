<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="prosestambahguru.php" method="post" enctype="multipart/form-data">
		<table cellpadding="3" cellspacing="0">

			<tr>
				<td>Nip</td>
				<td>:</td>
				<td><input type="text" name="nip" size="30" required></td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<select name="jk" required>
						<option value="">Pilih Jenis kelamin</option>
						<option value="Laki-laki">Laki laki</option>
						<option value="Perempuan">Perempuan</option>
					
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="Alamat" size="30" required></td>
			</tr>
			<tr>
				<td>Mata Pelajaran</td>
				<td>:</td>
				<td><input type="text" name="mata_pelajaran" size="30" required></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="foto" size="30" required></td>
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
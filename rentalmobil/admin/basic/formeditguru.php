<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="proseseditguru.php" method="post" enctype="multipart/form-data">
	<?php
	include('config.php');
	$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM guru WHERE id='$id'") or die(mysql_error());
		$data = mysql_fetch_assoc($query);
		?>
		<table cellpadding="3" cellspacing="0">
<input type="hidden" name="id" size="30" value="<?php echo $data['id']; ?>" >
			<tr>
				<td>Nip</td>
				<td>:</td>
				<td><input type="text" name="nip" size="30" value="<?php echo $data['nip']; ?>" required></td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<select name="jk" required>
						<option  value="">Pilih Jenis kelamin</option>
						<option <?php if($data['jenis_kelamin'] == 'Laki-laki'){echo "selected=''";} ?> value="Laki-laki">Laki laki</option>
						<option <?php if($data['jenis_kelamin'] == 'Perempuan'){echo "selected=''";} ?> value="Perempuan">Perempuan</option>
					
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="Alamat" size="30" value="<?php echo $data['Alamat']; ?>" required></td>
			</tr>
			<tr>
				<td>Mata Pelajaran</td>
				<td>:</td>
				<td><input type="text" name="mata_pelajaran" size="30" value="<?php echo $data['mata_pelajaran']; ?>" required></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><?php echo'<img src="images/'.$data['gambar'].'">'?><br><input type="file" name="foto" size="30"  ><td>
				
				
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="edit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
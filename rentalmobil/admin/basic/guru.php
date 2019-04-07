<!DOCTYPE html>
<html>
<head>
	<title>guru</title>
</head>
<body>
	<h2>Guru</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="formtambahguru.php">Tambah Data</a></p>
	
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
		<th>No</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>jenis kelamin</th>

			<th>Alamat</th>
			<th>mata pelajaran</th>
			<th>Foto</th>
			<th>actions</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('config.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM guru ORDER BY id DESC") or die(mysql_error());
		
		if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				
				
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					
					echo '<td>'.$data['nip'].'</td>';	
					echo '<td>'.$data['nama'].'</td>';
					echo '<td>'.$data['jenis_kelamin'].'</td>';
					echo '<td>'.$data['Alamat'].'</td>';
					echo '<td>'.$data['mata_pelajaran'].'</td>';
					echo '<td><img src="images/'.$data['gambar'].'"></td>';
				
					echo '<td><a href="formeditguru.php?id='.$data['id'].'">Edit</a> / <a href="proseshapusguru.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
				echo '</tr>';
				
				$no++;
				
			}
			
		}
		?>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
</head>
<body>
	<h2>Kategori</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="formtambahkategori.php">Tambah Data</a></p>
	
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
		<th>No</th>
		<th>Id kategori</th>
			<th>Nama kategori</th>
			<th>Actions</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('config.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM kategori ORDER BY id_kategori DESC") or die(mysql_error());
		
		if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){	
				
				
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['id_kategori'].'</td>';
					echo '<td>'.$data['nama_kategori'].'</td>';	
					echo '<td><a href="formeditkategori.php?id='.$data['id_kategori'].'">Edit</a> / <a href="proseshapuskategori.php?id='.$data['id_kategori'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
				echo '</tr>';
				
				$no++;
				
			}
			
		}
		?>
	</table>
</body>
</html>
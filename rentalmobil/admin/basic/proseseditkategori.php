<?php

if(isset($_POST['simpan'])){
	include('config.php');
	$id_kategori			= $_POST['id_kategori'];	
	$nama_kategori			= $_POST['nama_kategori'];	
	$update = mysql_query("UPDATE kategori SET nama_kategori='$nama_kategori'WHERE id_kategori='$id_kategori'") or die(mysql_error());
	
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="kategori.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="kategori.php">Kembali</a>';	
	}
 
}else{	
	
	echo '<script>window.history.back()</script>';
 
}
?>
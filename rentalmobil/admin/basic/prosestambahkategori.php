<?php
if(isset($_POST['tambah'])){
	
	
	include('config.php');
	
	
	
	$nama_kategori		= $_POST['nama_kategori'];	

	$input = mysql_query("INSERT INTO kategori VALUES(NULL, '$nama_kategori')") or die(mysql_error());
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="kategori.php">Kembali</a>';
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="kategori.php">Kembali</a>';	
		
	}
 
}else{	
 

	echo '<script>window.history.back()</script>';
 
}
?>
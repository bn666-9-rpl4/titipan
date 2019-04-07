<?php

if(isset($_GET['id'])){
	
	
	include('config.php');
	
	
	$id_kategori = $_GET['id'];
	
	
	$cek = mysql_query("SELECT id_kategori FROM kategori WHERE id_kategori='$id_kategori'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM kategori WHERE id_kategori='$id_kategori'");
		
		if($del){
			
			echo 'Data kategori berhasil di hapus! ';		
			echo '<a href="kategori.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="kategori.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
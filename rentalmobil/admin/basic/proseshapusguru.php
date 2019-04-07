<?php

if(isset($_GET['id'])){
	
	
	include('config.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT id FROM guru WHERE id='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM guru WHERE id='$id'");
		
		if($del){
			
			echo 'Data guru berhasil di hapus! ';		
			echo '<a href="guru.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="guru.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
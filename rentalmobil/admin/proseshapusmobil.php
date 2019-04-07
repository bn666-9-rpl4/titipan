<?php

if(isset($_GET['id'])){
	
	
	include('../koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT id_mobil FROM tb_mobil WHERE id_mobil='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM tb_mobil WHERE id_mobil='$id'");
		
		if($del){
			
			header("location: mobil.php"); 	
			
		}else{
			
			header("location: mobil.php"); 	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
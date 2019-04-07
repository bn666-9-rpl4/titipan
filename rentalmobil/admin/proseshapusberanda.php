<?php

if(isset($_GET['id'])){
	
	
	include('../koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT id_beranda FROM tb_beranda WHERE id_beranda='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM tb_beranda WHERE id_beranda='$id'");
		
		if($del){
			
			header("location: beranda.php"); 	
			
		}else{
			
			header("location: beranda.php"); 	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
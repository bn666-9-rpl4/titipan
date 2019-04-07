<?php

if(isset($_GET['id'])){
	
	
	include('../koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT id_pemesanan FROM tb_pemesanan WHERE id_pemesanan='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM tb_pemesanan WHERE id_pemesanan='$id'");
		
		if($del){
			
			header("location: daftarpesan.php"); 	
			
		}else{
			
			header("location: daftarpesan.php"); 	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
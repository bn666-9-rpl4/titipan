<?php

if(isset($_GET['id'])){
	
	
	include('../koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT id_supir FROM tb_supir WHERE id_supir='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM tb_supir WHERE id_supir='$id'");
		
		if($del){
			
			header("location: supir.php"); 	
			
		}else{
			
			header("location: supir.php"); 	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
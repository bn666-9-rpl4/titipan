<?php
if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
  $id 		= $_POST['id'];
  $plat_nomor 		= $_POST['plat_nomor'];
  $merek_mobil    = $_POST['merek_mobil']; 

  $jenis_mobil   = $_POST['jenis_mobil'];
  $kecepatan   = $_POST['kecepatan'];
  $kapasitas   = $_POST['kapasitas'];
  $bensin    = $_POST['bensin'];
  $warna    = $_POST['warna'];
  $harga   = $_POST['harga'];
  $gambar = $_FILES['gambar']['name'];
	
	if(!empty($gambar)){
		$tmp = $_FILES['gambar']['tmp_name']; 
		$ext = pathinfo($gambar, PATHINFO_EXTENSION); 
		$gambarbaru = date('dmYHis').$gambar;
		$path = "../images/".$gambarbaru;


		if(move_uploaded_file($tmp, $path)){ 
		 $query = "UPDATE tb_mobil SET plat_nomor='$plat_nomor', merek_mobil='$merek_mobil', jenis_mobil='$jenis_mobil', kecepatan='$kecepatan', kapasitas='$kapasitas', bensin='$bensin', warna='$warna', harga='$harga', gambar='$gambarbaru' WHERE id_mobil='$id'";
		  $sql = mysql_query($query) OR die(mysql_error()); 

		  if($sql){ 

		   ?>
  	<script type="text/javascript">
  		alert("edit data sukses");
  		window.location = "mobil.php";
  	</script>
  	<?php 
		  }else{

		   ?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat edit data");
  		 window.location = "mobil.php";
  	</script>
  	<?php 
		  }
		}else{

		  ?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat edit gambar");
  		 window.location = "mobil.php";
  	</script>
  	<?php 
		}
	}else{
		$query = "UPDATE tb_mobil SET plat_nomor='$plat_nomor', merek_mobil='$merek_mobil', jenis_mobil='$jenis_mobil', kecepatan='$kecepatan', kapasitas='$kapasitas', bensin='$bensin', warna='$warna', harga='$harga' WHERE id_mobil='$id'";
		  $sql = mysql_query($query) OR die(mysql_error());  


		  if($sql){ 
		    
		   
		   ?>
  	<script type="text/javascript">
  		alert("edit data sukses");
  		window.location = "mobil.php";
  	</script>
  	<?php 
		  }else{

		   ?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat menyimpan data ke database");
  		 window.location = "mobil.php";
  	</script>
  	<?php 
		  }
	}

}

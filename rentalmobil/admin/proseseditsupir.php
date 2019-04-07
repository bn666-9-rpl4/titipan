<?php
if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
  $id 		= $_POST['id_supir'];
  $nama    = $_POST['nama']; 
  $alamat    = $_POST['alamat'];
  $jeniskelamin   = $_POST['jeniskelamin'];
  $nosim   = $_POST['no_sim'];
  $nohp   = $_POST['nohp'];
  $umur    = $_POST['umur'];
  $hargasewa    = $_POST['hargasewa'];
  $status   = 'tersedia';
  $gambar = $_FILES['gambar']['name'];
	
	if(!empty($gambar)){
		$tmp = $_FILES['gambar']['tmp_name']; 
		$ext = pathinfo($gambar, PATHINFO_EXTENSION); 
		$gambarbaru = date('dmYHis').$gambar;
		$path = "../images/".$gambarbaru;


		if(move_uploaded_file($tmp, $path)){ 
		 $query = "UPDATE tb_supir SET nama='$nama', alamat='$alamat', jeniskelamin='$jeniskelamin', no_sim='$nosim', nohp='$nohp', umur='$umur', hargasewa='$hargasewa', status='$status', gambar='$gambarbaru' WHERE id_supir='$id'";
		  $sql = mysql_query($query) OR die(mysql_error()); 

		  if($sql){ 

		   ?>
  	<script type="text/javascript">
  		alert("edit data sukses");
  		window.location = "supir.php";
  	</script>
  	<?php 
		  }else{

		   ?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat edit data");
  		window.location = "supir.php";
  	</script>
  	<?php 
		  }
		}else{

		  ?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat edit gambar");
  		window.location = "supir.php";
  	</script>
  	<?php 
		}
	}else{
		$query = "UPDATE tb_supir SET nama='$nama', alamat='$alamat', jeniskelamin='$jeniskelamin', no_sim='$nosim', nohp='$nohp', umur='$umur', hargasewa='$hargasewa', status='$status' WHERE id_supir='$id'";
		  $sql = mysql_query($query) OR die(mysql_error());  


		  if($sql){ 
		    
		   
		   ?>
  	<script type="text/javascript">
  		alert("edit data sukses");
  		window.location = "supir.php";
  	</script>
  	<?php 
		  }else{

		   ?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat menyimpan data ke database");
  		window.location = "supir.php";
  	</script>
  	<?php 
		  }
	}

}
?>
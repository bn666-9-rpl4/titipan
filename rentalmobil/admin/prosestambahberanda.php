<?php
if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
	
	$judul		= $_POST['judul'];
	$kategori		= $_POST['kategori'];
	$isi		= $_POST['isi'];
	$gambar = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name']; 
	$ext = pathinfo($gambar, PATHINFO_EXTENSION); 
	

	$gambarbaru = date('dmYHis').$gambar;
	$path = "../images/'".$gambarbaru;
if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO tb_beranda VALUES('','".$kategori."', '".$judul."', '".$isi."', '".$gambarbaru."')";
  $sql = mysql_query($query) OR die(mysql_error()); 

  if($sql){ 
  	
  	?>
  	<script type="text/javascript">
  		alert("Tambah data sukses");
  		window.location = "beranda.php";
  	</script>
  	<?php 
 	
  }else{
  	 	?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat menambahkan data");
  		window.location = "tambahberanda.php";
  	</script>
  	<?php 

  }
}else{
	?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat menambahkan gambar");
  		window.location = "tambahberanda.php";
  	</script>
  	<?php 
}
}
?>
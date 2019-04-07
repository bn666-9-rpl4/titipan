<?php
if(isset($_POST['tambah'])){
	
	
	include('../koneksi.php');
	
	$id 		= $_POST['id_beranda'];
	$judul		= $_POST['judul'];
	$kategori	= $_POST['kategori'];
	$isi		= $_POST['isi'];
	$gambar 	= $_FILES['gambar']['name'];
	
	if(!empty($gambar)){
		$tmp 				= $_FILES['gambar']['tmp_name']; 
		$ext = pathinfo($gambar, PATHINFO_EXTENSION); 
			
		$gambarbaru = date('dmYHis').$gambar;
		$path = "../images/".$gambarbaru;


		if(move_uploaded_file($tmp, $path)){ 
			$query = "UPDATE tb_beranda SET judul='$judul' , kategori='$kategori', isi='$isi' , gambar='$gambarbaru' WHERE id_beranda='$id'";
			$sql = mysql_query($query) OR die(mysql_error()); 

			if($sql){ 

				?>
				<script type="text/javascript">
					alert("edit data sukses");
  		window.location = "beranda.php";
  	</script>
  	<?php 
  }else{

  	?>
  	<script type="text/javascript">
  		alert("Terjadi kesalahan saat edit data");
  		window.location = "beranda.php";
  	</script>
  	<?php 
  }
}else{

	?>
	<script type="text/javascript">
		alert("Terjadi kesalahan saat edit gambar");
		window.location = "beranda.php";
	</script>
	<?php 
}
}else{

	$query = "UPDATE tb_beranda SET judul='$judul' , kategori='$kategori', isi='$isi' WHERE id_beranda='$id'";
	$sql = mysql_query($query) OR die(mysql_error());  

	if($sql){ 


		?>
		<script type="text/javascript">
			alert("edit data sukses");
			window.location = "beranda.php";
		</script>
		<?php 
	}else{

		?>
		<script type="text/javascript">
			alert("Terjadi kesalahan saat menyimpan data ke database");
			window.location = "beranda.php";
		</script>
		<?php 
	}
}

}
?>
<?php
if(isset($_POST['tambah'])){
	
	
	include('config.php');
	
	
	$nip		= $_POST['nip'];
	$nama		= $_POST['nama'];
	$jenis_kelamin		= $_POST['jk'];
	$alamat		= $_POST['Alamat'];
	$mata_pelajaran		= $_POST['mata_pelajaran'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name']; 
	$ext = $_FILES['foto']['ext']; 
	$fotobaru = date('dmYHis').$foto.$ext;
	$path = "images/".$fotobaru;
if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO guru VALUES('','".$nip."', '".$nama."', '".$jenis_kelamin."', '".$alamat."', '".$mata_pelajaran."', '".$fotobaru."')";
  $sql = mysql_query($query) OR die(mysql_error()); 

  if($sql){ 
    
    header("location: guru.php"); 
  }else{

    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{

  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
}
?>
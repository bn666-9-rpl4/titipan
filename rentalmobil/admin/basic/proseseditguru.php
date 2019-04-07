<?php
if(isset($_POST['tambah'])){
	
	
	include('config.php');
	
	$id = $_POST['id'];
	$nip				= $_POST['nip'];
	$nama				= $_POST['nama'];
	$jenis_kelamin		= $_POST['jk'];
	$alamat				= $_POST['Alamat'];
	$mata_pelajaran		= $_POST['mata_pelajaran'];
	$foto 				= $_FILES['foto']['name'];
	
	if(!empty($foto)){
		$tmp 				= $_FILES['foto']['tmp_name']; 
		$ext				 = $_FILES['foto']['ext']; 
		$fotobaru = date('dmYHis').$foto.$ext;
		$path = "images/".$fotobaru;


		if(move_uploaded_file($tmp, $path)){ 
		 $query = "UPDATE guru SET nip='$nip' , nama='$nama', jenis_kelamin='$jenis_kelamin' , alamat='$alamat ', nip='$mata_pelajaran' , foto='$fotobaru' WHERE id='$id'";
		  $sql = mysql_query($query) OR die(mysql_error()); 

		  if($sql){ 
		    
		    header("location: guru.php"); 
		  }else{

		    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		    echo "<br><a href='guru.php'>Kembali Ke Form</a>";
		  }
		}else{

		  echo "Maaf, Gambar gagal untuk diupload.";
		  echo "<br><a href='guru.php'>Kembali Ke Form</a>";
		}
	}else{
		
		 $query = "UPDATE guru SET nip='$nip' , nama='$nama', jenis_kelamin='$jenis_kelamin' , Alamat='$alamat ', mata_pelajaran='$mata_pelajaran' WHERE id='$id'";
		  $sql = mysql_query($query) OR die(mysql_error()); 

		  if($sql){ 
		    
		    header("location: guru.php"); 
		  }else{

		    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		    echo "<br><a href='guru.php'>Kembali Ke Form</a>";
		  }
	}

}
?>
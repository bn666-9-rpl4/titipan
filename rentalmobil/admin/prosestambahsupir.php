<?php
if(isset($_POST['tambah'])){
  
  
  include('../koneksi.php');
  $nama    = $_POST['nama']; 
  $alamat    = $_POST['alamat'];
  $jeniskelamin   = $_POST['jeniskelamin'];
  $nosim   = $_POST['no_sim'];
  $nohp   = $_POST['nohp'];
  $umur    = $_POST['umur'];
  $hargasewa    = $_POST['hargasewa'];
  $status   = 'tersedia';
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name']; 
  $ext = pathinfo($gambar, PATHINFO_EXTENSION); 
  
  $gambarrbaru = date('dmYHis').$gambar.$ext;
  $path = "../images/".$gambar;
if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO tb_supir VALUES('','".$nama."','".$alamat."', '".$jeniskelamin."','".$nosim."', '".$nohp."','".$umur."', '".$hargasewa."', '".$status."','".$gambar."')";
  $sql = mysql_query($query) OR die(mysql_error()); 

  if($sql){ 
    
    ?>
    <script type="text/javascript">
      alert("Tambah data sukses");
      window.location = "supir.php";
    </script>
    <?php 
  
  }else{
      ?>
    <script type="text/javascript">
      alert("Terjadi kesalahan saat menambahkan data");
      window.location = "tambahsupir.php";
    </script>
    <?php 

  }
}else{
  ?>
    <script type="text/javascript">
      alert("Terjadi kesalahan saat menambahkan gambar");
      // window.location = "tambahsupir.php";
    </script>
    <?php 

   
   
}
}
?>

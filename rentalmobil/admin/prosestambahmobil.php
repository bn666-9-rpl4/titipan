<?php
if(isset($_POST['tambah'])){
  
  
  include('../koneksi.php');
  $plat_nomor    = $_POST['plat_nomor']; 
  $merek_mobil    = $_POST['merek_mobil'];
  $tanggal    = date("d-m-Y");
  $jenis_mobil   = $_POST['jenis_mobil'];
  $kecepatan   = $_POST['kecepatan'];
  $kapasitas   = $_POST['kapasitas'];
  $bensin    = $_POST['bensin'];
  $warna    = $_POST['warna'];
  $harga   = $_POST['harga'];
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name']; 
  $ext = pathinfo($foto, PATHINFO_EXTENSION); 
  
  $fotobaru = date('dmYHis').$foto.$ext;
  $path = "../images/".$fotobaru;
if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO tb_mobil VALUES('','".$plat_nomor."','".$merek_mobil."', '".$tanggal."','".$jenis_mobil."', '".$kecepatan."','".$kapasitas."', '".$bensin."', '".$warna."', '".$harga."', '".$fotobaru."', 'Tersedia')";
  $sql = mysql_query($query) OR die(mysql_error()); 

  if($sql){ 
    
    ?>
    <script type="text/javascript">
      alert("Tambah data sukses");
      window.location = "mobil.php";
    </script>
    <?php 
  
  }else{
      ?>
    <script type="text/javascript">
      alert("Terjadi kesalahan saat menambahkan data");
      window.location = "tambahmobil.php";
    </script>
    <?php 

  }
}else{
  ?>
    <script type="text/javascript">
      alert("Terjadi kesalahan saat menambahkan gambar");
      window.location = "tambahmobil.php";
    </script>
    <?php 

   
   
}
}
?>

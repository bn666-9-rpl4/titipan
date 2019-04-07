<?php
  
  
  include('../koneksi.php');
  
  
  $id_mobil    = $_POST['id_mobil'];
  $id_user    = $_POST['id_user'];
  $tgl_sekarang    =  date('Y-m-d');
  $tgl_pinjam    =  date('Y-m-d',strtotime($_POST['tgl_pinjam']));
  $tgl_kembali    =  date('Y-m-d',strtotime($_POST['tgl_kembali']));
  $lama    =  $_POST['lama'];
  $total    = $_POST['total'];
 


  $query = "UPDATE tb_mobil SET status='Disewa' WHERE id_mobil='${id_mobil}'";
  $sql = mysql_query($query) OR die(mysql_error());

  $query = "INSERT INTO tb_pemesanan VALUES('$tgl_sekarang', NULL, '$id_mobil', '$id_user', '$tgl_pinjam', '$tgl_kembali', '$lama', '$total', '')";
  $sql = mysql_query($query) OR die(mysql_error());

if ($query) {
echo "<script>alert('Selamat data berhasil di simpan'); window.location = '../pemesanan/pemesananmobil.php'</script>";	
} else {
echo "<script>alert('Data gagal di simpan'); window.location ='../pemesanan/pesan.php'</script>";	
}

?>

<?php
  
  
  include('../koneksi.php');
  
  
  $id_mobil    = $_POST['id_mobil'];
  $id_user    = $_POST['id_user'];
  $tgl_sekarang    =  date('Y-m-d');
  $tgl_pinjam    =  date('Y-m-d',strtotime($_POST['tgl_pinjam']));
  $tgl_kembali    =  date('Y-m-d',strtotime($_POST['tgl_kembali']));
    
  $query = "INSERT INTO tb_penyewaan VALUES('$tgl_sekarang', NULL, '$id_mobil', '$id_user', '$tgl_pinjam', '$tgl_kembali')";
  $sql = mysql_query($query) OR die(mysql_error());

?>

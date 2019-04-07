<?php
	include('../koneksi.php');
  mysql_query('UPDATE tb_pemesanan SET status="kembali" WHERE id_pemesanan = "'.$_POST['id_pemesanan'].'"') OR die(mysql_error());
  mysql_query("INSERT INTO tb_pengembalian VALUES (NULL, '".$_POST['id_pemesanan']."', '".$_POST['denda']."', '".$_POST['kondisi']."')") OR die(mysql_error());
  mysql_query("UPDATE tb_mobil SET status='Tersedia' WHERE id_mobil='".$_POST['id_mobil']."'") OR die(mysql_error());
 header('location:pengembalian.php'); 
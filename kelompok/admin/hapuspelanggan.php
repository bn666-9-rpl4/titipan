<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM pelanggan WHERE id = '$id'")or die(mysql_error());

header("location:tabelpelanggan.php");
?>
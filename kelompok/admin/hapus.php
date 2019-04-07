<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM mobil WHERE id = '$id'")or die(mysql_error());

header("location:macam.php");
?>
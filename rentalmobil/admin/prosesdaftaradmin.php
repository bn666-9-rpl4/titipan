<?php
include "../koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("insert into tb_user values(NULL,'$username','$password')");

?>
<div align="center"> 
  <h2>Anda berhasil daftar..</h2> 
  <a href="../admin/login.php"> Login </a>
</div>
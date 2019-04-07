<?php
session_start();
$_SESSION['id_admin']=null ;
$_SESSION['username']=null ;
?>
<script>alert("Anda berhasil logout");window.location ="../admin/index.php";</script>
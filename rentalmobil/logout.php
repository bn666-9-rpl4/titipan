<?php
session_start();
$_SESSION['id_user']=null ;
$_SESSION['user_name']=null ;
?>
<script>alert("Anda berhasil logout");window.location ="index.php";</script>
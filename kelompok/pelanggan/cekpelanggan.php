<?php
  session_start();
  if(!isset($_SESSION['pelanggansudahlogin'])){
    header('location:../login.php');
  } else {
    $username = $_SESSION['usernamepelanggan'];
  }
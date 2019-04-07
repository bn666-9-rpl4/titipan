<?php
  session_start();
  if(!isset($_SESSION['adminsudahlogin'])){
    header('location:../login.php');
  } else {
    $username = $_SESSION['usernameadmin'];
  }
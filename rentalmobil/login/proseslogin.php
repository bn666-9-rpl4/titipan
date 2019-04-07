<?php 

   session_start(); 
   require_once("../koneksi.php"); 
   $username = $_POST['username']; 
   $pass = $_POST['password']; 
   $cekuser = mysql_query("SELECT * FROM tb_user WHERE username = '$username'", $koneksi) or die(mysql_error()); 
   $hasil = mysql_fetch_array($cekuser); 
   if(mysql_num_rows($cekuser) == 0) { 
     echo "<div align='center'>Username Belum Terdaftar! <a 
href='../login/loginuser.php'>Kembali</a></div>"; 
   } else { 
     if($pass <> $hasil['password']) { 
       echo "<div align='center'>Password salah! <a 
href='../login/loginuser.php'>Kembali</a></div>"; 
     } else { 
       $_SESSION['id_user'] = $hasil['id_user']; 
       $_SESSION['user_name'] = $hasil['username']; 
       header('location:../index.php'); 
     } 
   } 
?> 
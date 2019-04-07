<?php 

   session_start(); 
   require_once("../koneksi.php"); 
   $username = $_POST['username']; 
   $password = $_POST['password']; 
   $cekuser = mysql_query("SELECT * FROM tb_admin WHERE username = '$username'", $koneksi) or die(mysql_error()); 
   $hasil = mysql_fetch_array($cekuser); 
   if(mysql_num_rows($cekuser) == 0) { 
     echo "<div align='center'>Username Belum Terdaftar! <a 
href='../admin/login.php'>Kembali</a></div>"; 
   } else { 
     if($password <> $hasil['password']) { 
       echo "<div align='center'>Password salah! <a 
href='../admin/login.php'>Kembali</a></div>"; 
     } else { 
       $_SESSION['id_admin'] = $hasil['id_admin']; 
       $_SESSION['user_name'] = $hasil['username']; 
       header('location:../admin/index.php'); 
     } 
   } 
?> 
<?php
include "../koneksi.php";
?>
<html>
<head>
<title>DAFTAR</title>
  
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../material-design-icons/material-icons.css"  media="screen,projection"/>


	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head> 
<body>


  <nav class="nav-extended panel teal lighten-2">
    <div class="nav-wrapper">
      <a href="../index.php" class="brand-logo"><b>RENTAL MOBIL.COM</b></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="daftarlogin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
        <li><a href="loginuser.php"><i class="material-icons left">verified_user</i>LOGIN</a></li>
      </ul>
</li>
</nav>
	<header id="head" class="secondary">
            <div class="container">
                    <h3><center>DAFTAR</center></h3>
                </div>
    </header>
<form action="hasilinputdaftar.php" method="post">
	
	   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" id="KTP" class="form-control" name="no_ktp" required>      
   <label for="KTP">No KTP</label>   
   </div>

   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" id="nama" class="form-control" name="nama" required>      
   <label for="nama">Nama Lengkap</label>   
   </div>

<div class="row">      
<div class="input-field col s12 m6 l6 xl6">
    <select id="jeniskelamin" name="jeniskelamin">
      <option value="" disabled selected>Jenis Kelamin</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
     </select>
    <label for="jeniskelamin">Jenis Kelamin</label>
  </div>

   <!--<div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="jeniskelamin" required>      
   <label for="exampleInputEmail1">Jenis Kelamin</label>   
   </div>-->


   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" id="alamat" class="form-control" name="alamat" required>      
   <label for="alamat">Alamat</label>   
   </div>

   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" id="nohp" class="form-control" name="nohp" required>      
   <label for="nohp">No HP</label>   
   </div>

   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" id="username" class="form-control" name="username" required>      
   <label for="username">Username</label>   
   </div>


   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="password" id="pw" class="form-control" name="password" required>      
   <label for="pw">Password</label>   
   </div>	
</div>	

<center>
					  <button value="login" class="btn waves-effect waves-light blue" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
			 
  			  <button class="btn waves-effect waves-light red" type="reset" name="action">Batal
    <i class="material-icons right">delete</i>
  </button
?>
</center>
  <script>
     $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</body>
</html>


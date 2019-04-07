<!DOCTYPE html>
<html>
<head>
	<title>Membuat Akun</title>
    <link href="material-design-icons/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
<!-- Navbar -->
 <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper light-blue">
      <ul>
         <li><a href="login.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Untuk Penyewa"><i class="material-icons white-text left">account_circle</i>LOGIN</a></li>
      </ul>
      <a href="index.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="macam.php">Macam Mobil</a></li>  
      </ul>
    </div>
  </nav>
   </div>
<!--  FORM PENDAFTARAN  -->
<div class="container">
    <form action="prosesregister.php" method="post">
        <h4 class="center-align">Register Member</h4><hr color="#e53935"><br />
  <div class="row">
    <div class="input-field col s12 m6 l6 xl6">
        <input id="nik" type="text" class="validate" name="nik">
        <label for="nik">NIK</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <input id="namalengkap" type="text" class="validate" name="namalengkap">
        <label for="namalengkap">Nama Lengkap</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <select name="jk">
          <option>Laki-Laki</option>
          <option>Perempuan</option>
        </select>
        <label>Jenis Kelamin</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <input id="usia" type="number" class="validate" name="usia">
          <label for="usia">Usia Pelanggan</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <input id="nohp" type="number" class="validate" name="nohp">
          <label for="nohp">Nomor Handphone</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="email" type="email" class="validate" name="email">
          <label for="email" data-error="wrong" data-success="right">Email</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <input id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
    </div>
    <div class="input-field col s12 m12 l12 xl12">
        <textarea id="alamat" class="materialize-textarea" name="alamat"></textarea>
          <label for="alamat">Alamat</label>
    </div>
  <br>
  <div class="center-align">
    <button class="waves-effect waves-light btn blue darken-1" type="submit" name="kirim">Kirim</button>
    <button class="btn red" type="reset">Batal</button>
  </div>
</form>
&nbsp;

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
      $('select').material_select();
  });
</script>
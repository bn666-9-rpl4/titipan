<?php 
      require 'cekpelanggan.php';
   ?>
<html>
<head>
<title>
	RENTAL MOBIL
</title>
</head>
    <link href="../material-design-icons/material-icons.css" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../js/materialize.min.js"></script>

<body>
<!-- ini menu -->
<!-- Dropdown Structure -->
  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper light-blue">
      <a href="index.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="pendaftaran.php">Daftar Penyewa</a></li>
      <li><a href="penyewaan.php">Penyewaan</a></li>
      <li><a href="macam.php">Macam Mobil</a></li>
      </ul>
    </div>
  </nav>
   </div>

<!--  FORM PENDAFTARAN  -->
<div class="container">
    <form action="daftar.php" method="post">
        <h4 class="center-align">Data Penyewa</h4><hr color="#e53935"><br />
  <div class="row">
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
          <input id="tempat" type="text" class="validate" name="tempatlahir">
          <label for="tempat">Tempat Lahir</label>
      </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="tgllahir" type="date" class="datepicker" name="tgllahir">
          <label for="tgllahir">Tanggal Lahir</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="Alamat" type="text" class="validate" name="nik">
          <label for="alamat">Alamat</label>
    </div>
&nbsp;
<br>
<br>
<br>
<br>
<br>

<div class="center-align">
  <button class="waves-effect waves-light btn blue darken-1" type="submit">Kirim</button>
  <button class="btn red" type="reset">Batal</button>
</div>
</form>
&nbsp;
<!--  AKHIR FORM PENDAFTARAN  -->

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
      $('select').material_select();
      $('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 37 
  });
  });

</script>
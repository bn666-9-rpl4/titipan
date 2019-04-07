<?php
  require 'cekadmin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mobil</title>
	<link href="../material-design-icons/material-icons.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</head>
<body>
      <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper light-blue">
          <ul>
           <li><a href="logout.php" class="btn tooltipped" data-position="bottom" data-delay="50"><i class="material-icons white-text left">account_circle</i>LOGOUT</a></li>
          </ul>
          <a href="logadmin.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
          <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="tambahmobil.php">Tambah Mobil</a></li>
          <li><a href="macam.php">Macam Mobil</a></li>
          </ul>
        </div>
      </nav>
       </div>
	<?php 
		include '../koneksi.php';
    if( !isset($_GET['id']) ){
      header('Location:macam.php');
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM mobil WHERE id = $id";
    $query = mysql_query($sql);
    $mobil = mysql_fetch_assoc($query);
    if( mysql_num_rows($query) < 1 ){
      die("Data Mobil tidak ditemukan...");
    }
	?>

<div class="container">
    <form action="proseseditmobil.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <h4 class="center-align">Data Mobil</h4><hr color="#e53935"><br />
  <div class="row">
    <div class="input-field col s12 m6 l6 xl6">
        <input id="namamobil" type="text" class="validate" name="namamobil" value="<?php echo $mobil['namamobil'] ?>">
        <label for="namamobil">Nama Mobil</label>
    </div>
        <div class="input-field col s12 m6 l6 xl6">
          <input id="jenismobil" type="text" class="validate" name="jenismobil" value="<?php echo $mobil['jenismobil'] ?>">
          <label for="jenismobil">Jenis Mobil</label>
      </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="warna" type="text" class="validate" name="warna" value="<?php echo $mobil['warna'] ?>">
          <label for="warna">Warna</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="bhnbakar" type="text" class="validate" name="bhnbakar" value="<?php echo $mobil['bhnbakar'] ?>">
          <label for="bhnbakar">Bahan Bakar</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="jmlkursi" type="number" class="validate" name="jmlkursi" value="<?php echo $mobil['jmlkursi'] ?>">
          <label for="jmlkursi">Jumlah Kursi</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="status" type="text" class="validate" name="status" value="<?php echo $mobil['status'] ?>">
          <label for="status">Status</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="sewa" type="text" class="validate" name="sewa" value="<?php echo $mobil['sewa'] ?>">
          <label for="sewa">Sewa / Hari</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="plat" type="text" class="validate" name="plat" value="<?php echo $mobil['plat'] ?>">
          <label for="plat">Plat Nomer</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
          <input id="gambar" type="file" class="validate" name="gambar" value="<?php echo $mobil['gambar'] ?>">
    </div>
    </div>
    <div class="center">
    <button type="submit" class="btn blue">Submit</button>
    </div>
&nbsp;


</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
      $('select').material_select();
      $('.datepicker').pickadate({
        selectMonths: false,
        selectYears: 37
    })
  });
</script>

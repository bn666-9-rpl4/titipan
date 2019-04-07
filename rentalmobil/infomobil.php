<?php
    session_start();
?>
<html>
<head>
<title>RentalMobil.com</title>
  
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="material-design-icons/material-icons.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="layout/styles/layout.css" media="all">


	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head> 
 <body>

  <nav class="nav-extended panel teal lighten-2">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><b>RENTAL MOBIL.COM</b></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


      <?php
        if(isset($_SESSION['user_name'])){
            echo '<span class="right" style="margin-right:30px">'.$_SESSION['user_name'].'</span>';
        }else{
          ?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="daftarlogin/daftarlogin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
              <li><a href="login/loginuser.php"><i class="material-icons left">verified_user</i>LOGIN</a></li>
            </ul>
          <?php
        }
      ?>
    </div>

 
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons left">home</i>BERANDA</a></li>
        <li><a href="pemesanan/pemesananmobil.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>
        <li><a href="penyewaan/penyewaanmobil.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
        <li><a href="infosewa.php"><i class="material-icons left">info</i>INFO SEWA</a></li>
       </ul>
       <?php
        if(isset($_SESSION['user_name'])){
          ?>
       <ul class="right hide-on-med-and-down">
        <li><a href="logout.php"><i class="material-icons left">close</i>Logout</a></li>
       </ul>
       <?php } ?>  
    </div>
  </nav>

	<div class="input-field col s12 m6 l6 xl6">
					<select name="id_mobil">
						<option>Kode Mobil</option>     
						

					<?php
							include('koneksi.php');
							$sql = mysql_query('SELECT id_mobil FROM tb_mobil') or die(mysql_error());
							while($row = mysql_fetch_assoc($sql)){
								echo "<option>$row[id_mobil]</option>";
							}
							$sql = mysql_query('SELECT * FROM tb_mobil WHERE id_mobil='.$_GET['id_mobil']) or die(mysql_error());
							$mobil = mysql_fetch_assoc($sql);
						?>   
					</select>
				</div>

			<tr width=200 height=100>
			<img  src="images/<?=$mobil['gambar']?>">

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Plat Nomor</b>
					<br>
					<?=$mobil["plat_nomor"]?>
				</p>
				</div>

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Merek Mobil</b>
					<br>
					<?=$mobil["merek_mobil"]?>
				</p>
				</div>

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Jenis Mobil</b>
					<br>
					<?=$mobil["jenis_mobil"]?>
				</p>
				</div>

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Kecepatan</b>
					<br>
					<?=$mobil["kecepatan"]?>
				</p>
				</div>

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Kapasitas Muatan</b>
					<br>
					<?=$mobil["kapasitas"]?>
				</p>
				</div>

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Bahan Bakar</b>
					<br>
					<?=$mobil["bensin"]?>
				</p>
				</div>

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Warna Mobil</b>
					<br>
					<?=$mobil["warna"]?>
				</p>
				</div>

				<div class="col s12 m6 l6 xl6"> 
				<p>
					<b>Harga/Hari</b>
					<br>
					<?=$mobil["harga"]?>
				</p>
				</div>

</body>
</html>	

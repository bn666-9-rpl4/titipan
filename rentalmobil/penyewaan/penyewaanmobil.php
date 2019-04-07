<?php
    session_start();
?>
<html>
<head>
<title>RentalMobil.com</title>
  
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../material-design-icons/material-icons.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../layout/styles/layout.css" media="all">


	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head> 
 <body>

  <nav class="nav-extended panel teal lighten-2">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><b>RENTAL MOBIL.COM</b></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


      <?php
        if(isset($_SESSION['user_name'])){
            echo '<span class="right" style="margin-right:30px"><i class="material-icons left">perm_identity</i>'.$_SESSION['user_name'].'</span>';
        }else{
          ?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="../daftarlogin/daftarlogin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
              <li><a href="../login/loginuser.php"><i class="material-icons left">perm_identity</i>LOGIN</a></li>
            </ul>
          <?php
        }
      ?>
    </div>

 
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
        <li><a href="../index.php"><i class="material-icons left">home</i>BERANDA</a></li>
        <li><a href="../pemesanan/pemesananmobil.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>
        <li><a href="../penyewaan/penyewaanmobil.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
        <li><a href="../infosewa.php"><i class="material-icons left">info</i>INFO SEWA</a></li>
       </ul>
       <?php
        if(isset($_SESSION['user_name'])){
          ?>
       <ul class="right hide-on-med-and-down">
        <li><a href="../logout.php"><i class="material-icons left">close</i>Logout</a></li>
       </ul>
       <?php } ?>  
    </div>
  </nav>	<div class="row" id='masonry-grid'>

<?php
include('../koneksi.php');

$query = mysql_query("SELECT * FROM tb_mobil ORDER BY id_mobil DESC") or die(mysql_error());

if(mysql_num_rows($query) == 0){  

	echo '<tr><td colspan="6">Tidak ada data!</td></tr>';

}else{  
	$no = 1;  
	while($data = mysql_fetch_assoc($query)){ 

		echo '<div class="col s12 m6 l6 xl6">';
		echo '<div class="card">';
		echo '<div class="card-image" >';
		echo '<tr width=200 height=100>';
		echo '<img  src="../images/'.$data['gambar'].'">';
		echo '<span class="card-title">'.$data['merek_mobil'].'</span>';
		echo '</div>';
		echo '<div class="card-content">';
		echo '<p>Jenis Mobil  : '.$data['jenis_mobil'].'</span></p>';
		echo '<p>Kecepatan  : '.$data['kecepatan'].'</span></p>';
		echo '<p>Harga/Hari  : '.$data['harga'].'</span></p>';
		echo '<p>...</p>';
		echo '</div>';
		echo '<div class="card-action">';
		echo '<a href="../penyewaan/sewa.php?id_mobil='.$data['id_mobil'].'">Sewa</a>';
		echo '<a href="#" class="right">Supir</a>';
		echo '<center>';
		echo '<a href="../infomobil.php?id_mobil='.$data['id_mobil'].'"><i class="material-icons">view_module</i></a>';
		echo '</center>';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		$no++;

	}

}
?>

</div>
</div>

	<script type="text/javascript">
		$('#masonry-grid').masonry({
			columnWidth:'.col',
			itemSelector:'.col'
		})
	</script>

<!---Footer-->
  <footer class="page-footer panel teal lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Rentalmobil.com</h5>
                <p class="grey-text text-lighten-4"><i class="material-icons left">location_on</i>Jl.Jatinangor Ds.Cibeusi Kab.Sumedang Prov.Jawa Barat</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">call</i>+6289501462420</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">chat</i>+6289501462420</a></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">XII RPL 4</a>
            </div>
          </div>
        </footer>
<body>
<html>

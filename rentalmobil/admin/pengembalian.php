<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
  header('location:../admin/login.php');
}
class array_object{
  static function arrayKeObject($array)
  {
    $object = new stdClass();
    if (is_array($array))
    {
      foreach ($array as $kolom=>$isi)
      {
        $kolom = strtolower(trim($kolom));
        $object->$kolom = $isi;
      }
    }
    return $object;
  }

  static function objectKeArray($object)
  {
    $array = array();
    if (is_object($object)) {
      $array = get_object_vars($object);
    }
    return $array;
  }
}
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
            echo '<span class="right" style="margin-right:30px"><i class="material-icons left">perm_identity</i>'.$_SESSION['user_name'].'</span>';
        }else{
          ?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="daftaradmin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
              <li><a href="login.php"><i class="material-icons left">verified_user</i>LOGIN</a></li>
            </ul>
          <?php
        }
      ?>
    </div>

 
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
      <li><a href="index.php"><i class="material-icons left">home</i>BERANDA</a></li>
      <li><a href="daftarpesan.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
      <!--<li><a href="daftarsewa.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>-->
      <li><a href="mobil.php"><i class="material-icons left">add</i>MOBIL</a></li>
      <li><a href="supir.php"><i class="material-icons left">add</i>SUPIR</a></li>
      <li><a href="collapsible.html"><i class="material-icons left">info</i>INFO</a></li>
      <li><a href="pengembalian.php"><i class="material-icons left">receipt</i>PENGEMBALIAN</a></li>
      </ul>
       <ul class="right hide-on-med-and-down">
        <li><a href="logout.php"><i class="material-icons left">close</i>Logout</a></li>
       </ul>  
    </div>
  </nav>



	  <!--<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">Honda</a></li>
    <li class="waves-effect"><a href="#!">Suzuki</a></li>
    <li class="waves-effect"><a href="#!">Daihatsu</a></li>
    <li class="waves-effect"><a href="#!">BMW</a></li>
    <li class="waves-effect"><a href="#!">Toyota</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  	</ul>-->

	<div class="row" id='masonry-grid'>

<?php
include('../koneksi.php');

$query = mysql_query("SELECT * FROM tb_pemesanan p INNER JOIN tb_mobil m ON p.id_mobil=m.id_mobil INNER JOIN tb_user u ON u.id_user=p.id_user INNER JOIN tb_pengembalian k ON k.id_pengembalian=k.id_pengembalian WHERE m.status='Disewa' AND p.status!='kembali' ORDER BY m.id_mobil DESC  ") or die(mysql_error());

if(mysql_num_rows($query) == 0){  

	echo '<tr><td colspan="6">Tidak ada data!</td></tr>';

}else{  
	$no = 1;  
	while($data = mysql_fetch_assoc($query)){
    // echo json_encode($data);
  	echo '<div class="col s12 m6 l6 xl6">';
		echo '<div class="card">';
	 	echo '<div class="card-image waves-effect waves-block waves-light" >';
		echo '<tr width=200 height=100>';
		echo '<img class="activator" src="../images/'.$data['gambar'].'">';
		echo '</div>';
		echo '<div class="card-content">';
		echo '<span class="card-title">'.$data['merek_mobil'].'</span>';
		echo '<i class="material-icons right">more_vert</i></span>';
		echo '</div>';
		echo '<div class="card-reveal">';
		echo '<span class="card-title grey-text text-darken-4">'.$data['merek_mobil'].'<i class="material-icons right">close</i></span>';
		echo '<p>Merek Mobil  : '.$data['merek_mobil'].'</span></p>';
		echo '<p>Harga/Hari   : '.$data['harga'].'</span></p>';		
    echo '<p>Plat Nomor   : '.$data['plat_nomor'].'</span></p>';
    echo '<p>No KTP   : '.$data['no_ktp'].'</span></p>';
    echo '<p>Nama Pemesan   : '.$data['nama'].'</span></p>';
    echo '<p>Jenis Kelamin   : '.$data['jeniskelamin'].'</span></p>';
    echo '<p>Alamat   : '.$data['alamat'].'</span></p>';
		echo '<p>No HP   : '.$data['nohp'].'</span></p>';
	  echo '<p>Kondisi   : '.$data['kondisi'].'</span></p>';
    echo '<p>Denda   : '.$data['denda'].'</span></p>';
  	echo '<div class="card-action">';
		echo '<a href="fpengembalian.php?id='.$data['id_pemesanan'].'" class="right">Kembali</a>';
		echo '</div>';
		echo '</div>';
		echo '<div class="card-action">';
      echo '<a href="fpengembalian.php?id='.$data['id_pemesanan'].'" >Kembali</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';


		$no++;

	}

}
?>

</div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
	<script type="text/javascript">
    function kembali(data) {
      console.log(data)
      $('#modal1').modal('open');
    }
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

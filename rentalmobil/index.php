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
            echo '<span class="right" style="margin-right:30px"><i class="material-icons left">perm_identity</i>'.$_SESSION['user_name'].'</span>';
        }else{
          ?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="daftarlogin/daftarlogin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
              <li><a href="login/loginuser.php"><i class="material-icons left">perm_identity</i>LOGIN</a></li>
            </ul>
          <?php
        }
      ?>
    </div>

 
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons left">home</i>BERANDA</a></li>
        <li><a href="pemesanan/pemesananmobil.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
        <!--<li><a href="penyewaan/penyewaanmobil.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>-->
        <li><a href="infosewa.php"><i class="material-icons left">info</i>INFO</a></li>
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

<div class="wrapper bgded overlay" style="background-image:url('images/mobilA.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p> RENTALMOBIL.COM</p>
            <h3 class="heading">MOBIL/SUPIR</h3>
            <p>Mobil yang kamu cari sekaligus supirnya ada semua disini</p>
            <footer><a href="frofil"><i class="material-icons left">view_module</i></a></footer>
          </article>
        </li>
        <li>
         <article>
            <p> RENTALMOBIL.COM</p>
            <h3 class="heading">MOBIL/SUPIR</h3>
            <p>Mobil yang kamu cari sekaligus supirnya ada semua disini</p>
            <footer><a href="frofil"><i class="material-icons left">view_module</i></a></footer>
          </article>
        </li>
        <li>
          <article>
            <p> RENTALMOBIL.COM</p>
            <h3 class="heading">MOBIL/SUPIR</h3>
            <p>Mobil yang kamu cari sekaligus supirnya ada semua disini</p>
            <footer><a href="frofil"><i class="material-icons left">view_module</i></a></footer>
          </article>
        </li>
      </ul>
    </div>
  </div>
</div>



<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>


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

</body>
</html>
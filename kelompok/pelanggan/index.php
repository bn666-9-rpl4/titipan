<?php 
    require 'cekpelanggan.php';
  ?>
  <html>
  <head>
  <title>
    RENTAL MOBIL
  </title>
      <link href="../material-design-icons/material-icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
  </head>
      

  <body>
  <!-- ini menu -->
  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper light-blue">
      <ul>
         <li><a href="logout.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Silahkan Logout"><i class="material-icons white-text left">account_circle</i>LOGOUT</a></li>
      </ul>
      <ul id="profileopt" class="dropdown-content">
 <li><a href="logout.php">Logout</a></li>           
</ul>

<ul class="right">
<li><a class="dropdown-button grey-text text-darken-1" href="#!" data-constrainwidth="false" data-beloworigin="true" data-activates="profileopt">  Hai,<b><?php echo $username;?> </b><img style="height:36px; position: relative; top:14px;" class="circle" src="../images/parallax1.jpg"></a></li>
</ul>
      <a href="index.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="macam.php">Macam Mobil</a></li>
      </ul>

    </div>
  </nav>
   </div>


  <!-- Components -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="../images/mobil1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="black-text">Anda Berminat Rental Mobil</h3>
        </div>
      </li>
      <li>
        <img src="../images/mobil2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="black-text">Cepat,Langsung,dan Memuaskan</h3>
        </div>
      </li>
      <li>
        <img src="../images/mobil3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="black-text">Pelayanan Yang Terbaik</h3>
        </div>
      </li>
    </ul>
  </div>

<!-- Media -->
<br>
<br>
<main>
    <center>
      <div class="container">
        <div class="z-depth-3 grey lighten-4 row" style="display: inline-block; padding: 50px 50px 50px 50px; border: 1px solid #EEE;">

        <div class="row">
          <div class="col s4 m4 l4 xl4">
            <ul>
              <li><a href="macam.php" class="btn-floating tooltipped" data-position="bottom" data-delay="50" data-tooltip="PESAN MOBIL"><i class="material-icons white-text left">account_circle</i></a></li>
              <hr>
              <label class="black-text">PESAN MOBIL</label>
            </ul>
         </div>
      <div class="col s4 m4 l4 xl4">
            <ul>
              <li><a href="logout.php" class="btn-floating tooltipped" data-position="bottom" data-delay="50" data-tooltip="Silahkan Logout"><i class="material-icons white-text left">account_circle</i></a></li>
              <hr>
              <label class="black-text">LOGOUT</label>
            </ul>
         </div>         
        </div>
      </div>
    </div>
    <br>
    <br>  
  </center> 
    <!-- Footer -->

        <footer class="page-footer light-blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text text-lighten-4">RENTAL MOBIL</h5>
                <p class="grey-text text-lighten-4">Kami Akan Membantu apa yang anda butuhkan</p>
              </div>
              <div class="col l4 offset-l2 s12">
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container center">
             RENTAL MOBIL
            </div>
          </div>
        </footer>


  </body>
  </html>
  <script type="text/javascript">
  $(document).ready(function(){
        $('.slider').slider({interval: 3700});
      });
  </script>
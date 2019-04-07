  <html>
  <head>
  <title>
    RENTAL MOBIL
  </title>
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
  <!-- ini menu -->
  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper light-blue">
      <ul>
         <li><a href="login.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Untuk Penyewa Dan Admin"><i class="material-icons white-text left">account_circle</i>LOGIN</a></li>
      </ul>
      <ul>
         <li><a href="register.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Untuk Penyewa"><i class="material-icons white-text left">account_circle</i>REGISTER</a></li>
      </ul>
      <a href="logadmin.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="macam.php">Macam Mobil</a></li>  
      </ul>
    </div>
  </nav>
   </div>

<!-- Media -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="images/mobil1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="black-text">Anda Berminat Rental Mobil</h3>
        </div>
      </li>
      <li>
        <img src="images/mobil2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="black-text">Cepat,Langsung,dan Memuaskan</h3>
        </div>
      </li>
      <li>
        <img src="images/mobil3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="black-text">Pelayanan Yang Terbaik</h3>
        </div>
      </li>
    </ul>
  </div>

  <!-- Components -->
<h1 class="blue-text text-darken-2 center">SELAMAT DATANG DI RENTAL MOBIL KAMI</h1>
<pre>
  





</pre>
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
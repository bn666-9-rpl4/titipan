<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
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
         <li><a href="login.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Untuk Penyewa"><i class="material-icons white-text left">account_circle</i>LOGIN</a></li>
      </ul>
      <a href="logadmin.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="macam.php">Macam Mobil</a></li>  
      </ul>
    </div>
  </nav>
   </div>
   <!-- Main Content -->
<main>
    <center>
      <div class="section"></div>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-3 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="prosesloginpelanggan.php">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
            <h4>Login</h4>
              <div class='input-field col s12'>
                <i class="material-icons prefix blue-text text-lighten-1">account_circle</i>
                <input class='validate' type='text' name='username' id='username' />
                <label for='username'>Username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <i class="material-icons prefix blue-text text-lighten-1">lock</i>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Password</label>
              </div>
            </div>
            <div class="row">
              <ul>
                <li><a href="register.php" class="btn-tooltipped">Klik Disini Jika Belum Mempunyai Akun</li>
              </ul>
            </div>
            <br />
            <center>
              <div class='row'>
                <button class="waves-effect waves-light btn blue darken-1" type="submit">Login</button>
                <button class="btn red" type="reset">Reset</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
    <div class="section"></div>
  </main>

</body>
</html>
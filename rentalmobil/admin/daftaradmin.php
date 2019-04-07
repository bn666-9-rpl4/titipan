<?php
include "../koneksi.php";
?>
<html>
<head>
<title>DAFTAR</title>
  
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../material-design-icons/material-icons.css"  media="screen,projection"/>


	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head> 
<body>


  <nav class="nav-extended panel teal lighten-2">
    <div class="nav-wrapper">
      <a href="../index.php" class="brand-logo"><b>RENTAL MOBIL.COM</b></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="daftarlogin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
        <li><a href="loginuser.php"><i class="material-icons left">verified_user</i>LOGIN</a></li>
      </ul>
</li>
</nav>
	<header id="head" class="secondary">
            <div class="container">
                    <h3>DAFTAR</h3>
                </div>
    </header>
<form action="prosesdaftaradmin.php" method="post">
	<div class="container">
			<div class="row">
			<div class="col s12 m4 l4 xl4">
			<br><br>
			
			<form class="form-light mt-20" role="form">
			<div class="form-group">
			<label>username</label>
			<input name="username" type="text" class="form-control" placeholder="Your name">
			</div>
							
			<form class="form-light mt-20" role="form">
			<div class="form-group">
			<label>password</label>
			<input name="password" type="password" class="form-control" placeholder="Your password">
			</div>
	</div>	
</div>	
<button value="login" type="submit" class="btn btn-two">DAFTAR</button><p><br/></p>
</form></form>
</div>
?>
</body>
</html>


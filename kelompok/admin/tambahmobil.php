<html>
<head>
<title>RentalMobil.com</title>
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


      <!-- Menu -->
      <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper light-green">
          <ul>
           <li><a href="login.php" class="btn tooltipped" data-position="bottom" data-delay="50"><i class="material-icons white-text left">account_circle</i>LOGOUT</a></li>
          </ul>
          <a href="logadmin.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
          <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="tambahmobil.php">Tambah Mobil</a></li>
          <li><a href="tabelpelanggan.php">Tabel Pelanggan</a></li>
          <li><a href="macam.php">Macam Mobil</a></li>
          </ul>
        </div>
      </nav>
       </div>

<div class="container">
<form role="form" method="post" action="prosestambahmobil.php" enctype="multipart/form-data" >
<div class="box-body">
   
   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="namamobil" required>      
   <label for="exampleInputEmail1">Nama Mobil</label>   
   </div>
   
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="jenismobil" required>      
   <label for="exampleInputEmail1">Jenis Mobil</label>   
   </div>
   
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="warna" required>      
   <label for="exampleInputEmail1">Warna</label>   
   </div>
   
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="bhnbakar" required>      
   <label for="exampleInputEmail1">Bahan Bakar</label>   
   </div>
       
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="jmlkursi" required>      
   <label for="exampleInputEmail1">Jumlah Kursi</label>   
   </div>
    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="status" required>      
   <label for="exampleInputEmail1">Status Mobil</label>   
   </div>
   
   
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="sewa" required>      
   <label for="exampleInputEmail1">Sewa /Hari</label>   
   </div>
   
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="plat" required>      
   <label for="exampleInputEmail1">Plat Mobil</label>   
   </div>
   
                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label><br>
                  <br><input type="file" name="gambar"  required>
                </div>
              </div>
              <br>
              <!-- /.box-body -->

              <div class="center">
                <button type="submit" class="btn blue" name="tambah">Submit</button>
              </div>
            </form>
          </div>
    </section>
  </div>
  </div>
  </body>
  </html>
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
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="daftarlogin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
        <li><a href="loginuser.php"><i class="material-icons left">verified_user</i>LOGIN</a></li>
      </ul>
    </div>

 
    
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons left">home</i>BERANDA</a></li>
        <li><a class='dropdown-button' href="mobil.php" data-activates='dropdown1'><i class="material-icons left">receipt</i>PEMESANAN</a></li>

 <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="mobil.php">Mobil</a></li>
    <li><a href="daftarpesan.php">Daftar Pesan</a></li>
    <li class="divider"></li>
  </ul>
        
       <li><a href="penyewaan.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
       <li><a href="collapsible.html"><i class="material-icons left">info</i>INFO SEWA</a></li>
      </ul>
    </div>
  </nav>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Mobil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="prosestambahmobil.php" enctype="multipart/form-data" >
              <div class="box-body">
   
                <!--<div class="form-group">
                <div class="input-field col s12 m6 l6 xl6">
                  <label for="exampleInputEmail1">Merek Mobil</label>
                  <input type="text" name="merek_mobil" class="form-control"  placeholder="Merek Mobil" required>
                </div>-->
   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="plat_nomor" required>      
   <label for="exampleInputEmail1">Plat Nomor</label>   
   </div>

   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="merek_mobil" required>      
   <label for="exampleInputEmail1">Merek Mobil</label>   
   </div>


   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="jenis_mobil" required>      
   <label for="exampleInputEmail1">Jenis Mobil</label>   
   </div>

   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="kecepatan" required>      
   <label for="exampleInputEmail1">Kecepatan</label>   
   </div>


   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="kapasitas" required>      
   <label for="exampleInputEmail1">Kapasitas Muatan</label>   
   </div>
   

   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="bensin" required>      
   <label for="exampleInputEmail1">Bahan Bakar</label>   
   </div>


   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="warna" required>      
   <label for="exampleInputEmail1">Warna Mobil</label>   
   </div>
   

   <div class="row">    
   <div class="input-field col s12 m6 l6 xl6">
   <input type="text" class="form-control" name="harga" required>      
   <label for="exampleInputEmail1">Harga/Hari</label>   
   </div>
   
   <br>   
   <br>   
   <br>
   <br>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label><br>
                  <br><input type="file" name="foto" id="exampleInputFile" required>
                </div>
              </div>
              <br>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
              </div>
            </form>
          </div>
    </section>
  </div>
  <body>
  <html>
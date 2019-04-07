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
  <title>Edit Mobil</title>
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
              <h3 class="box-title">Edit Gambar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="proseseditmobil.php" enctype="multipart/form-data" >
            <?php
  include('../koneksi.php');
  $id = $_GET['id'];
    $query = mysql_query("SELECT * FROM tb_mobil WHERE id_mobil='$id'") or die(mysql_error());
    $data = mysql_fetch_assoc($query);
    ?>
    
    
    <div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id']; ?>" >
    <input type="text" name="plat_nomor" class="form-control"   value="<?php echo $data['plat_nomor']; ?>" required>            
    <label for="exampleInputEmail1">Plat Nomor</label>   
  </div>

    <div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="text" name="merek_mobil" class="form-control"   value="<?php echo $data['merek_mobil']; ?>" required>            
    <label for="exampleInputEmail1">Merek Mobil</label>   
	</div>

  <div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="text" name="jenis_mobil" class="form-control"   value="<?php echo $data['jenis_mobil']; ?>" required>            
    <label for="exampleInputEmail1">Jenis Mobil</label>   
  </div>

   <div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="text" name="kecepatan" class="form-control"   value="<?php echo $data['kecepatan']; ?>" required>            
    <label for="exampleInputEmail1">Kecepatan</label>   
  </div>
    
    <div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="text" name="kapasitas" class="form-control"   value="<?php echo $data['kapasitas']; ?>" required>            
    <label for="exampleInputEmail1">Kapasitas Muatan</label>   
	</div>
   
	<div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="text" name="bensin" class="form-control"   value="<?php echo $data['bensin']; ?>" required>            
    <label for="exampleInputEmail1">Bahan Bakar</label>   
	</div>

 	<div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="text" name="warna" class="form-control"   value="<?php echo $data['warna']; ?>" required>            
    <label for="exampleInputEmail1">Warna Mobil</label>   
	</div>

  <div class="input-field col s12 m6 l6 xl6">
    <input type="hidden" name="id_mobil" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="hidden" name="id" size="30" value="<?php echo $data['id_mobil']; ?>" >
    <input type="text" name="harga" class="form-control"   value="<?php echo $data['harga']; ?>" required>            
    <label for="exampleInputEmail1">Harga/Hari</label>   
  </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="form-group">
    <label for="exampleInputFile">Gambar</label><br>
    <?php echo'<img style="height:150px " src="../images/'.$data['gambar'].'">'?>
    <br><input type="file" name="gambar" id="exampleInputFile" > 
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
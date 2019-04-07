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
        <li><a href="pemesananmobil.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>
        <li><a href="penyewaanmobil.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
        <li><a href="collapsible.html"><i class="material-icons left">info</i>INFO SEWA</a></li>
      </ul>
    </div>
  </nav>


  <!-- Content Wrapper. Contains page content -->
  <title>Edit Beranda</title>
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
              <h3 class="box-title">Edit Beranda</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="proseseditberanda.php" enctype="multipart/form-data" >
            <input type="hidden" name='id_beranda' value='<?=$_GET["id"]?>'>
            <?php
  include('../koneksi.php');
  $id = $_GET['id'];
    $query = mysql_query("SELECT * FROM tb_beranda WHERE id_beranda='$id'") or die(mysql_error());
    $data = mysql_fetch_assoc($query);
    ?>
          
                  <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="hidden" name="id_berita" size="30" value="<?php echo $data['id_beranda']; ?>" >
                  <input type="hidden" name="id" size="30" value="<?php echo $data['id_beranda']; ?>" >

                  <input type="text" name="judul" class="form-control"  placeholder="Judul" value="<?php echo $data['judul']; ?>" required>
                </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">kategori</label>
                  <input type="text" name="kategori" class="form-control"  placeholder="Kategori" value="<?php echo $data['kategori']; ?>" required>
                </div>


  
                  </select>
                </div>

            <div class="form-group">
                
                  <textarea class="ckeditor" id="ckeditor" name="isi" placeholder="isi beranda ....."  required><?php echo $data['isi']; ?></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label><br>
                  <?php echo'<img style="height:150px " src="../images/'.$data['gambar'].'">'?>
                  <input type="file" name="gambar" id="exampleInputFile" >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
              </div>
            </form>
          </div>
    </section>
</div>
</body>
</html>
<html>
<head>
  <title>Akun</title>
  
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
      <a href="index.php" class="brand-logo"><b>AKUN</b></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <?php
      session_start();
      if(isset($_SESSION['username'])){
        echo '<span class="right" style="margin-right:30px"><i class="material-icons left">perm_identity</i>'.$_SESSION['username'].'</span>';
      }else{
        ?>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="login.php"><i class="material-icons left">verified_user</i>LOGIN</a></li>
        </ul>
        <?php
      }
      ?>
    </div>


    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons left">home</i>BERANDA</a></li>
        <li><a href="surat_keluar.php"><i class="material-icons left">add</i>SURAT KELUAR</a></li>
        <!--<li><a href="daftarsewa.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>-->
        <li><a href="surat_masuk.php"><i class="material-icons left">add</i>SURAT MASUK</a></li>
        <li><a href="akun.php"><i class="material-icons left">add</i>AKUN</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php"><i class="material-icons left">close</i>Logout</a></li>
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


                <div class="row">
                  <div class="col s12 m6 push-m3">
                    <div class="card blue-grey darken-1">
                      <div class="card-content white-text">

                       <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title"><center>DAFTAR AKUN</center></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="prosestambahakun.php" enctype="multipart/form-data" >
                          <div class="box-body">



                           <div class="row">    
                             <div class="input-field col s12 m6 l6 xl6">
                               <input type="text" class="form-control" name="id_petugas" required>      
                               <label for="id_petugas">Id Petugas</label>   
                             </div>

                             <div class="row">    
                               <div class="input-field col s12 m6 l6 xl6">
                                 <input type="text" class="form-control" name="nama_petugas" required>      
                                 <label for="nama_petugas">Nama Petugas</label>   
                               </div>


                               <div class="row">      
                                <div class="input-field col s12 m6 l6 xl6">
                                  <select id="jenkel" name="jenkel">
                                    <option value="" disabled selected>Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                  </select>
                                  <label for="jenkel">Jenis Kelamin</label>
                                </div>

                                <div class="row">    
                                 <div class="input-field col s12 m6 l6 xl6">
                                   <input type="text" class="form-control" name="alamat" required>      
                                   <label for="alamat">Alamat</label>   
                                 </div>


                                 <div class="row">    
                                   <div class="input-field col s12 m6 l6 xl6">
                                     <input type="text" class="form-control" name="telepon" required>      
                                     <label for="telepon">Telepon</label>   
                                   </div>


                                   <div class="row">    
                                     <div class="input-field col s12 m6 l6 xl6">
                                       <input type="text" class="form-control" name="username" required>      
                                       <label for="username">Username</label>   
                                     </div>


                                     <div class="row">    
                                       <div class="input-field col s12 m6 l6 xl6">
                                         <input type="text" class="form-control" name="password" required>      
                                         <label for="password">Password</label>   
                                       </div>

                                     <div class="row">      
                                        <div class="input-field col s12 m6 l6 xl6">
                                          <select id="hak" name="hak">
                                          <option value="" disabled selected>Pilih Hak Akses</option>
                                          <option value="petugas">Petugas</option>
                                          <option value="admin">Admin</option>
                                     </select>
                                      <label for="hak">Hak Akses</label>
                                      </div>

                                       <div class="form-group">
                                        <label for="exampleInputFile">Gambar</label><br>
                                        <br><input type="file" name="gambar" id="exampleInputFile">
                                      </div>
                                    </div>
                                    <br>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                      <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                                    </div>
                                  </form>
                                </div>
                              </section>
                              <script>
                               $(document).ready(function() {
                                $('select').material_select();
                                 $('.datepicker').pickadate({
                                           selectMonths: false, // Creates a dropdown to control month
                                           selectYears: 15 // Creates a dropdown of 15 years to control year
                                           })
                              });

                             </script>

                           </div>
                           <body>
                            <html>
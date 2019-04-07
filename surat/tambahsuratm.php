<html>
<head>
  <title>Surat Masuk</title>
  
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
      <a href="index.php" class="brand-logo"><b>SURAT MASUK</b></a>
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
                      <h3 class="box-title"><center>SURAT MASUK</center></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="prosestambahsuratm.php" enctype="multipart/form-data" >
                      <div class="box-body">



                       <div class="row">    
                         <div class="input-field col s12 m6 l6 xl6">
                           <input type="text" class="form-control" name="no_agenda" required>      
                           <label for="no_agenda">No Agenda</label>   
                         </div>


                         <div class="input-field col s12 m6 l6 xl6">
                          <select name="id_petugas" onchange="cari(this.value)">
                            <?php
                            include('koneksi.php');
                            $sql = mysql_query('SELECT id_petugas, nama_petugas FROM tb_petugas') or die(mysql_error());
                            while($row = mysql_fetch_assoc($sql)){
                              echo "<option value='$row[id_petugas]'>$row[id_petugas]</option>";
                            }
                            $sql = mysql_query('SELECT * FROM tb_petugas ') or die(mysql_error());
                            $petugas = mysql_fetch_assoc($sql);
                            ?>   
                          </select>
                        </div>


                        <div class="input-field col s12 m6 l6 xl6"> 
                          <input disabled value='<?=$petugas["nama_petugas"]?>' id="nama_petugas" type="text" class="validate" name="nama_petugas" >
                          <label for="nama_petugas">Nama Petugas</label>
                        </div>


                        <div class="row">      
                          <div class="input-field col s12 m6 l6 xl6">
                            <select id="jenis_surat" name="jenis_surat">
                              <option value="" disabled selected>Pilih Jenis Surat</option>
                              <option value="surat_tugas">Surat Tugas</option>
                              <option value="surat_pemberitahuan">Surat Pemberitahuan</option>
                              <option value="surat_pemberhentian">Surat Pemberhentian</option>
                              <option value="surat_ijin">Surat ijin</option>
                            </select>
                            <label for="jenis_surat">Jenis Surat</label>
                          </div>

                          <div class="row">    
                           <div class="input-field col s12 m6 l6 xl6">
                             <input type="text" class="datepicker" name="tanggal_terima" required>      
                             <label for="tanggal_terima">Tanggal Terima</label>   
                           </div>


                           <div class="row">    
                             <div class="input-field col s12 m6 l6 xl6">
                               <input type="text" class="form-control" name="no_surat" required>      
                               <label for="no_surat">No Surat</label>   
                             </div>


                             <div class="row">    
                               <div class="input-field col s12 m6 l6 xl6">
                                 <input type="text" class="form-control" name="pengirim" required>      
                                 <label for="pengirim">Pengirim</label>   
                               </div>


                               <div class="row">    
                                 <div class="input-field col s12 m6 l6 xl6">
                                   <input type="text" class="form-control" name="perihal" required>      
                                   <label for="perihal">Perihal</label>   
                                 </div>

                                <div class="row">    
                                 <div class="input-field col s12 m6 l6 xl6">
                                   <input type="text" class="form-control" name="no_disposisi" required>      
                                   <label for="no_disposisi">No Disposisi</label>   
                                 </div>



                         <div class="input-field col s12 m6 l6 xl6">
                          <select name="kepada" onchange="cari(this.value)">
                            <?php
                            include('koneksi.php');
                            $sql = mysql_query('SELECT id_petugas, nama_petugas FROM tb_petugas') or die(mysql_error());
                            while($row = mysql_fetch_assoc($sql)){
                              echo "<option value='$row[id_petugas]'>$row[nama_petugas]</option>";
                            }
                            $sql = mysql_query('SELECT * FROM tb_petugas ') or die(mysql_error());
                            $petugas = mysql_fetch_assoc($sql);
                            ?>   
                          </select>
                        </div>


                                <div class="row">    
                                 <div class="input-field col s12 m6 l6 xl6">
                                   <input type="text" class="form-control" name="keterangan" required>      
                                   <label for="keterangan">Keterangan</label>   
                                 </div>


                                <div class="row">    
                                 <div class="input-field col s12 m6 l6 xl6">
                                   <input type="text" class="form-control" name="tanggapan" required>      
                                   <label for="tanggapan">Tanggapan</label>   
                                 </div>

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
                        function cari(id) {
                          $.ajax({
                            url: 'cari-petugas.php',
                            method: 'POST',
                            data: {id: id},
                            success: function(data) {
                              console.log(data)
                              var a = JSON.parse(data)
                              $('#nama_petugas').val(a.nama_petugas);
                              
                            },error: function(a,b,c) {
                              alert('gagal')
                              console.log(a,b,c)
                            }
                          })
                        }
                        $('#id_petugas').change(function() {
                          cari($(this).val())
                        })
                      </script>

                    </div>
                    <body>
                      <html>
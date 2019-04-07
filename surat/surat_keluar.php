<html>
<head>
<title>Surat Keluar</title>
  
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
      <a href="index.php" class="brand-logo"><b>SURAT KELUAR</b></a>
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
<div class="box">
            <div class="box-header">
            <br>
              <center>
                <a href="tambahsuratk.php"><button type="button" class="btn btn-success">Tambah Surat Keluar</button></a> &nbsp <a href="struk/laporansuratkeluar.php?id='.$data['no_agenda'].'"><button type="button" class="btn waves-effect waves-light blue">Cetak</button></a>   
              </center>
              <br>
            </div>
            <!-- /.box-header -->
               
              <div class="row">
              <div class="col s12 m20 ">
                <div class="card grey">
                  <div class="card-content white-text">

                   <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title"><center>SURAT KELUAR</center></h3>
                    </div>
                <table border=1 id="example1" class="bordered" >
                <thead>
                <tr>

                  <td>No</td>
                  <td>No Agenda</td>
                  <td>Id Petugas</td>
                  <td>Nama Petugas</td>
                  <td>Jenis Surat</td>
                  <td>Tanggal Kirim</td>
                  <td>No Surat</td>
                  <td>Pengirim</td>
                  <td>Perihal</td>
                  <td>Gambar</td>
                  <td>Actions</td>
                </tr>
                </thead>
               <tbody>

     <?php
    
    include('koneksi.php');
    
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysql_query("SELECT * FROM tb_surat_keluar INNER JOIN tb_petugas ON tb_petugas.id_petugas=tb_surat_keluar.id_petugas ORDER BY no_agenda DESC") or die(mysql_error());
    
    if(mysql_num_rows($query) == 0){  
      
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($query)){ 
        
        
        echo '<tr>';
          echo '<td>'.$no.'</td>';  
          
          
          echo '<td>'.$data['no_agenda'].'</td>';
          echo '<td>'.$data['id_petugas'].'</td>';
          echo '<td>'.$data['nama_petugas'].'</td>';
          echo '<td>'.$data['jenis_surat'].'</td>';
    	    echo '<td>'.$data['tanggal_kirim'].'</td>';
          echo '<td>'.$data['no_surat'].'</td>';
          echo '<td>'.$data['pengirim'].'</td>';
          echo '<td>'.$data['perihal'].'</td>';
          
          echo '<td><img style="height:80px " src="images/'.$data['gambar'].'"></td>';
        
          echo '<td><a href="editsuratk.php?id='.$data['no_agenda'].'"><button type="button" class="btn waves-effect waves-light blue">edit</button></a>  &nbsp 
          <a href="proseshapussuratk.php?id='.$data['no_agenda'].'" onclick="return confirm(\'Yakin Ingin menghapus data?\')"><button type="button" class="btn waves-effect waves-light red">Hapus</button></a></td>';
        echo '</tr>';
        
        $no++;
        
      }
      
    }
    ?>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section> 
  </div>
</body>
</html>
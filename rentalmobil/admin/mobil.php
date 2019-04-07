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
        
      <?php
       session_start();
        if(isset($_SESSION['user_name'])){
            echo '<span class="right" style="margin-right:30px"><i class="material-icons left">perm_identity</i>'.$_SESSION['user_name'].'</span>';
        }else{
          ?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="daftaradmin.php"><i class="material-icons left">add</i>DAFTAR</a></li>
              <li><a href="login.php"><i class="material-icons left">verified_user</i>LOGIN</a></li>
            </ul>
          <?php
        }
      ?>
    </div>

 
    <div class="nav-wrapper">
      <ul class="left hide-on-med-and-down">
      <li><a href="index.php"><i class="material-icons left">home</i>BERANDA</a></li>
      <li><a href="daftarpesan.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
      <!--<li><a href="daftarsewa.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>-->
      <li><a href="mobil.php"><i class="material-icons left">add</i>MOBIL</a></li>
      <li><a href="supir.php"><i class="material-icons left">add</i>SUPIR</a></li>
      <li><a href="collapsible.html"><i class="material-icons left">info</i>INFO</a></li>
      <li><a href="pengembalian.php"><i class="material-icons left">receipt</i>PENGEMBALIAN</a></li>
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
              <h3 class="box-title">Mobil</h3><br><br>
              <a href="tambahmobil.php"><button type="button" class="btn btn-success">Tambah Mobil</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="striped" >
                <thead>
                <tr>
               
                 <th>No</th>
                  <th>Plat Nomor</th>
                  <th>Merek Mobil</th>
                  <th>Jenis Mobil</th>
                  <th>Kecepatan</th>
                  <th>Kapasitas Muatan</th>
                  <th>Bahan Bakar</th>
                  <th>Warna Mobil</th>
                  <th>Harga/Hari</th>
                  <th>Gambar</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
     <?php
    
    include('../koneksi.php');
    
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysql_query("SELECT * FROM tb_mobil ORDER BY id_mobil DESC") or die(mysql_error());
    
    if(mysql_num_rows($query) == 0){  
      
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($query)){ 
        
        
        echo '<tr>';
          echo '<td>'.$no.'</td>';  
          
          
          echo '<td>'.$data['plat_nomor'].'</td>';
          echo '<td>'.$data['merek_mobil'].'</td>';
    	    echo '<td>'.$data['jenis_mobil'].'</td>';
          echo '<td>'.$data['kecepatan'].'</td>';
          echo '<td>'.$data['kapasitas'].'</td>';
          echo '<td>'.$data['bensin'].'</td>';
          echo '<td>'.$data['warna'].'</td>';
          echo '<td>'.$data['harga'].'</td>';
     
          echo '<td><img style="height:80px " src="../images/'.$data['gambar'].'"></td>';
        
          echo '<td><a href="editmobil.php?id='.$data['id_mobil'].'"><button type="button" class="btn btn-info">edit</button></a>  &nbsp <a href="proseshapusmobil.php?id='.$data['id_mobil'].'" onclick="return confirm(\'Yakin Ingin menghapus data?\')"><button type="button" class="btn btn-danger">Hapus</button></a></td>';
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
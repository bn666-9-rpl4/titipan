    	<!DOCTYPE html>
    	<html>
    	<head>
    		<title>MACAM MACAM MOBIL</title>
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

    	<!-- Menu -->
      <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper light-blue">
          <ul>
           <li><a href="login.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Untuk Penyewa"><i class="material-icons white-text left">account_circle</i>LOGIN</a></li>
          </ul>
          <a href="logadmin.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
          <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="macam.php">Macam Mobil</a></li>
          </ul>
        </div>
      </nav>
       </div>

    	<!-- Content -->
    	<br>
    	<br>
    	<br>
  <div class="container">
  <table class="responsive-table bordered highlight">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Mobil</th>
        <th>Jenis Mobil</th>
        <th>Warna</th>
        <th>Bahan Bakar</th>
        <th>Jumlah Kursi</th>
        <th>Status</th>
        <th>Sewa Perhari</th>
        <th>Plat Nomer</th>
        <th>Gambar</th>
        <th><i class="material-icons">menu</i></th>
      </tr>
    </thead>
    <?php
    include 'koneksi.php';
$query = mysql_query("SELECT * FROM mobil ORDER BY id DESC") or die(mysql_error());
    
    if(mysql_num_rows($query) == 0){  
      
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{  
      $no = 1;  
      while($data = mysql_fetch_assoc($query)){ 
        
        
echo '<tr>';
echo '<td>'.$no.'</td>';  
echo '<td>'.$data['namamobil'].'</td>';
echo '<td>'.$data['jenismobil'].'</td>';
echo '<td>'.$data['warna'].'</td>';
echo '<td>'.$data['bhnbakar'].'</td>';
echo '<td>'.$data['jmlkursi'].'</td>';
echo '<td>'.$data['status'].'</td>';
echo '<td>Rp.'.$data['sewa'].'</td>';
echo '<td>'.$data['plat'].'</td>';
echo '<td><img style="height:80px " src="images/'.$data['gambar'].'"></td>';
echo "<td><a href='#'class='btn disabled'>Pesan</button>";
echo '</tr>';
        
        $no++;
        
      }
      
    }
   ?>
  </div>
  </table>

      	<!-- Footer -->

            <footer class="page-footer light-blue">
              <div class="container">
                <div class="row">
                  <div class="col l6 s12">
                    <h5 class="white-text text-lighten-4">RENTAL MOBIL</h5>
                    <p class="grey-text text-lighten-4">Kami Akan Membantu apa yang anda butuhkan</p>
                  </div>
                  <div class="col l4 offset-l2 s12">
                  </div>
                </div>
              </div>
              <div class="footer-copyright">
                <div class="container center">
                 RENTAL MOBIL
                </div>
              </div>
            </footer>

    	</body>
    	</html>
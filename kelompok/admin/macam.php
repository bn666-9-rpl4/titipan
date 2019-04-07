      <!DOCTYPE html>
      <html>
      <head>
        <title>MACAM MACAM MOBIL</title>
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
           <li><a href="logout.php" class="btn tooltipped" data-position="bottom" data-delay="50"><i class="material-icons white-text left">account_circle</i>LOGOUT</a></li>
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
      </tr>
    </thead>
    <?php
    include '../koneksi.php';
  $result = mysql_query('SELECT * FROM mobil ORDER BY id DESC') or die(mysql_error());
  $no = 0;
  while ($row = mysql_fetch_assoc($result)) {
    $no++
    ?>
      <tr>
        <td><?=$no?></td>
        <td><?=$row['namamobil']?></td>
        <td><?=$row['jenismobil']?></td>
        <td><?=$row['warna']?></td>
        <td><?=$row['bhnbakar']?></td>
        <td><?=$row['jmlkursi']?></td>
        <td><?=$row['status']?></td> 
        <td>Rp.<?=$row['sewa']?></td> 
        <td><?=$row['plat']?></td> 
        <td><img style="width: 180px;" src="../images/<?=$row['gambar']?>"></td>
        <td>
          <a href="edit.php?id=<?=$row['id']?>" class="btn orange">Ubah</a>&nbsp;|&nbsp;
          <a href="hapus.php?id=<?=$row['id']?>" class="btn black">Hapus</a>
        </td>
        </tr>
    <?php } ?>
  </div>
  </table>

        <!-- Footer -->

            <footer class="page-footer green-darken-2">
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
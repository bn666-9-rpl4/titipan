<?php 
    require 'cekadmin.php';
  ?>
  <!DOCTYPE html>
<html>
<head>
	<title></title>
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

  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper light-blue">
      <ul>
      	<li><a href="../login.php" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Khusus ADMIN"><i class="material-icons white-text left">account_circle</i>LOGOUT</a></li>
      </ul>
      <a href="index.php" class="brand-logo center">RENTAL MOBIL ONLINE</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="pendaftaran.php">Daftar Penyewa</a></li>
      <li><a href="penyewaan.php">Penyewaan</a></li>
      <li><a href="macam.php">Macam Mobil</a></li>
      </ul>
    </div>
  </nav>
   </div>

<div class="container">
<table class="responsive-table bordered highlight">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Penyewa</th>
			<th>Nama Mobil</th>
			<th>Menyewa</th>
			<th>Tanggal Sewa</th>
			<th>Tanggal Pengembalian</th>
			<th>Status</th>
			<th><i class="material-icons">menu</i></th>
		</tr>
	</thead>
	<?php
	include 'koneksi.php';
	$result = mysql_query('SELECT id, namalengkap, jurusan, asalsekolah, nonisn, noijazah, noskhu FROM pendaftaran');
	$no = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$no++
		?>
			<tr>
				<td><?=$no?></td>
				<td><?=$row['namapenyewa']?></td>
				<td><?=$row['namamobil']?></td>
				<td><?=$row['menyewa']?></td>
				<td><?=$row['tglsewa']?></td>
				<td><?=$row['tglpengembalian']?></td>
				<td><?=$row['Status']?></td> 
				<td><a href="detail.php?id=<?=$row['id']?>">Detail</a></td>
				<td><a href="laporan.php?id=<?=$row['id']?>">Laporan Siswa</a></td>
			</tr>
		<?php } ?>
</div>
</table>

</div>
	
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
          </footer></footer>

</body>
</html>
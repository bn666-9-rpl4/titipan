<?php
session_start();
if (!isset($_SESSION['id_user'])) {
	header('location:../login/loginuser.php');
}
?>
<html>
<head>
	<title>RentalMobil.com</title>

	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="../material-design-icons/material-icons.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="layout/styles/layout.css" media="all">


	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head> 
<body>

	<nav class="nav-extended panel teal lighten-2">
		<div class="nav-wrapper">
			<a href="index.php" class="brand-logo"><b>RENTAL MOBIL.COM</b></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>


		<div class="nav-wrapper">
			<ul class="left hide-on-med-and-down">
				<li><a href="../index.php"><i class="material-icons left">home</i>BERANDA</a></li>
				<li><a href="../pemesanan/pemesananmobil.php"><i class="material-icons left">receipt</i>PEMESANAN</a></li>
				<li><a href="penyewaan/penyewaanmobil.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
				<li><a href="collapsible.html"><i class="material-icons left">info</i>INFO SEWA</a></li>
			</ul>
		</div>
	</nav>

	<center>
		<!--  FORM PENDAFTARAN  --> 
		<form action="../pemesanan/prosespesan.php" method="post">  
			<input type='hidden' name='id_mobil'>
			<input type='hidden' name='id_user' value="<?=$_SESSION['id_user']?>">
			<div class="container"> 
				<div class="input-field col s12 m6 l6 xl6"> 
					<h4 class="center-align">Penyewaan Mobil</h4>
					<hr color="#e53935"><br /> 
				</div>


				<div class="input-field col s12 m6 l6 xl6">
					<select name="id_mobil">
						<option value="<?=$_GET['id_mobil']?>">Kode Mobil</option>     
						<?php
							include('../koneksi.php');
							$sql = mysql_query('SELECT id_mobil FROM tb_mobil') or die(mysql_error());
							while($row = mysql_fetch_assoc($sql)){
								echo "<option>$row[id_mobil]</option>";
							}
							$sql = mysql_query('SELECT * FROM tb_mobil WHERE id_mobil='.$_GET['id_mobil']) or die(mysql_error());
							$mobil = mysql_fetch_assoc($sql);
							$sql = mysql_query("SELECT * FROM tb_user WHERE id_user='".$_SESSION['id_user']."'") or die(mysql_error());
							$user = mysql_fetch_assoc($sql);
						?>   
					</select>
				</div>

			<tr width=200 height=100>
			<img  src="../images/<?=$mobil['gambar']?>">
			
				<div class="input-field col s12 m6 l6 xl6"> 
				<input disabled value='<?=$mobil["plat_nomor"]?>' id="plat_nomor" type="text" class="validate" name="plat_nomor" >        
					<label for="plat_nomor">Plat Nomor</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6"> 
				<input disabled value='<?=$mobil["merek_mobil"]?>' id="merek_mobil" type="text" class="validate" name="merek_mobil" >        
					<label for="merek_mobil">Merek Mobil</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input disabled value='<?=$mobil["jenis_mobil"]?>' id="jenis_mobil" type="text" class="validate" name="jenis_mobil" >
					<label for="jenis_mobil">Jenis Mobil</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input disabled value='<?=$mobil["kecepatan"]?>' id="kecepatan" type="text" class="validate" name="kecepatan" >
					<label for="kecapatan">Kecepatan</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input disabled value='<?=$mobil["kapasitas"]?>' id="kapasitas" type="text" class="validate" name="kapasitas" >
					<label for="kapasitas">Kapasitas Muatan</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input disabled value='<?=$mobil["bensin"]?>' id="bensin" type="text" class="validate" name="bensin" >
					<label for="bensin">Bahan Bakar</label>
				</div>
				<div class="input-field col s12 m6 l6 xl6">
					<input disabled value='<?=$mobil["warna"]?>' id="warna" type="text" class="warna" name="warna" >
					<label for="warna">Warna Mobil</label>
				</div>     

				<div class="input-field col s12 m6 l6 xl6">    
					<input value='<?=$user["no_ktp"]?>' id="no_ktp" type="text"class="validate" name="no_ktp" >
					<label for="no_ktp">Nomor KTP</label>
				</div>
				<div class="input-field col s12 m6 l6 xl6">        
					<input value='<?=$user["nama"]?>' id="nama" type="text" class="validate" name="nama" >  
					<label for="nama">Nama Pemesan</label>  
				</div>
				<div class="input-field col s12 m6 l6 xl6">
					<input value='<?=$user["alamat"]?>' id="alamat" type="text" class="validate" name="alamat" >  
					<label for="alamat">Alamat</label>  
				</div>  
				<div class="input-field col s12 m6 l6 xl6">        
					<input value='<?=$user["nohp"]?>' id="nohp" type="text" class="validate" name="nohp " >  
					<label for="nohp">No Hp</label>  
				</div>  

				<div class="input-field col s12 m6 l6 xl6">
					<input id="tgl_pinjam" type="text" class="datepicker" name="tgl_pinjam" >
					<label for="tgl_pinjam">Tanggal Pinjam</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input id="tgl_kembali" type="text" class="datepicker" name="tgl_kembali" >
					<label for="tgl_kembali">Tanggal Kembali</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input value='<?=$mobil["harga"]?>' id="harga" type="text" class="validate" name="harga" >
					<label for="harga">Harga/Hari</label>
				</div>

					  <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
			
  			  <button class="btn waves-effect waves-light red" type="reset" name="action">Batal
    <i class="material-icons right">delete</i>
  </button

			</div>
		</form>
		&nbsp;

		<!--  AKHIR FORM PENDAFTARAN  -->


		<script type="text/javascript">
			$(document).ready(function() {
				$('select').material_select();
				$('.datepicker').pickadate({
    selectMonths: false, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
})
			});
		</script>
	</div> 
</body>
</html>

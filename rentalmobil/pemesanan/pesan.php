<?php
session_start();
if (!isset($_SESSION['id_user'])) {
	header('location:../login/loginuser.php');
}
?>
<html>
<head>
	<title>RentalMobil.com</title>

<script type="text/javascript">
	function durasi(){
		var pinjam = document.getElementById('pinjam').value.substring(0,2);
		var kembali = document.getElementById('kembali').value.substring(0,2);

		var lama = parseInt(kembali) - parseInt(pinjam);

		if (!isNaN(lama)) {
			document.getElementById('lama').value = lama;
		};
	}
	function hitung(){
		var lama = document.getElementById('lama').value;
		var harga = document.getElementById('harga').value;

		var total = parseInt(lama) * parseInt(harga);

		if (!isNaN(total)) {
			document.getElementById('total').value = total;
		};
		Materialize.updateTextFields();
	}
</script>

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
				<li><a href="../penyewaan/penyewaanmobil.php"><i class="material-icons left">receipt</i>PENYEWAAN</a></li>
				<li><a href="../infosewa.php"><i class="material-icons left">info</i>INFO SEWA</a></li>
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
					<h4 class="center-align">Pemesanan Mobil</h4>
					<hr color="#e53935"><br /> 
				</div>


				<div class="input-field col s12 m6 l6 xl6">
					<select name="id_mobil" onchange="cari(this.value)">
						<option value="<?=$_GET['id_mobil']?>">Pilih Mobil</option>     
						<?php
							include('../koneksi.php');
							$sql = mysql_query('SELECT id_mobil, merek_mobil FROM tb_mobil') or die(mysql_error());
							while($row = mysql_fetch_assoc($sql)){
								echo "<option value='$row[id_mobil]'>$row[merek_mobil]</option>";
							}
							$sql = mysql_query('SELECT * FROM tb_mobil WHERE id_mobil='.$_GET['id_mobil']) or die(mysql_error());
							$mobil = mysql_fetch_assoc($sql);
							$sql = mysql_query("SELECT * FROM tb_user WHERE id_user='".$_SESSION['id_user']."'") or die(mysql_error());
							$user = mysql_fetch_assoc($sql);
						?>   
					</select>
				</div>

			<tr width=200 height=100>
			<img id="gambar_mobil" src="../images/<?=$mobil['gambar']?> " width="100%">
			
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
					<input value='<?=$user["jeniskelamin"]?>' id="jeniskelamin" type="text" class="validate" name="jeniskelamin" >  
					<label for="jeniskelamin">Jenis kelamin</label>  
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
					<input id="pinjam" type="text" name="tgl_pinjam" class="datepicker" onkeyup="durasi();hitung();" onchange="durasi();hitung();"/>
					<label for="tgl_pinjam">Tanggal Pinjam</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input id="kembali" type="text" name="tgl_kembali" class="datepicker" onkeyup="durasi();hitung();" onchange="durasi();hitung();" />
					<label for="tgl_kembali">Tanggal Kembali</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input id="lama" type="text" name="lama" onkeyup="hitung();" onchange="hitung();"/>
					<label for="tgl_kembali">Lama</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input value='<?=$mobil["harga"]?>' id="harga" type="text" name="harga" onkeyup="hitung();"/>
					<label for="harga">Harga/Hari</label>
				</div>

				<div class="input-field col s12 m6 l6 xl6">
					<input id="total" type="text" class="validate" name="total">
					<label for="total">Total Harga</label>
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
			function cari(id) {
				$.ajax({
					url: '../cari-mobil.php',
					method: 'POST',
					data: {id: id},
					success: function(data) {
						var a = JSON.parse(data)
						$('#plat_nomor').val(a.plat_nomor);
						$('#merek_mobil').val(a.merek_mobil);
						$('#tanggal').val(a.tanggal);
						$('#jenis_mobil').val(a.jenis_mobil);
						$('#kecepatan').val(a.kecepatan);
						$('#kapasitas').val(a.kapasitas);
						$('#bensin').val(a.bensin);
						$('#warna').val(a.warna);
						$('#harga').val(a.harga);
						$('#gambar_mobil').attr('src','../images/'+a.gambar);
					},error: function(a,b,c) {
						alert('gagal')
						console.log(a,b,c)
					}
				})
			}
			$('#id_mobil').change(function() {
				cari($(this).val())
			})
			// Asyncronous Javascript and XML
		</script>
	</div> 

<!---Footer-->
  <footer class="page-footer panel teal lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Rentalmobil.com</h5>
                <p class="grey-text text-lighten-4"><i class="material-icons left">location_on</i>Jl.Jatinangor Ds.Cibeusi Kab.Sumedang Prov.Jawa Barat</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">call</i>+6289501462420</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons left">chat</i>+6289501462420</a></li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">XII RPL 4</a>
            </div>
          </div>
        </footer>

<body>
<html>

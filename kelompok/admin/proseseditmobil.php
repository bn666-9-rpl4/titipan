<?php
if(isset($_POST['submit'])){


	include '../koneksi.php';
	
	$namamobil = $_POST['namamobil'];
	$jenismobil = $_POST['jenismobil'];
	$warna = $_POST['warna'];
	$bhnbakar = $_POST['bhnbakar'];
	$jmlkursi = $_POST['jmlkursi'];
	$status = $_POST['status'];
	$sewa = $_POST['sewa'];
	$plat = $_POST['plat'];

	$gambar = $_FILES['gambar']['name'];
	$tmp    = $_FILES['gambar']['tmp_name'];
	$ext    = pathinfo($gambar, PATHINFO_EXTENSION);

	$gambarganti = DATE ('dmYHis').$gambar.$ext;
	$path     = "../images".$gambarganti;
	if(move_uploaded_file($tmp, $path)){
	$query = "UPDATE mobil SET(
				'',
				Nama Mobil = '".$namamobil."',
				Jenis Mobil = '".$jenismobil."',
				Warna Mobil = '".$warna."',
				Bahan Bakar = '".$bhnbakar."',
				Jumlah Kursi = '".$jmlkursi."',
				Status Mobil = '".$status."',
				Sewa / Hari = '".$sewa."',
				Plat Nomer = '".$plat."',
				Gambar Mobil = '".$gambar."')";
	$sql = mysql_query($query) OR die (mysql_error());
	if ($sql){
		?>
		<script type="text/javascript">
			alert("Ubah Data Sukses");
			window.location = "macam.php";
		</script>
		<?php
	}
}
?>
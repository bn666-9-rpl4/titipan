<?php
	include 'koneksi.php';
	
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
	$ext    = pathinfo($foto, PATHINFO_EXTENSION);

	$FOTOBARU = DATE ('dmYHis').$foto.$ext;
	$path     = "../images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO mobil VALUES(
				'',
				'".$namamobil."',
				'".$jenismobil."',
				'".$warna."',
				'".$bhnbakar."',
				'".$jmlkursi."',
				'".$status."',
				'".$sewa."',
				'".$plat."',
				'".$gambar."')";
	$sql = mysql_query($query) OR die (mysql_error());
	if ($sql){
		?>
		<script type="text/javascript">
			alert("Tambah Data Sukses");
			window.location = "../macam.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Terjadi Kesalahan Saat Menambahkan Data");
			window.location = "tambahmobil.php";
		</script>
		<?php
	}
	}else{
		?>
		<script type="text/javascript">
			alert("Terjadi Kesalahan Saat Menambahkan Data");
			window.location = "tambahmobil.php";
		</script>
		<?php
}
?>
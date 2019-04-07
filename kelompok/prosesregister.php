<?php
if(isset($_POST['kirim'])){

	include 'koneksi.php';
	
	$nik = $_POST['nik'];
	$namalengkap = $_POST['namalengkap'];
	$jk = $_POST['jk'];
	$usia = $_POST['usia'];
	$nohp = $_POST['nohp'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO pelanggan VALUES(
				'',
				'".$nik."',
				'".$namalengkap."',
				'".$jk."',
				'".$usia."',
				'".$nohp."',
				'".$email."',
				'".$username."',
				'".$password."',
				'".$alamat."')";
	$sql = mysql_query($query) OR die (mysql_error());
	if ($sql){
		?>
		<script type="text/javascript">
			alert("Register	 Sukses");
			window.location = "login.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Terjadi Kesalahan Saat Menambahkan Data");
			window.location = "register.php";
		</script>
		<?php
	}
}
?>
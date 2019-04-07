<?php
	session_start();
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek = mysql_query("SELECT * FROM admin WHERE username = '$username'");
		$hasil = mysql_fetch_array($cek);
			if (mysql_num_rows($cek) ==0 ) {
				echo "<div align='center'> Username Belum Terdaftar <a href='logadmin.php'>Back</a></div>";
			} else {
				if($password <> $hasil ['password']){
					echo "<div align='center'> Password Salah! <a href='logadmin.php'>Back</a></div>";
				} else {
					$_SESSION['adminsudahlogin'] = true;
					$_SESSION['usernameadmin'] = $hasil['username'];
					header("location:admin/");
				}
			}
?>
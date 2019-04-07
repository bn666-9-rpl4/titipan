<?php
include "../koneksi.php";

$no_ktp=$_POST['no_ktp'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("insert into tb_user values(NULL,'$no_ktp','$nama','$jeniskelamin','$alamat','$nohp','$username','$password')");

?>

if ($query) {
echo "<script>alert('Selamat anda sudah terdaftar'); window.location = '../login/loginuser.php'</script>";	
} else {
echo "<script>alert('Data gagal di simpan'); window.location ='../daftarlogin/daftarlogin.php'</script>";	
}

<!--<div align="center"> 
  <h2>Anda berhasil daftar..</h2> 
  <a href="../login/loginuser.php"> Login </a>
</div>-->

</body>
</html>>
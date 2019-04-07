<?php
$koneksi=mysql_connect("localhost","root","");
$db=mysql_select_db("rentalmobil");

if(!$koneksi){
	echo "Koneksi Gagal!";
}
if(!$db){
	echo "Database tidak ada!";

}
?>
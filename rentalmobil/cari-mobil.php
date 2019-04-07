<?php
header("Content-Type:text/event-stream");
header("Cache-Control:no-control");
include 'koneksi.php';

$res = mysql_query("SELECT * FROM tb_mobil WHERE id_mobil='".$_POST['id']."'");
$data = mysql_fetch_assoc($res);
$output = "{
	\"id_mobil\": \"${data['id_mobil']}\",
	\"plat_nomor\": \"${data['plat_nomor']}\",
	\"merek_mobil\": \"${data['merek_mobil']}\",
	\"tanggal\": \"${data['tanggal']}\",
	\"jenis_mobil\": \"${data['jenis_mobil']}\",
	\"kecepatan\": \"${data['kecepatan']}\",
	\"kapasitas\": \"${data['kapasitas']}\",
	\"bensin\": \"${data['bensin']}\",
	\"warna\": \"${data['warna']}\",
	\"harga\": \"${data['harga']}\",
	\"gambar\": \"${data['gambar']}\"
}";

echo $output;
flush();

<?php
header("Content-Type:text/event-stream");
header("Cache-Control:no-control");
include 'koneksi.php';

$res = mysql_query("SELECT * FROM tb_supir WHERE id_supir='".$_POST['id']."'");
$data = mysql_fetch_assoc($res);
$output = "{
	\"id_mobil\": \"${data['id_mobil']}\",
	\"nama\": \"${data['nama']}\",
}";

echo $output;
flush();

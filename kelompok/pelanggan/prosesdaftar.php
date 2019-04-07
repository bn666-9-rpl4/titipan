<?php
	include 'koneksi.php';
	
	$namalengkap = $_POST['namalengkap'];
	$jurusan = $_POST['jurusan'];
	$jk = $_POST['jk'];
	$tempatlahir = $_POST['tempatlahir'];
	$tgllahir = date('Y-m-d',strtotime($_POST['tgllahir']));
	$nik = $_POST['nik'];
	$agama = $_POST['agama'];
	$asalsekolah = $_POST['asalsekolah'];
	$tahunlulus = $_POST['tahunlulus'];
	$noijazah = $_POST['noijazah'];
	$noskhun = $_POST['noskhun'];
	$nonisn = $_POST['nonisn'];
	$namaayah = $_POST['namaayah'];
	$pekerjaanayah = $_POST['pekerjaanayah'];
	$namaibu = $_POST['namaibu'];
	$pekerjaanibu = $_POST['pekerjaanibu'];
	$alamatmurid = $_POST['alamatmurid'];

	mysql_query(
		"INSERT INTO pendaftaran VALUES(
			NULL,
			'$namalengkap',
			'$jurusan',
			'$jk',
			'$tempatlahir',
			'$tgllahir',
			'$nik',
			'$agama',
			'$asalsekolah',
			'$tahunlulus',
			'$noijazah',
			'$noskhun',
			'$nonisn',
			'$namaayah',
			'$pekerjaanayah',
			'$namaibu',
			'$pekerjaanibu',
			'$alamatmurid',

			'$namapanggilan',
			'$status',
			'$jumlahsaudara'

		)")or die(mysql_error());
	header("location: tablesiswa.php");
?>
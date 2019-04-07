<?php
include("../koneksi.php");
if(isset($_POST['submit'])){
	$id = $_POST['id'];
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

	$namapanggilan = $_POST['namapanggilan'];
	$status = $_POST['status'];
	$jumlahsaudara = $_POST['jumlahsaudara'];
	$golongandarah = $_POST['golongandarah'];
	$tinggibadan = $_POST['tinggibadan'];
	$beratbadan = $_POST['beratbadan'];
	$hobi = $_POST['hobi'];
	$prestasi = $_POST['prestasi'];
	$eskul = $_POST['eskul'];

	$tmptlahirayah = $_POST['tmptlahirayah'];
	$tgllahirayah = date('Y-m-d',strtotime($_POST['tgllahirayah']));
	$agamaayah = $_POST['agamaayah'];
	$alamatayah = $_POST['alamatayah'];
	$notelpayah = $_POST['notelpayah'];
	$kewarganegaraanayah = $_POST['kewarganegaraanayah'];
	$pendidikanterakhirayah = $_POST['pendidikanterakhirayah'];
	$penghasilanperbulanayah = $_POST['penghasilanperbulanayah'];
	$kpsayah = $_POST['kpsayah'];
	$tempatkerjaayah = $_POST['tempatkerjaayah'];

	$tmptlahiribu = $_POST['tmptlahiribu'];
	$tgllahiribu = date('Y-m-d',strtotime($_POST['tgllahiribu']));
	$agamaibu = $_POST['agamaibu'];
	$alamatibu = $_POST['alamatibu'];
	$notelpibu = $_POST['notelpibu'];
	$kewarganegaraanibu = $_POST['kewarganegaraanibu'];
	$pendidikanterakhiribu = $_POST['pendidikanterakhiribu'];
	$penghasilanperbulanibu = $_POST['penghasilanperbulanibu'];
	$kpsibu = $_POST['kpsibu'];
	$tempatkerjaibu = $_POST['tempatkerjaibu'];

	$hubdgnsiswa = $_POST['hubdgnsiswa'];
	$namalengkapwali = $_POST['namalengkapwali'];
	$tmptlahirwali = $_POST['tmptlahirwali'];
	$tgllahirwali = date('Y-m-d',strtotime($_POST['tgllahirwali']));
	$alamatwali = $_POST['alamatwali'];
	$notelpwali = $_POST['notelpwali'];
	$kewarganegaraanwali = $_POST['kewarganegaraanwali'];
	$pendidikanterakhirwali = $_POST['pendidikanterakhirwali'];
	$penghasilanperbulanwali = $_POST['penghasilanperbulanwali'];
	$tempatkerjawali = $_POST['tempatkerjawali'];


	$sql = "UPDATE pendaftaran SET
			namalengkap='$namalengkap',
			jurusan='$jurusan',
			jk='$jk',
			tempatlahir='$tempatlahir',
			tgllahir='$tgllahir',
			nik='$nik',
			agama='$agama',
			asalsekolah='$asalsekolah',
			tahunlulus='$tahunlulus',
			noijazah='$noijazah',
			noskhu='$noskhun',
			nonisn='$nonisn',
			namaayah='$namaayah',
			pekerjaanayah='$pekerjaanayah',
			namaibu='$namaibu',
			pekerjaanibu='$pekerjaanibu',
			alamatmurid='$alamatmurid'
			WHERE id = '$id'";
	$query = mysql_query($sql) or die(mysql_error());
	if( $query ) {
		header('location: detail.php?id='.$id);
	} else {
		"Gagal menyimpan perubahan data...";
	}
}

?>
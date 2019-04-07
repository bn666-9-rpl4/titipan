-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 11:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE IF NOT EXISTS `tb_disposisi` (
  `no_disposisi` varchar(15) NOT NULL,
  `no_agenda` varchar(15) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `status_surat` varchar(30) NOT NULL,
  `tanggapan` varchar(70) NOT NULL,
  PRIMARY KEY (`no_disposisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_surat`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_surat` (
  `id_surat` varchar(12) NOT NULL,
  `jenis_surat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`id_surat`, `jenis_surat`) VALUES
('SR01', 'Biasa'),
('SR02', 'Rahasia'),
('SR03', 'Sangat Rahasia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE IF NOT EXISTS `tb_petugas` (
  `id_petugas` varchar(12) NOT NULL,
  `nama_petugas` varchar(70) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `telepon` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak` varchar(50) NOT NULL,
  `gambarp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `jenkel`, `alamat`, `telepon`, `username`, `password`, `hak`, `gambarp`) VALUES
('p01', 'Iqbal Khairullah', 'laki-laki', 'Jatinangor', 2147483647, 'iqbal', 'admin', 'admin', '07022018040825B612-2016-02-02-08-23-56_1.jpg'),
('p02', 'Rangga Setia Pratama', 'laki-laki', 'Rancaekek', 2147483647, 'rangga', 'rangga', 'Petugas', 'B612-2016-02-02-08-31-44_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keluar` (
  `no_agenda` varchar(15) NOT NULL,
  `id_petugas` varchar(15) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `tanggal_kirim` varchar(25) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  PRIMARY KEY (`no_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`no_agenda`, `id_petugas`, `jenis_surat`, `tanggal_kirim`, `no_surat`, `pengirim`, `perihal`, `gambar`) VALUES
('no001', 'p01', 'surat_tugas', '', '001/II/2018', 'Direktur Utama', 'surat tugas untuk berllibur', 'images-laporan-surat-keluar-software-surat-keluar-surat-masuk.jpg'),
('no01', 'p01', 'surat_tugas', '2018-02-09', '001/TGS/I/2018', 'Iqbal Khairullah', 'Surat tugas ke pekerjaan', '09022018065450laporan.png'),
('no03', 'p02', 'surat_ijin', '2018-02-09', '003/IJIN/I/2018', 'Iqbal Khairullah', 'Ijin Pulang', 'delete col.png'),
('no04', 'p02', 'surat_pemberitahuan', '2018-02-09', '003/PMB/II/2018', 'Fahrul', 'pmb', 'laporan.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_surat_masuk` (
  `no_agenda` varchar(15) NOT NULL,
  `id_petugas` varchar(15) NOT NULL,
  `jenis_surat` varchar(15) NOT NULL,
  `tanggal_kirim` varchar(30) NOT NULL,
  `tanggal_terima` varchar(30) NOT NULL,
  `no_surat` varchar(25) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `no_disposisi` varchar(15) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `tanggapan` varchar(220) NOT NULL,
  PRIMARY KEY (`no_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`no_agenda`, `id_petugas`, `jenis_surat`, `tanggal_kirim`, `tanggal_terima`, `no_surat`, `pengirim`, `perihal`, `no_disposisi`, `kepada`, `keterangan`, `tanggapan`) VALUES
('no09', 'p01', 'surat_pemberhen', '2018-02-12', 'kkug', 'iqbal K', 'uiah', 'klahs', 'p02', 'lkh', 'jkh', 'laporan.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

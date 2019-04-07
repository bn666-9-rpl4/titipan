-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 08:58 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_beranda`
--

CREATE TABLE IF NOT EXISTS `tb_beranda` (
  `id_beranda` int(10) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  PRIMARY KEY (`id_beranda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_beranda`
--

INSERT INTO `tb_beranda` (`id_beranda`, `kategori`, `judul`, `isi`, `gambar`) VALUES
(10, 'la', 'aha', 'll', '1910201708201319102017074617mo'),
(11, 'j', 'hh', 'j', '1910201708214119102017080259mo'),
(12, 't', 'tt', 't', '191020171137061910201708214119');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE IF NOT EXISTS `tb_mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `plat_nomor` varchar(20) NOT NULL,
  `merek_mobil` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `kecepatan` varchar(20) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `bensin` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `plat_nomor`, `merek_mobil`, `tanggal`, `jenis_mobil`, `kecepatan`, `kapasitas`, `bensin`, `warna`, `harga`, `gambar`) VALUES
(31, 'D 1516 DD', 'Honda Mobilio', '31-10-2017', 'Minibus', '1500 Cc', '7 Orang', 'Pertalite', 'Putih', 300000, '311020171521522017-10-25-12-37-00--70707562.jpegjpeg'),
(32, 'D 1517 DE', 'Honda Brio', '31-10-2017', 'Sport', '1700 Cc', '5 Orang', 'Pertamax', 'Merah', 200000, '31102017152500images-2.jpegjpeg'),
(33, '12324', 'ghyjyj', '08-11-2017', 'asdsd', 'ssdvd', 'asdsad', 'dsvdsv', 'ggreg', 12, '0811201708105219102017074513mobilD.jpgjpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tb_pemesanan` (
  `tgl_pemesanan` varchar(25) NOT NULL,
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(5) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`tgl_pemesanan`, `id_pemesanan`, `id_mobil`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `lama`, `total`) VALUES
('', 1, 0, 4, '0000-00-00', '0000-00-00', 0, 0),
('', 2, 0, 4, '0000-00-00', '0000-00-00', 0, 0),
('', 3, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('1970-01-01 00:00:00', 4, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('1970-01-01 00:00:00', 5, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('1970-01-01 00:00:00', 6, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 7, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 8, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 9, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 10, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 11, 33, 4, '2017-10-22', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 12, 23, 4, '2017-10-30', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 13, 23, 4, '2017-10-29', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 14, 23, 4, '1970-01-01', '1970-01-01', 0, 0),
('2017-10-30 00:00:00', 15, 24, 4, '2017-10-30', '2017-10-31', 0, 0),
('2017-10-30 00:00:00', 16, 24, 4, '2017-10-01', '2017-10-02', 0, 0),
('2017-10-31 00:00:00', 17, 24, 4, '2017-10-31', '2017-10-31', 0, 0),
('2017-10-31 00:00:00', 18, 24, 4, '2017-10-29', '2017-10-31', 0, 0),
('2017-10-31 00:00:00', 19, 24, 4, '2017-10-31', '2017-10-31', 0, 0),
('2017-10-31 00:00:00', 20, 24, 4, '2017-10-31', '2017-10-31', 0, 0),
('2017-10-31 00:00:00', 21, 24, 4, '2017-10-31', '2017-10-31', 0, 0),
('2017-10-31 00:00:00', 22, 24, 4, '2017-10-31', '2017-10-31', 0, 0),
('2017-10-31 00:00:00', 23, 23, 4, '2017-10-31', '2017-11-01', 0, 0),
('2017-10-31 00:00:00', 24, 25, 4, '2017-10-31', '2017-11-01', 0, 0),
('2017-10-31 00:00:00', 26, 26, 4, '1970-01-01', '1970-01-01', 0, 0),
('2017-10-31 00:00:00', 27, 26, 4, '2017-10-31', '2017-11-01', 0, 0),
('2017-11-03 00:00:00', 31, 32, 4, '2017-11-03', '2017-11-25', 22, 4400000),
('2017-11-03 00:00:00', 32, 31, 4, '2017-11-03', '2017-11-09', 6, 1800000),
('2017-11-08', 33, 32, 4, '2017-11-08', '2017-11-30', 22, 4400000),
('2017-11-08', 34, 32, 6, '2017-11-05', '2017-11-09', 4, 800000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyewaan`
--

CREATE TABLE IF NOT EXISTS `tb_penyewaan` (
  `tgl_penyewaan` datetime NOT NULL,
  `id_penyewaan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_penyewaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `no_ktp`, `nama`, `jeniskelamin`, `alamat`, `nohp`, `username`, `password`) VALUES
(1, 76547, 'kh', '', 'kh', 9708, 'kh', 'kh'),
(2, 98796, 'gi', '', 'oh', 98765, 'kk', 'kk'),
(3, 978, 'b', '', 'hh', 0, 'b', 'b'),
(4, 2147483647, 'Iqbal Khairullah', '', 'Jatinangor', 2147483647, 'Iqbal Khairullah', 'admin'),
(5, 2147483647, 'Krisnafauzy', '', 'Bandung', 89660750, 'krisna', 'krisna'),
(6, 12345, 'Andri', '', 'bata', 8978, 'andri', 'admin'),
(7, 89768574, 'iki', '', 'iqi', 99685, 'iki', 'iki'),
(8, 89876, 'lkljg', 'laki', 'kjhkg', 897, 'i', 'i');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

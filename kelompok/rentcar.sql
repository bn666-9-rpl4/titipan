-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 11:09 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namamobil` varchar(25) NOT NULL,
  `jenismobil` varchar(25) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `bhnbakar` varchar(25) NOT NULL,
  `jmlkursi` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `sewa` int(11) NOT NULL,
  `plat` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `namamobil`, `jenismobil`, `warna`, `bhnbakar`, `jmlkursi`, `status`, `sewa`, `plat`, `gambar`) VALUES
(1, 'dsansdan', 'dsandsan', 'dsandsan', 'dsandsan', 28, 'dsandsan', 292992, 'dsnsadn', 'mobil6.jpg'),
(2, 'sadnan', 'sdandan', 'dsanasn', 'dsandasn', 29, 'dsnaans', 20000, 'dsanna', 'mobil5.jpg'),
(4, 'hhh', 'minibus', 'merah', 'premium', 6, 'baik', 2000000, '2345', 'mobil2.jpg'),
(5, 'Honda Jazz', 'sport', 'kuning', 'premium', 4, 'baik', 300000, 'Z30AP', 'mobil3.jpg'),
(6, 'Honda Brio', 'minibus', 'hitam', 'premium', 6, 'baik', 25900, 'D90AB', 'mobil6.jpg'),
(7, 'avanza', 'minibus', 'biru', 'premium', 4, 'baik', 3000000, 'D345K', 'mobil4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) NOT NULL,
  `namalengkap` varchar(32) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `nohp` int(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nik`, `namalengkap`, `jk`, `usia`, `nohp`, `email`, `username`, `password`, `alamat`) VALUES
(4, 1132132131, 'ss', 'Laki-Laki', '21', 2147483647, 'aandriiww@gmail.com', 'aandriiww', 'andrian090', 'jljati ryaa');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `tglpinjam` varchar(25) NOT NULL,
  `tglkembali` varchar(25) NOT NULL,
  `harga` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

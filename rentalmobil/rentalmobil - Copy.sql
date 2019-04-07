-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 08:51 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_beranda`
--

CREATE TABLE `tb_beranda` (
  `id_beranda` int(10) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `plat_nomor` varchar(20) NOT NULL,
  `merek_mobil` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `kecepatan` varchar(20) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `bensin` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `plat_nomor`, `merek_mobil`, `tanggal`, `jenis_mobil`, `kecepatan`, `kapasitas`, `bensin`, `warna`, `harga`, `gambar`) VALUES
(31, 'D 1516 DD', 'Honda Mobilio', '31-10-2017', 'Minibus', '1500 Cc', '7 Orang', 'Pertalite', 'Putih', 300000, '311020171521522017-10-25-12-37-00--70707562.jpegjpeg'),
(32, 'D 1517 DE', 'Honda Brio', '31-10-2017', 'Sport', '1700 Cc', '5 Orang', 'Pertamax', 'Merah', 200000, '31102017152500images-2.jpegjpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `tgl_pemesanan` varchar(25) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(5) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`tgl_pemesanan`, `id_pemesanan`, `id_mobil`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `lama`, `total`) VALUES
(NULL, 1, 0, 4, '0000-00-00', '0000-00-00', 0, 0),
(NULL, 2, 0, 4, '0000-00-00', '0000-00-00', 0, 0),
(NULL, 3, 0, 4, '2017-10-29', '2017-10-31', 0, 0),
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
('2017-11-03 00:00:00', 32, 31, 4, '2017-11-03', '2017-11-09', 6, 1800000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyewaan`
--

CREATE TABLE `tb_penyewaan` (
  `tgl_penyewaan` datetime NOT NULL,
  `id_penyewaan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `no_ktp`, `nama`, `alamat`, `nohp`, `username`, `password`) VALUES
(1, 76547, 'kh', 'kh', 9708, 'kh', 'kh'),
(2, 98796, 'gi', 'oh', 98765, 'kk', 'kk'),
(3, 978, 'b', 'hh', 0, 'b', 'b'),
(4, 2147483647, 'Iqbal Khairullah', 'Jatinangor', 2147483647, 'Iqbal Khairullah', 'admin'),
(5, 2147483647, 'Krisnafauzy', 'Bandung', 89660750, 'krisna', 'krisna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_beranda`
--
ALTER TABLE `tb_beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_beranda`
--
ALTER TABLE `tb_beranda`
  MODIFY `id_beranda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

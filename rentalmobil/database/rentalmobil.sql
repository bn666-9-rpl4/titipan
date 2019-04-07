-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 05:09 AM
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
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `gambar` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `plat_nomor`, `merek_mobil`, `tanggal`, `jenis_mobil`, `kecepatan`, `kapasitas`, `bensin`, `warna`, `harga`, `gambar`, `status`) VALUES
(43, 'D 3456 BGD', 'Lambhorgini Mvp', '13-12-2017', 'Sport', '5000 Cc', '2 Orang', 'Pertamax', 'Biru', 1000, '13122017044948b.jpgjpg', 'Disewa'),
(44, 'D 2345 JTR', 'Honda', '13-12-2017', 'Mini Bus', '1500 Cc', '7 Orang', 'Pertalite', 'Putih', 900, '13122017045054123 (12).jpgjpg', 'Tersedia');

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
  `total` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`tgl_pemesanan`, `id_pemesanan`, `id_mobil`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `lama`, `total`, `status`) VALUES
('2017-12-13', 53, 43, 18, '2017-12-13', '2017-12-15', 2, 2000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembalian`
--

CREATE TABLE `tb_pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tb_supir`
--

CREATE TABLE `tb_supir` (
  `id_supir` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `no_sim` int(20) NOT NULL,
  `nohp` int(11) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `hargasewa` int(15) NOT NULL,
  `status` varchar(16) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supir`
--

INSERT INTO `tb_supir` (`id_supir`, `nama`, `alamat`, `jeniskelamin`, `no_sim`, `nohp`, `umur`, `hargasewa`, `status`, `gambar`) VALUES
(4, 'Ilham Rosandi', 'Rancaekek', 'Laki-Laki', 2147483647, 2147483647, '19', 50000, 'tersedia', 'B612-2016-02-02-08-28-10_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `no_ktp`, `nama`, `jeniskelamin`, `alamat`, `nohp`, `username`, `password`) VALUES
(17, 11, 'iqbal', 'Laki-Laki', 'iq', 89, 'user', 'user'),
(18, 1, 'i', 'Laki-Laki', 'o', 12, 'oo', 'oo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

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
-- Indexes for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

--
-- Indexes for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indexes for table `tb_supir`
--
ALTER TABLE `tb_supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_supir`
--
ALTER TABLE `tb_supir`
  MODIFY `id_supir` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

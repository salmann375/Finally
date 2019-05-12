-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 11:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finally`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `uname` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `waktu_regis` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`uname`, `nama_lengkap`, `email`, `nohp`, `status`, `password`, `waktu_regis`) VALUES
('0', '0', '0@gm', '08989898989', 'mahasiswa', '0', '2019-04-24 11:37:16'),
('1', '1', '1@g', '1', 'mahasiswa', 'c4ca4238a0b923820dcc', '2019-04-23 19:29:01'),
('11', '11', '11@g', '11', 'dosen', '202cb962ac59075b964b07152d234b70', '2019-04-30 16:19:20'),
('2', '2', '2@g', '2', 'mahasiswa', '2', '2019-04-23 19:30:22'),
('3', '3', '3@g', '3', 'mahasiswa', 'eccbc87e4b5ce2fe2830', '2019-04-23 19:33:03'),
('8', '8', '8@g', '8', 'lainnya', 'c9f0f895fb98ab9159f51fd0297e236d', '2019-04-28 21:20:38'),
('9', '9', '9@9', '9', 'mahasiswa', '45c48cce2e2d7fbdea1afc51c7c6ad26', '2019-04-25 08:29:37'),
('salman', 'salman', 'salman@gmail.com', '089509219357', 'mahasiswa', '202cb962ac59075b964b07152d234b70', '2019-04-30 16:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `loker` varchar(4) NOT NULL,
  `waktu_diterima` datetime NOT NULL,
  `id_lp` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `status`, `loker`, `waktu_diterima`, `id_lp`, `penerima`) VALUES
(25, 'sudah_diambil', '123', '2019-05-07 04:47:11', '59', 'man');

-- --------------------------------------------------------

--
-- Table structure for table `klaim`
--

CREATE TABLE `klaim` (
  `id` int(20) NOT NULL,
  `waktu_ambil` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `waktu_klaim` datetime NOT NULL,
  `uname` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klaim`
--

INSERT INTO `klaim` (`id`, `waktu_ambil`, `status`, `waktu_klaim`, `uname`, `id_barang`) VALUES
(13, '0001-01-01 01:01:00', 'selesai', '2019-05-07 04:47:44', 'salman', '25');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kehilangan`
--

CREATE TABLE `laporan_kehilangan` (
  `id` int(4) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `subkategori` varchar(255) NOT NULL,
  `deskripsi` text,
  `foto` varchar(255) NOT NULL,
  `waktuhilang` datetime DEFAULT NULL,
  `waktulapor` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `uname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_kehilangan`
--

INSERT INTO `laporan_kehilangan` (`id`, `judul`, `kategori`, `subkategori`, `deskripsi`, `foto`, `waktuhilang`, `waktulapor`, `status`, `uname`) VALUES
(35, '1jkgd', 'lainnya', 'jaket', 'jkhiu', 'laporan/kehilangan/kunci-rumah-_120605143258-972.jpg', '0002-02-02 14:02:00', '2019-05-05 12:15:00', 'reported', ''),
(36, '1', 'alat_elektronik', 'earphone', 'nfow', 'laporan/kehilangan/Cara-membuat-kartu-ATM-BCA-BNI-BRI-MANDIRI-Dll-biar-ada-namanya.jpg', '0001-01-01 01:01:00', '2019-05-06 13:22:00', 'reported', 'salman');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penemuan`
--

CREATE TABLE `laporan_penemuan` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `subkategori` varchar(255) NOT NULL,
  `deskripsi` text,
  `foto` varchar(255) NOT NULL,
  `waktutemu` datetime NOT NULL,
  `waktulapor` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `uname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_penemuan`
--

INSERT INTO `laporan_penemuan` (`id`, `judul`, `tempat`, `kategori`, `subkategori`, `deskripsi`, `foto`, `waktutemu`, `waktulapor`, `status`, `uname`) VALUES
(46, 'ddh', 'nwud', 'alat_elektronik', 'earphone', 'iuh8y', 'laporan/penemuan/kunci-rumah-_120605143258-972.jpg', '0001-01-01 01:01:00', '2019-05-06 17:25:00', 'claimed', '9'),
(48, 'onf', '2', 'perlengkapan_kuliah', 'laptop', 'hiub', 'laporan/penemuan/lp.png', '0002-02-02 14:02:00', '2019-05-06 21:24:00', 'claimed', 'salman'),
(49, 'hwoubf', 'ib ', 'lainnya', 'powerbank', 'hoqubd', 'laporan/penemuan/42491-silhouette-space-stars.jpg', '0003-03-03 15:03:00', '2019-05-06 21:25:00', 'claimed', 'salman'),
(50, '1', '1', 'alat_elektronik', 'powerbank', 'hubi', 'laporan/penemuan/nary-jam-tangan-analog-strap-stainless-steel-6112-silver-black-10.jpg', '0001-01-01 01:01:00', '2019-05-06 21:32:00', 'claimed', '9'),
(51, 'iono', '1', 'perlengkapan_kuliah', 'handphone', '111', 'laporan/penemuan/advan-tantang-pabrikan-china-dengan-handphone-di-harga-rp800-000-an-Eay.jpg', '0001-01-01 01:01:00', '2019-05-06 21:32:00', 'claimed', '9'),
(52, 'nqd', '2', 'lainnya', 'binder', 'kjbij ', 'laporan/penemuan/Cara-membuat-kartu-ATM-BCA-BNI-BRI-MANDIRI-Dll-biar-ada-namanya.jpg', '0002-02-02 14:02:00', '2019-05-06 21:32:00', 'claimed', '9'),
(53, 'iqnbi', '1111', 'alat_elektronik', 'handphone', 'lkonwd', 'laporan/penemuan/nary-jam-tangan-analog-strap-stainless-steel-6112-silver-black-10.jpg', '0001-01-01 01:11:00', '2019-05-06 21:38:00', 'claimed', '9'),
(54, 'inqi', '2', 'perlengkapan_kuliah', 'headset', 'nibu', 'laporan/penemuan/Cara-membuat-kartu-ATM-BCA-BNI-BRI-MANDIRI-Dll-biar-ada-namanya.jpg', '0022-02-02 14:02:00', '2019-05-06 21:39:00', 'reported', '9'),
(55, 'jwkbdw', '2', 'perlengkapan_kuliah', 'buku', 'bih', 'laporan/penemuan/Amazing-Star-Wallpaper-HD.jpg', '0002-02-02 14:02:00', '2019-05-07 03:07:00', 'claimed', '9'),
(56, '123456', '2', 'lainnya', 'ktm', 'hiu', 'laporan/penemuan/advan-tantang-pabrikan-china-dengan-handphone-di-harga-rp800-000-an-Eay.jpg', '0002-02-02 14:02:00', '2019-05-07 04:15:00', 'claimed', 'salman'),
(57, 'ppp', '111111', 'lainnya', 'headset', 'kg', 'laporan/penemuan/nary-jam-tangan-analog-strap-stainless-steel-6112-silver-black-10.jpg', '0001-01-01 11:01:00', '2019-05-07 04:27:00', 'claimed', '9'),
(58, '111111111111111111111', '1', 'alat_elektronik', 'handphone', 'hwdiub', 'laporan/penemuan/Amazing-Star-Wallpaper-HD.jpg', '0001-01-01 11:01:00', '2019-05-07 04:34:00', 'claimed', 'salman'),
(59, 'qqqqqqqqqqqqq', '1', 'alat_elektronik', 'handphone', 'uhg7iyb', 'laporan/penemuan/lk.png', '0001-01-01 01:11:00', '2019-05-07 04:46:00', 'claimed', '9');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `waktu_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`username`, `nama`, `no_ktp`, `nohp`, `alamat`, `foto`, `password`, `waktu_daftar`) VALUES
('1', '111', '1', '1', '1', '', '202cb962ac59075b964b07152d234b70', '2019-05-03 06:31:19'),
('2', '2', '2', '2', '2', '', '202cb962ac59075b964b07152d234b70', '2019-05-03 06:34:25'),
('3', '3', '3', '3', '3', '', '202cb962ac59075b964b07152d234b70', '2019-05-03 06:35:01'),
('man', 'man', '32121000', '089509219357', 'wgw', 'admin/foto/Cara-membuat-kartu-ATM-BCA-BNI-BRI-MANDIRI-Dll-biar-ada-namanya.jpg', '202cb962ac59075b964b07152d234b70', '2019-05-02 15:27:29'),
('mann', 'mann', '32121000', '088', 'ijois', 'admin/foto/288171-stars-Milky_Way-alone-road-field-landscape-748x421.jpg', '202cb962ac59075b964b07152d234b70', '2019-05-03 14:10:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klaim`
--
ALTER TABLE `klaim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_kehilangan`
--
ALTER TABLE `laporan_kehilangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_penemuan`
--
ALTER TABLE `laporan_penemuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `klaim`
--
ALTER TABLE `klaim`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `laporan_kehilangan`
--
ALTER TABLE `laporan_kehilangan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `laporan_penemuan`
--
ALTER TABLE `laporan_penemuan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 04:10 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_siswa`
--

CREATE TABLE `akun_siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar_profil` varchar(400) NOT NULL,
  `level_id` int(11) NOT NULL,
  `tgl_registrasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` char(10) NOT NULL,
  `nama_bulan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
('5e7343a05a', 'Januari'),
('5e734d84eb', 'Pebruari'),
('5e734d8adb', 'Maret'),
('5e734d92c8', 'April'),
('5e734d9ab0', 'Mei'),
('5e734da64e', 'Juni'),
('5e734dacc7', 'Juli'),
('5e734db6c4', 'Agustus'),
('5e734dbfb3', 'September'),
('5e734dc714', 'Oktober'),
('5e734dd06d', 'Nopember'),
('5e734dd87c', 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` char(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
('5e420fbde4', 'X', 'Rekayasa  Perangkat Lunak'),
('5e42208a7f', 'X', 'Multi Media'),
('5e4220a802', 'X', 'Patung'),
('5e4220b751', 'X', 'Animasi'),
('5e42211d07', 'X', 'Lukis'),
('5e42212a3b', 'X', 'Depil'),
('5e42213b95', 'X', 'Desain Komunikasi Visual'),
('5e422a581f', 'XI', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` char(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `id_spp` char(10) NOT NULL,
  `status` char(20) NOT NULL DEFAULT 'belum lunas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `id_spp`, `status`) VALUES
(8, 4, '1234567890', '2020-03-19', '5e735a3c74', 'lunas'),
(9, 4, '1234567890', '2020-03-20', '5e735a22ec', 'lunas'),
(10, 4, '1234567890', '2020-03-20', '5e735a3204', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar_profil` varchar(400) NOT NULL,
  `level_id` int(11) NOT NULL,
  `tgl_registrasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `gambar_profil`, `level_id`, `tgl_registrasi`) VALUES
(4, 'Humanit', '$2y$10$SZU99iyOudQI9jPhBU7d/ed/rx4zyOtYOrjRLHp/aP.sLIcc7PijC', 'default.jpg', 1, 1584364342),
(8, 'Cahyadi keiss', '$2y$10$AlhaWwUHZJaH3ZmB6bWvy.NxYuzZqsrRsEWp9pl9OGPl6GXnvT2iu', 'default.jpg', 3, 1584365914);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kelas` char(10) NOT NULL,
  `id_thnmasuk` char(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `id_thnmasuk`, `alamat`, `no_telp`) VALUES
('1234567890', '7128', 'I Putu Cahyadi Krishna Widyantara', '5e422a581f', '5e734c7e12', 'Jln in Aja dlu', '08966775511'),
('1234567899', '7188', 'I Sableng', '5e420fbde4', '5e734c7e12', 'jln gua hantu', '0899661188');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` char(10) NOT NULL,
  `tahun` char(15) NOT NULL,
  `id_bulan` char(10) NOT NULL,
  `id_thnmasuk` char(10) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `id_bulan`, `id_thnmasuk`, `nominal`) VALUES
('5e735a22ec', '2017', '5e7343a05a', '5e734c7e12', 100000),
('5e735a3204', '2017', '5e734d84eb', '5e734c7e12', 100000),
('5e735a3c74', '2017', '5e734d8adb', '5e734c7e12', 100000),
('5e7365922c', '2017', '5e734d92c8', '5e734c7e12', 100000),
('5e73659e4d', '2017', '5e734da64e', '5e734c7e12', 100000),
('5e7365a984', '2017', '5e734dacc7', '5e734c7e12', 100000),
('5e7365e38e', '2017', '5e734db6c4', '5e734c7e12', 100000),
('5e7365fb64', '2017', '5e734dbfb3', '5e734c7e12', 100000),
('5e736606b3', '2017', '5e734dc714', '5e734c7e12', 100000),
('5e73661052', '2017', '5e734dd06d', '5e734c7e12', 100000),
('5e73661d99', '2017', '5e734dd87c', '5e734c7e12', 100000),
('5e73671e74', '2018', '5e7343a05a', '5e734c7e12', 100000),
('5e736728c2', '2018', '5e734d84eb', '5e734c7e12', 100000),
('5e7367521c', '2018', '5e734d8adb', '5e734c7e12', 100000),
('5e73676943', '2018', '5e734d92c8', '5e734c7e12', 100000),
('5e73677463', '2018', '5e734d9ab0', '5e734c7e12', 100000),
('5e73677e06', '2018', '5e734da64e', '5e734c7e12', 100000),
('5e73695834', '2017', '5e734d9ab0', '5e734c7e12', 100000),
('5e73699474', '2018', '5e734dacc7', '5e734c7e12', 100000),
('5e7369c899', '2018', '5e734db6c4', '5e734c7e12', 100000),
('5e7369d374', '2018', '5e734dbfb3', '5e734c7e12', 100000),
('5e7369e1ec', '2018', '5e734dc714', '5e734c7e12', 100000),
('5e7369ec96', '2018', '5e734dd06d', '5e734c7e12', 100000),
('5e7369f7d1', '2018', '5e734dd87c', '5e734c7e12', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `thnmasuk`
--

CREATE TABLE `thnmasuk` (
  `id_thnmasuk` char(10) NOT NULL,
  `tahun_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thnmasuk`
--

INSERT INTO `thnmasuk` (`id_thnmasuk`, `tahun_masuk`) VALUES
('5e734c7e12', 2017),
('5e734ded2f', 2018),
('5e734df301', 2019),
('5e734df88d', 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_thnmasuk` (`id_thnmasuk`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `id_bulan` (`id_bulan`);

--
-- Indexes for table `thnmasuk`
--
ALTER TABLE `thnmasuk`
  ADD PRIMARY KEY (`id_thnmasuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_thnmasuk`) REFERENCES `thnmasuk` (`id_thnmasuk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `bulan` (`id_bulan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

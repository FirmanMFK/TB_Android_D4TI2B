-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jun 2016 pada 20.07
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wisata_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nm_kendaraan`
--

CREATE TABLE IF NOT EXISTS `nm_kendaraan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `plat` varchar(500) NOT NULL,
  `merk` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nm_kendaraan`
--

INSERT INTO `nm_kendaraan` (`id`, `jenis`, `plat`, `merk`) VALUES
(4, 'Batagrams', '6788', 'Hehe'),
(5, 'Mobil ', '53789', 'Mobilio'),
(6, 'Mobilio', '5673A', 'Lamborghini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nm_pengunjung`
--

CREATE TABLE IF NOT EXISTS `nm_pengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kontak` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nm_pengunjung`
--

INSERT INTO `nm_pengunjung` (`id`, `nama`, `alamat`, `kontak`) VALUES
(4, 'FirmanMFK', 'Sarijadi', '0856245890'),
(5, 'Gentur Ariyadi Sidi', 'Sarijadi1', '085624678091'),
(6, 'Hadis', 'Sarijadis', '0856273600672'),
(7, 'Firman', 'Sarijadi1', '08524360089');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nm_wisata`
--

CREATE TABLE IF NOT EXISTS `nm_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `tgl_buat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nm_wisata`
--

INSERT INTO `nm_wisata` (`id`, `nama`, `jenis`, `tgl_buat`) VALUES
(5, 'Flying Fox', 'Adventure', '21-09-1998'),
(6, 'BomBomCar', 'Hiburan', '21/06/2016'),
(7, 'Payung Terjun', 'Adventure', '15/06/1996');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `umur` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `alamat`, `umur`) VALUES
(1, 'Firman', '12345', 'sarijadi', '19'),
(4, 'Gentur', '12345', 'Ciamis', '20'),
(8, 'Firmansss', '12345', 'Bandungs', '19'),
(17, 'Firdaa', '123456', 'BandungD', '90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nm_kendaraan`
--
ALTER TABLE `nm_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nm_pengunjung`
--
ALTER TABLE `nm_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nm_wisata`
--
ALTER TABLE `nm_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nm_kendaraan`
--
ALTER TABLE `nm_kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nm_pengunjung`
--
ALTER TABLE `nm_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nm_wisata`
--
ALTER TABLE `nm_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

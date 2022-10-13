-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 11:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2022_badan_pertanahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Reski Alfan DP', 'profil1.jpg', 'admin'),
(2, 'petugas', '6134b8b167d5d072868d8569da3f9f4a', 'Petugas', 'profil1.jpg', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `file_surat_dokumen`
--

CREATE TABLE `file_surat_dokumen` (
  `id_file_surat_dokumen` int(11) NOT NULL,
  `nm_file_surat_dokumen` varchar(150) NOT NULL,
  `id_surat_dokumen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_surat_dokumen`
--

INSERT INTO `file_surat_dokumen` (`id_file_surat_dokumen`, `nm_file_surat_dokumen`, `id_surat_dokumen`) VALUES
(5, '-1665472370-Surat_Permintaann.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dokumen2`
--

CREATE TABLE `jenis_dokumen2` (
  `id_jenisdokumen2` int(11) NOT NULL,
  `uraian_jenisdokumen2` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_dokumen2`
--

INSERT INTO `jenis_dokumen2` (`id_jenisdokumen2`, `uraian_jenisdokumen2`) VALUES
(1, 'SHM'),
(2, 'SHP'),
(3, 'SHW');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_dokumen`
--

CREATE TABLE `surat_dokumen` (
  `id_surat_dokumen` int(11) NOT NULL,
  `no_surat_dokumen` varchar(150) NOT NULL,
  `jenis_suratdokumen` varchar(5) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `luas_lahan` varchar(50) NOT NULL,
  `luas_bangunan` varchar(50) NOT NULL,
  `batas_sisi_barat` varchar(25) NOT NULL,
  `batas_sisi_utara` varchar(25) NOT NULL,
  `batas_sisi_timur` varchar(25) NOT NULL,
  `batas_sisi_selatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_dokumen`
--

INSERT INTO `surat_dokumen` (`id_surat_dokumen`, `no_surat_dokumen`, `jenis_suratdokumen`, `nama_pemilik`, `luas_lahan`, `luas_bangunan`, `batas_sisi_barat`, `batas_sisi_utara`, `batas_sisi_timur`, `batas_sisi_selatan`) VALUES
(2, 'nomor surat', '1', 'Nama Pemilik', 'Luas Lahan', 'Luas Bangunan', 'Luas Lahan1', 'Batas Sisi Utara', 'Batas Sisi Timur', 'Batas Sisi Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_surat_dokumen`
--
ALTER TABLE `file_surat_dokumen`
  ADD PRIMARY KEY (`id_file_surat_dokumen`);

--
-- Indexes for table `jenis_dokumen2`
--
ALTER TABLE `jenis_dokumen2`
  ADD PRIMARY KEY (`id_jenisdokumen2`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `surat_dokumen`
--
ALTER TABLE `surat_dokumen`
  ADD PRIMARY KEY (`id_surat_dokumen`),
  ADD KEY `jenis_suratdokumen` (`jenis_suratdokumen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `file_surat_dokumen`
--
ALTER TABLE `file_surat_dokumen`
  MODIFY `id_file_surat_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jenis_dokumen2`
--
ALTER TABLE `jenis_dokumen2`
  MODIFY `id_jenisdokumen2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_dokumen`
--
ALTER TABLE `surat_dokumen`
  MODIFY `id_surat_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

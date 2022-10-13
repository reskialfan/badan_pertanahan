-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 12:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2019_arsip`
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
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'reski', '6134b8b167d5d072868d8569da3f9f4a', 'Reski Alfan DP', 'res.jpg'),
(45, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'default.jpg'),
(46, 'sdfdsf', '20838a8df7cc0babd745c7af4b7d94e2', 'fdsfdsf', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file_surat_arsipvital`
--

CREATE TABLE `file_surat_arsipvital` (
  `id_file_surat_arsipvital` int(11) NOT NULL,
  `nm_file_surat_arsipvital` varchar(150) NOT NULL,
  `id_surat_arsip_vital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_surat_keluar`
--

CREATE TABLE `file_surat_keluar` (
  `id_file_surat_keluar` int(11) NOT NULL,
  `nm_file_surat_keluar` varchar(150) NOT NULL,
  `id_surat_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_surat_keluar`
--

INSERT INTO `file_surat_keluar` (`id_file_surat_keluar`, `nm_file_surat_keluar`, `id_surat_keluar`) VALUES
(16, '05-10-2019-1569328820-TulipsRES.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `file_surat_keputusan`
--

CREATE TABLE `file_surat_keputusan` (
  `id_file_surat_keputusan` int(11) NOT NULL,
  `nm_file_surat_keputusan` varchar(150) NOT NULL,
  `id_surat_keputusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_surat_keputusan`
--

INSERT INTO `file_surat_keputusan` (`id_file_surat_keputusan`, `nm_file_surat_keputusan`, `id_surat_keputusan`) VALUES
(7, '29-08-2019-1569305485-ubur.jpg', 3),
(8, '30-08-2019-1569310124-TulipsRES.jpg', 3),
(9, '30-08-2019-1569311532-TulipsRES.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `file_surat_kerjasama`
--

CREATE TABLE `file_surat_kerjasama` (
  `id_file_surat_kerjasama` int(11) NOT NULL,
  `nm_file_surat_kerjasama` varchar(150) NOT NULL,
  `id_surat_perjanjian_kerjasama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_surat_kerjasama`
--

INSERT INTO `file_surat_kerjasama` (`id_file_surat_kerjasama`, `nm_file_surat_kerjasama`, `id_surat_perjanjian_kerjasama`) VALUES
(10, '01-09-2019-1569334409-TulipsRES.jpg', 3),
(11, '01-09-2019-1569334409-ubur.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `instansi_kerjasama`
--

CREATE TABLE `instansi_kerjasama` (
  `id_instansi_kerja_sama` int(11) NOT NULL,
  `nm_instansi_kerja_sama` varchar(150) NOT NULL,
  `id_surat_perjanjian_kerjasama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi_kerjasama`
--

INSERT INTO `instansi_kerjasama` (`id_instansi_kerja_sama`, `nm_instansi_kerja_sama`, `id_surat_perjanjian_kerjasama`) VALUES
(5, 'instansi 2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `instansi_tujuan_surat_keluar`
--

CREATE TABLE `instansi_tujuan_surat_keluar` (
  `id_instansi_tujuan_surat_keluar` int(11) NOT NULL,
  `nm_instansi_tujuan_surat_keluar` varchar(150) NOT NULL,
  `id_surat_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi_tujuan_surat_keluar`
--

INSERT INTO `instansi_tujuan_surat_keluar` (`id_instansi_tujuan_surat_keluar`, `nm_instansi_tujuan_surat_keluar`, `id_surat_keluar`) VALUES
(18, 'aaaaaaa', 9),
(19, 'bbbbbbb', 9);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(3) NOT NULL,
  `nm_jenis` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nm_jenis`) VALUES
(1, 'Surat Balasan'),
(2, 'Surat Keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dokumen`
--

CREATE TABLE `jenis_dokumen` (
  `id_jenis_dokumen` int(11) NOT NULL,
  `nm_jenis_dokumen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_dokumen`
--

INSERT INTO `jenis_dokumen` (`id_jenis_dokumen`, `nm_jenis_dokumen`) VALUES
(1, 'Perizinan'),
(2, 'Sertifikat'),
(3, 'Regulasi');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kerjasama`
--

CREATE TABLE `jenis_kerjasama` (
  `id_jenis_kerjasama` int(11) NOT NULL,
  `nm_jenis_kerjasama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kerjasama`
--

INSERT INTO `jenis_kerjasama` (`id_jenis_kerjasama`, `nm_jenis_kerjasama`) VALUES
(1, 'Kerjasama Pelayanan Kesehatan'),
(2, 'Kerjasama Operasional'),
(3, 'Kerjasama sewa menyewa'),
(4, 'Kerjasama Akademik'),
(5, 'Kerjasama Usaha Lainya');

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kepada_surat_keluar`
--

CREATE TABLE `kepada_surat_keluar` (
  `id_kepada_surat_keluar` int(11) NOT NULL,
  `nm_kepada` varchar(150) NOT NULL,
  `id_surat_keluar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepada_surat_keluar`
--

INSERT INTO `kepada_surat_keluar` (`id_kepada_surat_keluar`, `nm_kepada`, `id_surat_keluar`) VALUES
(17, 'aaaaaaa', 9),
(18, 'bbbbbbb', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Malangg'),
(3, 'Blitar'),
(4, 'Tulungagung'),
(17, 'Jakarta'),
(21, 'Surabaya'),
(22, 'Paris');

-- --------------------------------------------------------

--
-- Table structure for table `no_kerja_sama`
--

CREATE TABLE `no_kerja_sama` (
  `id_no_kerja_sama` int(11) NOT NULL,
  `no_kerja_sama` varchar(150) NOT NULL,
  `id_surat_perjanjian_kerjasama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_kerja_sama`
--

INSERT INTO `no_kerja_sama` (`id_no_kerja_sama`, `no_kerja_sama`, `id_surat_perjanjian_kerjasama`) VALUES
(7, '31232131', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `telp`, `id_kota`, `id_kelamin`, `id_posisi`, `status`) VALUES
('11', 'Hafizh Asrofil Al Banna', '087859615271', 1, 1, 1, 1),
('12', 'Faiq Fajrullah', '085736333728', 1, 1, 2, 1),
('3', 'Mustofa Halim', '081330493322', 1, 1, 3, 1),
('4', 'Dody Ahmad Kusuma Jaya', '083854520015', 3, 1, 2, 1),
('5', 'Mokhammad Choirul Ikhsan', '085749535400', 3, 1, 2, 1),
('7', 'Achmad Chadil Auwfar', '08984119934', 2, 1, 1, 1),
('8', 'Rizal Ferdian', '087777284179', 1, 1, 3, 1),
('9', 'Redika Angga Pratama', '083834657395', 1, 1, 3, 1),
('1', 'Tolkha Hasan', '081233072122', 1, 1, 4, 1),
('2', 'Wawan Dwi Prasetyo', '085745966707', 4, 1, 4, 1),
('e3025c40050fc77e4dff782f9d960cc7', 'da', '3131323', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'HRD'),
(3, 'Keuangan'),
(4, 'Produk'),
(5, 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `sifat_surat`
--

CREATE TABLE `sifat_surat` (
  `id_sifat_surat` int(11) NOT NULL,
  `nm_sifat_surat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sifat_surat`
--

INSERT INTO `sifat_surat` (`id_sifat_surat`, `nm_sifat_surat`) VALUES
(1, 'Biasa'),
(2, 'Penting'),
(3, 'Rahasia'),
(4, 'Segera');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `judul_surat` varchar(250) NOT NULL,
  `id_jenis` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `judul_surat`, `id_jenis`) VALUES
(1, 'INI JUDUL SURAT MASUK', 4),
(2, 'INI JUDUL SURAT MASUK', 4);

-- --------------------------------------------------------

--
-- Table structure for table `surat_arsip_vital`
--

CREATE TABLE `surat_arsip_vital` (
  `id_surat_arsip_vital` int(11) NOT NULL,
  `no_dokumen_surat_arsip_vital` varchar(150) NOT NULL,
  `tgl_dokumen_surat_arsip_vital` date NOT NULL,
  `id_jenis_dokumen_vi` int(2) NOT NULL,
  `tgl_berlaku_arsip_vital` date NOT NULL,
  `tgl_berakhir_arsip_vital` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_surat_keluar` varchar(150) NOT NULL,
  `sifat_surat_keluar` int(2) NOT NULL,
  `jenis_surat_keluar` int(2) NOT NULL,
  `perihal_surat_keluar` varchar(150) NOT NULL,
  `tgl_surat_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `no_surat_keluar`, `sifat_surat_keluar`, `jenis_surat_keluar`, `perihal_surat_keluar`, `tgl_surat_keluar`) VALUES
(9, '19991819', 1, 1, 'ini adalah perihal', '2019-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keputusan`
--

CREATE TABLE `surat_keputusan` (
  `id_surat_keputusan` int(11) NOT NULL,
  `nomor_surat_keputusan` varchar(150) NOT NULL,
  `perihal_surat_keputusan` varchar(150) NOT NULL,
  `tgl_surat_keputusan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keputusan`
--

INSERT INTO `surat_keputusan` (`id_surat_keputusan`, `nomor_surat_keputusan`, `perihal_surat_keputusan`, `tgl_surat_keputusan`) VALUES
(3, 'aaa123678', 'aa', '2019-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `surat_perjanjian_kerjasama`
--

CREATE TABLE `surat_perjanjian_kerjasama` (
  `id_surat_perjanjian_kerjasama` int(11) NOT NULL,
  `tgl_kerja_sama` date NOT NULL,
  `jenis_kerjasama` int(2) NOT NULL,
  `perihal_kerjasama` varchar(150) NOT NULL,
  `jangka_waktu_1` date NOT NULL,
  `jangka_waktu_2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_perjanjian_kerjasama`
--

INSERT INTO `surat_perjanjian_kerjasama` (`id_surat_perjanjian_kerjasama`, `tgl_kerja_sama`, `jenis_kerjasama`, `perihal_kerjasama`, `jangka_waktu_1`, `jangka_waktu_2`) VALUES
(3, '2019-09-01', 1, 'ini adalah perihal kerjasama', '2019-09-02', '2019-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(1, '2015'),
(2, '2016'),
(3, '2017'),
(4, '2018'),
(5, '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_surat_arsipvital`
--
ALTER TABLE `file_surat_arsipvital`
  ADD PRIMARY KEY (`id_file_surat_arsipvital`);

--
-- Indexes for table `file_surat_keluar`
--
ALTER TABLE `file_surat_keluar`
  ADD PRIMARY KEY (`id_file_surat_keluar`);

--
-- Indexes for table `file_surat_keputusan`
--
ALTER TABLE `file_surat_keputusan`
  ADD PRIMARY KEY (`id_file_surat_keputusan`);

--
-- Indexes for table `file_surat_kerjasama`
--
ALTER TABLE `file_surat_kerjasama`
  ADD PRIMARY KEY (`id_file_surat_kerjasama`);

--
-- Indexes for table `instansi_kerjasama`
--
ALTER TABLE `instansi_kerjasama`
  ADD PRIMARY KEY (`id_instansi_kerja_sama`);

--
-- Indexes for table `instansi_tujuan_surat_keluar`
--
ALTER TABLE `instansi_tujuan_surat_keluar`
  ADD PRIMARY KEY (`id_instansi_tujuan_surat_keluar`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  ADD PRIMARY KEY (`id_jenis_dokumen`);

--
-- Indexes for table `jenis_kerjasama`
--
ALTER TABLE `jenis_kerjasama`
  ADD PRIMARY KEY (`id_jenis_kerjasama`);

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepada_surat_keluar`
--
ALTER TABLE `kepada_surat_keluar`
  ADD PRIMARY KEY (`id_kepada_surat_keluar`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `no_kerja_sama`
--
ALTER TABLE `no_kerja_sama`
  ADD PRIMARY KEY (`id_no_kerja_sama`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sifat_surat`
--
ALTER TABLE `sifat_surat`
  ADD PRIMARY KEY (`id_sifat_surat`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `surat_arsip_vital`
--
ALTER TABLE `surat_arsip_vital`
  ADD PRIMARY KEY (`id_surat_arsip_vital`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  ADD PRIMARY KEY (`id_surat_keputusan`);

--
-- Indexes for table `surat_perjanjian_kerjasama`
--
ALTER TABLE `surat_perjanjian_kerjasama`
  ADD PRIMARY KEY (`id_surat_perjanjian_kerjasama`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `file_surat_arsipvital`
--
ALTER TABLE `file_surat_arsipvital`
  MODIFY `id_file_surat_arsipvital` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_surat_keluar`
--
ALTER TABLE `file_surat_keluar`
  MODIFY `id_file_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `file_surat_keputusan`
--
ALTER TABLE `file_surat_keputusan`
  MODIFY `id_file_surat_keputusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `file_surat_kerjasama`
--
ALTER TABLE `file_surat_kerjasama`
  MODIFY `id_file_surat_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `instansi_kerjasama`
--
ALTER TABLE `instansi_kerjasama`
  MODIFY `id_instansi_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instansi_tujuan_surat_keluar`
--
ALTER TABLE `instansi_tujuan_surat_keluar`
  MODIFY `id_instansi_tujuan_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_jenis_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_kerjasama`
--
ALTER TABLE `jenis_kerjasama`
  MODIFY `id_jenis_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kepada_surat_keluar`
--
ALTER TABLE `kepada_surat_keluar`
  MODIFY `id_kepada_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `no_kerja_sama`
--
ALTER TABLE `no_kerja_sama`
  MODIFY `id_no_kerja_sama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sifat_surat`
--
ALTER TABLE `sifat_surat`
  MODIFY `id_sifat_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_arsip_vital`
--
ALTER TABLE `surat_arsip_vital`
  MODIFY `id_surat_arsip_vital` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `surat_keputusan`
--
ALTER TABLE `surat_keputusan`
  MODIFY `id_surat_keputusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_perjanjian_kerjasama`
--
ALTER TABLE `surat_perjanjian_kerjasama`
  MODIFY `id_surat_perjanjian_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2012 at 12:27 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppdb`
--
CREATE DATABASE `ppdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ppdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `no` int(3) NOT NULL,
  `passw` varchar(7) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`no`, `passw`, `nama_lengkap`, `nisn`, `alamat`, `no_telp`, `sekolah_asal`, `keterangan`, `prodi`) VALUES
(2, '545b07f', 'Jufianto Henri', '9343343423', 'Jalan Tanjung Batu', '085365861261', 'SMPN 10 Pekanbaru', '', 'Teknik Informatika'),
(3, '027e4d5', 'hafizh', '9420942094', 'Jl tanjung batu', '079079507950', 'SMPN 1 Pekanbaru', '', 'Teknik Informatika'),
(4, '038ee70', 'muhamad', '8989898989', 'Jalan Ujung Kulon', '080840490493', 'SMPN 1 Pekanbaru', '', 'Teknik Kimia'),
(5, 'a9498e4', 'hendri', '4349204920', 'jalan kampung tak ada', '483490234920', 'SMPN 13 Pekanbaru', '', 'Teknik Kimia'),
(6, 'c17e608', 'yansen', '3843439843', 'simpang 3', '043048204824', 'SMPN 1 Pekanbaru', '', 'Teknik Otomotif'),
(7, 'a59d69f', 'ernest', '4304404920', 'jalan kampung tak ada', '303420390292', 'SMPN 8 Pekanbaru', '', 'Teknik Listrik'),
(8, 'd60ae20', 'ilham ', '3248242948', 'jalan tanjung', '092039210391', 'SMPN 8 Pekanbaru', '', 'Teknik Listrik'),
(9, '51f7539', 'angga', '4903942049', 'Jalan Tanjung Batu', '905390390539', 'SMPN 1 Pekanbaru', '', 'Teknik Bangunan'),
(10, 'c01199e', 'naris', '9420492049', 'jalan kos', '940249204920', 'SMPN 5 Pekanbaru', '', 'Teknik Bangunan'),
(11, 'b1fc3ad', 'evan', '2094029420', 'jalan sutomo', '483984394893', 'SMPN 4 Pekanbaru', '', 'Teknik Elektronika'),
(12, 'eb914da', 'fragan', '9409420942', 'jalan tanjung', '394395039503', 'SMPN 8 Pekanbaru', '', 'Teknik Elektronika'),
(13, '0a1761b', 'ayu', '0249204920', 'jalan ujung', '358395839583', 'SMPN 8 Pekanbaru', '', 'Teknik Informatika'),
(14, 'a29a38b', 'nurul', '8249839483', 'jalan smk', '392748298492', 'SMPN 13 Pekanbaru', '', 'Teknik Kimia'),
(16, '5e7038f', 'aidil', '1223333665', 'jalan kepiting', '085376939702', 'SMPN 4 Pekanbaru', '', 'Teknik Elektronika'),
(17, 'f5d1278', 'tester', 'tester', 'tester', 'tester', 'SMPN 5 Pekanbaru', '', 'Teknik Informatika'),
(18, '098f6bc', 'test', 'test', 'test', 'test', 'SMPN 1 Pekanbaru', '', 'Teknik Informatika'),
(19, 'e3c0509', 'ani', '7878777777', 'jl todak', '087664534654', 'SMPN 4 Pekanbaru', '', 'Teknik Informatika'),
(20, '8fc7e70', 'csad', 'dsadxc', 'dsadcd', 'dad', 'SMPN 1 Pekanbaru', '', 'Teknik Informatika'),
(21, '7647966', 'hzcjhJ', '89', 'ASDASDAS', 'HJCSDKF', 'SMPN 1 Pekanbaru', '', 'Teknik Informatika'),
(22, '695d0e5', 'ghjk', 'hdsjh', 'hjfshj', 'hjfsh', 'SMPN 1 Pekanbaru', '', 'Teknik Informatika'),
(23, '0b25353', 'dfafajk', 'fkjakj', 'kjfkj', 'kjfkjk', 'SMPN 1 Pekanbaru', '', 'Teknik Informatika'),
(24, '2d03395', 'ayu ', '9505940599', 'jalan kayu', '086754434456', 'SMPN 1 Pekanbaru', '', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `no` int(3) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `n1` int(2) NOT NULL,
  `n2` int(2) NOT NULL,
  `n3` int(2) NOT NULL,
  `n4` int(2) NOT NULL,
  `n5` int(2) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`no`, `nama_lengkap`, `nisn`, `n1`, `n2`, `n3`, `n4`, `n5`, `r1`, `r2`, `r3`, `r4`, `r5`) VALUES
(1, 'Aldio Mahendra', '9421049230', 80, 80, 88, 88, 0, 9, 7, 2, 3, 2),
(2, 'Jufianto Henri', '9343343423', 90, 90, 90, 90, 76, 3, 3, 3, 3, 1),
(3, 'hafizh', '9420942094', 80, 80, 90, 90, 79, 9, 9, 7, 7, 4),
(4, 'muhamad', '8989898989', 90, 90, 90, 90, 90, 9, 9, 9, 9, 9),
(5, 'hendri', '4349204920', 80, 80, 90, 78, 90, 8, 9, 8, 6, 8),
(6, 'yansen', '3843439843', 78, 78, 89, 78, 89, 8, 7, 8, 8, 8),
(7, 'ernest', '4304404920', 80, 80, 90, 80, 90, 9, 7, 8, 7, 2),
(8, 'ilham ', '3248242948', 90, 90, 90, 90, 90, 8, 8, 8, 8, 8),
(9, 'angga', '4903942049', 90, 90, 90, 90, 89, 8, 4, 4, 4, 5),
(10, 'naris', '9420492049', 88, 88, 89, 78, 98, 8, 8, 8, 9, 2),
(11, 'evan', '2094029420', 88, 89, 87, 90, 99, 9, 8, 7, 2, 1),
(12, 'fragan', '9409420942', 89, 78, 98, 99, 77, 7, 7, 1, 1, 10),
(13, 'ayu', '0249204920', 90, 90, 90, 89, 90, 9, 9, 9, 2, 7),
(14, 'nurul', '8249839483', 80, 90, 90, 88, 99, 7, 8, 8, 7, 2),
(15, 'ina', '4242049204', 90, 80, 82, 90, 90, 8, 9, 9, 8, 3),
(16, 'aidil', '1223333665', 80, 90, 88, 99, 75, 2, 7, 6, 3, 1),
(17, 'tester', 'tester', 90, 90, 90, 90, 90, 11, 11, 8, 9, 10),
(18, 'test', 'test', 90, 90, 90, 90, 90, 9, 9, 9, 9, 9),
(18, 'test', 'test', 90, 90, 90, 90, 90, 9, 9, 9, 9, 9),
(19, 'ani', '7878777777', 78, 90, 89, 80, 78, 9, 6, 6, 3, 2),
(20, 'csad', 'dsadxc', 90, 90, 90, 90, 13, 9, 9, 9, 9, 14),
(21, 'hzcjhJ', '89', 90, 90, 90, 90, 90, 9, 9, 9, 9, 9),
(22, 'ghjk', 'hdsjh', 90, 90, 90, 90, 90, 9, 9, 9, 9, 9),
(23, 'dfafajk', 'fkjakj', 80, 80, 80, 80, 80, 8, 8, 8, 8, 8),
(24, 'ayu ', '9505940599', 79, 79, 90, 78, 89, 8, 8, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ntes`
--

CREATE TABLE IF NOT EXISTS `ntes` (
  `no` int(11) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `ntes_ing` int(11) NOT NULL,
  `ntes_mtk` int(11) NOT NULL,
  `nipa1` int(11) NOT NULL,
  `nipa2` int(11) NOT NULL,
  `nipa3` int(11) NOT NULL,
  `nipa4` int(11) NOT NULL,
  `nipa5` int(11) NOT NULL,
  `ning1` int(11) NOT NULL,
  `ning2` int(11) NOT NULL,
  `ning3` int(11) NOT NULL,
  `ning4` int(11) NOT NULL,
  `ning5` int(11) NOT NULL,
  `nindo1` int(11) NOT NULL,
  `nindo2` int(11) NOT NULL,
  `nindo3` int(11) NOT NULL,
  `nindo4` int(11) NOT NULL,
  `nindo5` int(11) NOT NULL,
  `nmtk1` int(11) NOT NULL,
  `nmtk2` int(11) NOT NULL,
  `nmtk3` int(11) NOT NULL,
  `nmtk4` int(11) NOT NULL,
  `nmtk5` int(11) NOT NULL,
  `rata` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ntes`
--

INSERT INTO `ntes` (`no`, `nama_lengkap`, `ntes_ing`, `ntes_mtk`, `nipa1`, `nipa2`, `nipa3`, `nipa4`, `nipa5`, `ning1`, `ning2`, `ning3`, `ning4`, `ning5`, `nindo1`, `nindo2`, `nindo3`, `nindo4`, `nindo5`, `nmtk1`, `nmtk2`, `nmtk3`, `nmtk4`, `nmtk5`, `rata`) VALUES
(1, 'Aldio Mahendra', 90, 90, 90, 90, 90, 90, 90, 0, 0, 0, 90, 80, 0, 0, 90, 90, 100, 90, 90, 90, 90, 90, 77),
(2, 'Jufianto Henri', 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90),
(3, 'hafizh', 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 0, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 87),
(4, 'muhamad', 90, 90, 90, 90, 90, 90, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 90, 90, 90, 90, 63),
(5, 'hendri', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 0, 80, 80, 80, 80, 80, 80, 80, 80, 78),
(6, 'yansen', 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78),
(7, 'ernest', 90, 90, 90, 90, 90, 90, 90, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 90, 90, 90, 90, 90, 84),
(8, 'ilham ', 88, 88, 88, 88, 88, 88, 77, 77, 77, 77, 77, 77, 77, 77, 77, 77, 77, 88, 88, 88, 88, 77, 84),
(9, 'angga', 77, 77, 77, 77, 77, 77, 77, 88, 88, 88, 99, 99, 88, 88, 88, 99, 99, 77, 77, 77, 77, 77, 82),
(10, 'naris', 90, 90, 90, 90, 80, 80, 80, 78, 78, 78, 77, 77, 78, 78, 78, 77, 77, 90, 90, 80, 80, 80, 84),
(11, 'evan', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80),
(12, 'fragan', 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99),
(14, 'nurul', 90, 90, 90, 90, 89, 89, 89, 89, 78, 78, 78, 78, 89, 78, 78, 78, 78, 90, 90, 89, 89, 89, 87),
(16, 'aidil', 89, 74, 78, 63, 56, 78, 65, 67, 89, 56, 78, 56, 78, 78, 67, 67, 78, 78, 87, 67, 78, 45, 75),
(18, 'test', 90, 90, 90, 89, 78, 89, 67, 78, 89, 78, 67, 87, 78, 89, 67, 78, 78, 0, 88, 89, 78, 76, 82),
(19, 'ani', 90, 90, 90, 90, 80, 80, 80, 70, 70, 70, 89, 89, 70, 70, 70, 89, 89, 90, 90, 80, 80, 80, 84),
(20, 'csad', 90, 89, 89, 78, 78, 82, 89, 89, 89, 67, 67, 67, 89, 0, 67, 67, 78, 89, 78, 78, 89, 89, 81);

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE IF NOT EXISTS `orangtua` (
  `no` int(11) NOT NULL,
  `nama_a` varchar(25) NOT NULL,
  `alamat_a` varchar(25) NOT NULL,
  `pekerjaan_a` varchar(25) NOT NULL,
  `nama_i` varchar(25) NOT NULL,
  `alamat_i` varchar(25) NOT NULL,
  `pekerjaan_i` varchar(25) NOT NULL,
  `telp_a` varchar(12) NOT NULL,
  `telp_i` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`no`, `nama_a`, `alamat_a`, `pekerjaan_a`, `nama_i`, `alamat_i`, `pekerjaan_i`, `telp_a`, `telp_i`) VALUES
(1, 'a', 'a', 'a', 'i', 'i', 'i', 'a', 'i'),
(2, 'ayah', 'jalan ayah', 'apa aja', 'ibu', 'jalan ibu', 'CEO Chevron', '12121', '859458945849'),
(19, 'andi', 'jl juju', 'kiki', 'hita', 'jl  kiki', 'manager', '867646466', '9967876575'),
(24, 'aldio', 'jlan komplek', 'guru', 'ani', 'jalan komlek', 'guru', '097655655665', '08545654323');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

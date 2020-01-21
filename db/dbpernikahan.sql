-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 01:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpernikahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akad`
--

CREATE TABLE `tbl_akad` (
  `calon_suami` varchar(50) NOT NULL,
  `calon_istri` varchar(50) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `saksi` varchar(50) NOT NULL,
  `penghulu` varchar(50) NOT NULL,
  `tanggal_akad` date NOT NULL,
  `mahar` text NOT NULL,
  `tempat_nikah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_istri`
--

CREATE TABLE `tbl_istri` (
  `nama` varchar(50) NOT NULL,
  `binti` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `warganegara` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suami`
--

CREATE TABLE `tbl_suami` (
  `nama` varchar(50) NOT NULL,
  `bin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `warganegara` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(23) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('fadillah', '12345678', 'source1@gmail.com', 'aulia siddiq', 1, 'staff pidana'),
('source1', '25d55ad283aa400af464c76d713c07ad', 'source1@gmail.com', 'pegawai kua', 1, 'staff pidana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akad`
--
ALTER TABLE `tbl_akad`
  ADD PRIMARY KEY (`calon_suami`);

--
-- Indexes for table `tbl_istri`
--
ALTER TABLE `tbl_istri`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `tbl_suami`
--
ALTER TABLE `tbl_suami`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

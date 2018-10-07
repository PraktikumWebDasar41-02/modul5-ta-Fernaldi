-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 03:14 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `NIM` bigint(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `Jenis_kelamin` text NOT NULL,
  `Jurusan` text NOT NULL,
  `Fakultas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`NIM`, `Nama`, `Email`, `Tgl_lahir`, `Jenis_kelamin`, `Jurusan`, `Fakultas`) VALUES
(6701174012, 'angga', 'fernaldi06.FA@gmail.', '1999-08-06', 'Laki-Laki', 'Administrasi Bisnis', 'FEB'),
(6701174145, 'Kamal', 'Kamal@gmail.com', '1999-05-04', 'Perempuan', 'Administrasi Publik', 'FEB');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

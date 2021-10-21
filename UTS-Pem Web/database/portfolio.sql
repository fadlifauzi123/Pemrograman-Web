-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2021 at 08:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_web`
--

CREATE TABLE `portfolio_web` (
  `Name` char(50) DEFAULT NULL,
  `Text` text,
  `About` text,
  `project1` text,
  `project2` text,
  `project3` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_web`
--

INSERT INTO `portfolio_web` (`Name`, `Text`, `About`, `project1`, `project2`, `project3`) VALUES
('Fadli Fauzi', 'Saya adalah mahasiswa Universitas Pembangunan Jaya', 'Assalamualaikum, hallo semuanya perkenalkan lagi nama saya Fadli Fauzi biasa dipanggil Fadli. Sekarang saya adalah seorang Mahasiswa di Universitas Pembangunan Jaya Jurusan Teknik Informatika semester 5. Umur saya 20 tahun sekarang, saya tinggal di Pamulang, Tangerang Selatan. ', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 04:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Jurusan` varchar(225) NOT NULL,
  `Prodi` varchar(225) NOT NULL,
  `Kelas` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `Jurusan`, `Prodi`, `Kelas`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Ilham', 'Informatika', 'Teknik Informatika', 'IF6B', '2021-10-05 09:20:13', '2021-10-05 09:20:13'),
(2, 'Budi', 'Informatika', 'Multimedia & Jaringan', 'MJ7A', '2021-10-05 09:20:55', '2021-10-05 09:20:55'),
(3, 'Kupat Tahu', 'Informatika', 'Animasi', 'AN4B', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'justincase', 'Electro', 'Manufacture', 'MN3C', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'aaaaasdasd         ', 'aaa', 'asdad    ', 'adsada        ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

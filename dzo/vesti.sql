-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 06:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminulaz`
--

CREATE TABLE `adminulaz` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `sifra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminulaz`
--

INSERT INTO `adminulaz` (`id`, `ime`, `sifra`) VALUES
(1, 'milandzo', 'milan');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `korisnik` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `korisnik`, `komentar`) VALUES
(3, 'milandzo', 'najboljiste');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `sifra` varchar(255) NOT NULL,
  `punoime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `posta` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `sifra`, `punoime`, `prezime`, `posta`, `admin`) VALUES
(1, 'milan', 'milan', '', '', '', 0),
(4, 'milandzo', 'mmm', 'milan', 'stanojevic', 'dzocar1@gmail.com', 0),
(7, 'milandzo11', 'aa', 'milans', 'stanojevic', 'aa', 1),
(8, 'mladja', 'aaa', 'mladjan', 'stanojevic', 'mm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `svet`
--

CREATE TABLE `svet` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `vesti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `svet`
--

INSERT INTO `svet` (`id`, `naslov`, `vesti`) VALUES
(1, 'vesti iz', 'sveta');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `vesti` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `vesti`, `admin`) VALUES
(1, 'najnovije vesti iz zemlje i sveta', 'zemlja', 0),
(2, 'vesti', 'danas u 12 h desila se nesreca', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zemlja`
--

CREATE TABLE `zemlja` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `vesti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zemlja`
--

INSERT INTO `zemlja` (`id`, `naslov`, `vesti`) VALUES
(1, 'vesti iz', 'zemlje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminulaz`
--
ALTER TABLE `adminulaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `svet`
--
ALTER TABLE `svet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zemlja`
--
ALTER TABLE `zemlja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminulaz`
--
ALTER TABLE `adminulaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `svet`
--
ALTER TABLE `svet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zemlja`
--
ALTER TABLE `zemlja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

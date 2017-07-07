-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 03:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corsiinformatica`
--

-- --------------------------------------------------------

--
-- Table structure for table `iscrizioni`
--

CREATE TABLE `iscrizioni` (
  `id_iscrizione` int(11) NOT NULL,
  `id_lezione` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iscrizioni`
--

INSERT INTO `iscrizioni` (`id_iscrizione`, `id_lezione`, `nome`, `cognome`) VALUES
(2, 3, 'Felice', 'Dei'),
(3, 3, 'Felice', 'Dei'),
(4, 3, 'Felice', 'Dei');

-- --------------------------------------------------------

--
-- Table structure for table `lezioni`
--

CREATE TABLE `lezioni` (
  `id_evento` int(11) NOT NULL,
  `id_materie` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lezioni`
--

INSERT INTO `lezioni` (`id_evento`, `id_materie`, `data`) VALUES
(3, 6, '2016-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `materie`
--

CREATE TABLE `materie` (
  `id_materia` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materie`
--

INSERT INTO `materie` (`id_materia`, `materia`) VALUES
(5, 'prova1200'),
(6, 'prova1224'),
(7, 'prova1224'),
(8, 'prova1224'),
(9, 'prova1231'),
(10, 'prova1231'),
(11, 'php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iscrizioni`
--
ALTER TABLE `iscrizioni`
  ADD PRIMARY KEY (`id_iscrizione`),
  ADD KEY `relationWithLezioni` (`id_lezione`);

--
-- Indexes for table `lezioni`
--
ALTER TABLE `lezioni`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `relationWithIscrizioni` (`id_materie`);

--
-- Indexes for table `materie`
--
ALTER TABLE `materie`
  ADD PRIMARY KEY (`id_materia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iscrizioni`
--
ALTER TABLE `iscrizioni`
  MODIFY `id_iscrizione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lezioni`
--
ALTER TABLE `lezioni`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `materie`
--
ALTER TABLE `materie`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `iscrizioni`
--
ALTER TABLE `iscrizioni`
  ADD CONSTRAINT `relationWithLezioni` FOREIGN KEY (`id_lezione`) REFERENCES `lezioni` (`id_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lezioni`
--
ALTER TABLE `lezioni`
  ADD CONSTRAINT `relationWithIscrizioni` FOREIGN KEY (`id_materie`) REFERENCES `materie` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

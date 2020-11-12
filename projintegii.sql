-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 02:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projintegii`
--

-- --------------------------------------------------------

--
-- Table structure for table `artigo`
--

CREATE TABLE `artigo` (
  `codArtigo` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `artigo` mediumblob DEFAULT NULL,
  `img` mediumblob DEFAULT NULL,
  `dataPub` date NOT NULL,
  `link` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `codUser` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `username` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `dataNasc` date NOT NULL,
  `grad` varchar(18) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `dataMemb` date NOT NULL,
  `photo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`codUser`, `nome`, `username`, `senha`, `dataNasc`, `grad`, `estado`, `cidade`, `dataMemb`, `photo`) VALUES
(1, 'Cauã Pablo Padilha', 'padilhaCaua', 'dfbf6f079b428caa9410f95b2ef79bdd', '2004-01-29', 'Ensino Fundamental', 'SC', 'Joinville', '2020-06-15', '0182d16f32c9d098df5c5e7ae12f8b25.png'),
(2, 'Yuri Hassel', 'hasselYuri', 'dfbf6f079b428caa9410f95b2ef79bdd', '2003-04-01', 'Ensino Fundamental', 'SC', 'Joinville', '2020-06-18', '221a912a981a8496249016f2a385a54e.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`codArtigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigo`
--
ALTER TABLE `artigo`
  MODIFY `codArtigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

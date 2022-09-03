-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 03:11 PM
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
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `chargement`
--

CREATE TABLE `chargement` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `ref` varchar(191) NOT NULL,
  `tip` varchar(191) NOT NULL,
  `spec` varchar(191) NOT NULL,
  `pay` varchar(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `time1` varchar(191) NOT NULL,
  `time2` varchar(191) NOT NULL,
  `noms` varchar(191) NOT NULL,
  `adresse` varchar(191) NOT NULL,
  `inter` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `tel` varchar(191) NOT NULL,
  `ville` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chargement`
--

INSERT INTO `chargement` (`id`, `name`, `ref`, `tip`, `spec`, `pay`, `date`, `time1`, `time2`, `noms`, `adresse`, `inter`, `email`, `tel`, `ville`, `code`) VALUES
(1, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(2, 'Eric Djou', '4', 'dcc', 'd', 'ddf', '2022-08-05', '01:20', '01:19', 'Eric Djou', 'Santa Barbara yaounde', 'sdd', 'eric.djou41@gmail.com', '663', 'Yaounde', '625'),
(3, 'Eric Djou', '6655', 'j', 'f', 'e', '2022-08-03', '05:48', '05:49', 'Eric Djou', 'Santa Barbara yaounde', 'yy', 'eric.djou41@gmail.com', '6655215', 'Yaounde', '625'),
(4, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(5, 'Eric Djou', '6655', 'j', 'f', 'e', '2022-08-03', '05:48', '05:49', 'Eric Djou', 'Santa Barbara yaounde', 'yy', 'eric.djou41@gmail.com', '6655215', 'Yaounde', '625'),
(6, 'Eric Djou', '6655', 'j', 'f', 'e', '2022-08-03', '05:48', '05:49', 'Eric Djou', 'Santa Barbara yaounde', 'yy', 'eric.djou41@gmail.com', '6655215', 'Yaounde', '625'),
(7, 'Eric Djou', '6655', 'j', 'f', 'e', '2022-08-03', '05:48', '05:49', 'Eric Djou', 'Santa Barbara yaounde', 'yy', 'eric.djou41@gmail.com', '6655215', 'Yaounde', '625'),
(8, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Eric Djou', '6655', 'j', 'f', 'e', '2022-08-03', '05:48', '05:49', 'Eric Djou', 'Santa Barbara yaounde', 'yy', 'eric.djou41@gmail.com', '6655215', 'Yaounde', '625'),
(13, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(25, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(28, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(30, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(31, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(36, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(40, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(42, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(46, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(48, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(50, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(52, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(53, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(54, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(55, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(56, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 'Eric Djou', '6655', 'j', 'f', 'camerron', '2022-08-03', '01:20', '01:20', 'Eric Djou', 'Santa Barbara yaounde', 'dd', 'eric.djou41@gmail.com', '36', 'Yaounde', '625'),
(58, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `adress` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `phone`, `adress`) VALUES
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, 'Djou', '6522', 'efef'),
(6, 'Eric Djou', '6522', 'efef'),
(7, 'Djou', '6522', 'efef'),
(8, 'Eric Djou', '6522', 'efef'),
(9, 'Djou', '6522', 'efef'),
(10, 'Eric Djou', '6522', 'efef'),
(11, 'Djou', '6522', 'efef'),
(12, 'Eric Djou', '6522', 'efef');

-- --------------------------------------------------------

--
-- Table structure for table `facinfo`
--

CREATE TABLE `facinfo` (
  `id` int(11) NOT NULL,
  `tva` int(100) NOT NULL,
  `mode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genifo`
--

CREATE TABLE `genifo` (
  `tva` int(150) NOT NULL,
  `nomc` int(200) NOT NULL,
  `tel1` int(150) NOT NULL,
  `tel2` varchar(150) NOT NULL,
  `pay` varchar(100) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `adresse` int(100) NOT NULL,
  `code` int(100) NOT NULL,
  `fax` int(50) NOT NULL,
  `adref` int(150) NOT NULL,
  `mail1` varchar(100) NOT NULL,
  `mail2` varchar(100) NOT NULL,
  `adrec` varchar(100) NOT NULL,
  `ges` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genifo`
--

INSERT INTO `genifo` (`tva`, `nomc`, `tel1`, `tel2`, `pay`, `ville`, `adresse`, `code`, `fax`, `adref`, `mail1`, `mail2`, `adrec`, `ges`) VALUES
(513562, 0, 23132, '54546456', 'oejke', 'Yaounde', 0, 625, 31232, 0, 'eric.djou41@gmail.com', 'eric.djou41@gmail.com', 'eric.djou41@gmail.com', 'sff');

-- --------------------------------------------------------

--
-- Table structure for table `infogenclient`
--

CREATE TABLE `infogenclient` (
  `id` int(11) NOT NULL,
  `tva` varchar(300) NOT NULL,
  `nomc` varchar(100) NOT NULL,
  `mail1` varchar(100) NOT NULL,
  `tel1` int(100) NOT NULL,
  `pay` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `adref` varchar(100) NOT NULL,
  `adrec` varchar(100) NOT NULL,
  `ges` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infogenclient`
--

INSERT INTO `infogenclient` (`id`, `tva`, `nomc`, `mail1`, `tel1`, `pay`, `ville`, `adresse`, `adref`, `adrec`, `ges`) VALUES
(8, '6956565', 'sjkfs', 'ahff', 6465, 'ifjafklad', 'iuahfj', 'khafjaf', '654355', 'ysfghd', 'hfhajkf'),
(9, '13256', 'Eric Djou', 'eric.djou41@gmail.com', 65985, 'Cameroon', 'Yaounde', 'Santa Barbara yaounde', 'uydgshjc', 'iusahk', 'Sandra'),
(10, '13256', 'Eric Djou', 'eric.djou41@gmail.com', 65985, 'Cameroon', 'Yaounde', 'Santa Barbara yaounde', 'uydgshjc', 'iusahk', 'Sandra'),
(11, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'jhsgfh'),
(12, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(13, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(14, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(15, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(16, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(17, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(18, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(19, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(20, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd'),
(21, '623202', 'jkghjb', 'hhjbjbk', 3211316, 'safdaf', 'safad', 'afdgsdg', 'adfdsa', 'adfadaf', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `namee` varchar(191) NOT NULL,
  `reff` varchar(191) NOT NULL,
  `tipp` varchar(191) NOT NULL,
  `specc` varchar(191) NOT NULL,
  `payy` varchar(191) NOT NULL,
  `datee` varchar(191) NOT NULL,
  `timee1` varchar(191) NOT NULL,
  `timee2` varchar(191) NOT NULL,
  `nomss` varchar(191) NOT NULL,
  `adressee` varchar(191) NOT NULL,
  `interr` varchar(191) NOT NULL,
  `emaill` varchar(191) NOT NULL,
  `tell` varchar(191) NOT NULL,
  `villee` varchar(191) NOT NULL,
  `codee` varchar(191) NOT NULL,
  `prix` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE `ot` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `ref` varchar(191) NOT NULL,
  `tip` varchar(191) NOT NULL,
  `spec` varchar(191) NOT NULL,
  `pay` varchar(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `time1` varchar(191) NOT NULL,
  `time2` varchar(191) NOT NULL,
  `noms` varchar(191) NOT NULL,
  `adresse` varchar(191) NOT NULL,
  `inter` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `tel` varchar(191) NOT NULL,
  `ville` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `namee` varchar(191) NOT NULL,
  `reff` varchar(191) NOT NULL,
  `tipp` varchar(191) NOT NULL,
  `specc` varchar(191) NOT NULL,
  `payy` varchar(191) NOT NULL,
  `datee` varchar(191) NOT NULL,
  `timee1` varchar(191) NOT NULL,
  `timee2` varchar(191) NOT NULL,
  `nomss` varchar(191) NOT NULL,
  `adressee` varchar(191) NOT NULL,
  `interr` varchar(191) NOT NULL,
  `emaill` varchar(191) NOT NULL,
  `tell` varchar(191) NOT NULL,
  `villee` varchar(191) NOT NULL,
  `codee` varchar(191) NOT NULL,
  `prix` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ot`
--

INSERT INTO `ot` (`id`, `name`, `ref`, `tip`, `spec`, `pay`, `date`, `time1`, `time2`, `noms`, `adresse`, `inter`, `email`, `tel`, `ville`, `code`, `namee`, `reff`, `tipp`, `specc`, `payy`, `datee`, `timee1`, `timee2`, `nomss`, `adressee`, `interr`, `emaill`, `tell`, `villee`, `codee`, `prix`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transinfo`
--

CREATE TABLE `transinfo` (
  `cat` varchar(100) NOT NULL,
  `codes` varchar(100) NOT NULL,
  `noms` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `pay` varchar(100) NOT NULL,
  `adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transporteur`
--

CREATE TABLE `transporteur` (
  `id` int(100) NOT NULL,
  `tva_transporteur` int(100) NOT NULL,
  `nom_transporteur` varchar(100) NOT NULL,
  `siret_transporteur` varchar(100) NOT NULL,
  `rs_transporteur` varchar(100) NOT NULL,
  `ville_transporteur` varchar(11) NOT NULL,
  `codep_transporteur` varchar(100) NOT NULL,
  `pay_transporteur` varchar(60) NOT NULL,
  `tel_transporteur` int(100) NOT NULL,
  `fax_transporteur` int(100) NOT NULL,
  `email_transporteur` varchar(100) NOT NULL,
  `sw_transporteur` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transporteur`
--

INSERT INTO `transporteur` (`id`, `tva_transporteur`, `nom_transporteur`, `siret_transporteur`, `rs_transporteur`, `ville_transporteur`, `codep_transporteur`, `pay_transporteur`, `tel_transporteur`, `fax_transporteur`, `email_transporteur`, `sw_transporteur`) VALUES
(2, 32655265, 'Eric tousse', '54656223', 'jkhjnkln', '0', '', 'psfad', 5435, 64532, 'eric.djou41@gmail.com', 'dgsg'),
(3, 32655265, 'Eric tousse', '54656223', 'jkhjnkln', '0', '', 'psfad', 5435, 64532, 'eric.djou41@gmail.com', 'dgsg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chargement`
--
ALTER TABLE `chargement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facinfo`
--
ALTER TABLE `facinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genifo`
--
ALTER TABLE `genifo`
  ADD PRIMARY KEY (`tva`);

--
-- Indexes for table `infogenclient`
--
ALTER TABLE `infogenclient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ot`
--
ALTER TABLE `ot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporteur`
--
ALTER TABLE `transporteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chargement`
--
ALTER TABLE `chargement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `facinfo`
--
ALTER TABLE `facinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infogenclient`
--
ALTER TABLE `infogenclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ot`
--
ALTER TABLE `ot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transporteur`
--
ALTER TABLE `transporteur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

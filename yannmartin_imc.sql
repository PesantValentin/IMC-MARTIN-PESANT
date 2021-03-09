-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-yannmartin.alwaysdata.net
-- Generation Time: Mar 09, 2021 at 02:50 PM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yannmartin_imc`
--

-- --------------------------------------------------------

--
-- Table structure for table `calcul_log`
--

CREATE TABLE `calcul_log` (
  `id` int(11) NOT NULL,
  `poids` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `imc` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calcul_log`
--

INSERT INTO `calcul_log` (`id`, `poids`, `taille`, `imc`, `user_id`) VALUES
(3, '12', '12', '0.083333333333333', ''),
(4, '50', '150', '0.06', ''),
(5, '50', '250', '0.1', ''),
(6, '25', '150', '0.24', ''),
(7, '12', '40', '0.27777777777778', ''),
(8, '67', '173', '22.386314277123', ''),
(9, '65', '183', '19.409358296754', ''),
(10, '76', '196', '19.783423573511', ''),
(11, '100', '186', '28.905075731298', ''),
(12, '100', '186', '28.905075731298', ''),
(13, '67', '173', '22.386314277123', ''),
(14, '46', '160', '17.96875', ''),
(15, '50', '175', '16.326530612245', ''),
(16, '65', '167', '23.306680053068', ''),
(17, '180', '180', '55.555555555556', ''),
(18, '150', '50', '600', '33'),
(19, '65', '180', '20.061728395062', '3');

-- --------------------------------------------------------

--
-- Table structure for table `connexion_log`
--

CREATE TABLE `connexion_log` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connexion_log`
--

INSERT INTO `connexion_log` (`id`, `user_id`, `date`) VALUES
(1, '3', 'test'),
(2, '3', '08/03/2021'),
(3, '3', '08/03/2021'),
(4, '31', '09/03/2021'),
(5, '31', '09/03/2021'),
(6, '33', '09/03/2021'),
(7, '3', '09/03/2021');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(3, 'test', 'test@test.fr', 'test'),
(31, 'valou', 'valou@laprod.fr', 'valou'),
(32, '', '', ''),
(33, 'mathys', 'mathysbbc@laprod.fr', 'mathys'),
(34, '', '', ''),
(35, 'valll', 'valll@yahoo.com', 'valll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calcul_log`
--
ALTER TABLE `calcul_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connexion_log`
--
ALTER TABLE `connexion_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calcul_log`
--
ALTER TABLE `calcul_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `connexion_log`
--
ALTER TABLE `connexion_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

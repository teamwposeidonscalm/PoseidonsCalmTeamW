-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 01:25 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list_markers`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `info` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `lat`, `lng`, `info`, `type`, `status`, `time`) VALUES
(265, '44.32777776128442', '16.3751220703125', 'Zdrava voda', 'watter', 1, '2017-04-29 10:55:49'),
(266, '44.1743248375189', '16.50146484375', 'djesi', 'watter', 1, '2017-04-29 10:58:47'),
(267, '44.000717834282774', '17.2320556640625', 'GOvance', 'trash', 1, '2017-04-29 11:01:04'),
(268, '44.07574700247845', '16.787109375', 'armin', 'watter', 1, '2017-04-29 12:47:22'),
(269, '44.08363928284644', '16.7047119140625', 'armin ', 'watter', 1, '2017-04-29 12:48:13'),
(270, '43.949327348785225', '14.095458984375', 'hehhehe', 'watter', 1, '2017-04-29 12:48:49'),
(271, '44.12702800650004', '16.9903564453125', 'hahah', 'watter', 1, '2017-04-29 12:52:14'),
(272, '44.03232064275081', '16.9573974609375', 'probni', 'watter', 1, '2017-04-29 12:59:57'),
(273, '44.378839759088585', '15.743408203125', 'Informacija', 'dirtywatter', 1, '2017-04-29 13:00:58'),
(274, '44.16250418310723', '15.97412109375', 'Informacija', 'dirtywatter', 1, '2017-04-29 13:00:58'),
(275, '44.30812668488613', '18.544921875', 'Informacija', 'watter', 1, '2017-04-29 13:18:35'),
(276, '43.95328204198018', '16.7706298828125', 'Informacija', 'dirtywatter', 1, '2017-04-29 13:18:41'),
(277, '44.31205742666618', '17.666015625', 'Informacija', 'watter', 1, '2017-04-29 14:20:58'),
(278, '44.29240108529006', '18.7811279296875', 'Informacija', 'watter', 1, '2017-04-29 14:20:58'),
(279, '43.76315996157265', '19.1217041015625', 'Informacija', 'watter', 1, '2017-04-29 14:20:58'),
(280, '44.33956524809714', '18.054382307454944', 'Informacija', 'watter', 1, '2017-04-29 16:31:36'),
(281, '43.96909818325171', '18.735534651204944', 'Informacija', 'watter', 1, '2017-04-29 16:31:36'),
(282, '44.12702800650004', '16.823913557454944', 'Informacija', 'dirtywatter', 1, '2017-04-29 16:31:36'),
(283, '44.16250418310723', '19.218933088704944', 'Informacija', 'trash', 0, '2017-04-29 16:31:36'),
(284, '43.620170616189895', '19.240905744954944', 'Informacija', 'trash', 0, '2017-04-29 16:31:36'),
(285, '43.16512263158295', '18.054382307454944', 'Informacija', 'trash', 0, '2017-04-29 16:31:36'),
(286, '43.8028187190472', '17.340270979329944', 'Informacija', 'watter', 0, '2017-04-29 16:37:13'),
(287, '44.90257799628887', '9.727294854819775', 'Informacija', 'watter', 0, '2017-04-29 16:40:03'),
(288, '43.1090040242731', '18.519653286784887', 'Informacija', 'watter', 0, '2017-04-29 16:40:48'),
(289, '43.98095752608484', '18.856384260579944', 'Informacija', 'watter', 0, '2017-04-29 16:41:54'),
(290, '43.476840397778936', '17.917053205892444', 'Informacija', 'watter', 0, '2017-04-29 16:42:12'),
(291, '43.81471121600004', '17.208435041829944', 'Informacija', 'watter', 0, '2017-04-29 16:42:35'),
(292, '43.937461690316646', '17.812683088704944', 'Informacija', 'watter', 0, '2017-04-29 16:42:46'),
(293, '43.93350594453702', '17.329284651204944', 'Informacija', 'watter', 0, '2017-04-29 16:43:43'),
(294, '44.26093725039922', '16.796447737142444', 'Informacija', 'watter', 0, '2017-04-29 16:44:10'),
(295, '44.16644466445859', '17.060119612142444', 'Informacija', 'watter', 0, '2017-04-29 16:44:25'),
(296, '44.34349388385858', '20.152770979329944', 'Informacija', 'dirtywatter', 0, '2017-04-29 16:44:57'),
(297, '43.644025847699496', '16.906311018392444', 'Informacija', 'trash', 0, '2017-04-29 16:45:20'),
(298, '43.73538317799622', '17.162750232964754', 'Informacija', 'watter', 0, '2017-04-29 21:45:33'),
(299, '43.30919109985686', '18.365753162652254', 'Informacija', 'dirtywatter', 0, '2017-04-29 21:47:22'),
(300, '43.600284023536325', '17.347412109375', 'Informacija', 'dirtywatter', 0, '2017-04-30 12:07:21'),
(301, '43.83848910616804', '16.1279296875', 'Informacija', 'dirtywatter', 0, '2017-04-30 12:07:21'),
(302, '43.488797600050006', '18.3966064453125', 'Informacija', 'dirtywatter', 0, '2017-04-30 12:07:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

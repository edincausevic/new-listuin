-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 10:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listuin`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `korisnik_id` int(12) NOT NULL,
  `korisnik_fullname` varchar(255) NOT NULL,
  `korisnik_username` varchar(255) NOT NULL,
  `korisnik_email` varchar(255) NOT NULL,
  `korisnik_password` varchar(255) NOT NULL,
  `korisnik_role` varchar(255) NOT NULL,
  `korisnik_image` text NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnik_id`, `korisnik_fullname`, `korisnik_username`, `korisnik_email`, `korisnik_password`, `korisnik_role`, `korisnik_image`, `datum`) VALUES
(24, 'Edin Causevic', 'edo9731', 'causevicedin@live.com', '$2y$08$NXEHba7.XJ5gBDyS5QhSNOq.svfElPejwZ74cf.6MXGglWesLVIIS', 'korisnik', '', '2018-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(12) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_category` varchar(255) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `menu_position` int(3) NOT NULL,
  `removed` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_category`, `menu_image`, `menu_position`, `removed`) VALUES
(1, 'photos', 'Graphic Material', '../img/graphic-material/photos.jpg', 1, NULL),
(2, 'fonts', 'Graphic Material', '../img/graphic-material/photos.jpg', 10, NULL),
(3, 'videos', 'Audio/Video Material', '../img/graphic-material/photos.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_content`
--

CREATE TABLE `menu_content` (
  `menu_content_id` int(12) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `menu_content_title` varchar(255) NOT NULL,
  `menu_content_title_plus` varchar(255) NOT NULL,
  `menu_content_url` varchar(2083) NOT NULL,
  `menu_content_bonus` varchar(255) NOT NULL,
  `menu_content_position` int(3) NOT NULL,
  `removed` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_content`
--

INSERT INTO `menu_content` (`menu_content_id`, `menu_id`, `menu_content_title`, `menu_content_title_plus`, `menu_content_url`, `menu_content_bonus`, `menu_content_position`, `removed`) VALUES
(1, 'photos', 'Pixels', 'Url', 'http://pixels.com', 'Free', 1, NULL),
(3, 'photos', 'Pexels', 'Text', 'https://www.pexels.com/', 'Free', 10, NULL),
(4, 'photos', 'Pexels', 'Text', 'https://www.pexels.com/', 'Free', 10, NULL),
(5, 'photos', 'Pexels', 'Text', 'https://www.pexels.com/', 'Free', 10, NULL),
(6, 'photos', 'Pexels', 'Text', 'https://www.pexels.com/', 'Free', 10, NULL),
(7, 'photos', 'Pexels', 'Text', 'https://www.pexels.com/', 'Free', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mylists_menu`
--

CREATE TABLE `mylists_menu` (
  `mylists_menu_id` int(12) NOT NULL,
  `korisnik_id` int(12) NOT NULL,
  `mylists_menu_title` varchar(255) NOT NULL,
  `mylists_menu_popularity` int(12) NOT NULL,
  `removed` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnik_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_content`
--
ALTER TABLE `menu_content`
  ADD PRIMARY KEY (`menu_content_id`);

--
-- Indexes for table `mylists_menu`
--
ALTER TABLE `mylists_menu`
  ADD PRIMARY KEY (`mylists_menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `korisnik_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_content`
--
ALTER TABLE `menu_content`
  MODIFY `menu_content_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mylists_menu`
--
ALTER TABLE `mylists_menu`
  MODIFY `mylists_menu_id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 04:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trexe`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellerrev`
--

CREATE TABLE `sellerrev` (
  `revid` int(10) UNSIGNED NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellerrev`
--

INSERT INTO `sellerrev` (`revid`, `review`, `sellerid`, `created_at`, `updated_at`) VALUES
(1, 'Good.', 1, NULL, NULL),
(2, 'Had a pleasant experience Authunticated Seller.', 1, NULL, NULL),
(3, 'All details furnished are correct. 4/5 stars', 2, NULL, NULL),
(4, ' would suggest this seller', 2, NULL, NULL),
(5, 'bad experience. too costly for the delivered vehicle', 3, NULL, NULL),
(6, 'need to check the vehicle condition than relying on the details provided.\r\naverage rating.', 3, NULL, NULL),
(7, 'can consult this seller. Okay Okay', 5, NULL, NULL),
(8, 'would love to get more vehicles in future if I need from this seller.', 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellerrev`
--
ALTER TABLE `sellerrev`
  ADD PRIMARY KEY (`revid`),
  ADD KEY `sellerrev_sellerid_foreign` (`sellerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellerrev`
--
ALTER TABLE `sellerrev`
  MODIFY `revid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sellerrev`
--
ALTER TABLE `sellerrev`
  ADD CONSTRAINT `sellerrev_sellerid_foreign` FOREIGN KEY (`sellerid`) REFERENCES `seller` (`sellerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

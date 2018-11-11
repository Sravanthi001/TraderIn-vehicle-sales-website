-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 05:55 AM
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
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `listid` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `make` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `metadata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`listid`, `type`, `year`, `make`, `model`, `description`, `price`, `metadata`, `imagepath`, `sellerid`, `created_at`, `updated_at`) VALUES
(1, 'Car', 1999, 'Mitsubishi ', 'Eclipse', 'The Mitsubishi Eclipse is a sport compact car that was produced by Mitsubishi in four generations between 1989 and 2011. A convertible body style was added during the 1996 model year.', 10000, 'Color: yellow\r\nused for 10 years\r\ngood condition', 'car1.jpg', 4, NULL, NULL),
(2, 'Car', 2012, 'Toyota', 'Celica', 'Toyota Celica GT, 103995 miles, excellent shape, cold AC, great gas mileage, brand new Michelins, lots of power, no accidents, two owner local vehicle,', 6000, 'Color: Red\r\n1000 Miles', 'car22.jpg', 4, NULL, NULL),
(3, 'Truck', 2017, 'International', 'LT Series Day Cab', 'The new International® LT™ Series day cab is the most efficient truck we’ve ever delivered, with major enhancements in aerodynamics, technology and uptime that add up to major operating savings. The LT Series also benefits drivers like never before with a new, ergonomically advanced interior that was designed to optimize visibility, maneuverability, ingress / egress and dozens of other smart features to keep drivers comfortable and in control over the long haul.', 15000, 'Condition : New', 'truck1.jpg', 3, NULL, NULL),
(5, 'RV', 2010, 'International', '4300LP BOX TRUCK', 'LOW MILES!!! INTERNATIONAL 4300LP BOX TRUCK 2010 NON-CDL - BODY W/LIFTGATE and SIDE DOOR!! - 25,999 GVW MAXXFORCE DT 225HP, EATON ULTRASHIFT FULLY AUTOMATIC , AM/FM RADIO, INT.WIPERS, TILT STEERING, ENGINE BLOCK HEATER, AIR SUSP. DRIVER SEAT, HEATED MIRRORS, ALUMINUM FUEL TANK 70GAL., AIR COND., DISC WHEELS 16FT. REAR VIEW CAMERA!!! GREAT DELIVERY TRUCK! AVAILABLE NOW IN LINDEN, NJ MAKE AN OFFER TODAY!!!! CALL 909-862-8181 EXT: 246', 18995, 'Condition: Used\r\nStock Number: U501\r\nHours: 137565', 'RV.jpg', 2, NULL, NULL),
(6, 'RV', 2005, 'International\r\n', 'Paystar 5600i', 'INTERNATIONAL 5600i TRI-AXLE DUMP TRUCK CUMMINS ISM 410HP, 10 SPEED FULLER W/OD and DOUBLE LO, 18K FRONT AXLE, HENDRICKSON 46K REAR AXLES and LIFT AXLE, JACOBS ENGINE BRAKE, AIR SUSPENSION DRIVER SEAT, ALUMINUM FRONT WHEELS, STEEL REAR WHEELS, STEEL BODY. TRUCK IS LOCATED IN LINDEN NJ. All offers considered! CALL 908-862-8181 EXT 246', 49000, 'Condition: Used\r\nStock Number: U485\r\nMiles: 425000', 'RV2.jpg', 3, NULL, NULL),
(7, 'Motorcycle', 2017, 'Harley-Davidson', 'Classic', 'Harley-Davidson 2012 Heritage Soft Tail 103 CI / 6 speed , custom seat, python pipes, LED lights, passenger foot pads, dust cover, battery tender, NO ACCIDENTS, many extras ,only 7500 miles like new', 15000, 'color: black', 'Harley1.jpg', 3, NULL, NULL),
(8, 'Truck', 2017, 'International', 'HX™ Series HX515', 'If you’re looking for a truck designed to endure the most punishing of jobsites and look good while doing it, look to the new HX515. It features a compact short hood and set-forward front axle that’s built to tackle stringent axle weight restrictions with optimal maneuverability. Whether you need the ideal configuration for a concrete mixer or a bridge formula construction dump, the HX515 is engineered to move you to the head of the', 165000, 'Condition: New\r\nMiles: 252', 'truck2.jpg', 1, NULL, NULL),
(9, 'Motorcycle', 2014, 'Suzuki', 'Boulevard', 'Details\r\nSuzuki 2017 Boulevard S40, 650CC, 33 mis., black, $4100 obo.', 14200, 'Condition: New\r\nMilage: 32', 'Harley2.jpg', 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`listid`),
  ADD KEY `listing_sellerid_foreign` (`sellerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `listid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listing`
--
ALTER TABLE `listing`
  ADD CONSTRAINT `listing_sellerid_foreign` FOREIGN KEY (`sellerid`) REFERENCES `seller` (`sellerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

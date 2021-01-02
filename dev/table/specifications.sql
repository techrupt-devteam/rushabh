-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 02:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rushabh_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` int(11) NOT NULL,
  `bike_scooter_id` int(11) NOT NULL,
  `type` varchar(155) NOT NULL,
  `list` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `is_deleted` enum('No','Yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `bike_scooter_id`, `type`, `list`, `details`, `created_at`, `status`, `updated_at`, `is_deleted`) VALUES
(1, 1, 'Body Dimensions', 'Length', '2020 mm', '', 'Active', '', 'No'),
(2, 1, 'Body Dimensions', 'Width', '785 mm', '', 'Active', '', 'No'),
(3, 1, 'Body Dimensions', 'Height', '1103 mm', '', 'Active', '', 'No'),
(4, 1, 'Body Dimensions', 'Wheel Base', '1285 mm', '', 'Active', '', 'No'),
(5, 1, 'Body Dimensions', 'Ground Clearance', '160 mm', '', 'Active', '', 'No'),
(6, 1, 'Body Dimensions', 'Kerb weight', 'Disc 118 kg, Drum 117 kg', '', 'Active', '', 'No'),
(7, 1, 'Body Dimensions', 'Seat Length', '705 mm', '', 'Active', '', 'No'),
(8, 1, 'Body Dimensions', 'Seat Height', '790 mm', '', 'Active', '', 'No'),
(9, 1, 'Body Dimensions', 'Fuel tank capacity', '11 L', '', '', '', ''),
(43, 1, 'Transmission', 'Clutch Type', 'Multiplate Wet Clutch', '', 'Active', '', 'No'),
(44, 1, 'Transmission', 'No. of Gears', '5 Gears', '', 'Active', '', 'No'),
(45, 1, 'Engine', 'Type', '4 stroke, SI Engine', '', 'Active', '', 'No'),
(46, 1, 'Engine', 'Displacement', '124cc', '', 'Active', '', 'No'),
(47, 1, 'Engine', 'Max net power', '8kW @ 7500 rpm', '', 'Active', '', 'No'),
(48, 1, 'Engine', 'Max net torque', '10.9 N-m @ 6000 rpm', '', 'Active', '', 'No'),
(49, 1, 'Engine', 'Fuel System', 'PGM-FI', '', 'Active', '', 'No'),
(50, 1, 'Engine', 'Bore x Stroke', '50.0 X 63.1 mm', '', 'Active', '', 'No'),
(51, 1, 'Engine', 'Compression ratio', '10.0:1', '', 'Active', '', 'No'),
(52, 1, 'Engine', 'Starting method', 'Self/Kick', '', 'Active', '', 'No'),
(53, 1, 'Tyres & brakes', 'Tyre Size & Type (Front)', '80/100-18 M/C 47P, Tubeless', '', 'Active', '', 'No'),
(54, 1, 'Tyres & brakes', 'Tyre Size & Type (Rear)', '80/100-18 M/C 54P, Tubeless', '', 'Active', '', 'No'),
(55, 1, 'Tyres & brakes', 'Brake Size & Type (Front)', 'Disc 240 mm, Drum 130 mm', '', 'Active', '', 'No'),
(56, 1, 'Tyres & brakes', 'Brake Size & Type (Rear)', 'Drum 130 mm', '', 'Active', '', 'No'),
(57, 1, 'Frame & Suspension', 'Frame Type', 'Diamond Type', '', 'Active', '', 'No'),
(58, 1, 'Frame & Suspension', 'Front Suspension', 'Telescopic', '', 'Active', '', 'No'),
(59, 1, 'Frame & Suspension', 'Rear Suspension', 'Hydraulic Type', '', 'Active', '', 'No'),
(60, 1, 'Electricals', 'Battery', '12V, 5.0Ah', '', 'Active', '', 'No'),
(61, 1, 'Electricals', 'Head lamp ', 'LED, DC', '', 'Active', '', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

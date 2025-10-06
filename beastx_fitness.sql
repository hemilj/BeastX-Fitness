-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 06, 2025 at 02:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `name`, `email`, `pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'Hello@1u');

-- --------------------------------------------------------

--
-- Table structure for table `catagory_master`
--

CREATE TABLE `catagory_master` (
  `cid` int(11) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory_master`
--

INSERT INTO `catagory_master` (`cid`, `cname`, `photo`, `status`) VALUES
(1, 'Protein-Powders', 'ProteinPowders.jpg', 0),
(2, 'Gym-Equipment', 'GymEquipment.jpg', 0),
(3, 'Gym-Apparel', 'GymApparel.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pdesc` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` double NOT NULL,
  `pdate` date NOT NULL,
  `photo` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`pid`, `cid`, `pname`, `pdesc`, `qty`, `rate`, `pdate`, `photo`, `status`) VALUES
(1, 2, 'Barbells & Weight Plates', 'Strong cast iron Olympic plates for strength training, ideal for home gyms, durable design ensures safe and effective workouts.', 10, 6000, '2025-08-15', 'abcd.jpg', 0),
(2, 1, 'The CLEAR pre-workout', 'Premium pre-workout formula delivers powerful energy, improved focus, and endurance, supporting athletes during intense workouts and heavy training sessions.', 7, 5000, '2025-08-15', 'The-CLEAR-pre-workout.jpg', 0),
(3, 2, 'Elliptical', 'Elliptical trainer offers low-impact cardio exercise, burns calories, strengthens muscles, improves stamina, and protects joints with smooth, effective movement.', 10, 15000, '2025-08-15', 'Elliptical.jpg', 0),
(4, 1, 'Protein-Chocolate', 'Rich chocolate protein powder supports muscle growth, strength recovery, and nutrition needs, making it perfect for daily post-workout supplementation.', 5, 1000, '2025-08-15', 'Protein-Chocolate.jpg', 0),
(5, 3, 'Gym Clothing Kit', 'Stylish, breathable gym apparel set designed for comfort, flexibility, and durability, ensuring peak performance during intense workouts and training.', 6, 1500, '2025-08-15', 'GymClothingKit.jpg', 0),
(6, 3, 'Gym Shoes', 'Lightweight, cushioned shoes provide maximum comfort, grip, and stability, making them perfect for running, training, and everyday gym sessions.', 8, 750, '2025-08-15', 'GymShoes.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory_master`
--
ALTER TABLE `catagory_master`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagory_master`
--
ALTER TABLE `catagory_master`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_master`
--
ALTER TABLE `product_master`
  ADD CONSTRAINT `product_master_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `catagory_master` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

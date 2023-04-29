-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 02:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
('BcjKNX58e4x7bIqIvxG7', 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `password`) VALUES
(214748364, 'agent2', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `message`) VALUES
('7FF3pxcgyyStB5LjOOZ0', 'ronaldo', 'ronaldo@gmail.com', '1812659703', 'I need help. Please help me!');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `offer` varchar(10) NOT NULL,
  `bhk` varchar(10) NOT NULL,
  `bedroom` varchar(10) NOT NULL,
  `bathroom` varchar(10) NOT NULL,
  `room_floor` varchar(2) NOT NULL,
  `lift` varchar(3) NOT NULL DEFAULT 'no',
  `security_guard` varchar(3) NOT NULL DEFAULT 'no',
  `garden` varchar(3) NOT NULL DEFAULT 'no',
  `power_backup` varchar(3) NOT NULL DEFAULT 'no',
  `parking_area` varchar(3) NOT NULL DEFAULT 'no',
  `gym` varchar(3) NOT NULL DEFAULT 'no',
  `image_01` varchar(50) NOT NULL,
  `image_02` varchar(50) NOT NULL,
  `image_03` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `user_id`, `property_name`, `address`, `price`, `type`, `offer`, `bhk`, `bedroom`, `bathroom`, `room_floor`, `lift`, `security_guard`, `garden`, `power_backup`, `parking_area`, `gym`, `image_01`, `image_02`, `image_03`, `description`, `date`) VALUES
('RL7lRPud81R8tKfZhjS4', 'u4mZoC33qdLavBaB5kEY', 'Shundor Basha', 'Uttara', '150000', 'flat', 'sale', '2', '3', '2', '10', 'yes', 'yes', 'no', 'no', 'no', 'no', 'tS1Myo07uccmGKO6jUUJ.jpg', '5dzgxoiZXGt76KTEW2Jm.jpg', 'Pp3BezFyE8XPYCixBbSo.jpg', 'Onek shundor!', '2023-04-28'),
('I6OFDBeZX8o87MBc3lCL', 'hmPQAt5lCp219IT1HUHW', 'Atisha&#39;s Palace', 'Mohakhali', '24000000', 'House', 'Rent', '5', '3', '3', '12', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'lZYAxDazMyvSR3E8jbqA.jpg', '5g5dZXW7ZATkzNVXTmdu.jpg', '', 'Live life the luxury way!', '2023-04-28'),
('fZWHfeXEXHrx92rI07L8', '0vxii8Ztyhz1bRLCUxIT', 'Empire', 'Banani', '20000', 'Flat', 'Resale', '3', '2', '4', '3', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'nsv4sn2G1RO2z9nPGvLO.jpg', 'KNzpmaUOAXqsZXpJfwQb.jpg', '', 'Best price at the best spot!', '2023-04-28'),
('XO6vdCXn9Ek8HwkgeUsv', '0vxii8Ztyhz1bRLCUxIT', 'Prashad', 'Banani', '6000000', 'House', 'Sale', '5', '4', '4', '15', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'nYWixtAzScvN87YO0Hha.jpg', 'cHRlnJChAPzVfDFx3kzO.jpg', '', 'If you&#39;re looking for luxury , this is the best place to look for!', '2023-04-28'),
('w0tqprFpe6FFGgGmxk8Q', '214748364', 'Burj-Al-Khalifa', 'Banani', '7500000', 'Flat', 'Sale', '5', '4', '4', '1', 'no', 'no', 'yes', 'yes', 'no', 'no', 'VCjQn8AllYL0Svc82cPx.jpg', 'yeG4BEP93UxlZhUF4cdH.jpg', '', 'Best!', '2023-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `property_id`, `sender`, `receiver`, `date`) VALUES
('pQtNtzL7Ri2wgfXv5HGu', 'RL7lRPud81R8tKfZhjS4', 'hmPQAt5lCp219IT1HUHW', 'u4mZoC33qdLavBaB5kEY', '2023-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `property_id`, `user_id`) VALUES
('qECjnLI64PNlGSQu0rG6', 'RL7lRPud81R8tKfZhjS4', 'hmPQAt5lCp219IT1HUHW'),
('Bo5oPSdpGp2xcTCciIDM', 'I6OFDBeZX8o87MBc3lCL', 'hmPQAt5lCp219IT1HUHW');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
('u4mZoC33qdLavBaB5kEY', 'user@gmail.com', '0181265970', 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('hmPQAt5lCp219IT1HUHW', 'ronaldo', '0171161646', 'ronaldo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('0vxii8Ztyhz1bRLCUxIT', 'messi', '12345678', 'messi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

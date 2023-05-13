-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 06:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `id` int(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `id`, `Email`, `password`, `code`) VALUES
('sneha', 1, 'sneha@gmail.com', 'sneha', 0),
('asd', 2, 'asd@gmail.com', 'asd', 0),
('ranju', 3, 'ranju@gmail.com', 'password', 0),
('as', 4, 'as@gmail.com', '$2y$10$FiloV3g4y2EoI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `address`, `subject`, `message`, `created_at`) VALUES
(1, 'Sneha Bega', 'begasneha@gmail.com', 'Chabahil', 'dfghj', 'dfghjkc vbfgh', '2023-05-03 15:08:51'),
(2, 'ranju', 'ranju@gmail.com', 'Chabahil', 'about tour package', 'dfghjkl;\'\r\ndfshbnmokdspojel', '2023-05-09 04:47:43'),
(3, 'Tae', 'T@gmail.com', 'Kapan', 'issues about Subscription page', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor semper mi, in interdum orci vestibulum ac. Nulla facilisi. Duis blandit, sapien quis auctor tempor, ipsum augue pellentesque elit, in dictum lorem nibh vitae tellus. Fusce bibendum ligula sit amet turpis hendrerit, vel viverra lorem imperdiet. ', '2023-05-09 09:51:04'),
(4, 'Anmol Adhikari', 'anmol@gmail.com', 'Lalitpur', 'Regarding Email issues', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor semper mi, in interdum orci vestibulum ac. Nulla facilisi. Duis blandit, sapien quis auctor tempor, ipsum augue pellentesque elit, in dictum lorem nibh vitae tellus. Fusce bibendum ligula sit amet turpis hendrerit, vel viverra lorem imperdiet', '2023-05-09 09:51:04'),
(5, 'JinHyung', 'jin@gmail.com', 'Bhaktapur', 'Regarding contact us issues', 'consectetur adipiscing elit. Sed auctor semper mi, in interdum orci vestibulum ac. Nulla facilisi. Duis blandit, sapien quis auctor tempor, ipsum augue pellentesque elit, in dictum lorem nibh vitae tellus. Fusce bibendum ligula sit amet turpis hendrerit, vel viverra lorem imperdiet. ', '2023-05-09 10:03:17'),
(6, 'JKmin', 'min@gmail.com', 'Chabahil', 'consectetur adipiscing elit.', 'consectetur adipiscing elit. Sed auctor semper mi, in interdum orci vestibulum ac. Nulla facilisi. Duis blandit, sapien quis auctor tempor, ipsum augue pellentesque elit, in dictum lorem nibh vitae tellus. Fusce bibendum ligula sit amet turpis hendrerit, vel viverra lorem imperdiet. ', '2023-05-09 10:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Neha', 'N@gmail.com', '123'),
(2, 'Grishma', 'g@gmail.com', '4567'),
(3, 'ranju', 'r@gmail.com', '87654'),
(4, 'Britika', 'b@gmail.com', '56745');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `place_booked_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `rating`, `feedback`) VALUES
(1, 'Sneha', 'np03cs4s220010@heraldcollege.edu.np', 5, 'I really like the facilities of the hotel room and the co-workers cooperation. '),
(2, 'Sneha', 'np03cs4s220010@heraldcollege.edu.np', 5, 'I really like the facilities of the hotel room and the co-workers cooperation. '),
(3, 'Neha', 'N@gmail.com', 4, 'I really like the style of the Pokhara Hotel'),
(4, 'Pema ', 'Pema@gmail.com', 3, 'I like it Kunfu panda master'),
(5, 'Ranju Mahato', 'R@gmail.com', 4, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `my_table`
--

CREATE TABLE `my_table` (
  `ID` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(6) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `date`, `time`, `message`) VALUES
(1, '2023-05-16', '14:24:37', 'Neha booked Hotel Pagoda to travel to Pokhara for 3 days. '),
(2, '2023-05-02', '05:24:37', 'Britika saved one of your hotel destination for May 15. ');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `duration`, `price`, `description`, `image`) VALUES
(1, 'Hotel Annapurna ', 2, 10000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel felis a lorem dignissim tincidunt a a augue. Etiam vel consequat lorem. Phasellus posuere augue et fermentum tincidunt\r\n', 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(6) UNSIGNED NOT NULL,
  `cardnumber` varchar(16) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `expirydate` varchar(5) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `cardnumber`, `cardname`, `expirydate`, `cvv`, `created_at`) VALUES
(1, '', '', '', '', '2023-05-03 12:26:43'),
(3, '67809', 'fghj', '8009', '78v', '2023-05-03 12:48:02'),
(4, '12345', 'Sneha ', '2025', 'sne', '2023-05-03 14:42:12'),
(8, '8848', 'Ranju', '09/12', '884', '2023-05-04 05:10:08'),
(9, '4567', 'sdfgh', '2345', 'sdf', '2023-05-04 07:34:32'),
(10, '5678', 'KKKKK', '33-90', 'wed', '2023-05-05 07:54:20'),
(11, '5678', 'AKMU', '33-90', 'hfd', '2023-05-05 07:55:30'),
(12, '45678', 'Grishma', '34-5', 'sdf', '2023-05-05 07:56:12'),
(13, '45678', 'Britika', '34-5', 'sdf', '2023-05-05 07:57:57'),
(14, '6789', 'grishma', '09/12', 'dfh', '2023-05-09 04:44:46'),
(15, '4545', 'Sujal', '09/12', '884', '2023-05-09 10:06:51'),
(16, '9876543210', 'hero', '02/12', '123', '2023-05-10 02:15:20'),
(17, '456789', 'xgh', '8967', 'cgh', '2023-05-10 03:06:43'),
(18, '9812345678', 'ram', '02/12', 'rrr', '2023-05-10 03:14:47'),
(19, '9876543212', 'Ranjana Mahato', '12/03', '123', '2023-05-10 04:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `name`, `email`, `subscription`) VALUES
(1, 'Sneha ', 'begasneha@gmail.com', 'monthly'),
(2, 'Sneha ', 'begasneha@gmail.com', 'monthly'),
(3, 'Sneha ', 'begasneha@gmail.com', 'monthly');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `dob`, `email`, `password`, `mobile`) VALUES
(1, 'sneha', '2004-04-16', 'begasneha@gmail.com', 'sneha', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(11) UNSIGNED NOT NULL,
  `destination` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  `flight_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `destination`, `route`, `arrival_time`, `departure_time`, `flight_type`) VALUES
(1, 'Kathmandu', '12', '02:03:00', '04:03:00', 'Chitwan'),
(4, 'Kathmandu', '12', '02:03:00', '04:03:00', 'Chitwan'),
(5, 'Pokhara', '12', '02:03:00', '04:03:00', 'Pokhara'),
(6, 'Pokhara', '12', '02:03:00', '04:03:00', 'Pokhara'),
(7, 'Chitwan ', '11', '01:43:00', '02:43:00', 'Pokhara'),
(8, 'POKHARA', '21', '09:38:00', '10:38:00', 'Pokhara'),
(9, 'Manang', '12', '09:47:00', '00:45:00', 'Mustang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(100) NOT NULL,
  `ID` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `ID`, `email`, `Password`, `Gender`) VALUES
('sneha ', 1, 'begasneha@gmail.com', 'sneha07', 'female'),
('Newt', 5, '', 'Newt', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_table`
--
ALTER TABLE `my_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `my_table`
--
ALTER TABLE `my_table`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

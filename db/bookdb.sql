-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 01:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`id`, `name`, `email`, `phone`, `password`, `cpassword`) VALUES
(15, 'gaggi', 'gaganramgharia808@gmail.com', '5454545', '$2y$10$m/dwhPv5C0pbArOokTIMcuLe95JPSuDzRcKtE1BlIeIzc5pcYCp5a', '$2y$10$OQbwfNAE54MY8BPDOV2PrOhvA6iQrbtijxmNAuz96EcZn2HHi.7D6'),
(16, 'gagandeep', 'gaganramgharia880000@gmail.com', '545454545', '$2y$10$BeS/kAFbK6EwZk2T4nFrf..U7y9PQwnv8o1T.HBsVmBbcVGMkZrC6', '$2y$10$..V.94oj2TZA0XIpo5oF0.tkT2f0pmBC1ZAfV/Pv4so.xO6Lz6W8G'),
(17, 'gagan4545454', 'gaganramgharia088@gmail.com', '45454', '$2y$10$Kks1Oq.OcwToWmdkNgaU/O9UOn3mqFVhFI3dAN03fZSiawVrM4hqG', '$2y$10$yKEpLy7prhUxRs/Krhf6WelCOepLxLq9xLNrS7YUURLaWw2nm9CLi'),
(20, 'admin', 'gaganramgharia88@gmail.com000', '525852', '$2y$10$7ptFEb3U6IFj/DStFl7rnOG42TnAfGY0as0rj2TT9.JmPcBW2Guce', '$2y$10$AAacifsdB5oohcOB4zZcvOxxNu7tmm0wL5zBq96g0nsb.cQ1Ql.Eu'),
(21, 'gagan', 'gaganramgharia88@gmail.com', '4534564', '$2y$10$AD.mf7TZmLWsc3ngKNT8cOq8AzVOBLHn8raJH33v0pBpS3bNk2aQ.', '$2y$10$KEC2k6E9aNpM.Ab7LpC9g.MYn5bcIOwROpj1x1dC8hrvfPMJOahr.');

-- --------------------------------------------------------

--
-- Table structure for table `bookinventoryorder`
--

CREATE TABLE `bookinventoryorder` (
  `orderid` int(20) NOT NULL,
  `customerid` int(20) NOT NULL,
  `book_id` int(20) NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books_inventory`
--

CREATE TABLE `books_inventory` (
  `book_id` int(20) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `book_price` decimal(6,2) NOT NULL,
  `book_quantity` int(20) NOT NULL,
  `Published_date` date NOT NULL,
  `offer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_inventory`
--

INSERT INTO `books_inventory` (`book_id`, `book_name`, `book_author`, `book_image`, `category_name`, `book_price`, `book_quantity`, `Published_date`, `offer`) VALUES
(1, 'Becoming', 'Michelle Obama', 'becoming.jpg', 'Motivational', '10.00', 45, '2016-09-21', '25%'),
(3, 'Think and Grow Rich', 'Napoleon Hill', 'think.jpg', 'Motivational', '15.00', 50, '2010-12-02', '20%'),
(4, 'You, Happier', 'Daniel G. Amen', 'happier.jpg', 'Inspirational', '14.00', 60, '2017-10-10', '15%'),
(5, 'gagan', ' Matt Haig', '../images/free3.jpg', 'Motivational', '10.00', 55, '2012-10-22', '25%'),
(20, 'gagan', 'gagan', '../images/becoming.jpg', 'gagan', '0.00', 0, '2022-08-19', 'offer');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `CardName` varchar(30) NOT NULL,
  `cardNumber` int(10) NOT NULL,
  `ExpDate` date NOT NULL,
  `Cvv` int(3) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(20) NOT NULL,
  `username` varchar(60) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` char(2) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `country` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `phone`, `message`) VALUES
(13, 'Gagandeep Singh', 'gaganramgharia808@gmail.com', '2896803322', 'hyyyyy'),
(14, 'Gagandeep Singh', 'gaganramgharia8800@gmail.com', '2896803322', 'hi there'),
(15, 'Gagandeep Singh', 'gaganramgharia8888@gmail.com', '2896803322', 'hlo'),
(16, 'Gagandeep Singh', 'gaganramgharia88@gmail.com', '2896803322', 'hi'),
(17, 'Gagandeep Singh', 'gaganramgharia88@gmail.com', '2896803322', 'hyy');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `DOB` datetime NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phno` int(10) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`FirstName`, `LastName`, `DOB`, `Gender`, `email`, `phno`, `subject`) VALUES
('gagandeep', 'singh', '1997-11-01 00:00:00', '', 'gaganramgharia88@gma', 2147483647, ''),
('gagandeep', 'singh', '1997-11-01 00:00:00', '', 'gaganramgharia88@gma', 2147483647, ''),
('gagandeep', 'singh', '1997-11-01 00:00:00', '', 'gaganramgharia88@gma', 2147483647, ''),
('gagandeep', 'singh', '1997-11-01 00:00:00', 'male', 'gaganramgharia88@gma', 2147483647, ''),
('gaggi', 'saru', '1997-11-01 00:00:00', 'male', 'gagan88@gmail.com', 1289680, ''),
('sarru', 'gaggi', '1997-11-01 00:00:00', 'female', 'saru@gmail.com', 123654, ''),
('gagandeep', 'singh', '1998-11-01 00:00:00', 'male', 'gaganramgharia88@gma', 2147483647, 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `password`, `cpassword`) VALUES
(3, 'gagan', 'gaganramgharia88@gmail.com', '152463258', '$2y$10$iysp39Lx2.Nvpqn5.5W5/eSI4VA.D8fEGdyP6nzrei8kSYJA7tsp6', '$2y$10$wbpVFrrP9kxjcgdie7It3upzPuk9KH0992H3qnD694h2BFNRrQRMS');

-- --------------------------------------------------------

--
-- Table structure for table `suscribers`
--

CREATE TABLE `suscribers` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinventoryorder`
--
ALTER TABLE `bookinventoryorder`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `bookinventoryorder_ibfk_1` (`customerid`),
  ADD KEY `bookinventoryorder_ibfk_` (`book_id`);

--
-- Indexes for table `books_inventory`
--
ALTER TABLE `books_inventory`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suscribers`
--
ALTER TABLE `suscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregister`
--
ALTER TABLE `adminregister`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bookinventoryorder`
--
ALTER TABLE `bookinventoryorder`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books_inventory`
--
ALTER TABLE `books_inventory`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suscribers`
--
ALTER TABLE `suscribers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookinventoryorder`
--
ALTER TABLE `bookinventoryorder`
  ADD CONSTRAINT `bookinventoryorder_ibfk_` FOREIGN KEY (`book_id`) REFERENCES `books_inventory` (`book_id`),
  ADD CONSTRAINT `bookinventoryorder_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

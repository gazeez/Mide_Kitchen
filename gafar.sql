-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 09:59 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gafar`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(9000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `description`, `category`, `price`, `image`) VALUES
('A1234567', 'American Breakfast', 'This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. ', 'Carbohydrate', '35', 'ame'),
('A1234542', 'Rice Meal', 'This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. ', 'Carbohydrate', '25', 'rice'),
('A1234589', 'Chicken Burger', 'This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. This is a very good food. ', 'Protein', '40', 'chi');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `food`, `name`, `email`, `address`) VALUES
('1590744813', 'A1234589', 'Oluwaseun Duyilemi', 'dre@yahoo.com', 'This is my address'),
('1590744927', 'A1234542', 'Oluwaseun Duyilemi', 'dre@yahoo.com', 'This is my address');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` varchar(100) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `orderid`, `name`, `review`) VALUES
('998y08y', '', 'Oluwaseun Duyilei', 'I love their food'),
('iuukhohi', '', 'Ayo Duyilei', 'The best food ever'),
('1590744962', '1590744927', 'Oluwaseun Duyilemi', 'Very good one. I am impressed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `phone`, `address`) VALUES
('Oluwaseun Duyilemi', 'dre@yahoo.com', '12345', '08080808', 'This is my address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 03:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_light`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(15) NOT NULL,
  `prod_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `prod_id`, `c_id`, `quantity`, `price`, `date`) VALUES
(15, 3, 3, '1', 780, '2022-08-03'),
(16, 3, 1, '1', 780, '2023-06-18'),
(17, 3, 1, '1', 780, '2023-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(15) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Lipstick'),
(3, 'Eye shadow'),
(4, 'Mascara');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `c_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `username`, `password`, `c_name`, `email`, `address`, `contact`, `image`, `c_status`) VALUES
(1, 'Mahi', '1234', 'Mahima', 'mahi@gmail.com', 'Mangalore', '9895675432', '../upload/girl.jpg', 'approved'),
(3, 'aami', '1234', 'Aami Gautham', 'aami@gmail.com', 'mangalore', '9895675432', '../upload/girl.jpg', 'approved'),
(4, 'anu', '1234', 'Anusha', 'anu@gmail.com', 'Mangalore', '7994060456', '../upload/girl.jfif', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `c_id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(2, 1, 'Mahi', 'mahi@gmail.com', 'Website', 'This is a cool website', '2022-07-29'),
(3, 3, 'aami', 'aami@gmail.com', 'products', 'Cool products for reasonable price', '2022-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(15) NOT NULL,
  `total_amt` double NOT NULL,
  `c_id` int(15) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `addrs1` varchar(100) NOT NULL,
  `addrs2` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `total_amt`, `c_id`, `f_name`, `l_name`, `addrs1`, `addrs2`, `contact`, `state`, `pincode`, `date`, `status`) VALUES
(1, 8047, 1, 'Mahima', 'Surendran', 'Statebank', 'Mangalore', '8075324876', 'Karnataka', '576214', '2022-08-02', 'order received'),
(2, 4147, 3, 'aami', 'Gautham', 'kandak', 'Mangalore', '8075324876', 'Karnataka', '576214', '2022-08-03', 'order delivered'),
(3, 1560, 3, 'Aami ', 'Gautham', 'Statebank', 'Mangalore', '9895689456', 'Karnataka', '576214', '2022-08-01', 'order received'),
(4, 7800, 1, 'Mahima', 'Surendran', 'Statebank', 'Mangalore', '7994060456', 'Karnataka', '576214', '2022-08-03', 'order received'),
(5, 7800, 1, 'Mahima', 'Surendran', 'Statebank', 'Mangalore', '7994060456', 'Karnataka', '576214', '2022-08-03', 'order received'),
(6, 3600, 3, 'aami', 'Gautham', 'Statebank', 'Mangalore', '8075324876', 'Karnataka', '576214', '2022-08-03', 'order received');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `od_id` int(15) NOT NULL,
  `o_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `p_id` int(15) NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `price` double NOT NULL,
  `od_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`od_id`, `o_id`, `c_id`, `p_id`, `quantity`, `price`, `od_status`) VALUES
(1, 1, 1, 3, '5', 780, ''),
(2, 1, 1, 2, '2', 575, ''),
(3, 1, 1, 4, '3', 999, ''),
(4, 2, 3, 2, '2', 575, ''),
(5, 2, 3, 4, '3', 999, 'order delivered'),
(6, 3, 3, 3, '2', 780, ''),
(7, 4, 1, 3, '10', 780, ''),
(8, 5, 1, 3, '10', 780, ''),
(9, 6, 3, 6, '3', 450, ''),
(10, 6, 3, 5, '5', 450, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(15) NOT NULL,
  `o_id` int(15) NOT NULL,
  `c_id` int(15) NOT NULL,
  `p_method` varchar(30) NOT NULL,
  `trans_id` varchar(16) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `expiry` varchar(5) NOT NULL,
  `p_amt` double NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `o_id`, `c_id`, `p_method`, `trans_id`, `card_no`, `expiry`, `p_amt`, `p_date`) VALUES
(1, 1, 1, 'upi', '6754654534345678', '-----', '-----', 8047, '2022-08-03'),
(2, 2, 3, 'card', '-----', '4567987645670987', '12/23', 4147, '2022-08-03'),
(3, 3, 3, 'card', '-----', '8769545743245678', '12/23', 1560, '2022-08-03'),
(4, 4, 1, 'upi', '4567987638760987', '-----', '-----', 7800, '2022-08-03'),
(5, 5, 1, 'card', '-----', '6574876598769876', '12/23', 7800, '2022-08-03'),
(6, 6, 3, 'upi', '4567987638760987', '-----', '-----', 3600, '2022-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(15) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_image` varchar(100) NOT NULL,
  `prod_description` varchar(100) NOT NULL,
  `stock` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `category` varchar(30) NOT NULL,
  `old_stock` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_image`, `prod_description`, `stock`, `price`, `category`, `old_stock`) VALUES
(2, 'Lipstick', '../../upload/fbox1.jpg', 'Red Lipstick', '67', 575, '1', '87'),
(3, 'Colossal Mascara', '../../upload/img9.jpg', 'Shining Mascara', '72', 780, '4', '76'),
(4, 'Pack of light shade lipstick', '../../upload/shades.jpg', 'Pack of 4', '76', 999, '1', '98'),
(5, 'Lipstick', '../../upload/img1.jpg', 'Light shade ', '35', 450, '1', '50'),
(6, 'Eye shadow', '../../upload/img4.jpg', 'Eye Shadow with 6 colors', '17', 450, '3', '26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `od_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

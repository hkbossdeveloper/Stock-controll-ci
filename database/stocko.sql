-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 08:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stocko`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productquantity` varchar(255) NOT NULL,
  `productretail` int(11) NOT NULL,
  `productresell` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `userfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `productquantity`, `productretail`, `productresell`, `shop_id`, `user_id`, `status`, `userfile`) VALUES
(20, 'Mouse', '1000', 1200, 1300, 1, 1, 1, 'http://[::1]/stockos/upload/KB02EAS_160518_800x800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `shopnumber` varchar(255) NOT NULL,
  `shopaddress` varchar(255) NOT NULL,
  `shopcity` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `shopname`, `shopnumber`, `shopaddress`, `shopcity`, `user_id`, `status`) VALUES
(1, 'Adeel Electric Shop', '+923162400202', 'Karachi,noro area', 'Karachi', 1, '1'),
(2, 'WearHouse', '+923162400202', 'Liayari', 'Karachi', 1, '1'),
(3, 'WearHouse', '+923162400202', 'Liayari3', 'Karachi', 1, '1'),
(4, 'Waqar Electric Shop', '+9231624002022', 'Liayari', 'Karachi', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `goodname` varchar(255) NOT NULL,
  `usercell` varchar(255) NOT NULL,
  `useradd` varchar(255) NOT NULL,
  `Cites` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `useremail`, `username`, `userpassword`, `goodname`, `usercell`, `useradd`, `Cites`, `status`) VALUES
(1, 'hamza923@live.com', 'hkbosss', 'developer', 'Hamza Khan', '03162400202', 'Karachi', 'Karachi', '1'),
(2, 'xodeac-cc@outlook.com', 'developer', '03162400202', 'Ayesha Khan', '03162400202', 'karachime ho', '2', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

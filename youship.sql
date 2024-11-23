-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 05:14 AM
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
-- Database: `youship`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `area_name` varchar(20) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `shipperid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `postid`, `shipperid`, `userid`, `description`, `price`, `isactive`, `doi`) VALUES
(17, 12, 2, 3, 'black box with 10 kg', 1000, 0, '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `price` varchar(15) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `user_id`, `b_id`, `s_id`, `p_id`, `price`, `book_date`) VALUES
(6, 3, 17, 2, 12, '1000', '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `bookvehicle`
--

CREATE TABLE `bookvehicle` (
  `id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `bookdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookvehicle`
--

INSERT INTO `bookvehicle` (`id`, `v_id`, `u_id`, `s_id`, `bookdate`) VALUES
(1, 1, 2, 2, '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(150) NOT NULL,
  `weight` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `itemname`, `quantity`, `description`, `weight`, `isactive`, `doi`) VALUES
(1, 'Car', 1, 'Tesla X', 2500, 1, '2005-01-20'),
(3, 'Bike', 1, 'Honda', 800, 1, '2018-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `sid`, `city_name`, `isactive`, `doi`) VALUES
(1, 1, 'Ahmedabad', 1, '2020-01-17'),
(2, 5, 'Pune', 1, '2020-01-17'),
(3, 1, 'Baroda', 1, '2020-01-17'),
(4, 5, 'Mumbai', 1, '2020-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `utype` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `added_by`, `title`, `description`, `price`, `utype`, `isactive`, `doi`) VALUES
(1, 1, 'House', '3 BHK', 55000, 0, 1, '2018-01-20'),
(2, 1, 'House', '1 BHK', 5000, 1, 1, '2018-01-20'),
(3, 2, 'House', '5 BHK', 125000, 1, 1, '2019-01-20'),
(4, 1, 'House', '1 BHK', 15000, 0, 1, '2019-01-20'),
(5, 1, 'Office Package', 'Packing, loading & unloading, transportation.', 75000, 1, 1, '2030-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `req_quote`
--

CREATE TABLE `req_quote` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `from_add` varchar(100) NOT NULL,
  `to_add` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_quote`
--

INSERT INTO `req_quote` (`id`, `user_id`, `name`, `email`, `description`, `from_add`, `to_add`, `date`, `isactive`, `doi`) VALUES
(12, 3, 'jainam shah', 'jainam@sha', 'black box with 10 kg', 'ahmedabad', 'baroda', '2020-02-21', 0, '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `selectpackage`
--

CREATE TABLE `selectpackage` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selectpackage`
--

INSERT INTO `selectpackage` (`id`, `sid`, `uid`, `description`, `msg`, `isactive`, `doi`) VALUES
(1, 1, 6, '3 BHK', 'hi', 1, '2010-02-20'),
(2, 1, 6, '3 BHK', 'hello', 1, '2010-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE `shipper` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL,
  `utype` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipper`
--

INSERT INTO `shipper` (`id`, `company_name`, `email`, `contact`, `address`, `password`, `isactive`, `utype`, `doi`, `dou`) VALUES
(1, 'Agrawal Package & Movers', 'agrawal@1', 12345, 'abc', '123', 1, 3, '2010-01-20', '2010-01-20'),
(2, 'Packages & Movers', 'c@n', 4323, 'qadgfgs', '121', 1, 3, '2010-01-20', '2010-01-20'),
(3, 'Cargo', 'c@c', 242, 'adad', '123', 1, 3, '2010-01-20', '2010-01-20'),
(4, 'Hari Om', 'hari@om', 68212, 'Goa', '123', 1, 3, '2027-01-20', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `shipper_feedback`
--

CREATE TABLE `shipper_feedback` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `msg_type` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipper_feedback`
--

INSERT INTO `shipper_feedback` (`id`, `sid`, `msg`, `msg_type`, `isactive`, `doi`) VALUES
(6, 1, 'O_o', 1, 1, '2028-01-20'),
(7, 1, 'vnija', 2, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state_name` varchar(15) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `isactive`, `doi`) VALUES
(1, 'Gujarat', 1, '2005-01-20'),
(2, 'Delhi', 1, '2005-01-20'),
(3, 'Punjab', 1, '2005-01-20'),
(4, 'Banglore', 1, '2007-01-20'),
(5, 'Maharashtra', 1, '2017-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isactive` int(10) NOT NULL,
  `utype` int(10) NOT NULL,
  `doi` date NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `contact`, `address`, `password`, `isactive`, `utype`, `doi`, `dou`) VALUES
(1, 'Arjav', 'Shah', 'arjav@shah', 98765, 'aaa', '111', 1, 2, '2004-01-20', '0000-00-00 00:00:00'),
(2, 'a', 'shah', 'a@s', 0, '222', '111', 1, 1, '2004-01-20', '0000-00-00 00:00:00'),
(3, 'jainam', 'shah', 'jainam@sha', 0, '222', '121', 1, 1, '2004-01-20', '0000-00-00 00:00:00'),
(5, 'Rjav', 'shah', 'r@jav', 0, '12345', '111', 1, 1, '2007-01-20', '0000-00-00 00:00:00'),
(6, 'ar', 's', 'a@a', 1234, 'xyz', '111', 1, 1, '2007-01-20', '0000-00-00 00:00:00'),
(7, 'shah', 'shah', 's@s', 456, 'qwee', '111', 1, 1, '2010-01-20', '0000-00-00 00:00:00'),
(9, 'Fiest', 'LAsnd', 'f@l', 2147483647, 'Delhi', '111', 1, 0, '2027-01-20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `msg_type` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `uid`, `email`, `msg`, `msg_type`, `isactive`, `doi`) VALUES
(10, 6, '', 'Contact', 1, 1, '0000-00-00 00:00:00'),
(11, 6, '', 'Feedback\r\n', 2, 1, '0000-00-00 00:00:00'),
(12, 6, '', 'contacts testing', 1, 1, '0000-00-00 00:00:00'),
(13, 0, '', 'hi', 1, 1, '0000-00-00 00:00:00'),
(14, 0, '', 'Without login contact\r\n', 1, 1, '0000-00-00 00:00:00'),
(15, 0, '', 'hi WLContact', 1, 1, '0000-00-00 00:00:00'),
(16, 0, '', 'hi WLContact1', 1, 1, '0000-00-00 00:00:00'),
(17, 6, '', 'profile', 1, 1, '2014-02-20 13:54:54'),
(18, 0, '', 'hih', 1, 1, '2014-02-20 14:06:20'),
(19, 0, '', 'hi', 2, 1, '0000-00-00 00:00:00'),
(20, 0, '', 'contact without login', 1, 1, '2015-02-20 06:22:00'),
(21, 0, '', 'contact withou login', 1, 1, '2015-02-20 06:23:43'),
(22, 0, '', 'contactcontactcontactcontact', 1, 1, '2015-02-20 06:24:30'),
(23, 0, '', 'contactcontactcontactcontactcontactcontactcontact', 1, 1, '2015-02-20 06:25:27'),
(24, 0, 'SNEHDOSHI2001@GMAIL.COM', 'sasasas', 1, 1, '2015-02-20 06:26:59'),
(25, 0, 'SNEHDOSHI2001@GMAIL.COM', 'feedbackfeedbackfeedbackfeedback', 2, 1, '0000-00-00 00:00:00'),
(26, 6, 'SNEHDOSHI2001@GMAIL.COM', 'ccccccccccccc', 1, 1, '2015-02-20 06:29:55'),
(27, 6, 'SNEHDOSHI2001@GMAIL.COM', 'aaaaaaaaaaaaaa', 2, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `v_img` blob NOT NULL,
  `v_name` varchar(25) NOT NULL,
  `v_des` varchar(250) NOT NULL,
  `v_price` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `sid`, `v_img`, `v_name`, `v_des`, `v_price`, `isactive`, `doi`) VALUES
(1, 2, 0x696d616765732f76656869636c652f342e6a7067, 'truck', 'thsjkf', 10000, 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookvehicle`
--
ALTER TABLE `bookvehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_quote`
--
ALTER TABLE `req_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selectpackage`
--
ALTER TABLE `selectpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipper_feedback`
--
ALTER TABLE `shipper_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookvehicle`
--
ALTER TABLE `bookvehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `req_quote`
--
ALTER TABLE `req_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `selectpackage`
--
ALTER TABLE `selectpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipper`
--
ALTER TABLE `shipper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipper_feedback`
--
ALTER TABLE `shipper_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

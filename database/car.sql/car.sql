-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2020 at 06:16 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `bill_id` int(11) NOT NULL auto_increment,
  `jobcard_id` int(11) NOT NULL,
  `service_amount` double NOT NULL,
  `spare_amount` double NOT NULL,
  `total_amt` int(11) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `gst` int(11) NOT NULL,
  `bill_date` date NOT NULL,
  PRIMARY KEY  (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`bill_id`, `jobcard_id`, `service_amount`, `spare_amount`, `total_amt`, `payment_status`, `gst`, `bill_date`) VALUES
(2, 2, 1200, 530, 1730, 'Paid', 18, '2022-07-27'),
(3, 5, 3150, 536, 3686, 'Paid', 18, '2022-07-27'),
(4, 6, 3000, 255, 3255, 'Paid', 18, '2022-07-27'),
(5, 7, 3000, 1060, 4060, 'Paid', 18, '2022-07-27'),
(6, 4, 3000, 0, 3000, 'Paid', 18, '2022-08-09'),
(7, 7, 3000, 1060, 4060, 'Paid', 18, '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` int(11) NOT NULL auto_increment,
  `car_id` int(11) NOT NULL,
  `booking_time` time NOT NULL,
  `booking_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY  (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `car_id`, `booking_time`, `booking_date`, `status`) VALUES
(6, 1, '23:30:00', '2022-07-27', 'On Service'),
(13, 3, '12:00:00', '2022-07-28', 'On Service'),
(15, 4, '17:00:00', '2022-07-29', 'On Service'),
(17, 5, '17:00:00', '2022-07-28', 'On Service'),
(18, 5, '13:00:00', '2022-07-30', 'On Service'),
(19, 0, '00:00:00', '0000-00-00', 'Pending'),
(20, 0, '00:00:00', '0000-00-00', 'Pending'),
(22, 9, '01:03:00', '2022-07-28', 'Pending'),
(26, 13, '10:30:00', '2022-07-28', 'Pending'),
(29, 15, '17:05:00', '2022-07-28', 'On Service'),
(30, 15, '10:30:00', '2022-07-28', 'Confirmed'),
(35, 4, '00:00:00', '2022-08-08', 'Confirmed'),
(36, 4, '00:00:00', '2022-08-08', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `book_service`
--

CREATE TABLE `book_service` (
  `book_service_id` int(11) NOT NULL auto_increment,
  `service_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  PRIMARY KEY  (`book_service_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `book_service`
--

INSERT INTO `book_service` (`book_service_id`, `service_id`, `booking_id`) VALUES
(1, 14, 1),
(2, 2, 2),
(3, 4, 4),
(4, 3, 5),
(5, 1, 6),
(6, 2, 6),
(7, 3, 6),
(8, 4, 6),
(9, 1, 13),
(10, 2, 13),
(11, 4, 14),
(12, 2, 15),
(13, 4, 15),
(14, 14, 15),
(15, 1, 16),
(16, 2, 16),
(17, 3, 16),
(18, 1, 17),
(19, 2, 17),
(20, 3, 17),
(21, 3, 18),
(22, 4, 18),
(23, 3, 22),
(24, 4, 22),
(25, 3, 23),
(26, 4, 23),
(27, 3, 25),
(28, 4, 25),
(29, 4, 26),
(30, 3, 29),
(31, 4, 29),
(32, 3, 30),
(33, 1, 0),
(34, 3, 0),
(35, 1, 0),
(36, 2, 0),
(37, 1, 0),
(38, 2, 0),
(39, 1, 0),
(40, 3, 0),
(41, 1, 36),
(42, 3, 36);

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_id` int(50) NOT NULL auto_increment,
  `customer_id` int(50) NOT NULL,
  `car_make` varchar(100) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `car_regno` varchar(100) NOT NULL,
  PRIMARY KEY  (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_id`, `customer_id`, `car_make`, `car_model`, `car_regno`) VALUES
(2, 1, 'Select', 'beat', 'MH 16 M 1275'),
(3, 3, 'TATA MOTORS', 'indica', 'MH 16 M 1565'),
(4, 5, 'TATA MOTORS', 'indica', 'MH 16 M 1565'),
(5, 0, 'Select', 'indicAA', 'MH 09 AW 6767'),
(6, 0, 'TATA MOTORS', 'indica', 'MH 16 M 1565'),
(7, 0, 'TATA MOTORS', 'indica', 'MH 16 M 1565'),
(8, 0, 'TATA MOTORS', 'ZEST', 'MH 13 R 8695'),
(9, 0, 'MAHINDR', 'indica', 'MH 16 BB 1779'),
(10, 1, 'TATA MOTORS', 'indica', 'MH 16 M 1565'),
(11, 0, 'TATA MOTORS', 'Zest', 'MH 13 R 8695'),
(12, 0, 'TATA MOTORS', 'indica', 'MH 16 M 1565'),
(13, 0, 'MAHINDR', 'indica', 'MH 13 OG 9576'),
(14, 0, 'MARUTI SUZU', 'Omini', 'MH 12 GH 5546'),
(15, 6, 'TOYOTA', 'innova', 'MH 13 GM 3245');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL auto_increment,
  `customer_name` varchar(300) NOT NULL,
  `customer_add` varchar(500) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_contact_no` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  PRIMARY KEY  (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_name`, `customer_add`, `customer_city`, `customer_contact_no`, `customer_email`) VALUES
(1, 'harish', 'gandhinagar', 'pune', '8794562135', 'harish@gmail.com'),
(2, 'shubham', 'hadapsar', 'pune', '9874587455', 'shubham@gmial.com'),
(5, 'amit', 'hadapsar', 'pune', '8105953436', 'amit@gmail.com'),
(6, 'praveen', 'indrani', 'pune', '8861772198', 'praveen@gmail.com'),
(7, 'gagan', 'hinjewadi', 'pune', '7760332042', 'gagan@gmail.com'),
(8, 'onkar', 'hind colony', 'pune', '8945321679', 'onkar@GMAIL'),
(9, 'mayur', 'hind colony', 'pune', '9846225867', 'mayur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(11) NOT NULL auto_increment,
  `employee_name` varchar(100) NOT NULL,
  `employee_address` varchar(300) NOT NULL,
  `employee_contactno` varchar(50) NOT NULL,
  `employee_type` varchar(100) NOT NULL,
  PRIMARY KEY  (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `employee_name`, `employee_address`, `employee_contactno`, `employee_type`) VALUES
(1, 'Prasad', 'Satav Nagar', '8749066807', 'service advisor'),
(2, 'Vivek', 'Hadapsar', '8970545181', 'Mechanic'),
(3, 'Raghu', 'Hadapsar', '7760398101', 'Mechanic'),
(4, 'Mahesh ', 'Indrani Nagar', '8884345880', 'Mechanic'),
(5, 'Abhishek ', 'Hadapsar', '8905645844', 'Mechanic'),
(6, 'Shankar', 'Hadapsar', '7353471254', 'Mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `jobcard_details`
--

CREATE TABLE `jobcard_details` (
  `jobcard_id` int(50) NOT NULL auto_increment,
  `car_id` int(50) NOT NULL,
  `jobcard_date` date NOT NULL,
  `jobcard_time` time NOT NULL,
  `year_of_mfd` year(4) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `engine_no` varchar(100) NOT NULL,
  `chassis_no` varchar(100) NOT NULL,
  `total_kms` int(11) NOT NULL,
  `date_estimate` date NOT NULL,
  `time_estimate` time NOT NULL,
  `price_estimate` int(11) NOT NULL,
  `employee_id` int(50) NOT NULL,
  `jobcard_status` varchar(20) NOT NULL,
  PRIMARY KEY  (`jobcard_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jobcard_details`
--

INSERT INTO `jobcard_details` (`jobcard_id`, `car_id`, `jobcard_date`, `jobcard_time`, `year_of_mfd`, `fuel_type`, `engine_no`, `chassis_no`, `total_kms`, `date_estimate`, `time_estimate`, `price_estimate`, `employee_id`, `jobcard_status`) VALUES
(2, 4, '2022-07-27', '11:00:00', 2008, 'Petrol', '201958', '124575', 14000, '2022-07-29', '11:00:00', 100, 2, 'Service Done'),
(3, 3, '2022-07-27', '23:00:00', 2005, 'Diesel', '201958', '415475', 12032, '2022-07-27', '14:00:00', 2000, 5, 'Service Pending'),
(4, 4, '2022-07-27', '04:56:00', 2005, 'Diesel', '201958', '415475', 12032, '2022-08-28', '15:03:00', 100, 1, 'Service Done'),
(5, 5, '2022-07-27', '15:03:00', 2005, 'Petrol', '201958', '124575', 14000, '2022-07-31', '09:09:00', 100, 4, 'Service Done'),
(6, 13, '2022-07-27', '01:00:00', 2003, 'Diesel', '201958', '415475', 12032, '2022-07-28', '14:02:00', 100, 4, 'Service Done'),
(7, 15, '2022-07-27', '10:00:00', 2008, 'Diesel', '123123', '123456', 2000, '2022-07-27', '15:30:00', 100, 1, 'Service Done');

-- --------------------------------------------------------

--
-- Table structure for table `job_done`
--

CREATE TABLE `job_done` (
  `jobdone_id` int(11) NOT NULL auto_increment,
  `service_id` int(11) NOT NULL,
  `jobcard_id` int(11) NOT NULL,
  PRIMARY KEY  (`jobdone_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `job_done`
--

INSERT INTO `job_done` (`jobdone_id`, `service_id`, `jobcard_id`) VALUES
(1, 3, 1),
(2, 14, 1),
(3, 4, 2),
(4, 1, 3),
(5, 2, 3),
(6, 1, 4),
(7, 4, 4),
(8, 2, 5),
(9, 3, 5),
(10, 4, 5),
(11, 1, 6),
(12, 4, 6),
(13, 1, 7),
(14, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL,
  `hintq` varchar(300) NOT NULL,
  `hinta` varchar(300) NOT NULL,
  `active` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`, `type`, `hintq`, `hinta`, `active`) VALUES
('admin@gmail.com', 'pass1234', 'admin', 'who i am', 'admin', ''),
('harish@gmail.com', 'pass1234', 'customer', 'my fav color', 'red', 'active'),
('shubham@gmial.com', 'pass1234', 'customer', 'my  fav color', 'red', 'active'),
('onkar@gmail.com', 'pass1234', 'customer', 'my fav color', 'red', 'active'),
('gagan@gmail.com', 'pass1234', 'customer', 'my fav color', 'red', 'active'),
('amit@gmail.com', 'pass1234', 'customer', 'my fav color', 'red', 'active'),
('mayur@gmail.com', 'pass1234', 'customer', 'my fav color', 'red', 'active'),
('praveen@gmail.com', 'pass1234', 'customer', 'my fav color', 'red', 'active');
-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `service_id` int(11) NOT NULL auto_increment,
  `service_name` varchar(100) NOT NULL,
  `service_type` varchar(500) NOT NULL,
  `service_charge` double NOT NULL,
  `service_description` varchar(300) NOT NULL,
  PRIMARY KEY  (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`service_id`, `service_name`, `service_type`, `service_charge`, `service_description`) VALUES
(1, 'Periodic Maintenance Service', 'Preventive Measure', 1800, 'planned maintenance service'),
(2, 'Running Repairs', 'replacement', 1500, 'replacement of the worn out spares'),
(3, 'Air Conditioning System', 'Gas Topup', 450, 'Freon Gas Topup'),
(4, 'Wheel Care', 'Allignment ', 1200, 'Alignment & Balancing');

-- --------------------------------------------------------

--
-- Table structure for table `spare_delivery`
--

CREATE TABLE `spare_delivery` (
  `spare_delivery_id` int(11) NOT NULL auto_increment,
  `jobcard_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `d_item_qty` int(11) NOT NULL,
  `labour_charges` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`spare_delivery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `spare_delivery`
--

INSERT INTO `spare_delivery` (`spare_delivery_id`, `jobcard_id`, `item_id`, `d_item_qty`, `labour_charges`, `date`) VALUES
(1, 1, 3, 2, 50, '2022-07-26'),
(2, 2, 6, 2, 120, '2022-07-27'),
(3, 5, 5, 2, 200, '2022-07-27'),
(4, 6, 6, 1, 50, '2022-07-27'),
(5, 7, 2, 2, 150, '2022-07-27'),
(6, 7, 1, 1, 200, '2022-07-27'),
(7, 7, 0, 5, 2, '2022-08-09'),
(8, 7, 0, 5, 0, '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `spare_details`
--

CREATE TABLE `spare_details` (
  `item_id` int(11) NOT NULL auto_increment,
  `item_name` varchar(200) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `item_description` varchar(300) NOT NULL,
  `s_item_qty` int(11) NOT NULL,
  `item_reorder_qty` int(11) NOT NULL,
  `item_price` float NOT NULL,
  PRIMARY KEY  (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `spare_details`
--

INSERT INTO `spare_details` (`item_id`, `item_name`, `item_code`, `item_description`, `s_item_qty`, `item_reorder_qty`, `item_price`) VALUES
(1, 'chassis W pin', '0360', 'chassis bracket D small', 20, 2, 360),
(2, 'Shackel bolt', '0105', 'shackle bolt mah maxx', 40, 5, 175),
(3, 'U bolt', '0018', 'FC thick steel', 20, 2, 85),
(4, 'U bolt', '0013', 'FC Thick Brass', 30, 4, 115),
(5, 'Bush', '0015', 'Shackle Bush Steel', 25, 5, 168),
(6, 'Bush', '1302', 'Shackle Bush Brass', 25, 5, 205),
(7, 'Spring Clip', '0250', ' FC Clip D med', 20, 2, 118),
(8, 'cross member', '0087', 'gear box cross member jeep disel', 8, 2, 985),
(9, 'brake drum', '0201', 'break drum xylo', 8, 2, 1025),
(10, 'w lock plate', '0419', 'front pin cab king plate', 10, 2, 300),
(11, 'gear box cross', '0139', 'gear box cross bolero', 10, 2, 1205),
(12, 'front brake rotor', '0292', 'front brake disc scorpio', 10, 2, 1850),
(13, 'brake shoe', '0206', 'brake shoe pair rear turbo LR', 20, 2, 865),
(14, 'steering knuckle', '0283', 'steering utility right', 20, 2, 550),
(15, 'clutch cross  shaft', '0360', 'clutch shaft FJ FC 25', 20, 5, 668),
(16, 'acc pedal ', '0346', 'accelerator pedal bent patti', 10, 2, 452),
(17, 'pedal spring', '0338', 'pedal spring xylo ', 10, 2, 373),
(18, 'brake pedal', '0343', 'brake pedal xylo', 10, 2, 422),
(19, 'bell crank assy', '0629', 'bell crank RHD bearings', 15, 2, 1560),
(20, 'shim set utility', '0614', 'shim set for xylo scorpio', 40, 10, 96),
(21, 'gulf superfleet five L', '0155', 'superfleet dura max', 12, 2, 1970),
(22, 'gulf XHD M', '0245', 'Tractor ', 8, 2, 1330),
(23, 'gulf crown grease one KG', '0147', 'crown spcl bearing grease ', 30, 5, 350),
(24, 'brake fluid', '0547', 'gulf brake fluid ', 30, 5, 300),
(25, 'HP neosynth ', '0174', 'fully synthetic engine oil', 10, 2, 1451),
(26, 'neosynth maxx', '0175', 'meets API SJ', 10, 2, 856),
(27, 'q', '52', 'q', 12, 12, 1200);

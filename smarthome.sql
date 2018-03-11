-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 09:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthome`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appliances`
--

CREATE TABLE `tbl_appliances` (
  `component_id` int(11) NOT NULL,
  `component_name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `power` double NOT NULL,
  `price` double NOT NULL,
  `GPIO_Pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appliances`
--

INSERT INTO `tbl_appliances` (`component_id`, `component_name`, `description`, `power`, `price`, `GPIO_Pin`) VALUES
(1, 'CFL 14W - Bedroom 1', 'CFL Bulb 14W. Used to provide light in home', 14, 110, 4),
(2, 'LED Light 8W - Bedroom 1', 'LED Light 8W used to provide light for home', 8, 90, -1),
(3, 'TV', 'Used for seeing movies. Provide entertainment to the user.', 90, 8000, -1),
(4, 'FAN - Bedroom 1', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, 17),
(5, 'A/C - Master Bedroom', 'Air conditioning, technologies for altering the temperature and humidity of air.', 300, 8000, -1),
(6, 'Washing Machine', 'A washing machine (laundry machine, clothes washer, or washer) is a device used to wash laundry.', 300, 8000, -1),
(7, 'Door Sensor - Bedroom 1', 'A door is a moving mechanism used to block off and allow access to, an entrance to room or building.', 5, 1000, 27),
(8, 'Window Sensor - Bedroom 1', 'A window is an opening in a wall, door, roof that allows the passage of light, sound, and air.', 5, 1000, 22),
(9, 'CFL 14W - Bedroom 2', 'CFL Bulb 14W. Used to provide light in home', 14, 110, -1),
(10, 'CFL 14W - Master Bedroom', 'CFL Bulb 14W. Used to provide light in home', 14, 110, 5),
(11, 'CFL 14W - Kitchen', 'CFL Bulb 14W. Used to provide light in home', 14, 110, 20),
(12, 'CFL 14W - Hall', 'CFL Bulb 14W. Used to provide light in home', 14, 110, 23),
(13, 'CFL 14W - Working Area', 'CFL Bulb 14W. Used to provide light in home', 14, 110, -1),
(14, 'CFL 14W - Front Area', 'CFL Bulb 14W. Used to provide light in home', 14, 110, -1),
(15, 'LED Light 8W - Bedroom 2', 'LED Light 8W used to provide light for home', 8, 90, -1),
(16, 'LED Light 8W - Master Bedroom', 'LED Light 8W used to provide light for home', 8, 90, -1),
(17, 'LED Light 8W - Kitchen', 'LED Light 8W used to provide light for home', 8, 90, -1),
(18, 'LED Light 8W - Hall', 'LED Light 8W used to provide light for home', 8, 90, -1),
(19, 'LED Light 8W - Working Area', 'LED Light 8W used to provide light for home', 8, 90, -1),
(20, 'LED Light 8W - Front Area', 'LED Light 8W used to provide light for home', 8, 90, -1),
(21, 'FAN - Bedroom 2', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, -1),
(22, 'FAN - Master Bedroom', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, 6),
(23, 'FAN - Kitchen', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, -1),
(24, 'FAN - Hall', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, 24),
(25, 'FAN - Working Area', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, -1),
(26, 'FAN - Front Area', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, -1),
(30, 'FAN - Front Area', 'Uses hub-mounted rotating paddles to circulate air to cool the room.', 90, 1500, -1),
(31, 'Door Sensor - Bedroom 2', 'A door is a moving mechanism used to block off and allow access to, an entrance to room or building.', 5, 1000, -1),
(32, 'Door Sensor - Master Bedroom', 'A door is a moving mechanism used to block off and allow access to, an entrance to room or building.', 5, 1000, 13),
(39, 'Window Sensor - Bedroom 2', 'A window is an opening in a wall, door, roof that allows the passage of light, sound, and air.', 5, 1000, -1),
(40, 'Window Sensor - Master Bedroom', 'A window is an opening in a wall, door, roof that allows the passage of light, sound, and air.', 5, 1000, 19),
(41, 'Temperature Sensor', 'To detect the room temperature', 3.3, 400, -1),
(42, 'Motion Sensor', 'To detect the presence of a user', 3.3, 300, 26),
(43, 'Gas Sensor', 'To detect the gas leakage', 3.3, 300, 21),
(44, 'PIR Sensor', 'To detect the light intensity', 3.3, 200, -1),
(45, 'Camera', 'To capture images and videos ', 5, 1000, 12),
(46, 'Door Sensor - Hall', 'A door is a moving mechanism used to block off and allow access to, an entrance to room or building.', 5, 100, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `role`) VALUES
('admin@vsoft.com', 'admin', 'admin'),
('codemaker2014@gmail.com', '1234', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_meta`
--

CREATE TABLE `tbl_log_meta` (
  `component_id` int(11) NOT NULL,
  `day_in_minutes` int(11) NOT NULL,
  `day_in_seconds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_log_meta`
--

INSERT INTO `tbl_log_meta` (`component_id`, `day_in_minutes`, `day_in_seconds`) VALUES
(1, 0, 0),
(4, 3, 39),
(5, 0, 7),
(7, 0, 0),
(8, 0, 0),
(10, 0, 0),
(32, 0, 0),
(40, 0, 0),
(41, 0, 0),
(42, 0, 0),
(44, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_status`
--

CREATE TABLE `tbl_log_status` (
  `log_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_log_status`
--

INSERT INTO `tbl_log_status` (`log_id`, `component_id`, `date`, `start_time`, `end_time`) VALUES
(33, 1, '2018-02-28', '11:43:23', '11:43:29'),
(35, 4, '2018-02-28', '12:25:06', '12:25:17'),
(36, 5, '2018-02-28', '12:25:44', '12:25:51'),
(37, 4, '2018-03-03', '22:52:31', '22:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `notification_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `notification_title` varchar(50) NOT NULL,
  `notification_type` varchar(20) NOT NULL,
  `notification_desc` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`notification_id`, `date`, `notification_title`, `notification_type`, `notification_desc`, `username`, `status`) VALUES
(1, '2018-03-03 23:59:00', 'Demo', 'danger', 'This is a sample demo', 'jsdjhj', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `home_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`name`, `email`, `phone`, `home_pic`) VALUES
('Vishnu Sivan', 'codemaker2014@gmail.com', '9961907453', 'Vishnu Sivan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `name`, `description`, `username`) VALUES
(1, 'Bedroom 1 ', '', ''),
(2, 'Bedroom 2', '', ''),
(3, 'Master Bedroom', '', ''),
(4, 'Kitchen', '', ''),
(5, 'Hall', '', ''),
(6, 'Working Area', '', ''),
(7, 'Front Area', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_configuration`
--

CREATE TABLE `tbl_room_configuration` (
  `room_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_configuration`
--

INSERT INTO `tbl_room_configuration` (`room_id`, `component_id`, `username`, `status`) VALUES
(1, 1, '', 'OFF'),
(1, 4, '', 'OFF'),
(3, 5, '', 'OFF'),
(1, 7, '', 'OFF'),
(1, 8, '', 'OFF'),
(3, 10, '', 'ON'),
(3, 32, '', 'ON'),
(3, 40, '', 'ON'),
(3, 41, '', 'ON'),
(3, 42, '', 'ON'),
(3, 44, '', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sensor_config`
--

CREATE TABLE `tbl_sensor_config` (
  `sensor_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `status` varchar(5) NOT NULL,
  `component_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sensor_config`
--

INSERT INTO `tbl_sensor_config` (`sensor_id`, `component_id`, `status`, `component_status`) VALUES
(7, 1, 'ON', 'ON'),
(7, 4, 'ON', 'ON'),
(7, 8, 'ON', 'ON'),
(32, 5, 'ON', 'ON'),
(32, 10, 'ON', 'ON'),
(32, 40, 'ON', 'ON'),
(32, 41, 'ON', 'ON'),
(32, 42, 'ON', 'ON'),
(32, 44, 'ON', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistics`
--

CREATE TABLE `tbl_statistics` (
  `temperature` double NOT NULL,
  `humidity` double NOT NULL,
  `light_intensity` double NOT NULL,
  `presence` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_statistics`
--

INSERT INTO `tbl_statistics` (`temperature`, `humidity`, `light_intensity`, `presence`) VALUES
(23.5, 60.7, 800, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appliances`
--
ALTER TABLE `tbl_appliances`
  ADD PRIMARY KEY (`component_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_log_status`
--
ALTER TABLE `tbl_log_status`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_room_configuration`
--
ALTER TABLE `tbl_room_configuration`
  ADD PRIMARY KEY (`component_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appliances`
--
ALTER TABLE `tbl_appliances`
  MODIFY `component_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tbl_log_status`
--
ALTER TABLE `tbl_log_status`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

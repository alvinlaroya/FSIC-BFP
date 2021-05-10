-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 03:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobalert`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bfp`
--

CREATE TABLE `tbl_bfp` (
  `id` int(11) NOT NULL,
  `establishment` text NOT NULL,
  `inspectors` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `occupancy` text NOT NULL,
  `establish_date` text NOT NULL,
  `fsic` text NOT NULL,
  `ornum` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `archive_unarchive` int(11) NOT NULL DEFAULT '1',
  `region` text NOT NULL,
  `province` text NOT NULL,
  `municipality` text NOT NULL,
  `barangay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bfp`
--

INSERT INTO `tbl_bfp` (`id`, `establishment`, `inspectors`, `firstname`, `middlename`, `lastname`, `occupancy`, `establish_date`, `fsic`, `ornum`, `amount`, `archive_unarchive`, `region`, `province`, `municipality`, `barangay`) VALUES
(267, 'sample3', 'SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar', 'sample3', 's3', 'sample', 'sample', '2020-06-08', 'RO1-056-AFS-LU-2020-', 0, 2435, 0, '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN EAST'),
(268, 'sample1', 'SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar', 'sample1', 's1', 'sample1', 'sample', '2020-06-08', 'RO1-056-AFS-LU-2020-', 0, 2435, 0, '01', 'LA UNION', 'AGOO', 'SAN MARCOS'),
(269, 'sample2', 'SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar', 'sample2', 's2', 'sample2', 'sample', '2020-06-08', 'RO1-056-AFS-LU-2020-', 0, 2435, 1, '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN SUR'),
(270, 'sample1', 'SPO4 Mark Dominic N Makil,SPO1 Allora S Alviar', 'sample1', 's1', 'sample2', 'sample', '2020-06-08', 'RO1-056-AFS-LU-2020-', 0, 2435, 1, '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN EAST'),
(272, 'new', 'SPO1 Allora S Alviar', 'new', 'new', 'new', 'new', '2020-06-08', 'RO1-056-AFS-LU-2020-242', 42525235, 242, 1, '01', 'LA UNION', 'ARINGAY', 'ALASKA'),
(275, 'sample3', 'sample sample sample sample', 'sample3', 's', 'sample3', 'Health Care', '2020-06-10', 'RO1-056-AFS-LU-2020-232', 42525, 2000, 0, '01', 'LA UNION', 'AGOO', 'MACALVA NORTE'),
(276, 'sample4', 'SPO25 Mark Anthony C Mazon', 'sample4', 's', 'sample4', 'Residential', '2020-06-10', 'RO1-056-AFS-LU-2020-2323', 42525, 2000, 0, '01', 'LA UNION', 'AGOO', 'MACALVA NORTE'),
(278, 'sample6', 'SPO1 Allora S Alviar', 'sample6', 's', 'sample6', 'Residential', '2020-06-10', 'RO1-056-AFS-LU-2020-23232', 425252, 2000, 0, '01', 'LA UNION', 'AGOO', 'MACALVA NORTE'),
(279, 'sample6', 'SPO1 Allora S Alviar', 'sample6', 's', 'sample6', 'Residential', '2020-06-10', 'RO1-056-AFS-LU-2020-23232', 425252, 2000, 0, '01', 'LA UNION', 'AGOO', 'MACALVA NORTE'),
(280, 'sample7', 'SPO1 Allora S Alviar', 'sample7', 's', 'sample7', 'Residential', '2020-06-10', 'RO1-056-AFS-LU-2020-23232', 425252, 2000, 1, '01', 'LA UNION', 'AGOO', 'MACALVA NORTE'),
(281, 'sample7', 'SPO1 Allora S Alviar', 'sample7', 's', 'sample7', 'Residential', '2020-06-10', 'RO1-056-AFS-LU-2020-23232', 425252, 2000, 0, '01', 'LA UNION', 'AGOO', 'MACALVA NORTE'),
(282, 'asar', 'SPO1 Allora S Alviar', 'asd', 'a', 'as', 'Health Care', '2020-06-10', 'RO1-056-AFS-LU-2020-42', 225, 22, 0, '01', 'LA UNION', 'AGOO', 'CAPAS'),
(283, 'Alvin Prenda Laroya', 'sample sample sample sample,SPO1 Allora S Alviar', 'Alvin', 'P', 'Laroya', '', '', 'RO1-056-AFS-LU-2020-', 0, 0, 1, '01', '', '', ''),
(284, 'ab', 'sample sample sample sample,SPO1 Allora S Alviar', 'ab', 'ab', 'ab', 'Health Care', '2020-06-28', 'RO1-056-AFS-LU-2020-242', 24242, 24, 1, '01', 'LA UNION', 'AGOO', 'SAN FRANCISCO'),
(285, 'Seasons Delights', 'sample sample sample sample,SPO1 Allora S Alviar', 'Alvin', 'P', 'Laroya', 'Businesss', '2020-06-28', 'RO1-056-AFS-LU-2020-234', 242, 3000, 1, '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN EAST'),
(286, 'Cebuana', 'sample sample sample sample', 'Denis', 'N', 'Putoza', 'Businesss', '2020-06-28', 'RO1-056-AFS-LU-2020-23', 524, 3000, 1, '01', 'LA UNION', 'ARINGAY', 'DULAO'),
(287, 'Tiga aringay', 'SPO5 Jheim V Viallanueva', 'aringay', 'a', 'aringay', 'Detention and Correctional', '2020-06-29', 'RO1-056-AFS-LU-2020-23', 2242, 4, 1, '01', 'LA UNION', 'ARINGAY', 'MACABATO'),
(288, 'Boyet Bakery', 'SPO4 ALvin P. Laroya', 'Boyet', 'Tubilan', 'Laroya', 'Businesss', '2020-06-29', 'RO1-056-AFS-LU-2020-23', 24, 3000, 1, '01', 'LA UNION', 'AGOO', 'MACALVA CENTRAL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fsic`
--

CREATE TABLE `tbl_fsic` (
  `id` int(11) NOT NULL,
  `complete_address` text NOT NULL,
  `bin` int(11) NOT NULL,
  `tin` int(11) NOT NULL,
  `email` text NOT NULL,
  `establishment` text NOT NULL,
  `fullname` text NOT NULL,
  `business_nature` text NOT NULL,
  `phone` text NOT NULL,
  `representative` text NOT NULL,
  `tradename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fsic`
--

INSERT INTO `tbl_fsic` (`id`, `complete_address`, `bin`, `tin`, `email`, `establishment`, `fullname`, `business_nature`, `phone`, `representative`, `tradename`) VALUES
(27, 'Agoo', 0, 0, 'denis@yahoo.com', 'Denis ukel ukel', 'Denis Putoza', 'Businesss', '639381453259', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inspectors`
--

CREATE TABLE `tbl_inspectors` (
  `id` int(11) NOT NULL,
  `position` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `address_location` text NOT NULL,
  `inspector_status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inspectors`
--

INSERT INTO `tbl_inspectors` (`id`, `position`, `firstname`, `middlename`, `lastname`, `address_location`, `inspector_status`) VALUES
(1, 'SPO2', 'Alvin', 'P', 'Laroya', 'Agoo, La Union', 0),
(2, 'SPO33', 'Denis', 'N', 'Putoza', 'San Agustin East', 0),
(3, 'SPO25', 'Mark Anthony', 'C', 'Mazon', 'Nazareno', 1),
(4, 'SPO3', 'Justine', 'P', 'Tanga', 'Agoo', 1),
(5, 'SPO4', 'Mark Dominic', 'N', 'Makil', 'Consolacion Agoo, La Union', 0),
(8, 'SPO1', 'Allora', 'S', 'Alviar', 'San Marcos Agoo, La Union', 1),
(9, 'SPO1', 'Eugene', 'P', 'Laroya', 'San Agustin East Agoo, La Union', 0),
(10, 'sample', 'sample', 'sample', 'sample', 'sample', 1),
(11, 'SPO3', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `user_password` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `status_request` int(11) NOT NULL DEFAULT '0',
  `phone` text NOT NULL,
  `region` text NOT NULL,
  `province` text NOT NULL,
  `municipality` text NOT NULL,
  `barangay` text NOT NULL,
  `avatar` text NOT NULL,
  `position` text NOT NULL,
  `to_add` int(11) NOT NULL DEFAULT '0',
  `to_archive` int(11) NOT NULL DEFAULT '0',
  `to_respond_fsic` int(11) NOT NULL DEFAULT '0',
  `to_accept_request` int(11) NOT NULL DEFAULT '0',
  `to_switch_status` int(11) NOT NULL DEFAULT '0',
  `to_active_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `user_password`, `fname`, `mname`, `lname`, `status_request`, `phone`, `region`, `province`, `municipality`, `barangay`, `avatar`, `position`, `to_add`, `to_archive`, `to_respond_fsic`, `to_accept_request`, `to_switch_status`, `to_active_status`) VALUES
(25, 'alvinreggaelaroya@gmail.com', '$2y$10$rFEYCvFEaSeVMZDCJdrzl.QYjYzMwRTrSM4ic.DqJKxCoQA6uTjp6', 'ALvin', 'P.', 'Laroya', 1, '09381453259', '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN EAST', '', 'SPO4', 1, 1, 1, 1, 1, 1),
(26, 'denis@yahoo.com', '$2y$10$5tDSxIU3vIQ/LQkxoibZt.fUvwqCBsgWQPk.7BZyLbscxf4xUhGpO', 'Denis', 'N', 'Putoza', 1, '935385093890', '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN EAST', '', 'SPO1', 1, 1, 1, 1, 1, 0),
(27, 'allora@yahoo.com', '$2y$10$xzVkV2hsBthsXg4ZEzoYqe.6/rabXGb0GIxRRbJObCotA8jyNGDCq', 'Allora', 'S', 'Alviar', 1, '25225252', '01', 'LA UNION', 'ARINGAY', 'SAN MARCOS', '', 'SPO3', 0, 0, 0, 0, 0, 0),
(28, 'diego@yahoo.com', '$2y$10$7cofHOk361THsqzVcE7HbONFeCJeP3AW2EnopSO5JwF6xaoayLw/2', 'Diego', 'S', 'Beligan', 1, '2525252', '01', 'LA UNION', 'ARINGAY', 'PANGAO-AOAN EAST', '', 'SPO1', 0, 0, 0, 0, 0, 0),
(29, 'regine@yahoo.com', '$2y$10$j47L04mckmnfs0xFuxUzIewp4wRMFvjTv86AlRT0qAPAi63pZw2hO', 'Regine', 'P', 'Laroya', 0, '52352352523', '01', 'LA UNION', 'AGOO', 'SAN ANTONINO', '', 'SPO1', 1, 1, 0, 0, 1, 0),
(30, 'cardo@yahoo.com', '$2y$10$fUQ1xnBbkk6bEVlt/AclFuYiCkLpPYKEtPqLAbj5n2hHo1FTp4SXG', 'Cardo', 'S', 'Dalisay', 0, '2525252', '01', 'LA UNION', 'BALAOAN', 'BARACBAC ESTE', '', 'SPO5', 0, 1, 0, 0, 0, 0),
(31, 'justin@yahoo.com', '$2y$10$UJqlG5qbpvPxCgz/sdhdSeSAfZn8IT5K7cRxJXO06Z98TFSJ7uZdG', 'Justin', 'R', 'Madriaga', 1, '23525252', '01', 'LA UNION', 'AGOO', 'MACALVA CENTRAL', '', 'SPO1', 1, 1, 0, 1, 1, 0),
(32, 'eugene@yahoo.com', '$2y$10$sK6Qn/yJpyCOgtS68Sbrj.BRUfZhbykCXI93MP1Re5DpPLvsiJuWS', 'Euguene', 'P', 'Laroya', 1, '252523', '01', 'LA UNION', 'AGOO', 'CONSOLACION (POB.)', '', 'SPO3', 0, 0, 0, 0, 0, 0),
(33, 'constancia@yahoo.com', '$2y$10$xRLdMoNdkBkW1p7du8jmT.mE8QVYaGtpkLx02bHpXThlVg4m7VRCu', 'Constancia', 'P', 'Laroya', 1, '252352', '01', 'LA UNION', 'AGOO', 'MACALVA CENTRAL', '', 'SPO4', 1, 1, 1, 1, 1, 0),
(34, 'jheim@yahoo.com', '$2y$10$/73wvUfB/1QocX2Olv7Smub8fNo2LKhkAV/Hz.K.YulKuUF56kWEC', 'Jheim', 'V', 'Viallanueva', -1, '25235235', '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN SUR', '', 'SPO5', 1, 1, 1, 1, 1, 0),
(35, '', '$2y$10$aos8yippygKFefjnW4kdj.qPwEt2Jb1KmyFcaykgtmhdbRluKbnpS', 'fwfw', '', '', 0, '', '', '', '', '', '', 'SPO5', 1, 1, 1, 1, 1, 0),
(36, 'josephullibacpsu@gmail.com', '$2y$10$Q22u6uWtN7natUizmLrWS.e0g.VhNmlvD1A5vCMrSHtmeh1J5q68K', 'Joseph', 'P', 'Ullibac', 1, '09336262869', '01', 'LA UNION', 'AGOO', 'SAN AGUSTIN EAST', '../assets/img/faces/avatar.jpg', 'FO3', 0, 0, 0, 0, 0, 0),
(37, 'angelica@gmail.com', '$2y$10$4JbbMJpjsONphIhGdcpYweJfiULUi3BJrdW67eHjzlv9n4lYW4a2i', 'Angelica', 'S', 'Parrocha', 0, '09328928499', '01', 'LA UNION', 'ARINGAY', 'MACABATO', '../assets/img/faces/avatar.jpg', 'SPO3', 0, 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bfp`
--
ALTER TABLE `tbl_bfp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fsic`
--
ALTER TABLE `tbl_fsic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inspectors`
--
ALTER TABLE `tbl_inspectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bfp`
--
ALTER TABLE `tbl_bfp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `tbl_fsic`
--
ALTER TABLE `tbl_fsic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_inspectors`
--
ALTER TABLE `tbl_inspectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

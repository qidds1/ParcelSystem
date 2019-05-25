-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 07:07 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parcelsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `trackingNo` varchar(15) NOT NULL,
  `CustId` int(10) DEFAULT NULL,
  `RackNo` varchar(5) NOT NULL,
  `RepNo` varchar(15) DEFAULT NULL,
  `StaffNo` varchar(15) NOT NULL,
  `DateReceived` date NOT NULL,
  `RepName` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`trackingNo`, `CustId`, `RackNo`, `RepNo`, `StaffNo`, `DateReceived`, `RepName`, `status`) VALUES
('GM002346464', NULL, 'A01', NULL, 'ST001', '2019-05-02', 'MOHAMAD SYAFIQ BIN MOHD HABIB', 'READY'),
('GM354412467', NULL, 'A01', NULL, 'ST001', '2019-04-30', 'MUHAMMAD AIMAN SIDDIQ BIN ABDUL AZIZ', 'READY'),
('KU276398JH87', NULL, 'B01', NULL, '', '2018-11-06', 'Muhammad Mikhail Alif FIzrul', 'NOT READY'),
('MY2123464456', NULL, 'A03', NULL, 'ST002', '2019-05-08', 'ISMAREEZAL BIN AZHAH', 'NOT READY');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `RepNo` varchar(15) DEFAULT NULL,
  `RepName` varchar(255) NOT NULL,
  `college` varchar(50) DEFAULT NULL,
  `RepTel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffNo` varchar(15) NOT NULL DEFAULT 'UiTMxx',
  `Sname` varchar(255) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `staffTel` varchar(15) NOT NULL,
  `staffEmail` varchar(20) NOT NULL,
  `staffIC` varchar(15) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffNo`, `Sname`, `Password`, `staffTel`, `staffEmail`, `staffIC`, `verified`) VALUES
('UITM2019a', 'Aiman Siddiq BIN', 'aiman12', '0111178654', 'aiman@yahoo.com', '990528145239', 1),
('UITM2019I', 'MUHAMMAD IZZAT BIN AHAMAD ZAHIDI', 'KOKO1234', '0173042579', 'izzat@yahoo.com', '990123565092', 1),
('UiTM2019q', 'Muhammad Mikhail bin alif fizrul', 'mikhail23', '0122643224', 'muhd.mikhail23@yahoo', '990123565091', 0),
('UiTMxx', 'Ismareezal Bin Azhahahaha', 'ismabucuk', '0169043083', 'reezallancer@gmail.c', '990802-14-5857', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`trackingNo`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 09:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bloodGroup` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `lastDonetDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `age`, `gender`, `bloodGroup`, `address`, `password`, `mobile`, `pic`, `lastDonetDate`) VALUES
(5, 'Md.jannatun Nime Nishat    ', 'nishatnime100@gmail.com', 23, 'Mail', 'O+', 'Naruli,Bogura Sadar', '81dc9bdb52d04dc20036dbd8313ed055', '01743607289', 'PicsArt_08-12-09.09.36.jpg', '1970-01-01'),
(6, 'MD. Seaum Ibna Mostafiz ', 'seaum@gmail.com', 27, 'Mail', 'A+', 'Joypurhat sadar', '81dc9bdb52d04dc20036dbd8313ed055', '01798671339', 'IMG_E3697.JPG', '1999-03-16'),
(7, 'Al-Mukit', 'angryMukit@gmail.com', 24, 'Mail', 'O+', 'Jamalpur ', '81dc9bdb52d04dc20036dbd8313ed055', '01792557891', '92627876_2660066294277477_4787850939660763136_n.jpg', '1996-04-12'),
(8, 'Ashiqur Rahman ', 'ashiqur@gmail.com', 23, 'Mail', 'B+', 'Savar Dhaka', '81dc9bdb52d04dc20036dbd8313ed055', '01758721142', '104169056_2384347598525063_8600331257508946346_o.jpg', '1997-05-01'),
(9, 'Jannatun Nime Nishat', 'adon@gmail.com', 19, 'Mail', 'O+', 'Naruli,Bogura Sadar', '25d55ad283aa400af464c76d713c07ad', '01743607289', 'IMG_E3699.JPG', '1996-07-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

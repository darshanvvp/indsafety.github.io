-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 11:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `status`) VALUES
(1, 1, 'Mumbai', 1),
(2, 1, 'Pune', 1),
(3, 1, 'Nashik', 1),
(4, 1, 'Kolhapur', 1),
(5, 2, 'Surat', 1),
(6, 2, 'Jamnagar', 1),
(7, 2, 'Baroda', 1),
(8, 3, 'Indore', 1),
(9, 3, 'Bhopal', 1),
(10, 3, 'Ujjain', 1),
(11, 4, 'Bangalore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`name`, `email`, `message`) VALUES
('darshu', 'darshu@gmail.com', 'good eve'),
('vanadana', 'dewfe', 'ee'),
('addi', 'bbdhw', 'cbdkb\r\n'),
('rekha', 'bjdkfb', 'djbdj'),
('bhfhweb', 'bdjebdjeb', 'hebje'),
('pikachu', 'ejbdjb', 'bekjbdkjbc'),
('vasant', 'vasant@gmail.com', 'good afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `state_id`, `name`, `status`) VALUES
(10, 3, 'UG-22, Phoenix City, Wine Road, Nashik MH', 1),
(11, 1, 'Ground Floor, Udyam, Ranade road, Next to Cake Shop, Shivaji Chowk, Dadar, Mumbai – 400195', 1),
(12, 1, 'Harmony, Shop no. 20, , Sector 72. Khanda Colony, New Chandivli  West, Mumbai – 482989', 1),
(14, 2, 'Gala 21, Deendayal Plaza,Pune Baner Road, Pune MH', 1),
(16, 2, 'Shop No. 3, Twin Towers, , Tirupati Nagar Kothrud, Pune ', 1),
(18, 3, 'Shop No. 5,Jay Vijay Nagar, Yashvant Viva Twp, Nashik, Maharashtra – 401204', 1),
(20, 4, 'Shop No.20, Prince Tower, Plot No.-51, Sector-20, Kolhapur, Maharashtra 937683 ', 1),
(21, 5, 'Gala 23,City Centre Mall,Surat ', 1),
(22, 5, 'FF-102,ALKAPURI,Surat,GJ', 1),
(23, 5, 'A3,Om Chambers,Kemps Corner,Surat,GJ', 1),
(24, 6, 'Gala No.13,Ganesh Society,Jamnagar ', 1),
(25, 6, 'Shop No.12, Diamond Apt.,Near railway station, Jamnagar ', 1),
(26, 6, '1038 ,ABHUSAN COMPLEX,RING ROAD,jamnagar,GUJARAT 380013', 1),
(27, 7, 'Gala 71,Diamond Complex,MG Road,Vadodara,GJ', 1),
(28, 7, 'Shop 2,Center One,Circle road,Vadodara Gujarat', 1),
(29, 8, '1,Sunflower Colony,Summair Club Road,Indore,https://www.srlworld.com/', 1),
(30, 8, 'UG 3,Fiama Apt,Behind Car Showroom,Indore,MP.', 1),
(31, 8, 'Shop No. 43,Aishwarya Apartment,New Agrawal Nagar,Indore.', 1),
(32, 9, 'Shop No 3,Shiv Complex,Temple Road,Bhopal,Madhya Pradesh.', 1),
(33, 9, 'Ground Floor, Sunpath Arcade, Above SBI, Bhopal MP – 361005 https://www.apollo247.com/lab-tests', 1),
(34, 10, 'Shop No C1,Ground Floor,Pandit Complex,ABC road,Ujjain MP,https://suburbandiagnostics.com/', 1),
(35, 11, 'SHOP NO 24,MYHNA SQUARE,D BLOCK,GUNJUR VILLAGE,OPP TO HP PETROL PUMP,Bangalore,Karnataka', 1),
(36, 11, 'Shop No. 9,Kamal Mansion,Patel Marg,Near Portuguese Church,Bangalore KA', 1),
(37, 1, '601 Ashok Apt Ghodbunder Andheri', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lblk`
--

CREATE TABLE `lblk` (
  `id` int(11) NOT NULL,
  `country_id` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lblk`
--

INSERT INTO `lblk` (`id`, `country_id`, `name`, `status`) VALUES
(2, 'Gala 21, Deendayal Plaza,Pune Baner Road, Pune MH https://www.srlworld.com/', 'https://www.google.com/', 1),
(3, 'Shop No C1,Ground Floor,Pandit Complex,ABC road,Ujjain MP,https://suburbandiagnostics.com/', 'https://suburbandiagnostics.com/', 1),
(4, '1,Sunflower Colony,Summair Club Road,Indore,https://www.srlworld.com/', 'https://www.srlworld.com/', 1),
(5, 'Ground Floor, Sunpath Arcade, Above SBI, Bhopal MP – 361005 https://www.apollo247.com/lab-tests', 'https://www.apollo247.com/lab-tests', 1),
(6, 'Shop No 3,Shiv Complex,Temple Road,Bhopal,Madhya Pradesh.', 'https://suburbandiagnostics.com/', 1),
(7, 'Shop No. 43,Aishwarya Apartment,New Agrawal Nagar,Indore.', 'https://www.fortishealthcare.com', 1),
(8, 'UG 3,Fiama Apt,Behind Car Showroom,Indore,MP.', 'https://suburbandiagnostics.com', 1),
(9, 'Shop 2,Center One,Circle road,Vadodara Gujarat', 'https://suburbandiagnostics.com', 1),
(10, 'Gala 71,Diamond Complex,MG Road,Vadodara,GJ', 'https://www.apollo247.com/lab-tests', 1),
(11, '1038 ,ABHUSAN COMPLEX,RING ROAD,jamnagar,GUJARAT 380013', 'https://www.fortishealthcare.com/', 1),
(12, 'Shop No.12, Diamond Apt.,Near railway station, Jamnagar ', 'https://www.apollo247.com/lab-tests', 1),
(13, 'Gala No.13,Ganesh Society,Jamnagar', 'https://suburbandiagnostics.com/', 1),
(14, 'A3,Om Chambers,Kemps Corner,Surat,GJ', 'https://www.apollo247.com/lab-tests', 1),
(15, 'FF-102,ALKAPURI,Surat,GJ', 'https://suburbandiagnostics.com/', 1),
(16, 'Gala 23,City Centre Mall,Surat ', 'https://www.srlworld.com/', 1),
(17, 'Shop No.20, Prince Tower, Plot No.-51, Sector-20, Kolhapur, Maharashtra 937683 ', 'https://suburbandiagnostics.com', 1),
(19, 'Shop No. 5,Jay Vijay Nagar, Yashvant Viva Twp, Nashik, Maharashtra – 401204', 'https://www.srlworld.com/', 1),
(20, '3 34 Nawab Pura Kalamb Chowk Nashik Maharashtra 445701', 'https://suburbandiagnostics.com/', 1),
(21, 'Shop No. 3, Twin Towers, , Tirupati Nagar Kothrud, Pune ', 'https://www.apollo247.com/lab-tests', 1),
(22, 'Near Mohit Medical Store, Opp. Civil Hospital, Pune – 486001', 'https://suburbandiagnostics.com/', 1),
(23, 'Gala 21, Deendayal Plaza,Pune Baner Road, Pune MH', 'https://www.srlworld.com/', 1),
(25, 'Harmony, Shop no. 20, , Sector 72. Khanda Colony, New Chandivli  West, Mumbai – 482989', 'https://labs.metropolisindia.com/', 1),
(26, 'Ground Floor, Udyam, Ranade road, Next to Cake Shop, Shivaji Chowk, Dadar, Mumbai – 400195', 'https://www.fortishealthcare.com', 1),
(27, 'UG-22, Phoenix City, Wine Road, Nashik MH', 'https://www.fortishealthcare.com/', 1),
(30, 'SHOP NO 24,MYHNA SQUARE,D BLOCK,GUNJUR VILLAGE,OPP TO HP PETROL PUMP,Bangalore,Karnataka', 'https://www.srlworld.com', 1),
(31, 'Shop No. 9,Kamal Mansion,Patel Marg,Near Portuguese Church,Bangalore KA', 'https://suburbandiagnostics.com', 1),
(32, '601 Ashok Apt Ghodbunder Andheri', 'https://www.srlworld.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `pna` varchar(255) NOT NULL,
  `agess` varchar(255) NOT NULL,
  `gnd` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nb` varchar(255) NOT NULL,
  `eml` varchar(255) NOT NULL,
  `adth` varchar(255) NOT NULL,
  `tsth` varchar(255) NOT NULL,
  `tstd` varchar(255) NOT NULL,
  `cvdi` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `stg` varchar(255) NOT NULL,
  `ctty` varchar(255) NOT NULL,
  `lb` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p`
--

INSERT INTO `p` (`pna`, `agess`, `gnd`, `address`, `nb`, `eml`, `adth`, `tsth`, `tstd`, `cvdi`, `dt`, `stg`, `ctty`, `lb`) VALUES
('asha', '34', 'Fe-Male', 'baroda', 'asha@abc.com', '68736926', '326494046', 'Diabetes,', '', 'Yes', '30-11-2021', 'Gujarat', 'Baroda', 'Gala 71,Diamond Complex,MG Road,Vadodara,GJ'),
('manasiiiiiiiiiiiii', '', 'Fe-Male', 'vfee', 'bgh', '522', '534', 'Hypertension,Diabetes,', '', 'No', '', 'Maharashtra', 'Mumbai', 'Ground Floor, Udyam, Ranade road, Next to Cake Shop, Shivaji Chowk, Dadar, Mumbai – 400195'),
('adi', '38', 'Male', 'bandra', 'hdsgs', '54987247', '4654365', 'Hypertension,', '', 'Yes', '21-01-2022', 'Karnataka', 'Bangalore', 'SHOP NO 24,MYHNA SQUARE,D BLOCK,GUNJUR VILLAGE,OPP TO HP PETROL PUMP,Bangalore,Karnataka'),
('rekha', '45', 'Fe-Male', 'fsg', 'bgdd', '665764636', '34675', 'Hypertension,Diabetes,', '', 'Yes', '01-01-2022', 'Madhya Pradesh', 'Indore', 'UG 3,Fiama Apt,Behind Car Showroom,Indore,MP.'),
('pikachu', '30', 'Other', 'mira rd west east', 'bjhfuhe', '637846932', '432744', 'Hypertension,Diabetes,', '', 'Yes', '21-01-2021', 'Madhya Pradesh', 'Indore', 'Shop No. 43,Aishwarya Apartment,New Agrawal Nagar,Indore.'),
('vasant', '72', 'Male', 'vile parle', 'vasant@ymail.com', '278327872873', '2736276723', 'Hypertension,Diabetes,', '', 'Yes', '13-11-2020', 'Maharashtra', 'Mumbai', 'Harmony, Shop no. 20, , Sector 72. Khanda Colony, New Chandivli  West, Mumbai – 482989');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `status`) VALUES
(1, 'Maharashtra', 1),
(2, 'Gujarat', 1),
(3, 'Madhya Pradesh', 1),
(4, 'Karnataka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `user`, `age`, `email`, `gender`, `address`, `education`, `university`) VALUES
(1, 'babbu', 25, 'babbu@yahoo.in', 'male', 'ujjain', 'grad', 'ujjain unv'),
(2, 'vivek', 32, 'efew', 'm', 'fe', 'ssc', 'd3e'),
(3, 'Rajashree', 50, 'raj@yahoo.in', 'female', 'thane', 'grad', 'pune'),
(4, 'tara', 20, 'tara@uahoo.com', 'female', 'vasai west', 'grad', 'vasai unv'),
(5, 'aditya', 35, 'dbbfkjwe@gmail.com', 'male', 'vasai', 'grad', 'vasai guj'),
(6, 'rekha', 100, 'fefefe', 'female', 'ffwf', 'ssc', 'kolkata'),
(7, 'pikachu', 20, 'pik@gmail.com', 'male', 'bchbdfheb', 'ssc', 'pikachuuniversity'),
(8, 'vasant', 62, 'vasant@gmail.com', 'male', 'vile parle mumbai', 'hsc', 'maharashtra unv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lblk`
--
ALTER TABLE `lblk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `lblk`
--
ALTER TABLE `lblk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

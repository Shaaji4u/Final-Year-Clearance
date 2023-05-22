-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 06:19 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearances`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_status`
--

CREATE TABLE `app_status` (
  `id` int(11) NOT NULL,
  `appid` varchar(200) NOT NULL,
  `library` varchar(10) DEFAULT '0',
  `department` varchar(10) DEFAULT '0',
  `faculty` varchar(10) DEFAULT '0',
  `store` varchar(10) DEFAULT '0',
  `hostel` varchar(10) DEFAULT '0',
  `athlete` varchar(10) DEFAULT '0',
  `sug` varchar(10) DEFAULT '0',
  `security` varchar(10) NOT NULL DEFAULT '0',
  `securityDate` datetime DEFAULT NULL,
  `athleteDate` datetime DEFAULT NULL,
  `departmentDate` datetime DEFAULT NULL,
  `facultyDate` datetime DEFAULT NULL,
  `hostelDate` datetime DEFAULT NULL,
  `libraryDate` datetime DEFAULT NULL,
  `storeDate` datetime DEFAULT NULL,
  `sugDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_status`
--

INSERT INTO `app_status` (`id`, `appid`, `library`, `department`, `faculty`, `store`, `hostel`, `athlete`, `sug`, `security`, `securityDate`, `athleteDate`, `departmentDate`, `facultyDate`, `hostelDate`, `libraryDate`, `storeDate`, `sugDate`) VALUES
(1, 'CL979629265', '1', '1', '1', '1', '1', '1', '1', '1', '2017-09-17 00:01:25', '2017-09-16 23:34:33', '2017-09-16 23:41:00', '2017-09-16 23:29:30', '2017-09-16 23:32:46', '2017-09-16 23:21:40', '2017-09-16 23:57:09', '2017-09-16 23:31:49'),
(2, 'CL754736720', '1', '0', '0', '1', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-17 11:42:34', NULL),
(3, 'CL349533904', '1', '0', '0', '1', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '2022-12-19 12:01:26', '2017-09-17 11:43:19', NULL),
(4, 'CL526589885', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'CL413568490', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_record`
--

CREATE TABLE `staff_record` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(250) NOT NULL,
  `staff_password` varchar(250) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_dept` varchar(250) NOT NULL,
  `staff_faculty` varchar(250) NOT NULL,
  `clearance_section` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_record`
--

INSERT INTO `staff_record` (`id`, `staff_id`, `staff_password`, `staff_name`, `staff_dept`, `staff_faculty`, `clearance_section`) VALUES
(1, '13317', '1212', 'Jimoh Hadi', 'Library', 'Library', 'Library'),
(2, '12017', '1111', 'Dr. John Toby', 'Agricultural Engineering', 'Engineering', 'Faculty'),
(3, '12017', '1121', 'Dr. John Toby', 'Agricultural Engineering', 'Engineering', 'Department'),
(4, '1344', '4333', 'Dr. Patricia Joy', 'Bussiness Studies', 'Bussiness Studies', 'Faculty'),
(5, '1344', '4335', 'Dr. Patricia Joy', 'Bussiness Studies', 'Bussiness Studies', 'Department'),
(6, '13333', '4330', 'Dr. Mahamat Kabir', 'Botany', 'Agriculture', 'Faculty'),
(7, '13333', '43391', 'Dr. Mahamat Kabir', 'Botany', 'Agriculture', 'Department'),
(8, '10012', '4331', 'Dr. Okino Ishaq', 'Mathematics', 'Science', 'Faculty'),
(9, '10012', '43391', 'Dr. Okino Ishaq', 'Mathematics', 'Science', 'Department'),
(10, '39012', '4331', 'Dr. Janet Nwokocha', 'Quantity Surveying', 'Environmental Studies', 'Faculty'),
(11, '21012', '433002', 'Dr. Janet Nwobodo', 'Quantity Surveying', 'Environmental Studies', 'Department'),
(12, '133450', 'sugdel', 'Comrade Suraj Bantel', 'Mathematics', 'Science', 'SUG'),
(13, '133750', 'sportdel', 'Mr. Okon Abang', 'Sports', 'Sports', 'Sports'),
(14, '257134', 'hostel11', 'Mr. Amadi Tahir', 'Hostel', 'Hostel', 'Hostel'),
(15, '1113987', '209111', 'Mr. Emeka Onoura', 'Bursary', 'Finance', 'Bursary'),
(16, '12345', '345col', 'Col. Atabo Jude', 'Security', 'Security', 'Security'),
(17, '13445', '4335', 'Engr. Okong Livinus', 'Agricultural Engineering', 'Engineering', 'Department');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `sappid` varchar(200) DEFAULT NULL,
  `semail` varchar(250) DEFAULT NULL,
  `sregno` varchar(200) DEFAULT NULL,
  `sresidentadd` varchar(250) DEFAULT NULL,
  `sphonemain` varchar(15) DEFAULT NULL,
  `sphonealt` varchar(15) DEFAULT NULL,
  `sfaculty` varchar(250) DEFAULT NULL,
  `sdept` varchar(250) DEFAULT NULL,
  `snationality` varchar(250) DEFAULT NULL,
  `sstate` varchar(250) DEFAULT NULL,
  `slocalgov` varchar(250) DEFAULT NULL,
  `smodeent` varchar(150) DEFAULT NULL,
  `sgender` varchar(10) DEFAULT NULL,
  `syearent` varchar(10) DEFAULT NULL,
  `syearexit` varchar(10) DEFAULT NULL,
  `sreligion` varchar(150) DEFAULT NULL,
  `sawardview` varchar(250) DEFAULT NULL,
  `smodestudy` varchar(200) DEFAULT NULL,
  `scoursedur` varchar(100) DEFAULT NULL,
  `sregdate` datetime DEFAULT NULL,
  `spermadd` varchar(250) DEFAULT NULL,
  `sstatus` varchar(10) NOT NULL DEFAULT '0',
  `sfirstname` varchar(250) DEFAULT NULL,
  `sothername` varchar(250) DEFAULT NULL,
  `stitle` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `sappid`, `semail`, `sregno`, `sresidentadd`, `sphonemain`, `sphonealt`, `sfaculty`, `sdept`, `snationality`, `sstate`, `slocalgov`, `smodeent`, `sgender`, `syearent`, `syearexit`, `sreligion`, `sawardview`, `smodestudy`, `scoursedur`, `sregdate`, `spermadd`, `sstatus`, `sfirstname`, `sothername`, `stitle`) VALUES
(2, 'CL754736720', 'aabdulraheemsherif@yahoo.com', '14/371396D/1', 'D41 Inike Okene Kogi State', '08164377187', '08049432322', 'Science', 'Mathematics', 'Nigeria', 'Kogi', 'Okene', 'Utme', 'Male', '2015', '2019', 'Islam', 'Degree', 'Full Time', '4', '2017-09-17 00:11:21', 'D41 Inike Okene Kogi State', '1', 'Abdulraheem', 'Sherif Adavuruku', 'Mr.'),
(3, 'CL979629265', 'aabdulradheemsherif@yahoo.com', '14/3713936D/1', 'Abubakar Tafawa Balewa University Bauchi', '07032124578', '07032124578', 'Engineering', 'Agricultural Engineering', 'Nigeria', 'Bauchi', 'Tafawa-Balewa', 'DEntry', 'Female', '1992', '1994', 'Islam', 'Diploma', 'Part Time', '2', '2017-09-16 01:07:08', 'Abubakar Tafawa Balewa University Bauchi', '1', 'Jimoh', 'Salamat Onize', 'Miss.'),
(4, 'CL349533904', 'abdulraheemabdulmuluk@gmail.com', 'ST261960', 'Awkwa Senatorial District Opoh.', '09032456618', '', 'Bussiness Studies', 'Bussiness Studies', 'Nigeria', 'Anambra', 'Awka North', 'DEntry', 'Male', '2014', '2018', 'Christianity', 'Degree', 'Full Time', '4', '2017-09-17 10:48:00', 'Awkwa Senatorial District Opoh.', '1', 'David', 'Opeyemi John', 'Mr.'),
(5, 'CL656937334', 'dd@ddd.com', 'ST257983', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(6, 'CL526589885', 'adeizaj52@gmail.com', 'CST/17/SWE/00026', 'Tudun Malamai Janguza', '07037668416', '09035069087', 'Science', 'Computer Science', 'Nigeria', 'Kano', 'Gwarzo', 'Utme', 'Male', '2017', '2022', 'Christianity', 'Degree', 'Full Time', '4', '2022-12-19 22:29:49', 'Tudun Malamai Janguza', '1', 'Mark', 'Amedari Joshua', 'Mr.'),
(7, 'CL413568490', 'markjoshua173@gmail.com', 'CST/17/SWE/00027', 'Jahun', '0903569087', '', 'Science', 'Computer Science', 'Nigeria', 'Jigawa', 'Jahun', 'Utme', 'Male', '2015', '2022', 'Christianity', 'Degree', 'Full Time', '4', '2023-04-15 06:51:30', 'Jahun', '1', 'Mark', 'Amedari', 'Mr.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_status`
--
ALTER TABLE `app_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_record`
--
ALTER TABLE `staff_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_status`
--
ALTER TABLE `app_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_record`
--
ALTER TABLE `staff_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

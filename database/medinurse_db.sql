-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 10:28 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medinurse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `appointmentID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `coming_time` time NOT NULL,
  `nurseID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `availabilityID` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`appointmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointmentID`, `date`, `coming_time`, `nurseID`, `patientID`, `availabilityID`, `status`) VALUES
(1, '2024-04-15', '08:00:00', 165, 665, 3, 0),
(3, '2024-04-15', '08:00:00', 165, 665, 3, 0),
(4, '2024-04-17', '15:00:00', 165, 665, 5, 2),
(5, '2024-04-17', '15:00:00', 165, 665, 5, 1),
(6, '2024-04-02', '07:07:00', 165, 665, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE IF NOT EXISTS `availability` (
  `availabilityID` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(100) NOT NULL,
  `work_time` varchar(100) NOT NULL,
  `price_per_hour` int(11) NOT NULL,
  `nurseID` int(11) NOT NULL,
  PRIMARY KEY (`availabilityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`availabilityID`, `day`, `work_time`, `price_per_hour`, `nurseID`) VALUES
(3, 'Monday', 'Half Day (from 8:00 am to 2:00 pm)', 15, 165),
(4, 'Tuesday', 'Full Day (from 8:00 am to 6:00 pm)', 30, 165),
(5, 'Wednesday', 'Half Day (from 2:00 pm to 8:00 pm)', 15, 165),
(6, 'Thursday', 'Night Shift (from 8:00 pm to 6:00 am)', 20, 165),
(7, 'Friday', '24 Hours', 35, 165),
(8, 'Saturday', 'Off Day', 0, 165),
(9, 'Sunday', 'Off Day', 0, 165);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `blogID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(2500) NOT NULL,
  `details` varchar(2500) NOT NULL,
  `date_of_publish` timestamp NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`blogID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogID`, `title`, `details`, `date_of_publish`, `category`, `image`) VALUES
(6, 'Pulmonary Edema: Causes, Symptoms and Treatment', 'When it comes to respiratory health, conditions such as pulmonary edema can present formidable challenges, requiring careful understanding and specialised attention. Thatâ€™s because the condition is often caused by an intricate interplay of factors, demanding a nuanced approach to diagnosis, treatment, and ongoing management. In this article, we delve into the complexities surrounding pulmonary edema, exploring its multifaceted nature and the importance of comprehensive care in navigating this condition. By shedding light on the intricacies of pulmonary edema, we aim to empower readers with insights that foster a deeper understanding of this respiratory challenge and how to manage it. Letâ€™s start with some basics. ', '2024-03-26 08:03:00', 'Medicine', 'Pulmonary_Edema_59fd957adb.jpg'),
(8, 'Simple Home Remedies For Loose Motions', 'Diarrhea or loose motion occurs when the intestines are unable to absorb nutrients. When this happens, food is passed through the body without being properly digested.', '2024-03-26 08:11:00', 'Nutrition', 'thumbnail_50df7dfd89.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `blogID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `comment`, `date`, `blogID`, `patientID`) VALUES
(1, 'Nice article', '2024-03-26', 6, 665),
(2, 'I like it!', '2024-03-26', 6, 665);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_plans`
--

CREATE TABLE IF NOT EXISTS `insurance_plans` (
  `planID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `yearly_price` int(11) NOT NULL,
  `monthly_price` int(11) NOT NULL,
  PRIMARY KEY (`planID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `insurance_plans`
--

INSERT INTO `insurance_plans` (`planID`, `name`, `description`, `image`, `yearly_price`, `monthly_price`) VALUES
(1, 'Operation and Surgery', 'Surgical Coverage\r\nHospitalization Benefits\r\nPre-Existing Condition Coverage\r\nEmergency Coverage\r\nOut-of-Pocket Costs', 'price-4.jpg', 200, 30),
(2, 'Health Checkup', 'Routine Checkup CoverageDiagnostic TestsPreventive ServicesWellness Programs', 'price-2.jpg', 150, 15),
(3, 'Insurance for Cancer patients', 'Employer-Sponsored Health Insurance, Medicare, Medicaid, Clinical Trials, Coverage for Diagnostic Tests and Imaging.', 'childhood-cancer.jpg.webp', 300, 75);

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE IF NOT EXISTS `nurses` (
  `nurseID` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `profile` varchar(2500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `certificate` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `skills` text NOT NULL,
  PRIMARY KEY (`nurseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`nurseID`, `first_name`, `last_name`, `gender`, `birthdate`, `profile`, `address`, `email`, `phone`, `password`, `certificate`, `college`, `years_of_experience`, `skills`) VALUES
(165, 'Sara', 'Mahdi', 'Female', '1995-03-14', 'team-3.jpg', 'Beirut', 'sara@gmail.com', 70123123, '123', 'Stuff Nurse', 'LU', 6, 'High medical treatment, emergency care, laboratory testing, outdoor services.'),
(66641, 'Mohammad', 'Issa', 'Male', '1991-03-09', 'team-2.jpg', 'Nabatieh', 'mohamad@gmail.com', 70145454, '123', 'Stuff Nurse', 'AUB', 10, 'High medical treatment, emergency care, laboratory testing, outdoor services.');

-- --------------------------------------------------------

--
-- Table structure for table `nurse_applications`
--

CREATE TABLE IF NOT EXISTS `nurse_applications` (
  `applicationID` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `profile` varchar(2500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `certificate` varchar(100) NOT NULL,
  `skills` text NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `college` text NOT NULL,
  PRIMARY KEY (`applicationID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `patientID` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patientID`, `first_name`, `last_name`, `address`, `phone`, `gender`, `birthdate`, `password`) VALUES
(665, 'Ahmad', 'Makki', 'Beirut', 70123456, 'Male', '1990-04-08', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `serviceID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `nurseID` int(11) NOT NULL,
  PRIMARY KEY (`serviceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceID`, `name`, `description`, `price`, `nurseID`) VALUES
(1, 'Serum Suspension', 'Serum Suspension for any patient young to old in very easy and professional way.', 7, 165);

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE IF NOT EXISTS `service_requests` (
  `requestID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `nurseID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`requestID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_requests`
--

INSERT INTO `service_requests` (`requestID`, `date`, `time`, `nurseID`, `patientID`, `serviceID`, `status`) VALUES
(1, '2024-03-31', '18:00:00', 165, 665, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
  `subscriptionID` int(11) NOT NULL AUTO_INCREMENT,
  `price_method` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `planID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  PRIMARY KEY (`subscriptionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`subscriptionID`, `price_method`, `payment_method`, `planID`, `patientID`) VALUES
(2, 'Yearly', 'Credit Card', 2, 665);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

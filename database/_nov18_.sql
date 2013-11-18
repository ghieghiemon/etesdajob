-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2013 at 12:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `etesda`
--
CREATE DATABASE IF NOT EXISTS `etesda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `etesda`;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `filename`) VALUES
(3, 'assets/img/an1.jpg'),
(4, 'assets/img/an2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_requirements`
--

CREATE TABLE IF NOT EXISTS `applicant_requirements` (
  `reqno` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `reqpath` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`reqno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `applicationid` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) NOT NULL,
  `jobno` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `statusno` int(11) DEFAULT NULL,
  `datereceived` date NOT NULL,
  `timereceived` time NOT NULL,
  `requirementdate` date NOT NULL,
  `requirementtime` time DEFAULT NULL,
  `requirementfile` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `attire` varchar(200) NOT NULL,
  `things` varchar(200) NOT NULL,
  PRIMARY KEY (`applicationid`,`appid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationid`, `appid`, `jobno`, `status`, `statusno`, `datereceived`, `timereceived`, `requirementdate`, `requirementtime`, `requirementfile`, `location`, `notes`, `attire`, `things`) VALUES
(1, 7, 1, 'PENDING', 1, '2013-07-07', '03:00:00', '2013-07-08', '03:00:00', '', 'Manila', '', 'Casual', ''),
(2, 7, 1, 'SECOND INTERVIEW', 5, '2013-07-07', '03:00:00', '2013-07-08', '03:00:00', '', 'Manila', '', 'Casual', ''),
(94, 3, 13, 'New Applicant', 1, '2013-11-12', '19:52:47', '0000-00-00', NULL, '', '', 'Testing the notes', '', ''),
(95, 248, 14, 'Exam', 1, '2013-11-13', '23:52:05', '2013-11-15', '15:00:00', '', 'Manila Hotel', '', '', ''),
(120, 3, 5, 'New Applicant', 1, '2013-11-17', '20:41:39', '0000-00-00', NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `discussions_like`
--

CREATE TABLE IF NOT EXISTS `discussions_like` (
  `discussionno` int(11) NOT NULL,
  `likedby` int(11) NOT NULL,
  PRIMARY KEY (`discussionno`,`likedby`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educational_background`
--

CREATE TABLE IF NOT EXISTS `educational_background` (
  `edid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `edlevel` varchar(25) NOT NULL,
  `institution` varchar(45) NOT NULL,
  `course` int(11) DEFAULT NULL,
  `startyear` year(4) NOT NULL,
  `endyear` year(4) DEFAULT NULL,
  `present` int(11) DEFAULT NULL,
  PRIMARY KEY (`edid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `educational_background`
--

INSERT INTO `educational_background` (`edid`, `userid`, `edlevel`, `institution`, `course`, `startyear`, `endyear`, `present`) VALUES
(1, 6, 'Technical School', 'TESDA', 1, 1992, 2012, 0),
(2, 6, 'Technical School', 'TESDA', 2, 1990, 2013, 0),
(3, 6, 'Technical School', 'TESDA', 3, 1993, 2012, 0),
(4, 9, 'High School Graduate', 'Pedro Jose Public High School', 1, 1995, 2011, 0),
(5, 10, 'Grade School', 'Sta. Maria School', 2, 1994, 2010, 0),
(6, 11, 'Grade School', 'Sta. Maria School', 3, 1995, 2001, 0),
(7, 12, 'Grade School', 'Sta. Maria School', 1, 1995, 2001, 0),
(8, 13, 'High School Graduate', 'Pedro Jose Public High School', 2, 1995, 1999, 0),
(9, 14, 'High School Graduate', 'Pedro Jose Public High School', 3, 1995, 1999, 0),
(10, 15, 'Grade School', 'Sta. Maria School', 0, 1995, 2001, 0),
(11, 16, 'Technical School', 'TESDA', 0, 1980, 1981, 0),
(12, 21, 'Technical School', 'TESDA', 0, 1980, 1981, 0),
(13, 22, 'Technical School', 'TESDA', 0, 1980, 1981, 0),
(14, 23, 'Technical School', 'TESDA', 0, 1980, 1981, 0),
(15, 24, 'Technical School', 'TESDA', 0, 1980, 1981, 0),
(16, 25, '', '', 0, 1980, 1984, 0),
(17, 26, '', '', 0, 1980, 1984, 0),
(18, 143, 'High School Graduate', 'hello', 0, 2014, 2010, NULL),
(19, 143, 'High School Graduate', 'hello', 0, 2014, 2010, NULL),
(20, 143, 'Technical Diploma', 'hello', 0, 2010, 2010, NULL),
(21, 143, 'Technical Diploma', 'hello', 0, 2010, 2015, NULL),
(22, 143, 'High School Graduate', 'DLSU haha', 1, 2001, 2001, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employer_survey`
--

CREATE TABLE IF NOT EXISTS `employer_survey` (
  `surveyno` int(11) NOT NULL AUTO_INCREMENT,
  `month` int(11) NOT NULL,
  `companyID` int(11) NOT NULL,
  `isAnswered` int(11) NOT NULL,
  PRIMARY KEY (`surveyno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employer_survey`
--

INSERT INTO `employer_survey` (`surveyno`, `month`, `companyID`, `isAnswered`) VALUES
(1, 1, 15, 0),
(2, 2, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_invitation`
--

CREATE TABLE IF NOT EXISTS `event_invitation` (
  `invno` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `eventno` int(11) NOT NULL,
  `accepted` int(11) DEFAULT NULL,
  PRIMARY KEY (`invno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event_invitation`
--

INSERT INTO `event_invitation` (`invno`, `userid`, `eventno`, `accepted`) VALUES
(1, 247, 22, 0),
(2, 9, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE IF NOT EXISTS `event_participants` (
  `participantno` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `eventno` int(11) NOT NULL,
  PRIMARY KEY (`participantno`),
  KEY `fkUserJoined` (`userid`),
  KEY `fkEvents` (`eventno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `event_participants`
--

INSERT INTO `event_participants` (`participantno`, `userid`, `eventno`) VALUES
(13, 6, 6),
(14, 1, 7),
(15, 8, 8),
(16, 9, 9),
(17, 1, 10),
(18, 1, 6),
(20, 11, 6),
(21, 15, 6),
(22, 16, 6),
(23, 21, 6),
(24, 22, 6),
(25, 23, 6),
(26, 24, 6),
(27, 25, 8),
(28, 15, 21),
(29, 15, 22);

-- --------------------------------------------------------

--
-- Table structure for table `event_venue`
--

CREATE TABLE IF NOT EXISTS `event_venue` (
  `venueno` int(11) NOT NULL AUTO_INCREMENT,
  `eventno` int(11) NOT NULL,
  `venue` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `region` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  PRIMARY KEY (`venueno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `event_venue`
--

INSERT INTO `event_venue` (`venueno`, `eventno`, `venue`, `region`, `city`) VALUES
(11, 6, 'NBC Tent', 1, 2),
(12, 7, 'NBC Tent', 1, 2),
(13, 8, 'Market Market', 1, 2),
(14, 9, 'NBC Tent', 1, 2),
(15, 10, 'NBC Tent', 1, 2),
(16, 11, 'Market Market', 1, 2),
(17, 12, 'NBC Tent', 1, 2),
(18, 13, 'Market Market', 1, 2),
(19, 14, 'NBC Tent', 1, 2),
(20, 15, 'Market Market', 1, 2),
(21, 16, 'Market Market', 1, 2),
(22, 17, 'NBC Tent', 1, 2),
(23, 18, 'Market Market', 1, 2),
(24, 19, 'NBC Tent', 1, 2),
(25, 20, 'Market Market', 1, 2),
(26, 21, 'dsfsdfsdf', 2, 23),
(27, 22, 'Hello', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventno` int(11) NOT NULL AUTO_INCREMENT,
  `eventtitle` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date DEFAULT NULL,
  `starttime` time NOT NULL COMMENT '	',
  `endtime` time DEFAULT NULL,
  `createdby` int(11) NOT NULL,
  `purpose` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `eventindustry` int(11) NOT NULL,
  `eventpic` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sponsors` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`eventno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventno`, `eventtitle`, `startdate`, `enddate`, `starttime`, `endtime`, `createdby`, `purpose`, `eventindustry`, `eventpic`, `sponsors`) VALUES
(6, 'All about Electricians', '2013-11-10', '2013-08-10', '10:00:00', '05:00:00', 2, 'Training and Employment', 1, 'ld6.jpg', ''),
(7, 'TESDA V-A Provincial TVET Job Fair', '2013-11-05', '2013-08-05', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(8, 'TESDA VI-A Provincial TVET Job Fair', '2013-11-07', '2013-08-07', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(9, 'TESDA VII-A Provincial TVET Job Fair', '2013-08-07', '2013-08-07', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(10, 'TESDA VIII-A Provincial TVET Job Fair', '2013-08-20', '2013-08-20', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(11, 'TESDA VIII-A Provincial TVET Job Fair', '2013-08-18', '2013-08-18', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(12, 'TESDA IX-A Provincial TVET Job Fair', '2013-08-18', '2013-08-18', '10:00:00', '05:00:00', 1, 'Training and Employment', 20, 'ld6.jpg', ''),
(13, 'Job Expo @ MOA', '2013-08-05', '2013-08-08', '10:00:00', '05:00:00', 1, 'Training and Employment', 20, 'ld6.jpg', ''),
(14, 'Job Expo @ MOA', '2013-08-07', '2013-08-10', '10:00:00', '05:00:00', 2, 'Training and Employment', 20, 'ld6.jpg', ''),
(15, 'Job Expo @ NBC Tent', '2013-08-15', '2013-08-18', '10:00:00', '05:00:00', 3, 'Training and Employment', 20, 'ld6.jpg', ''),
(16, 'Job Expo @ MOA', '2013-08-20', '2013-08-23', '10:00:00', '05:00:00', 4, 'Training and Employment', 20, 'ld6.jpg', ''),
(17, 'Job Expo @ MOA', '2013-08-18', '2013-08-21', '10:00:00', '05:00:00', 5, 'Training and Employment', 20, 'ld6.jpg', ''),
(18, 'TESDA VII Trainees Day/Sectoral', '2013-08-05', '2013-08-05', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(19, 'TESDA VI Trainees Day/Sectoral', '2013-08-07', '2013-08-07', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(20, 'TESDA V Trainees Day/Sectoral', '2013-08-15', '2013-08-15', '10:00:00', '05:00:00', 11, 'Training and Employment', 20, 'ld6.jpg', ''),
(21, 'Testing of upload 101', '2013-11-20', NULL, '10:20:00', NULL, 15, 'will check if its working', 3, 'tumblr_mu5ce8brh81sa03r7o1_500.jpg', '-'),
(22, 'Testing Event Invites', '2013-11-20', NULL, '11:00:00', NULL, 15, 'Checking the query', 8, 'L8.jpg', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `job_certifications`
--

CREATE TABLE IF NOT EXISTS `job_certifications` (
  `jobncid` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` int(11) NOT NULL,
  `ncid` int(11) DEFAULT NULL,
  PRIMARY KEY (`jobncid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=304 ;

--
-- Dumping data for table `job_certifications`
--

INSERT INTO `job_certifications` (`jobncid`, `jobno`, `ncid`) VALUES
(276, 2, 6),
(277, 3, 4),
(278, 4, 15),
(298, 14, 15),
(299, 15, 14),
(300, 5, 18),
(301, 6, 19),
(302, 7, 20),
(303, 8, 21);

-- --------------------------------------------------------

--
-- Table structure for table `job_competencies`
--

CREATE TABLE IF NOT EXISTS `job_competencies` (
  `jobncoid` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(45) NOT NULL,
  `ncoid` int(11) DEFAULT NULL,
  PRIMARY KEY (`jobncoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=334 ;

--
-- Dumping data for table `job_competencies`
--

INSERT INTO `job_competencies` (`jobncoid`, `jobno`, `ncoid`) VALUES
(197, '2', 22),
(313, '3', 21),
(314, '4', 17),
(315, '4', 18),
(318, '14', 17),
(319, '14', 18),
(320, '15', 12),
(321, '15', 13),
(322, '15', 14),
(323, '5', 23),
(324, '5', 24),
(325, '5', 25),
(326, '6', 26),
(327, '6', 27),
(328, '6', 28),
(329, '7', 29),
(330, '7', 30),
(331, '7', 31),
(332, '8', 32),
(333, '8', 33);

-- --------------------------------------------------------

--
-- Table structure for table `job_invitation`
--

CREATE TABLE IF NOT EXISTS `job_invitation` (
  `invitationno` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `jobno` int(11) NOT NULL,
  `applied` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`invitationno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `job_invitation`
--

INSERT INTO `job_invitation` (`invitationno`, `appid`, `jobno`, `applied`, `message`) VALUES
(2, '6', 1, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(4, '6', 1, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(6, '6', 268, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(7, '6', 269, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(8, '6', 270, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(9, '6', 271, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(10, '6', 272, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(11, '6', 273, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(12, '6', 274, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(13, '6', 275, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(14, '6', 276, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(15, '6', 277, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(16, '6', 278, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(17, '6', 279, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(18, '6', 280, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(19, '6', 281, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(20, '6', 282, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(21, '6', 268, 0, '(Employer) is pleased to invite you to apply as a (Job Vacancy). We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -(Employer)'),
(33, '3', 5, 1, 'Cartoon Inc. is pleased to invite you to apply as a 2D Animator. We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -Cartoon Inc.  '),
(34, '3', 6, 0, 'Animators Inc. is pleased to invite you to apply as 3D Animator. We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -Animators Inc.  '),
(35, '3', 7, 0, 'Sketch Philippines is pleased to invite you to apply as a Graphic Designer. We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -Sketch Philippines'),
(36, '3', 8, 0, 'Cartoon Inc. is pleased to invite you to apply as a 3D Game Art Developer. We trust that your knowledge, skills and experience will be among our most valuable assets. Should you accept this job offer, please check the requirements and apply.  -Cartoon Inc.  ');

-- --------------------------------------------------------

--
-- Table structure for table `job_location`
--

CREATE TABLE IF NOT EXISTS `job_location` (
  `locationid` int(11) NOT NULL AUTO_INCREMENT,
  `jono` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  PRIMARY KEY (`locationid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_status`
--

CREATE TABLE IF NOT EXISTS `job_status` (
  `tagid` int(11) NOT NULL,
  `tagname` varchar(45) NOT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancies`
--

CREATE TABLE IF NOT EXISTS `job_vacancies` (
  `jobno` int(11) NOT NULL AUTO_INCREMENT,
  `jobtitle` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `companyID` int(11) NOT NULL,
  `vacanciesleft` int(11) NOT NULL,
  `dateposted` date NOT NULL,
  `expirationdate` date NOT NULL COMMENT '	',
  `status` int(11) NOT NULL,
  `sectorid` int(11) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `agestart` int(11) NOT NULL,
  `ageend` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `lastedited` date NOT NULL,
  PRIMARY KEY (`jobno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `job_vacancies`
--

INSERT INTO `job_vacancies` (`jobno`, `jobtitle`, `description`, `companyID`, `vacanciesleft`, `dateposted`, `expirationdate`, `status`, `sectorid`, `sex`, `agestart`, `ageend`, `region`, `city`, `lastedited`) VALUES
(2, 'Welder', 'Knows grinding and buffering', 30, 5, '2013-10-10', '2013-11-24', 1, 2, 'Male', 20, 35, 1, 1, '0000-00-00'),
(3, 'Forklift Operator', 'With at least 5 years relevant work experienc', 28, 5, '2013-11-10', '2013-11-24', 1, 3, 'Male', 22, 40, 1, 1, '0000-00-00'),
(4, 'Public Area Attendant', 'Graduate of B.S. HRM / TESDA with pleasing pe', 32, 3, '2013-11-10', '2013-11-24', 1, 2, 'Both', 22, 30, 1, 1, '0000-00-00'),
(5, '2D Animator', 'Can produce 2D Key drawings at least', 15, 5, '2013-11-13', '2013-11-27', 1, 8, 'Both', 18, 35, 1, 1, '0000-00-00'),
(6, '3D Animator', 'Creates models and images in 3D', 17, 5, '2013-11-13', '2013-11-27', 1, 8, 'Both', 18, 35, 1, 1, '0000-00-00'),
(7, 'Graphic Designer', 'Creates vector graphics at least', 20, 5, '2013-11-13', '2013-11-27', 1, 8, 'Both', 18, 35, 1, 1, '0000-00-00'),
(8, '3D Game Art Developer', 'Creates storyboards', 15, 5, '2013-11-13', '2013-11-27', 1, 8, 'Both', 18, 35, 1, 1, '0000-00-00'),
(14, 'Head front desk', 'Experience hotel front desk for at least 2 ye', 32, 5, '2013-11-13', '2013-11-27', 1, 13, 'Both', 18, 30, 1, 1, '2013-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `jobno`
--

CREATE TABLE IF NOT EXISTS `jobno` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `ncvid` int(11) NOT NULL,
  PRIMARY KEY (`appid`,`ncvid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `jobno`
--

INSERT INTO `jobno` (`appid`, `ncvid`) VALUES
(1, 1),
(2, 2),
(3, 268),
(4, 4),
(5, 5),
(6, 268),
(7, 268),
(8, 270),
(9, 271),
(10, 272),
(11, 273),
(12, 274),
(13, 275),
(14, 276),
(15, 277),
(16, 278),
(17, 279),
(18, 280),
(19, 281),
(20, 274),
(21, 273),
(22, 273),
(23, 284),
(24, 274),
(25, 284),
(26, 284),
(27, 285),
(28, 285),
(29, 287),
(30, 288),
(31, 285);

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE IF NOT EXISTS `league` (
  `leagueno` int(11) NOT NULL AUTO_INCREMENT,
  `leaguename` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `leagueindustry` int(11) NOT NULL,
  `leaguedescription` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `datecreated` date NOT NULL,
  `leaguepic` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'jobfair.jpeg',
  `createdby` int(11) NOT NULL,
  PRIMARY KEY (`leagueno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`leagueno`, `leaguename`, `leagueindustry`, `leaguedescription`, `datecreated`, `leaguepic`, `createdby`) VALUES
(11, 'Laguna Planters Association', 17, 'Planters in Laguna', '2013-06-01', 'L1.jpg', 401),
(12, 'Fishers Philippines', 17, 'All types of fishers in the Philippines', '2013-06-01', 'L2.jpg', 401),
(13, 'Aircon Fixers ', 8, 'Aircon fixers located in Marikina', '2013-06-01', 'L3.png', 401),
(14, 'Toyota Manpower', 18, 'Employees of Toyota Philippines', '2013-06-01', 'L4.jpg', 401),
(15, 'Drivers Association', 18, 'Drivers association in Makati', '2013-06-01', 'L5.png', 401),
(16, 'Pyrotechnics', 12, 'Pyrotechnics experts', '2013-06-01', 'L6.jpg', 15),
(17, 'HP People', 8, 'Uniting People', '2013-06-01', 'L7.jpg', 15),
(18, 'Accenture Employees', 8, 'Uniting People', '2013-06-01', 'L8.jpg', 401),
(19, 'Shirt Retailers in Binondo', 16, 'Uniting People', '2013-06-01', 'L1.jpg', 401),
(20, 'Flight Stewardess', 13, 'Uniting People', '2013-06-01', 'L2.jpg', 401),
(21, 'Drivers in Cebu', 18, 'Uniting People', '2013-06-01', 'L3.png', 401),
(22, 'Nurses in Manila', 6, 'Uniting People', '2013-06-01', 'L4.jpg', 401),
(23, 'Practitioners in Cebu', 6, 'Uniting People', '2013-06-01', 'L5.png', 401),
(24, 'Shorts Retailers', 16, 'Uniting People', '2013-06-01', 'L6.jpg', 401),
(25, 'Jacket Wholesalers United', 16, 'Uniting People', '2013-06-01', 'L7.jpg', 401),
(26, 'Waiters Worldwide', 13, 'Uniting People', '2013-06-01', 'L8.jpg', 401);

-- --------------------------------------------------------

--
-- Table structure for table `league_discussions`
--

CREATE TABLE IF NOT EXISTS `league_discussions` (
  `discussionno` int(11) NOT NULL AUTO_INCREMENT,
  `repliedno` int(11) NOT NULL,
  `discussion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `datereplied` datetime NOT NULL,
  `postedby` int(11) NOT NULL,
  `leagueno` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`discussionno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=93 ;

--
-- Dumping data for table `league_discussions`
--

INSERT INTO `league_discussions` (`discussionno`, `repliedno`, `discussion`, `datereplied`, `postedby`, `leagueno`, `likes`) VALUES
(12, 0, 'Best course in TESDA?', '2013-08-07 00:00:00', 15, 13, 2),
(13, 12, 'What''s the best company in Manila?', '2013-08-07 00:00:00', 15, 12, 1),
(14, 18, 'Any openings abroad?', '2013-08-07 00:00:00', 6, 13, 3),
(15, 18, 'What''s the best company in Sta. Rosa?', '2013-08-07 00:00:00', 0, 14, 4),
(16, 18, 'What''s the best company in Ortigas?', '2013-08-07 00:00:00', 16, 15, 1),
(17, 18, 'Any openings in BGC?', '2013-08-07 00:00:00', 16, 16, 2),
(18, 0, 'What''s the best company in Las Pinas?', '2013-08-07 00:00:00', 15, 18, 2),
(19, 18, 'Any openings in Makati?', '2013-08-07 00:00:00', 14, 18, 3),
(20, 18, 'Any openings in Malate, Manila?', '2013-08-07 00:00:00', 14, 18, 4),
(21, 18, 'What''s the best company in Pasay?', '2013-08-07 00:00:00', 1, 18, 2),
(22, 18, 'Wha''s the worst company to work for this year', '2013-08-07 00:00:00', 1, 12, 0),
(23, 18, 'What''s the best company in Marikina?', '2013-08-07 00:00:00', 26, 15, 2),
(24, 18, 'What''s the prediction for the BPO Companies n', '2013-08-07 00:00:00', 27, 15, 1),
(25, 18, 'What''s the best company in Makati?', '2013-08-07 00:00:00', 28, 16, 1),
(26, 18, 'Wha''s the best company to work for this year?', '2013-08-07 00:00:00', 29, 13, 0),
(27, 18, 'Horticulture!', '2013-07-07 00:00:00', 1, 13, 10),
(34, 18, 'Agriculture! The best.', '2013-08-07 00:00:00', 1, 13, 2),
(35, 12, 'Think of the trends these days. :)', '2013-08-07 00:00:00', 14, 13, 3),
(36, 12, 'Yes, that''s right. ', '2013-08-07 00:00:00', 222, 13, 5),
(37, 18, 'I dont really know', '2013-08-05 08:48:55', 1, 11, 4),
(38, 18, 'Hmm I think there is one', '2013-08-05 08:49:06', 1, 11, 4),
(39, 18, 'How many openings are there?', '2013-08-19 12:31:58', 1, 13, 0),
(40, 18, 'How many openings are there?', '2013-08-19 12:31:58', 1, 18, 3),
(41, 18, 'I dont really know', '2013-08-19 12:31:58', 2, 18, 3),
(42, 18, 'How many openings are there?', '2013-08-19 12:31:58', 14, 18, 3),
(43, 18, 'I dont really know', '2013-10-19 12:31:58', 1, 18, 3),
(44, 18, 'How many openings are there?', '2013-10-19 12:31:58', 14, 18, 3),
(45, 18, 'I dont really know', '2013-10-19 12:31:58', 14, 18, 3),
(46, 18, 'How many openings are there?', '2013-10-19 12:31:58', 1, 18, 3),
(47, 18, 'I dont really know', '2013-10-19 12:31:58', 14, 18, 3),
(48, 18, 'How many openings are there?', '2013-11-19 12:31:58', 1, 18, 33),
(49, 18, 'I dont really know', '2013-11-19 12:31:58', 14, 18, 3),
(50, 18, 'How many openings are there?', '2013-11-19 12:31:58', 1, 18, 3),
(51, 18, 'I dont really know', '2013-11-19 12:31:58', 14, 18, 3),
(52, 18, 'I dont really know', '2013-11-19 12:31:58', 1, 18, 3),
(53, 18, 'I dont really know', '2013-11-19 12:31:58', 14, 18, 3),
(54, 18, 'How many openings are there?', '2013-11-22 12:31:58', 1, 18, 3),
(55, 18, 'I dont really know', '2013-11-22 12:31:58', 14, 18, 3),
(56, 18, 'I dont really know', '2013-11-22 12:31:58', 1, 18, 33),
(57, 18, 'I dont really know', '2013-11-22 12:31:58', 14, 18, 3),
(58, 18, 'How many openings are there?', '2013-11-22 12:31:58', 1, 18, 3),
(59, 18, 'I dont really know', '2013-11-22 12:31:58', 14, 18, 3),
(60, 18, 'How many openings are there?', '2013-11-22 12:31:58', 1, 18, 3),
(61, 18, 'I dont really know', '2013-11-22 12:31:58', 1, 18, 3),
(62, 18, 'How many openings are there?', '2013-11-22 12:31:58', 1, 18, 4),
(63, 18, 'I dont really know', '2013-11-25 12:31:58', 14, 18, 4),
(64, 18, 'How many openings are there?', '2013-11-25 12:31:58', 14, 18, 4),
(65, 18, 'I dont really know', '2013-11-25 12:31:58', 14, 18, 4),
(66, 18, 'How many openings are there?', '2013-11-25 12:31:58', 1, 18, 4),
(67, 18, 'I dont really know', '2013-11-25 12:31:58', 1, 18, 4),
(68, 18, 'How many openings are there?', '2013-11-25 12:31:58', 1, 18, 4),
(69, 18, 'I dont really know', '2013-11-25 12:31:58', 1, 18, 4),
(70, 18, 'How many openings are there?', '2013-11-25 12:31:58', 14, 18, 4),
(71, 18, 'I dont really know', '2013-11-25 12:31:58', 14, 18, 2),
(72, 18, 'How many openings are there?', '2013-11-25 12:31:58', 14, 18, 2),
(73, 18, 'I dont really know', '2013-11-25 12:31:58', 1, 18, 2),
(74, 18, 'How many openings are there?', '2013-12-05 12:31:58', 1, 18, 2),
(75, 18, 'I dont really know', '2013-12-05 12:31:58', 1, 18, 2),
(76, 18, 'How many openings are there?', '2013-12-05 12:31:58', 14, 18, 2),
(77, 18, 'I dont really know', '2013-12-05 12:31:58', 1, 18, 1),
(78, 18, 'How many openings are there?', '2013-12-05 12:31:58', 1, 18, 1),
(79, 18, 'I dont really know', '2013-12-05 12:31:58', 1, 18, 1),
(80, 18, 'How many openings are there?', '2013-12-05 12:31:58', 14, 18, 1),
(81, 18, 'I dont really know', '2013-12-05 12:31:58', 1, 18, 1),
(82, 18, 'How many openings are there?', '2013-12-05 12:31:58', 222, 18, 1),
(83, 18, 'blabla', '2013-12-05 12:31:58', 15, 18, 1),
(84, 18, 'blabla', '2013-12-05 12:31:58', 15, 18, 2),
(85, 18, 'blabla', '2013-12-05 12:31:58', 15, 18, 2),
(86, 18, 'blabla', '2013-12-05 12:31:58', 14, 18, 2),
(87, 18, 'blabla', '2013-12-05 12:31:58', 14, 18, 2),
(88, 87, 'This is compyusing', '2013-11-11 19:12:31', 3, 18, 0),
(89, 18, 'COmpyusing', '2013-11-11 19:15:52', 3, 18, 0),
(90, 0, 'What''s the big idea?', '2013-11-11 19:24:05', 3, 18, 0),
(91, 0, 'Anyone knows how I can fix my aircon?', '2013-11-13 16:31:20', 15, 13, 0),
(92, 0, 'There''s still an error ya know.', '2013-11-16 23:06:16', 15, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `league_invitation`
--

CREATE TABLE IF NOT EXISTS `league_invitation` (
  `invno` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `leagueno` int(11) NOT NULL,
  PRIMARY KEY (`invno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `league_invitation`
--

INSERT INTO `league_invitation` (`invno`, `userid`, `leagueno`) VALUES
(1, 247, 13),
(2, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `league_members`
--

CREATE TABLE IF NOT EXISTS `league_members` (
  `leaguememberno` int(11) NOT NULL AUTO_INCREMENT,
  `leagueno` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`leaguememberno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `league_members`
--

INSERT INTO `league_members` (`leaguememberno`, `leagueno`, `userid`) VALUES
(10, 11, 14),
(11, 12, 14),
(12, 10, 14),
(13, 11, 15),
(14, 13, 15),
(15, 13, 14),
(16, 13, 7),
(17, 18, 14),
(18, 19, 9),
(19, 20, 10),
(20, 21, 11),
(21, 22, 12),
(22, 23, 13),
(23, 24, 14),
(24, 25, 6),
(25, 26, 16),
(26, 27, 17),
(27, 28, 18),
(28, 29, 6),
(29, 30, 6),
(30, 18, 1),
(31, 18, 12),
(32, 18, 11),
(33, 13, 1),
(34, 21, 14);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notifid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `notification` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `seen` int(11) NOT NULL,
  `jobno` int(11) NOT NULL,
  PRIMARY KEY (`notifid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notifid`, `userid`, `notification`, `date`, `seen`, `jobno`) VALUES
(3, 1, 'You have received 1 application', '2013-07-06 00:00:00', 1, 1),
(4, 2, 'You have received 1 application', '2013-07-06 00:00:00', 1, 1),
(5, 3, 'You have received 1 application', '2013-07-06 00:00:00', 1, 2),
(6, 6, 'You have received 1 job vacancy invitation.', '2013-07-06 00:00:00', 1, 2),
(7, 7, 'You have received 1 job vacancy invitation.', '2013-07-06 00:00:00', 1, 3),
(8, 1, 'You have received 1 application', '2013-07-06 00:00:00', 1, 2),
(9, 2, 'You have received 1 application', '2013-07-06 00:00:00', 1, 2),
(10, 3, 'You have received 1 application', '2013-07-06 00:00:00', 1, 3),
(11, 4, 'You have received 1 application', '2013-07-06 00:00:00', 1, 2),
(12, 5, 'You have received 1 application', '2013-07-06 00:00:00', 1, 4),
(13, 17, 'You have received 1 application', '2013-07-06 00:00:00', 1, 5),
(14, 18, 'You have received 1 application', '2013-07-06 00:00:00', 1, 2),
(15, 19, 'You have received 1 application', '2013-07-06 00:00:00', 1, 3),
(16, 20, 'You have received 1 application', '2013-07-06 00:00:00', 1, 2),
(17, 12, 'You have received 1 job vacancy invitation.', '2013-07-06 00:00:00', 1, 2),
(18, 13, 'You have received 1 job vacancy invitation.', '2013-07-06 00:00:00', 1, 3),
(19, 14, 'You have received 1 job vacancy invitation.', '2013-07-06 00:00:00', 1, 1),
(20, 15, 'You have received 1 job vacancy invitation.', '2013-07-06 00:00:00', 1, 2),
(21, 16, 'You have received 1 job vacancy invitation.', '2013-07-06 00:00:00', 1, 3),
(22, 1, 'You have one new application from 6', '2013-08-27 14:20:58', 0, 276),
(23, 1, 'You have one new application from 6', '2013-08-27 14:21:20', 0, 284),
(24, 6, 'You''re application has passed the pre-screeni', '2013-08-27 14:52:10', 1, 284),
(25, 6, 'You now have an''.EXAM.'' schedule. See more de', '2013-08-27 15:01:16', 1, 284),
(26, 6, 'You now have an''.INTERVIEW.'' schedule. See mo', '2013-08-27 15:03:30', 1, 284),
(27, 6, 'You now have an''.SECOND INTERVIEW.'' schedule.', '2013-08-27 15:05:41', 1, 284),
(28, 6, 'You''re application has passed the pre-screeni', '2013-08-27 15:08:55', 1, 284),
(29, 6, 'You''re application has passed the pre-screeni', '2013-08-27 15:12:46', 1, 284),
(30, 6, 'You now have an''.SECOND INTERVIEW.'' schedule.', '2013-08-27 15:19:40', 1, 284),
(31, 6, 'You''re application has passed the pre-screeni', '2013-08-27 15:21:31', 1, 284),
(32, 6, 'You''re application has passed the pre-screeni', '2013-08-27 15:30:44', 1, 284),
(33, 6, 'You''re application has passed the pre-screeni', '2013-08-27 15:31:54', 1, 284),
(34, 6, 'You''re application has passed the pre-screeni', '2013-08-27 15:32:06', 1, 284),
(35, 6, 'You''re application has passed the pre-screeni', '2013-08-27 15:33:32', 1, 284),
(36, 1, 'You have one new application from 6', '2013-08-29 12:05:51', 0, 284),
(37, 1, 'You have one new application from 6', '2013-08-29 12:18:35', 0, 276),
(38, 6, 'You''re application has passed the pre-screeni', '2013-08-29 12:20:31', 1, 284),
(39, 6, 'You now have an''.EXAM.'' schedule. See more de', '2013-08-29 12:28:30', 1, 284),
(40, 6, 'You now have an''.INTERVIEW.'' schedule. See mo', '2013-08-29 12:38:57', 1, 284),
(41, 6, 'You now have an''.SECOND INTERVIEW.'' schedule.', '2013-08-29 12:45:42', 1, 284),
(42, 6, 'You''re application has passed the pre-screeni', '2013-08-29 13:02:17', 1, 284),
(43, 6, 'You''re application has passed the pre-screeni', '2013-08-29 13:04:58', 1, 284),
(44, 6, 'You''re application has passed the pre-screeni', '2013-08-29 13:06:05', 1, 284),
(45, 6, 'You''re application has passed the pre-screeni', '2013-08-29 13:07:33', 1, 284),
(46, 6, 'You''re application has passed the pre-screeni', '2013-08-29 13:09:59', 1, 284),
(47, 6, 'You''re application has passed the pre-screeni', '2013-08-29 13:12:23', 1, 284),
(48, 6, 'You''re application has passed the pre-screeni', '2013-08-29 13:16:28', 1, 284),
(49, 6, 'You''re application has passed the pre-screeni', '2013-09-03 11:05:06', 1, 284),
(50, 1, 'You have one new application from 6', '2013-09-03 12:51:48', 0, 276),
(51, 6, 'You now have an''.EXAM.'' schedule. See more de', '2013-09-03 13:39:55', 1, 284),
(52, 6, 'You now have an''.INTERVIEW.'' schedule. See mo', '2013-09-03 13:45:53', 1, 284),
(53, 6, 'You now have an''.EXAM.'' schedule. See more de', '2013-09-03 13:47:44', 1, 284),
(54, 6, 'You now have an''.EXAM.'' schedule. See more de', '2013-09-03 13:55:31', 1, 284),
(55, 6, 'You''re application has passed the pre-screeni', '2013-09-04 12:38:33', 1, 284),
(56, 6, 'You''re application has passed the pre-screeni', '2013-09-04 12:42:49', 1, 284),
(57, 6, 'You''re application has passed the pre-screeni', '2013-09-04 12:53:54', 1, 284),
(58, 6, 'You''re application has passed the pre-screeni', '2013-09-04 12:55:19', 1, 284),
(59, 6, 'You''re application has passed the pre-screeni', '2013-09-04 13:01:37', 1, 284),
(60, 3, 'You''re application has passed the pre-screeni', '2013-09-04 13:02:47', 1, 284),
(61, 3, 'You''re application has passed the pre-screeni', '2013-09-04 13:03:25', 1, 284),
(62, 3, 'Exam', '2013-11-08 00:00:00', 1, 2),
(63, 89, 'We at Meralco are pleased to announce that yo', '2013-11-09 00:00:00', 0, 2),
(64, 6, 'Invitation for an Exam as Result of application for Agribusiness.', '2013-11-11 00:00:00', 0, 2),
(65, 95, 'Invitation for an Exam as Result of application for Head front desk.', '2013-11-13 00:00:00', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `notifs`
--

CREATE TABLE IF NOT EXISTS `notifs` (
  `notifid` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(45) NOT NULL,
  `isread` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`notifid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notifs`
--

INSERT INTO `notifs` (`notifid`, `msg`, `isread`) VALUES
(1, 'Hello World', 1),
(2, 'hello', 1),
(3, 'voila', 1),
(4, 'voilaaa', 1),
(5, '124324', 1),
(6, 'sdfsdf', 1),
(7, 'dsfdsf', 1),
(8, 'sdfdsf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reference_city`
--

CREATE TABLE IF NOT EXISTS `reference_city` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `regionid` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `reference_city`
--

INSERT INTO `reference_city` (`cityid`, `regionid`, `city`) VALUES
(1, 1, 'Makati'),
(2, 2, 'Abra'),
(3, 1, 'Manila'),
(4, 1, 'Taguig'),
(5, 1, 'Pasig'),
(23, 2, 'Apayao'),
(24, 3, 'Ilocos Norte'),
(25, 2, 'Baguio'),
(26, 1, 'Caloocan'),
(27, 1, 'Las Pinas'),
(28, 1, 'Mandaluyong'),
(29, 1, 'Marikina'),
(30, 1, 'Muntinlupa'),
(31, 2, 'Benguet'),
(32, 2, 'Ifugao'),
(33, 3, 'Ilocos Sur'),
(34, 3, 'La Union'),
(35, 3, 'Pangasinan'),
(36, 4, 'Batanes'),
(37, 4, 'Cagayan'),
(38, 4, 'Isabela'),
(39, 4, 'Nueva Vizcaya'),
(40, 4, 'Quirino'),
(41, 5, 'Angeles'),
(42, 5, 'Aurora'),
(43, 5, 'Olongapo'),
(44, 5, 'Tarlac'),
(45, 5, 'Zambales');

-- --------------------------------------------------------

--
-- Table structure for table `reference_region`
--

CREATE TABLE IF NOT EXISTS `reference_region` (
  `regionid` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(45) NOT NULL,
  PRIMARY KEY (`regionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `reference_region`
--

INSERT INTO `reference_region` (`regionid`, `region`) VALUES
(1, 'NCR'),
(2, 'Region I'),
(3, 'Region II'),
(4, 'Region III'),
(5, 'Region IV'),
(6, 'Region V'),
(7, 'Region VI'),
(8, 'Region VII'),
(9, 'Region VIII'),
(10, 'Region IX');

-- --------------------------------------------------------

--
-- Table structure for table `survey_details`
--

CREATE TABLE IF NOT EXISTS `survey_details` (
  `surveyno` int(11) NOT NULL,
  `jobno` int(11) NOT NULL,
  `hired` int(11) NOT NULL,
  PRIMARY KEY (`jobno`,`surveyno`),
  KEY `surveyno_idx` (`surveyno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_details`
--

INSERT INTO `survey_details` (`surveyno`, `jobno`, `hired`) VALUES
(1, 5, 0),
(2, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE IF NOT EXISTS `work_experience` (
  `workid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `position` varchar(100) NOT NULL,
  `startyear` year(4) NOT NULL,
  `endyear` year(4) DEFAULT NULL,
  `present` int(11) DEFAULT NULL,
  PRIMARY KEY (`workid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`workid`, `userid`, `companyname`, `position`, `startyear`, `endyear`, `present`) VALUES
(1, 9, 'Nestle Philippines', 'Staff', 2000, 2000, 0),
(2, 6, 'Globe', 'Staff', 2000, 2000, 0),
(3, 6, 'Smart', 'Staff', 2000, 2000, 0),
(4, 9, 'TM', 'Private Driver', 2000, 2000, 0),
(5, 10, 'San Miguel Corp.', 'Private Driver', 2000, 2000, 0),
(6, 12, 'HP', 'Staff', 2000, 2000, 0),
(7, 6, 'Accenture', 'Staff', 2000, 2000, 1),
(8, 14, 'Meralco', 'Private Driver', 2000, 2000, 0),
(9, 15, 'Meralco', 'Staff', 2000, 2000, 0),
(10, 16, 'Petron', 'Machine Operator', 2000, 2000, 0),
(11, 21, 'Shell', 'Machine Operator', 2000, 2000, 0),
(12, 22, 'Caltex', 'Staff', 2000, 2000, 0),
(13, 23, 'JAC Liner', 'Machine Operator', 2000, 2000, 0),
(14, 24, 'BBL Bus', 'Machine Operator', 2000, 2000, 0),
(15, 25, 'CHER Line', 'Private Driver', 2000, 2000, 0),
(16, 26, 'Jollibee', 'Staff', 2000, 2000, 0),
(17, 27, 'Mang Inasal', 'Machine Operator', 2000, 2000, 1),
(18, 28, 'Max''s', 'Staff', 2000, 2000, 1),
(19, 29, 'Enderun', 'Machine Operator', 2000, 2000, 1),
(20, 30, 'DLSU Manila', 'Staff', 2000, 2000, 1),
(21, 143, 'High School Graduate', 'DLSU haha', 2001, 2001, 0),
(22, 143, 'High School Graduate', 'DLSU haha', 2001, 2001, 0),
(23, 143, 'hello', 'hi', 2013, 2013, 0),
(24, 11, 'hello', 'hi', 2001, 2001, 0),
(25, 11, 'meralco', 'hr', 2001, 2004, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `survey_details`
--
ALTER TABLE `survey_details`
  ADD CONSTRAINT `surveyno` FOREIGN KEY (`surveyno`) REFERENCES `employer_survey` (`surveyno`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Database: `tesda_centraldb`
--
CREATE DATABASE IF NOT EXISTS `tesda_centraldb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tesda_centraldb`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `addressid` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) NOT NULL,
  `streetno` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `cityprov` varchar(100) NOT NULL,
  `zipcode` varchar(4) NOT NULL,
  `regionid` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`addressid`),
  KEY `addressfk1` (`appid`),
  KEY `addressfk2` (`regionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressid`, `appid`, `streetno`, `brgy`, `district`, `cityprov`, `zipcode`, `regionid`, `time_stamp`) VALUES
(2, 25, '2517 Bato St.', '169', '2', 'Manila', '1212', 1, '2013-06-29 04:28:32'),
(3, 43, '2455 Bato St.', '152', '2', 'Manila', '1034', 1, '2013-06-29 04:57:52'),
(31, 3, '178 Block 14 Lot 23', 'Barangay Nicolasa Virata', 'General Mariano Alvarez', 'Cavite', '4117', 6, '2013-07-19 19:10:35'),
(32, 10, '2457 Tirso Cruz St.', '168', '2', 'Manila', '1013', 1, '2013-07-19 19:43:20'),
(35, 19, 'Macopa St.', 'Sta. Lucia', 'New Era', 'Manila', '1107', 1, '2013-07-29 03:12:12'),
(36, 31, '2513', 'Macaraig', 'Los Banos', 'Laguna', '4030', 6, '2013-07-29 05:16:06'),
(37, 20, 'Sct Rallos St. ', 'Guinto', '5', 'Quezon City', '1107', 1, '2013-08-02 03:13:58'),
(38, 44, '2513', 'Macaraig', 'Los Banos', 'Laguna', '4030', 6, '2013-08-02 08:36:31'),
(39, 8, '12', 'panem', '12', '0', '1212', 0, '2013-09-22 09:30:32'),
(40, 9, '12', 'panem', '12', '24', '1212', 3, '2013-09-22 09:32:19'),
(41, 126, '22', 'panem', '12', '36', '0', 4, '2013-09-22 11:11:04'),
(42, 128, '22', 'panem', '12', '24', '0', 3, '2013-09-22 11:15:43'),
(43, 129, '22', 'panem', '12', '2', '0', 2, '2013-09-22 11:16:37'),
(44, 130, '22', 'panem', '12', '36', '0', 4, '2013-09-22 11:18:16'),
(45, 131, '221', 'panem', '12', '1', '9021', 1, '2013-09-22 11:20:13'),
(46, 132, '', '', '', '#', '', 0, '2013-09-22 12:19:27'),
(47, 133, '', '', '', '#', '', 0, '2013-09-22 12:25:19'),
(48, 134, '', '', '', '#', '', 0, '2013-09-22 12:30:57'),
(49, 135, '', '', '', '#', '', 0, '2013-09-22 12:34:31'),
(50, 136, '', '', '', '#', '', 0, '2013-09-22 12:36:51'),
(51, 137, '', '', '', '#', '', 0, '2013-09-22 12:39:00'),
(52, 138, '', '', '', '#', '', 0, '2013-09-22 12:42:28'),
(53, 139, '', '', '', '#', '', 0, '2013-09-22 12:47:09'),
(54, 140, '', '', '', '#', '', 0, '2013-09-22 12:59:07'),
(55, 141, '', '', '', '#', '', 0, '2013-09-22 13:01:07'),
(56, 142, '', '', '', '#', '', 0, '2013-09-22 13:02:24'),
(57, 143, '', '', '', '#', '', 0, '2013-09-22 13:07:26'),
(58, 144, '', '', '', '#', '', 0, '2013-09-22 13:08:18'),
(59, 145, '0', '0', '0', '0', '0', 0, '2013-09-22 13:11:11'),
(60, 146, '', '', '', '#', '', 0, '2013-09-23 12:58:03'),
(61, 147, '', '', '', '#', '', 0, '2013-09-23 13:00:02'),
(62, 148, '', '', '', '#', '', 0, '2013-09-23 13:03:31'),
(63, 149, '', '', '', '#', '', 0, '2013-09-23 13:05:11'),
(64, 150, '', '', '', '#', '', 0, '2013-09-23 13:06:50'),
(65, 151, '', '', '', '#', '', 0, '2013-09-23 13:07:25'),
(66, 152, '', '', '', '#', '', 0, '2013-09-23 13:09:07'),
(67, 153, '0', '0', '0', '0', '0', 0, '2013-09-23 13:09:29'),
(68, 154, '', '', '', '#', '', 0, '2013-09-23 13:14:04'),
(69, 155, '0', '0', '0', '0', '0', 0, '2013-09-23 13:14:52'),
(70, 156, '', '', '', '#', '', 0, '2013-09-23 13:15:33'),
(71, 157, '', '', '', '#', '', 0, '2013-09-23 13:16:52'),
(72, 158, '', '', '', '#', '', 0, '2013-09-23 14:00:48'),
(73, 159, '', '', '', '#', '', 0, '2013-09-23 14:02:30'),
(74, 160, '', '', '', '#', '', 0, '2013-09-23 14:19:00'),
(75, 161, '', '', '', '#', '', 0, '2013-09-23 14:19:34'),
(76, 162, '', '', '', '#', '', 0, '2013-09-23 14:22:03'),
(77, 163, '', '', '', '#', '', 0, '2013-09-23 14:30:23'),
(78, 164, '', '', '', '#', '', 0, '2013-09-23 14:35:26'),
(79, 165, '', '', '', '#', '', 0, '2013-09-23 14:36:34'),
(80, 166, '', '', '', '#', '', 0, '2013-09-23 14:37:51'),
(81, 167, '', '', '', '#', '', 0, '2013-09-23 14:39:16'),
(82, 168, '', '', '', '#', '', 0, '2013-09-23 14:39:50'),
(83, 169, '0', '0', '0', '0', '0', 0, '2013-09-23 14:48:20'),
(84, 170, '', '', '', '#', '', 0, '2013-09-23 14:48:41'),
(85, 171, '0', '0', '0', '0', '0', 0, '2013-09-23 14:49:29'),
(86, 172, '0', '0', '0', '0', '0', 0, '2013-09-23 14:49:31'),
(87, 173, '', '', '', '#', '', 0, '2013-09-23 14:49:58'),
(88, 174, '', '', '', '#', '', 0, '2013-09-23 14:57:37'),
(89, 175, '', '', '', '#', '', 0, '2013-09-23 14:58:10'),
(90, 176, '', '', '', '#', '', 0, '2013-09-23 14:59:06'),
(91, 177, '', '', '', '#', '', 0, '2013-09-23 14:59:48'),
(92, 178, '', '', '', '#', '', 0, '2013-09-23 15:00:33'),
(93, 179, '', '', '', '#', '', 0, '2013-09-23 15:02:15'),
(94, 180, '0', '0', '0', '0', '0', 0, '2013-09-23 15:07:53'),
(95, 181, '', '', '', '#', '', 0, '2013-09-23 15:08:22'),
(96, 182, '', '', '', '#', '', 0, '2013-09-23 15:14:56'),
(97, 183, '', '', '', '#', '', 0, '2013-09-23 15:40:48'),
(98, 184, '', '', '', '#', '', 0, '2013-09-23 15:41:56'),
(99, 185, '', '', '', '#', '', 0, '2013-09-23 15:43:04'),
(100, 191, '', '', '', '#', '', 0, '2013-09-23 16:07:47'),
(101, 192, '', '', '', '#', '', 0, '2013-09-23 16:09:49'),
(102, 193, '', '', '', '#', '', 0, '2013-09-23 16:10:33'),
(103, 194, '0', '0', '0', '0', '0', 0, '2013-09-23 16:11:49'),
(104, 195, '', '', '', '#', '', 0, '2013-09-23 16:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `admins_certification`
--

CREATE TABLE IF NOT EXISTS `admins_certification` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) NOT NULL,
  PRIMARY KEY (`adminid`),
  KEY `fk_admincUSERID` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admins_certification`
--

INSERT INTO `admins_certification` (`adminid`, `userid`, `firstname`, `middlename`, `lastname`) VALUES
(1, 14, 'Ruben', 'Marti', 'Loza'),
(2, 17, 'sample', 'sample', 'sample'),
(3, 44, 'fdg', '', ''),
(4, 222, 'Admin', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL DEFAULT 'App',
  `middlename` varchar(45) NOT NULL DEFAULT 'A',
  `lastname` varchar(45) NOT NULL DEFAULT 'App',
  `ext` varchar(45) DEFAULT NULL,
  `civilstatus` varchar(45) DEFAULT NULL,
  `birthday` date NOT NULL DEFAULT '1994-05-05',
  `ismale` tinyint(1) NOT NULL DEFAULT '1',
  `telno` varchar(45) NOT NULL DEFAULT '2539095',
  `cellno` varchar(45) NOT NULL DEFAULT '09063251678',
  `profile_pic` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `loggedin` int(11) NOT NULL,
  PRIMARY KEY (`appid`,`userid`),
  KEY `applicant_detailsfk1` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=258 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`appid`, `userid`, `firstname`, `middlename`, `lastname`, `ext`, `civilstatus`, `birthday`, `ismale`, `telno`, `cellno`, `profile_pic`, `loggedin`) VALUES
(3, 14, 'Gina', 'Marti', 'Juan', NULL, 'Single', '1990-11-11', 0, '8692524', '09063251678', 'gu12.jpg', 0),
(247, 35, 'Nikki', 'Yaw', 'Luzuriaga', NULL, 'Single', '1990-11-11', 0, '7817281', '09584758473', 'gu12.jpg', 0),
(248, 44, 'Genevieve', 'Uy', 'Aricheta', NULL, 'Single', '1990-11-11', 0, '1212198', '09325654843', 'gu11.jpg', 0),
(249, 171, 'Alexa', 'Badana', 'Capina', NULL, 'Single', '1990-11-11', 0, '7382794', '09372837232', 'gu10.jpg', 0),
(250, 172, 'Andy', 'Uy', 'Lim', NULL, 'Single', '1990-11-11', 1, '2873293', '09273827332', 'bu1.jpg', 0),
(251, 173, 'Honorado', 'Go', 'Lim', NULL, 'Single', '1988-11-11', 1, '7872372', '09236236211', 'bu2.jpg', 0),
(252, 174, 'Jeven', 'Ho', 'Uy', NULL, 'Single', '1989-11-11', 1, '2372837', '09673267326', 'bu3.jpg', 0),
(253, 175, 'Katrina', 'Yu', 'Jueves', NULL, 'Single', '1980-11-11', 0, '1212127', '09423263213', 'gu9.jpg', 0),
(254, 176, 'Mauricio', 'Ho', 'Laguador', NULL, 'Single', '1987-11-11', 1, '8729389', '09327672631', 'bu4.jpg', 0),
(255, 177, 'Troy', 'Bolton', 'Hudgens', NULL, 'Sigle', '1990-11-11', 1, '8493849', '09238273821', 'bu5.jpg', 0),
(256, 178, 'Geenie', 'Go', 'Melendres', NULL, 'Single', '1992-11-11', 0, '7827382', '09372632132', 'gu8.jpg', 0),
(257, 179, 'Carlo', 'Uy', 'Lim', NULL, 'Single', '1970-11-11', 1, '2372832', '09236726312', 'bu6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `applicants_certificates`
--

CREATE TABLE IF NOT EXISTS `applicants_certificates` (
  `appid` int(11) NOT NULL,
  `certificateid` int(11) NOT NULL,
  PRIMARY KEY (`appid`,`certificateid`),
  KEY `applicants_certificatesfk1` (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicants_certificates`
--

INSERT INTO `applicants_certificates` (`appid`, `certificateid`) VALUES
(3, 14),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(247, 14),
(248, 14),
(249, 14),
(250, 14),
(251, 14),
(252, 4),
(253, 6),
(254, 15),
(255, 4),
(256, 6),
(257, 15);

-- --------------------------------------------------------

--
-- Table structure for table `applicants_competency`
--

CREATE TABLE IF NOT EXISTS `applicants_competency` (
  `appid` int(11) NOT NULL,
  `compid` int(11) NOT NULL,
  PRIMARY KEY (`appid`,`compid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicants_competency`
--

INSERT INTO `applicants_competency` (`appid`, `compid`) VALUES
(3, 12),
(3, 13),
(3, 14),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(247, 12),
(247, 13),
(247, 14),
(248, 12),
(248, 13),
(248, 14),
(249, 12),
(249, 13),
(249, 14),
(250, 12),
(250, 13),
(250, 14),
(251, 12),
(251, 13),
(251, 14);

-- --------------------------------------------------------

--
-- Table structure for table `applicants_education`
--

CREATE TABLE IF NOT EXISTS `applicants_education` (
  `educid` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) NOT NULL,
  `schoolname` varchar(45) NOT NULL,
  `startyear` varchar(45) NOT NULL,
  `endyear` varchar(45) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`educid`,`appid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `applicants_education`
--

INSERT INTO `applicants_education` (`educid`, `appid`, `schoolname`, `startyear`, `endyear`, `description`, `type`, `level`) VALUES
(2, 3, 'St. Scholastica''s College Manila', '2006', '2010', 'High School Diploma, March 2010. Awardee: Third Honor, Sr. Willibalda Schrader Award. Part of the Top 10 students of the batch in 4th year, Part of the Top 10 students in the batch in 3rd year, Consistent club officer of the Benedictine Circle, Part of the outreach class, Consistent Honor Student, SY 2006-2010.', 1, 'High School Graduate'),
(3, 10, 'St. Scholastica''s College', '2006', '2010', 'High School Diploma, March 2010. Awardee: Third Honor, Sr. Willibalda Schrader Award. Part of the Top 10 students of the batch in 4th year, Part of the Top 10 students in the batch in 3rd year, Consistent club officer of the Benedictine Circle, Part of the outreach class, Consistent Honor Student, SY 2006-2010.', 1, 'High School Graduate'),
(4, 10, 'De La Salle University Manila', '2006', '2013', 'High School Diploma, March 2010. Awardee: Third Honor, Sr. Willibalda Schrader Award. Part of the Top 10 students of the batch in 4th year, Part of the Top 10 students in the batch in 3rd year, Consistent club officer of the Benedictine Circle, Part of the outreach class, Consistent Honor Student, SY 2006-2010.', 2, 'High School Graduate'),
(5, 20, 'Caritas Don Bosco School', '2006', '2010', 'High School Diploma, March 2010. Awardee: Third Honor, Sr. Willibalda Schrader Award. Part of the Top 10 students of the batch in 4th year, Part of the Top 10 students in the batch in 3rd year, Consistent club officer of the Benedictine Circle, Part of the outreach class, Consistent Honor Student, SY 2006-2010.', 1, 'High School Graduate'),
(6, 20, 'De La Salle University - Manila', '2010', 'Present', 'High School Diploma, March 2010. Awardee: Third Honor, Sr. Willibalda Schrader Award. Part of the Top 10 students of the batch in 4th year, Part of the Top 10 students in the batch in 3rd year, Consistent club officer of the Benedictine Circle, Part of the outreach class, Consistent Honor Student, SY 2006-2010.', 2, 'High School Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `applicants_trainings`
--

CREATE TABLE IF NOT EXISTS `applicants_trainings` (
  `appid` int(11) NOT NULL,
  `trainingid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `venue` varchar(45) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `conductedby` varchar(45) NOT NULL,
  `remarks` varchar(45) NOT NULL,
  PRIMARY KEY (`trainingid`,`appid`),
  KEY `applicants_trainingsfk1` (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_workexperience`
--

CREATE TABLE IF NOT EXISTS `applicants_workexperience` (
  `experienceid` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `position` varchar(100) NOT NULL,
  `start` year(4) NOT NULL,
  `end` year(4) DEFAULT NULL,
  `present` int(11) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`experienceid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `applicants_workexperience`
--

INSERT INTO `applicants_workexperience` (`experienceid`, `appid`, `companyname`, `position`, `start`, `end`, `present`, `description`) VALUES
(1, 11, 'hsbc', 'hr', 2011, 2012, 0, NULL),
(2, 11, 'dlsu', 'faculty', 2011, 2012, 0, NULL),
(3, 11, 'dlsu', 'faculty', 2011, 2012, 0, NULL),
(4, 11, 'dlsu', 'faculty', 2011, 2012, 0, NULL),
(5, 235, 'dlsu', 'faculty', 2011, 2012, 0, NULL),
(6, 236, 'dlsu', 'faculty', 2011, 2012, 0, NULL),
(7, 237, 'meralco', 'hr', 0000, 0000, 0, NULL),
(8, 238, 'meralco', 'hr', 0000, 0000, 0, NULL),
(9, 239, 'hsbc', 'hr', 2001, 2003, 0, NULL),
(10, 241, 'hsbc', 'hr', 2001, 2003, 0, NULL),
(11, 242, 'meralco2', 'hello', 2001, 2001, 0, NULL),
(12, 243, '2', '2', 2003, 2005, 0, NULL),
(13, 244, '2', '2', 2003, 2005, 0, NULL),
(14, 3, '2meralco', 'it', 2004, 2005, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applicants_workexperience1`
--

CREATE TABLE IF NOT EXISTS `applicants_workexperience1` (
  `experienceid` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) NOT NULL,
  `companyname` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `start` varchar(45) NOT NULL,
  `end` varchar(45) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`experienceid`,`appid`),
  KEY `applicants_workexperiencefk1` (`appid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `applicants_workexperience1`
--

INSERT INTO `applicants_workexperience1` (`experienceid`, `appid`, `companyname`, `position`, `start`, `end`, `description`) VALUES
(2, 10, 'TESDA', 'Technical Assistant', '2013', 'Present', 'Handlled all certification and assessment documents for NCR '),
(3, 20, 'Microsoft', 'Developer and Platform Evangelism Intern', '2011', '2012', NULL),
(4, 20, 'Technominds-EASCO Inc.', 'Web System Design Consultant', '2012', '2013', NULL),
(5, 133, '', '', '0', '', NULL),
(6, 134, '', '', '0', '', NULL),
(7, 158, '', '', '', '', NULL),
(8, 159, '', '', '', '', NULL),
(9, 162, 'w', 'w', 'w', 'w', NULL),
(10, 163, 'w', 'w', 'w', 'w', NULL),
(11, 163, 'w', 'w', 'w', 'w', NULL),
(12, 165, 'w', 'w', 'w', 'w', NULL),
(13, 166, 'w', 'w', 'w', 'w', NULL),
(14, 167, 'w', 'w', 'w', 'w', NULL),
(15, 168, 'w', 'w', 'w', 'w', NULL),
(16, 184, '', '', '', '', NULL),
(17, 185, '', '', '', '', NULL),
(18, 1, '1', '1', '1', '1', NULL),
(19, 192, '', '', '', '', NULL),
(20, 193, '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assessment_centers_certification`
--

CREATE TABLE IF NOT EXISTS `assessment_centers_certification` (
  `acid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `acname` varchar(100) NOT NULL,
  `districtid` int(11) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `streetno` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `cityprov` varchar(100) NOT NULL,
  `zipcode` varchar(4) NOT NULL,
  `contactno` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`acid`,`userid`),
  KEY `fk_acUserID_idx` (`userid`),
  KEY `fk_acDistrictID_idx` (`districtid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `assessment_centers_certification`
--

INSERT INTO `assessment_centers_certification` (`acid`, `userid`, `acname`, `districtid`, `manager`, `streetno`, `brgy`, `cityprov`, `zipcode`, `contactno`) VALUES
(2, 30, 'AYU Training Center', 1, 'Maria Kristiana Andrea Munsayac Africa', 'Vito St. ', '168', 'Manila', '1107', '(043)723-1234'),
(3, 173, 'Mary-Phil Center', 2, 'John Philip Larsen', 'Patio St.', '163', 'Manila', '1012', '(043)723-1234'),
(4, 271, 'ISHRM School (Las Pinas Branch) Inc.', 5, 'Edna D. Gramaje', '467 St. Alabang Zapote Road', 'Brgy. Almanza', 'Las Pinas City', '1750', '8008904'),
(5, 272, 'Bernardo College', 5, 'Jesusan B. Guito', 'Pulang Lupa 1', 'Las Pinas', 'Las Pinas City', '1742', '8733330'),
(6, 273, 'Philippine Technical Skills Assessment Center', 4, 'Johny M. Padron', '4th Flr., Raymundo Avenue', 'Rosario', 'Pasig City', '1609', '6403135'),
(7, 274, 'Seamac International Training Institute, Inc.', 2, 'Teresita Yu-Marcos', 'Tolentino St.', 'Sampaloc', 'Manila', '1008', '7353925'),
(8, 275, 'Chef Maritime Management Services & Assessement Center', 2, 'Ceferino A. Pabroquez Jr.', 'Room 702 Bldg. T.M. Kalaw St., Cor. A Mabini St.', 'Ermita', 'Manila', '1016', '5261003 / 7033205'),
(9, 276, 'Education Power Corporation', 2, 'Riza D. Sorima', '1745 Abdon St.', 'Otis Paco', 'Manila', '1007', '5638105 / 5623731'),
(10, 277, 'Bowline Training & Assessment Center Inc.', 4, 'Divina A. Fernandez', '10 Martilyete St. ', 'Midtown San Roque ', 'Marikina City', '1801', '6820165 / 6450445'),
(11, 278, 'Margaphil Technical Institute Inc.', 7, 'Romeo T. Reyes', 'Unit E. Violeta Court 2814 F.B. Harrison St.', 'Pasay', 'Pasay City', '1302', '7035571'),
(12, 279, 'Smart Pro Tourism Skills Training Center, Inc', 5, 'Rodolfo C. Calzado', 'Grand Villa Resort & Restaurant, #866 P. Herrera St.', 'Brgy. Aguho', 'Pateros', '1620', '6437261 / 7108954'),
(13, 280, 'Nautical Options Training Institute of the Philippines', 2, 'Lilia J. Givanim', 'Mezzanine Floor Manufacturers Bldg.', 'Plaza Sta. Cruz', 'Manila', '1003', '7088871'),
(14, 281, 'Holy Cross Training & Assessment Center, Inc.', 6, 'Karissa Paula B. Vitug', '132 L16 Malanting St.', 'Amparo Village', 'Caloocan City', '1425', '4412846'),
(15, 282, 'Overseas Academy Skills & Assessment Center, ', 7, 'Esperanza H. Pascual', '2078 Edison St. ', 'Brgy. San Isidro', 'Makati City', '1234', '6672639 / 4878698'),
(16, 283, 'Uno Caregiver & Domestic Management Training ', 7, 'Mary Grace Rosalia Gulan', '1425 Priemiere Center Newtown St.', 'Brgy. San Isidro', 'Makati City', '1234', '7292802'),
(17, 284, 'Roe Abbot Training & Development Institute, Inc.', 2, 'Mary Hyacinth F. Vinluan', '2082 Benitez St. ', 'San Andres', 'Manila', '1017', '3025183'),
(18, 285, 'Capt. Wilijaldo P. Abuid Foundation, Inc.', 7, 'Christine S. Gerona', '#33 A. Arnaiz Ave. Cor. Roberts St.', 'Pasay', 'Pasay City', '1300', '8311525 / 092228311525'),
(19, 286, 'Regal International Training & Assessment Center', 1, 'Victoria S. Lim', '66B Sibuyan St.', 'Sta. Mesa Heights', 'Quezon CIty', '1104', '7035934 / 7411456'),
(20, 318, 'Malayan Technical Institute', 1, 'Joseph D. Roque', 'aa', 'aa', 'Quezon City', '1104', '09083261285'),
(21, 319, 'Phil-Com Training Center', 1, 'Mary Joy E. Eusebio', 'aa', 'aa', 'Quezon City', '1104', '09083261285'),
(22, 320, 'Abra Training Center', 8, 'Aira Gementiza', 'aa', 'aa', 'Abra', '2806', '09220192352'),
(23, 321, 'Ilocos Norte Training Center', 14, 'Richard de Leon', 'aa', 'aa', 'Ilocos', '2918', '09220192352'),
(24, 322, 'Batanes Training Center', 18, 'Jose Miligan', 'aa', 'aa', 'Batanes', '3900', 'Ilocos Norte Training Center'),
(25, 323, 'Bataan Training Center', 23, 'Luis Armilo', 'aa', 'aa', 'Bataan', '2104', 'Ilocos Norte Training Center'),
(26, 324, 'Batangas Training Center', 30, 'Coleen Ponce', 'aa', 'aa', 'Batangas City', '4217', '09062341133'),
(27, 325, 'Marinduque Training Center', 35, 'Marco Padua', 'aa', 'aa', 'Marinduque', '4900', '09062341133'),
(28, 326, 'Albay Training Center', 40, 'Kristine Rumbaua', 'aa', 'aa', 'Legaspi City', '4500', '09062341133');

-- --------------------------------------------------------

--
-- Table structure for table `assessors_certification`
--

CREATE TABLE IF NOT EXISTS `assessors_certification` (
  `assessorid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `contactno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`assessorid`,`userid`),
  KEY `fk_acertUserID_idx` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `assessors_certification`
--

INSERT INTO `assessors_certification` (`assessorid`, `userid`, `firstname`, `middlename`, `lastname`, `contactno`) VALUES
(1, 20, 'Jamaica Jane', 'Suarez', 'Bool', '09067778546'),
(2, 35, 'Keven', 'Disonglo', 'Hernandez', '09275567812'),
(3, 224, 'Vic', 'So', 'Chiu', '09034445567'),
(4, 225, 'Leo', 'So', 'Cho', '09034445675'),
(5, 228, 'Michael', 'Sy', 'Ong', '09034561235'),
(6, 288, 'Michael', 'A.', 'Gonzaga', '09034561234'),
(7, 289, 'Michelle', 'C.', 'Co', '092345556345'),
(8, 290, 'Martin', 'D.', 'Delos Santos', '09223461234'),
(9, 291, 'Miguel', 'F.', 'Fargo', '09223453333'),
(10, 292, 'Lee Grane', 'H.', 'Herrera', '09063561222'),
(11, 293, 'Lea', 'D.', 'Salud', '09223334556'),
(12, 294, 'Victoria', 'G.', 'Beckson', '09334545557'),
(13, 295, 'Marlene Joy', 'J.', 'Fuuga', '09331292999'),
(14, 296, 'Chen', 'K.', 'Morales', '09223457949'),
(15, 307, 'Megan', 'J.', 'Young', '09223491205'),
(16, 327, 'A1', 'A.', 'A1', '09062341133'),
(17, 328, 'A2', 'A', 'A2', '09062341939'),
(18, 329, 'A3', 'A', 'A3', '09062341939'),
(19, 330, 'A4', 'A', 'A4', '09062341939'),
(20, 331, 'A5', 'A', 'A5', '09062341939'),
(21, 332, 'A6', 'A', 'A6', '09062341939'),
(22, 333, 'A7', 'A', 'A7', '09062341939');

-- --------------------------------------------------------

--
-- Table structure for table `assessors_districts`
--

CREATE TABLE IF NOT EXISTS `assessors_districts` (
  `assignID` int(11) NOT NULL AUTO_INCREMENT,
  `assessorID` int(11) NOT NULL,
  `districtID` int(11) NOT NULL,
  `isin` tinyint(4) NOT NULL DEFAULT '1',
  `dateassigned` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`assignID`),
  KEY `fk_adASSESSORID` (`assessorID`),
  KEY `fk_adDISTRICTID` (`districtID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `assessors_districts`
--

INSERT INTO `assessors_districts` (`assignID`, `assessorID`, `districtID`, `isin`, `dateassigned`) VALUES
(1, 1, 1, 1, '2013-06-18 11:22:31'),
(2, 2, 1, 1, '2013-06-18 11:22:31'),
(3, 3, 2, 1, '2013-07-02 02:49:02'),
(4, 4, 2, 1, '2013-07-02 02:49:47'),
(5, 5, 1, 1, '2013-07-05 03:16:43'),
(6, 6, 4, 1, '2013-07-27 14:24:36'),
(7, 7, 4, 1, '2013-07-27 14:25:11'),
(8, 8, 5, 1, '2013-07-27 14:25:50'),
(9, 9, 5, 1, '2013-07-27 14:26:30'),
(10, 10, 5, 1, '2013-07-27 14:27:28'),
(11, 11, 6, 1, '2013-07-27 14:28:01'),
(12, 12, 6, 1, '2013-07-27 14:28:49'),
(13, 13, 7, 1, '2013-07-27 14:29:55'),
(14, 14, 7, 1, '2013-07-27 14:30:40'),
(15, 15, 1, 1, '2013-07-29 03:48:34'),
(16, 16, 8, 1, '2013-08-02 08:06:25'),
(17, 17, 14, 1, '2013-08-02 08:13:29'),
(18, 18, 18, 1, '2013-08-02 08:14:17'),
(19, 19, 23, 1, '2013-08-02 08:14:56'),
(20, 20, 30, 1, '2013-08-02 08:15:16'),
(21, 21, 35, 1, '2013-08-02 08:15:44'),
(22, 22, 40, 1, '2013-08-02 08:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(45) NOT NULL,
  `coursename` varchar(45) NOT NULL,
  `sectorID` int(11) DEFAULT NULL,
  `path` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`courseid`),
  KEY `courseFK1` (`sectorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `districts_certification`
--

CREATE TABLE IF NOT EXISTS `districts_certification` (
  `districtid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `districtname` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `streetno` varchar(100) NOT NULL,
  `brgy` varchar(100) NOT NULL,
  `cityprov` varchar(100) NOT NULL,
  `zipcode` varchar(4) NOT NULL,
  `contactno` varchar(45) DEFAULT NULL,
  `regionid` int(11) NOT NULL,
  PRIMARY KEY (`districtid`,`userid`),
  KEY `fk_dUserID_idx` (`userid`),
  KEY `fk_dregionid` (`regionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `districts_certification`
--

INSERT INTO `districts_certification` (`districtid`, `userid`, `districtname`, `manager`, `streetno`, `brgy`, `cityprov`, `zipcode`, `contactno`, `regionid`) VALUES
(1, 28, 'TESDA Quezon City ', 'PENA G. MEDINA ', 'Quezon City Hall Compound', 'QC', 'Quezon City', '1177', '927-9091; 426-7536; 929-2908 ', 1),
(2, 172, 'TESDA Manila ', 'YERMA N. SAULON', 'Tayuman Street, Lopez Building', 'Tondo', 'Manila', '1013', '708-0077 / 516-8347 ', 1),
(4, 229, 'TESDA Pasig, Mandaluyong, Marikina, San Juan (PaMaMariSan)  ', 'MA. LOURDES VILLANUEVA ', 'Neptali Gonzales Building, Rizal Technological University', 'Mandaluyong', 'Mandaluyong City', '1550', '534-2010 / 494-2131 ', 1),
(5, 230, 'TESDA Muntinlupa, Parañaque, Las Piñas, Taguig, Pateros (MuntiParLas-TaPat) ', 'CECILIA Z. AMARO', 'TESDA Complex Gate 2, East Service Road, South Superhighway', 'Taguig', 'Taguig City', '1631', '810-5814 / 844-4200 ', 1),
(6, 231, 'TESDA Caloocan, Malabon, Navotas, Valenzuela (CaMaNaVa)', 'MARIFLOR G. LIWANAG', 'Victory Mall', 'Caloocan', 'Caloocan City', '1400', '217-6132 ', 1),
(7, 232, 'TESDA Pasay, Makati', 'MA. ANGELINA M. CARREON ', 'Building 2, Ground Floor, Pamantasan ng Makati, Gate I J.P. Rizal Ave, West Rembo', 'Makati', 'Makati City', '1208', '881-2854 ', 1),
(8, 233, 'TESDA Abra', 'EDDIE R. DUNUAN ', 'Pidigan', 'Abra', 'Abra', '2806', '(074) 447-3487 / (074) 305-2405/(074) 305-190', 2),
(9, 234, 'TESDA Apayao', 'EMMANUEL A. DABALOS ', 'Pudtol ', 'Pudtol', 'Apayao', '3812', '(0915) 429-1044 ', 2),
(10, 235, 'TESDA Benguet', 'ANGELA E. GABRIEL ', 'Provincial Capitol ', 'La Trinidad', 'Benguet', '2601', '(074) 309-1142 / (074) 422-4034 ', 2),
(11, 236, 'TESDA Kalinga', 'FRANCISCO B. JUCAR ', 'Bulanao', 'Tabut', 'Kalinga', '3800', '(074)872-2373/ (074)423-0668 ', 2),
(12, 237, 'TESDA Ifugao', 'GENARO RONALD C. IBAY ', 'Awao', 'Lagawe', 'Ifugao', '3600', '(074) 382-2115 ', 2),
(13, 238, 'TESDA Mt. Province', 'GABRIEL A. CAYACAY ', '5th Floor Walter Clapp Centrum Loc- ONg Bontoc', 'Mt. Province', 'Mt. Province', '2616', '(074) 602-1500 ', 2),
(14, 239, 'TESDA Ilocos Norte ', 'FELISA A. CARAG', 'Ilocano Heroes Hall', 'Ilocos Norte', 'Ilocos Norte', '2918', '(077) 773-2198 ', 3),
(15, 240, 'TESDA Ilocos Sur ', 'JOEL M. PILOTIN', 'Mina Crisologo St.', 'Ilocos Sur', 'Ilocus Sur', '2724', '(077) 632-0941 / (077) 722-6753 ', 3),
(16, 241, 'TESDA La Union ', 'MARISSA T. ALCANTARA ', '3rd floor Yolanda Garden, P. Burgos St. ', 'La Union', 'La Union', '2502', '(072) 888-2064 ', 3),
(17, 242, 'TESDA Pangasinan ', 'MANUEL B. WONG ', 'Provincial Capitol Compound ', 'Pangasinan', 'Pangasinan', '2410', '(075) 542-6577 ', 3),
(18, 243, 'TESDA Batanes ', 'DIOSDADO C. ESCALANTE', 'Basco', 'Batanes', 'Batanes', '3900', '(078) 844-1359 ', 4),
(19, 244, 'TESDA Cagayan', 'CHARITO B. SANTOS', 'TESDA Complex, Carig Norte ', 'Cagayan', 'Cagayan', '3520', '(078) 622-2300', 4),
(20, 245, 'TESDA Isabela', 'NESTOR C. AVE ', 'Mercedes Bldg., Alibagu ', 'Isabela', 'Isabela', '3306', '(078) 622-2300 ', 4),
(21, 246, 'TESDA Nueva Vizcaya', 'Dr. JULIE ANN D. BANGANAN', 'Capitol Compound, Bayumbong', 'Nueva Vizcaya', 'Nueva Vizcaya', '3700', '(078) 321-2778 ', 4),
(22, 247, 'TESDA Quirino', 'CEFERINO C. NARAG ', 'QPC Compound, Cabarroguis', 'Quirino', 'Quirino', '3400', '2539095', 4),
(23, 248, 'TESDA Bataan', 'GRACE CORAZON C. CASTILLO ', 'TESDA Kinatawan Bldg. Tinejero', 'Bataan', 'Bataan', '2104', '(047) 237-9290 ', 5),
(24, 249, 'TESDA Bulacan', 'LUZ VICTORIA G. AMPONIN ', 'RSDC Tabang', 'Guiginto', 'Bulacan', '3017', '(044) 794-4305 ', 5),
(25, 250, 'TESDA Nueva Ecija', 'ROLANDO V. DELA TORRE ', 'Provincial Capitol Compound', 'Nueva Ecija', 'Nueva Ecija', '3111', '(044) 463-8474 ', 5),
(26, 254, 'TESDA Pampanga', 'BEN-HUR B. BANIQUED ', 'PEO Compound', 'Sindalan San Fernando ', 'Pampanga', '2015', '(045) 860-5406 ', 5),
(27, 251, 'TESDA Tarlac', 'BELINDA A. LABUTONG ', 'San Isidro Industrial Complex ', 'Tarlac', 'Tarlac', '2300', '(045) 982-9103 ', 5),
(28, 252, 'TESDA Zambales', 'ELIZABETH D. MANIO ', '4/f, Livelihood Ctr. Bldg.', 'Magsaysay Ave. ', 'Zambales', '2211', 'SBMA : (047) 252-6074 / (047) 223-9914 ', 5),
(29, 253, 'TESDA Aurora', 'ABUNDIO C. BACAY ', 'TESD CENTER Burgos St.', 'Brgy. 05 ', 'Aurora', '3205', '(042) 552-4225 / (042) 209-4225', 5),
(30, 255, 'TESDA Batangas', 'CARLOS C. FLORES ', 'P. Herrera St.', 'Batangas', 'Batangas City', '4217', '(043) 980-5754/ (043) 723-0574 ', 6),
(31, 256, 'TESDA Cavite', 'LETICIA OGBAC ', 'Capitol Compound, Trece Martirez', 'Cavite', 'Cavite', '4109', '(046) 419-2415 / (046) 419-2421 ', 6),
(32, 257, 'TESDA Laguna', 'PASCUAL R. ARRIOLA ', 'Gabaldon Blvd.', 'Brgy. Timogan', ' Los Banos. Laguna ', '4030', '(049) 501-2160/ (049) 827-0542 ', 6),
(33, 258, 'TESDA Quezon', 'RHOSALIE AMAZONA', 'Better Living Subdivision ', 'Brgy. Isabang', 'Lucena City ', '4301', '(042) 373-5297 / (042) 373-7852 ', 6),
(34, 259, 'TESDA Rizal', 'VELMA S. SALAZAR ', 'Manila East road', 'Taytay', 'Rizal', '1920', '(02) 286-6141 ', 6),
(35, 260, 'TESDA Marinduque', 'JOSEPH  TANCHANCO', 'Tanza', 'Brgy. Tanza', 'Marinduque', '4900', '(042) 332-1540 ', 7),
(36, 261, 'TESD Mindoro Occidental', 'EDWIN T. ANDOYO ', '1048 Gen. Lucban St. ', 'Mindoro', 'Mindoro Occidental', '5109', '(043) 228-8921 / (043) 491-4255 ', 7),
(37, 262, 'TESDA Mindoro Oriental', 'RENATO M. PANTALEON ', ' Capitol Compound ', 'Mindoro', 'Mindoro Oriental', '5200', '(043) 286-7096/288-8921 ', 7),
(38, 263, 'TESDA Palawan', 'ARNEL CAMPUED', '2F Allied Bank Bldg., Rizal Ave.', 'Puerto Princesa', 'Palawan', '5300', '(048)433-7146', 7),
(39, 264, 'TESDA Romblon', 'ARMANDO O. AQUINO', 'Servanez Bldg. Gen. Luna St. ', 'Romblon', 'Romblon', '5500', '(042) 567-5116 ', 7),
(40, 265, 'TESDA Albay', 'ROSALINDA B. TALAVERA ', 'Albay Astrodome Complex Old Albay District', 'Legaspi', 'Legaspi City', '4500', '(052) 480-3071 ', 8),
(41, 266, 'TESDA Camarines Norte', 'JULIET E. LORIA ', 'Aquino Bldg. ', 'Daet', 'Camarines Norte', '4600', '(054) 472-1155/ (054) 472-1155 ', 8),
(42, 267, 'TESDA Camarines Sur', 'RAMON L. GERON ', '2nd Flr. Aquino Bldg. Panotes Ave.', 'Camarines Sur', 'Camarines Sur', '4400', '(054) 721-1255 / (054) 440-1721 ', 8),
(43, 268, 'TESDA Catanduanes', 'JOSE V. SERRANO, JR. ', 'San Isidro Village', 'Virac', 'Catanduanes', '4800', '(052) 811-1948 / (0912) 321-2579 ', 8),
(44, 269, 'TESDA Masbate', 'MILDRED F. MARCAIDA ', 'Capital Drive', 'Masbate', 'Masbate City', '5400', '(056) 333-5410 ', 8),
(45, 270, 'TESDA Sorsogon', 'MARIGLO M. SESE ', 'SSS Compound', 'Sorsogon', 'Sorsogon', '4700', '(056) 211-3236 / (056) 211-3237 ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `employer_profile`
--

CREATE TABLE IF NOT EXISTS `employer_profile` (
  `infoID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `companyName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `companyBG` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `companyIndustry` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `companyExistence` year(4) NOT NULL,
  `companyEmail` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `companyContact` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companypic` varchar(45) COLLATE utf8_unicode_ci DEFAULT 'default.jpg',
  `companyContactPerson` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `license` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `companyLocations` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`infoID`),
  KEY `fk1_idx` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `employer_profile`
--

INSERT INTO `employer_profile` (`infoID`, `userID`, `companyName`, `position`, `companyBG`, `companyIndustry`, `companyExistence`, `companyEmail`, `companyContact`, `companypic`, `companyContactPerson`, `license`, `verified`, `companyLocations`) VALUES
(1, 15, 'Cartoon Inc. ', 'HR', 'Based in United Mandaluyong and leading in the Philippines regarding Animation. ', '12', 1966, 'contact_us@gmail.com', '09236237231', 'default.jpg', 'Baorea Ho', '129364018', 1, NULL),
(7, 17, 'Animators Inc. ', 'HR', 'Focused in producing Filipino characters and Filipino cartoons,', '12', 1966, 'contact_us@gmail.com', '09462746231', 'default.jpg', 'Lee Min Ho', '129364018', 0, NULL),
(8, 20, 'Sketch Philippines', 'HR', 'Partners with multi national companies to provide media services', '12', 1966, 'contact_us@gmail.com', '09264736432', 'default.jpg', 'Sandara Park', '129364018', 1, NULL),
(9, 28, 'Formero Inc. ', 'HR', 'Known to produce best processed food in the Philippines', '12', 1966, 'contact_us@gmail.com', '09462736232', 'default.jpg', 'Hua Tze Lei', '129364018', 0, NULL),
(11, 30, 'San Andres Corporation', 'HR', 'Brewery coportation founded by Andres brothers in the country', '12', 1966, 'contact_us@gmail.com', '09436473643', 'default.jpg', 'Ong Pin', '129364018', 0, NULL),
(12, 32, '5 Star Hotel', 'HR', '5 star hotel in Sta. Rosa Laguna', '11', 1966, 'contact_us@gmail.com', '09637263721', 'default.jpg', 'Carlo Sy', '129364018', 1, NULL),
(13, 394, 'P&G', 'HR', 'Multinational company', '12', 1966, 'contact_us@gmail.com', '09237162321', 'a1.jpg', 'Carlo Haw', '737238272', 0, NULL),
(14, 395, 'Nestle', 'HR', 'Food and Beverage', '12', 1966, 'contact_us@gmail.com', '09346374673', 'a2.jpg', 'Carlo Sy', '384738247', 0, NULL),
(15, 396, 'Coca Cola', 'HR', 'Food and Beverage ', '12', 1966, 'contact_us@gmail.com', '09376372421', 'a20.jpg', 'Carlo Lee', '984928493', 0, NULL),
(16, 398, 'Panasonic', 'HR', 'Electronics Company', '12', 1966, 'contact_us@gmail.com', '09346723422', 'a11.jpg', 'Carlo Lu', '384728453', 0, NULL),
(17, 400, 'Samsung', 'HR', 'Korean company', '12', 1966, 'contact_us@gmail.com', '09563237262', 'a12.jpg', 'Carlo Go', '349249822', 1, NULL),
(18, 401, 'HP', 'HR', 'Technology company', '12', 1966, 'contact_us@gmail.com', '09473647326', 'a14.jpg', 'Carlo Gaw', '238748359', 1, NULL),
(19, 390, 'Shangri-la', 'HR', '5 star hotel in Sta. Rosa Laguna', '11', 1966, 'contact_us@gmail.com', '09376473211', 'a15.jpg', 'Carlo Yu', '374823743', 0, NULL),
(20, 393, 'San Miguel Corporation', 'HR', 'Brewery Corporation', '12', 1966, 'contact_us@gmail.com', '09422362737', 'a16.jpg', 'Carlo Uy', '985948943', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE IF NOT EXISTS `licenses` (
  `appid` int(11) NOT NULL,
  `entryid` int(11) NOT NULL AUTO_INCREMENT,
  `licenseid` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `yeartaken` varchar(4) NOT NULL,
  `venue` varchar(45) NOT NULL,
  `rating` varchar(45) NOT NULL,
  `expiration` date NOT NULL,
  `remarks` varchar(45) NOT NULL,
  PRIMARY KEY (`entryid`,`appid`),
  KEY `licensesfk1` (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `moduleid` int(11) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(45) NOT NULL,
  PRIMARY KEY (`moduleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`moduleid`, `modulename`) VALUES
(1, 'Bar Cleaning'),
(2, 'Bar Operation'),
(3, 'Cockail Mixing'),
(4, 'Wine Operation'),
(5, 'Managing Kitchen & Service Areas'),
(6, 'Preparing Food & Beverages'),
(7, 'Room Service Preparation'),
(8, 'Housekeeping Preparation'),
(9, 'Laundrying'),
(10, 'Butlering'),
(11, 'Tour Research'),
(12, 'Visitor Arrangement'),
(13, 'Guiding Tourists'),
(14, 'Booking/ Reservations'),
(15, 'Ticketing'),
(16, 'Billing'),
(17, 'Reservation Management'),
(18, 'Online Reservations'),
(19, 'Receptioning'),
(20, 'Auditing'),
(21, 'Club Receptioning'),
(22, 'Portering'),
(23, 'Pattisiers'),
(24, 'Gateaux'),
(25, 'Petits Fours'),
(26, 'Pastries'),
(27, 'Hot Meals Cooking'),
(28, 'Cold Meals Cooking');

-- --------------------------------------------------------

--
-- Table structure for table `nc_reference`
--

CREATE TABLE IF NOT EXISTS `nc_reference` (
  `ncid` int(11) NOT NULL,
  `ncname` varchar(45) NOT NULL,
  `level` varchar(45) NOT NULL,
  `sectorid` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`ncid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nc_reference`
--

INSERT INTO `nc_reference` (`ncid`, `ncname`, `level`, `sectorid`, `description`) VALUES
(1, 'Computer Hardware Servicing ', 'NC II', 8, 'Can support hardware issues at least.'),
(2, 'Building Wiring Installation ', 'NC II', 10, 'Knowlegable in SQL and PHP'),
(3, 'Automotive Electrical Component Servicing ', 'NC I', 18, 'Expert in Adobe Flash'),
(4, 'Heavy Equipment Operation', 'NC II', 10, 'Knows the parts and can operate heavy machines'),
(5, 'Machining ', 'NC I', 10, 'Can operate machines '),
(6, 'Shielded Metal Arc Welding (SMAW) ', 'NC II', 10, 'Metal Arc Welding knowledge'),
(7, 'Refrigeration and Airconditioning (RAC)', 'NC III', 7, 'Knows refrigeration and Airconditoning at least 2 years'),
(8, 'Automotive Servicing ', 'NC I', 18, 'Repairs the pipes, fittings, and other apparatus '),
(9, 'Masonry', 'NC I', 9, 'Mason Works'),
(10, 'Marine Electricity', 'NC I', 9, 'Capable of aquatic electricity management'),
(11, 'Rubber Production', 'NC II', 17, 'Rubber Production Expert'),
(12, 'Technical Drafting', 'NC II', 2, 'Technical Drafting Mechanics'),
(13, 'Electrical Installation and Maintenance', 'NC II', 2, 'Installs Wires'),
(14, '2D Game Art Development', 'NC III', 8, 'Knows 2D Animation at least 2 years'),
(15, 'Front Service Offices', 'NC II', 13, 'Hotel Management'),
(16, 'Food Processing', 'NC II', 11, 'Processes food'),
(17, 'Travel Services', 'NC II', 13, 'Took tourism Services courses'),
(18, '2D Animation', 'NC III', 8, 'Develop Animation in 2D'),
(19, '3D Animation ', 'NC III', 8, 'Develops Animation in 3D'),
(20, 'Visual Graphic Design', 'NC III', 8, 'Expert and familiar with visual graphics '),
(21, '3D Game Art Development', 'NC III', 8, 'Develops games in 3D');

-- --------------------------------------------------------

--
-- Table structure for table `nc_version`
--

CREATE TABLE IF NOT EXISTS `nc_version` (
  `ncvid` int(11) NOT NULL,
  `ncid` int(11) NOT NULL,
  `issuedate` date NOT NULL,
  `overview` varchar(200) NOT NULL,
  `isretailable` int(11) NOT NULL,
  PRIMARY KEY (`ncvid`,`ncid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nc_version`
--

INSERT INTO `nc_version` (`ncvid`, `ncid`, `issuedate`, `overview`, `isretailable`) VALUES
(1, 1, '2001-11-11', '', 1),
(2, 2, '2001-11-11', '', 1),
(3, 3, '2001-11-11', '', 0),
(4, 4, '2001-11-11', '', 1),
(5, 5, '2001-11-11', '', 1),
(6, 6, '2001-11-11', '', 0),
(7, 7, '2001-11-11', '', 1),
(8, 8, '2001-11-11', '', 1),
(9, 9, '2001-11-11', '', 0),
(10, 10, '2001-11-11', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nccoc`
--

CREATE TABLE IF NOT EXISTS `nccoc` (
  `ncoid` int(11) NOT NULL AUTO_INCREMENT,
  `ncid` int(11) NOT NULL,
  `cocname` varchar(100) NOT NULL,
  `ncvid` int(11) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ncoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `nccoc`
--

INSERT INTO `nccoc` (`ncoid`, `ncid`, `cocname`, `ncvid`, `description`) VALUES
(1, 1, 'Troubleshooting', 1, 'Troubleshooting PC'),
(2, 1, 'Repairing Computers', 1, 'Repairs hardware of computers'),
(3, 1, 'Computer Networking ', 1, 'Computer networking issues'),
(4, 1, 'PC Troubleshooting', 1, 'PC Troubleshooting concerns'),
(5, 2, 'Plant Electrity', 1, 'Can resolve plant electricity issues'),
(10, 2, 'Mechanical Electricity', 1, 'Resolves electricity issues machanically'),
(11, 2, 'Transmission Line ', 1, 'Transmission line issues'),
(12, 14, 'Develop and conceptualize art style', 1, 'Must have an eye for art'),
(13, 14, 'Develop GUI', 1, 'Exposed on developing graphical interfaces'),
(14, 14, 'Create storyboard', 1, 'Creates storybards'),
(15, 11, 'Can process rubbers', 1, 'Rubber Production'),
(16, 11, 'Operates rubber machines', 1, 'Can also operates in high speed '),
(17, 15, 'Interpersonal Knowledge', 1, 'Charismatic'),
(18, 15, 'Booking Management', 1, 'Manage accounts well'),
(19, 16, 'Processes any type of food', 1, 'Processes any type of food'),
(20, 16, 'Expert in processing cold cuts', 1, 'Expert in processing cold cuts'),
(21, 4, 'Operates heavy machines', 1, 'Operates heavy machines'),
(22, 6, 'Welding Knowledge', 1, 'Welding Knowledge'),
(23, 18, 'Produce 2D key drawings', 1, 'Must have relevant details and styles'),
(24, 18, 'Identify animation requirements', 1, 'E.g. Equipment identified'),
(25, 18, 'Revise key drawings', 1, 'In accordance with company requirements'),
(26, 19, 'Identify 3D animation software', 1, 'Specified delivery platform'),
(27, 19, 'Produce 3D key drawings', 1, 'Produce variety of graphic styles'),
(28, 19, 'Creates models and images', 1, 'Considers texture and mapping parameters'),
(29, 20, 'Develop design studies', 1, 'Identify target audience and medium'),
(30, 20, 'Creates vector graphics', 1, 'Produce objects'),
(31, 20, 'Creates raster graphics', 1, 'Balance quality and file size'),
(32, 21, 'Develop art style', 1, 'Draw & compile characters'),
(33, 21, 'Create storyboard and asset list', 1, 'Key references identified');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `regionid` int(11) NOT NULL AUTO_INCREMENT,
  `regionname` varchar(45) NOT NULL,
  PRIMARY KEY (`regionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`regionid`, `regionname`) VALUES
(1, 'NCR'),
(2, 'CAR'),
(3, 'Region I (Ilocos Region)'),
(4, 'Region II (Cagayan Valley)'),
(5, 'Region III (Central Luzon)'),
(6, 'Region IV-A (CALABARZON)'),
(7, 'Region IV-B (MIMAROPA)'),
(8, 'Region V (Bicol)'),
(9, 'Region VI (Western Visayas)'),
(10, 'Region VII (Central Visayas)'),
(11, 'Region VIII (Eastern Visayas)'),
(12, 'Region IX (Zamboanga Peninsula)'),
(13, 'Region X (Northern Mindanao)'),
(14, 'Region XI (Davao)'),
(15, 'Region XII (SOCCSKSARGEN)'),
(16, 'Region XIII (Caraga Region)'),
(17, 'ARMM ');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE IF NOT EXISTS `sectors` (
  `sectorID` int(11) NOT NULL AUTO_INCREMENT,
  `sectorName` varchar(100) NOT NULL,
  `sectorIcon` varchar(45) NOT NULL,
  `description` varchar(900) DEFAULT NULL,
  PRIMARY KEY (`sectorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`sectorID`, `sectorName`, `sectorIcon`, `description`) VALUES
(1, 'Decorative Crafts', 'Deco.png', NULL),
(2, 'Electronics', 'elec.png', NULL),
(3, 'Footwear & Leathergoods', 'foot.png', NULL),
(4, 'Furniture & Fixtures', 'furni.png', NULL),
(5, 'Garments', 'garments.png', NULL),
(6, 'Health, Social & Other Community Development Service', 'health.png', NULL),
(7, 'Heating, Ventilation, Airconditioning & Refrigeration', 'heat.png', NULL),
(8, 'Information & Communication Technology', 'IT.png', NULL),
(9, 'Maritime', 'maritime.png', NULL),
(10, 'Metals & Engineering', 'metals.png', NULL),
(11, 'Processed Food & Beverages', 'processed.png', NULL),
(12, 'Pyrotechnics', 'pyro.png', NULL),
(13, 'Tourism (Hotel & Restaurant)', 'tourism.png', 'Tourism is one of the fastest growing industries in the world. There are so many different jobs available which require a wide range of skills and abilities. However, the industry relies heavily on client approval and satisfaction, so one of the key requirements for most jobs is to provide convenient and efficient services that go beyond a customer’s expectations. Tourism is a very large and encompassing industry. Within Tourism there are skilled, technical, trained and formally educated workers. People are always going on vacations, business or personal trips so this industry is very stable. Tourism professionals include tour operators, bar and restaurant staff, chefs, cooks, waiters, travel agents, reservation agents, hotel workers, spa and salon operators and workers etc.'),
(14, 'TVET', 'tvet.png', NULL),
(15, 'Utilities', 'util.png', NULL),
(16, 'Wholesale and Retail Trading', 'whole.png', NULL),
(17, 'Agriculture', 'agri.png', NULL),
(18, 'Automotive', 'auto.png', NULL),
(19, 'Construction', 'const.png', NULL),
(20, 'Others', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE IF NOT EXISTS `student_profile` (
  `profileid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`profileid`),
  KEY `student_profilefk1` (`studentid`),
  KEY `student_profilefk2` (`status`),
  KEY `student_profilefk3` (`course`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_status`
--

CREATE TABLE IF NOT EXISTS `student_status` (
  `statusid` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`statusid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `thekey` varchar(225) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=330 ;

--
-- Dumping data for table `temp_users`
--

INSERT INTO `temp_users` (`userid`, `email`, `userpassword`, `thekey`) VALUES
(95, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ea01ebacf172f9d3d8a1feeb9fc1254d'),
(96, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0251758f5acaf2da5ccb7c81d9f7efc1'),
(97, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4edc2c4084a044ad56bdec9e6fb06dbe'),
(98, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f3763d2f40bac2ad6d4e99b1f2ae36f7'),
(99, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b74ed3115357544c83acbefa45ed4b5c'),
(100, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd6bd15cee7073a1952e8fe4c9660a33d'),
(101, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd7f627b4be39f3616d26c9a6bda206e5'),
(102, 'hi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '42418d27453f76d3bce17da989ed9078'),
(103, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd296b2d47c91bcd702cec8725d2657f3'),
(104, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f1a880a94535979a60067216285d17e1'),
(105, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'bb2e39e23844d0f64a13c97dc507b749'),
(106, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '973cf849ee901aef74d6f634bbec4447'),
(107, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '92876e12a86231765bada89eabf7166b'),
(108, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c75287e88a9c5fcbe472d20b27791f9e'),
(109, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'af96c630460b2aff35428bb856a79cea'),
(110, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '7e477b31f0b3f0fb348e1fbb68201d3d'),
(111, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '39133b2bd50f9f08325e469034490aa1'),
(112, 'shen_layug@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e2aaf8552f1896e0c7ab0c7a80d1cf0e'),
(113, 'hello111@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a04a6a9fd96036225e7d752947591091'),
(114, 'hello111@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b0dcf61c27bacc6c7b0d65a92fcb6d0d'),
(115, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ef3bd9be55ea4969621d7156f343ee9b'),
(116, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '96e784f5e72ab4b02eee622785f7172b'),
(117, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7b6d9e04a5bb04e01ad18ba8a8ce1fd5'),
(118, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3bcdf70381269eada24d6ccd243c2fb3'),
(119, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '94977e5cb497d1b56a9e4974fd450e05'),
(120, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0a5d5910a5cf3dded55efc01ef8c1a1a'),
(121, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f50b8255064a1c7bdf5c07889036531f'),
(122, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '11c747bf7b7fc25a05f9c9c5942a088f'),
(123, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c178fbcb48f11e46da543df964bbb6bb'),
(124, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4d0cff53ecdf6e7387f44fb3a53175f9'),
(125, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '20e5cae9ab57c93263128ae17ee0763e'),
(126, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd3d273eb3f9035da235572f391f3faca'),
(127, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7ec53af4416ad056755781d5b2921b46'),
(128, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3d41c5fa42b62aa96dadbf418711f616'),
(129, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b60ecf6ffddad46278df02c8653eade0'),
(130, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7ab7a6bfb77eb089b9b83a6fdaeb4701'),
(131, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '58a5b062c7c859f505c4be1e9050e226'),
(132, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3ac51766917381e4ba787842b738b276'),
(133, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '78fb4d45e48ab2898dad04afe2bfa5d9'),
(134, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '19e7211ecfc3e87aba968f5fc78724cb'),
(135, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f842adeb61789ab5b3a335373f228141'),
(136, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f1d4154c9f8e93916b9ce8c31d631863'),
(137, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '45b3792ca4a85de7e321d2f138e4e240'),
(138, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'dfa00f03938561d6742e46d29f3eef5c'),
(139, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '330c96f63d9ab18c4fc9ee490b3af506'),
(140, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '97740f3a2b5f078fabf87583bc62d27a'),
(141, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd087708c413bc56071313a263ba50316'),
(142, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6b7b0f89be94c463b8d73bc1884c2fb6'),
(143, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '628f874e07f18c52aca5a058ef29d2c4'),
(144, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '663cdebd9acbe28ffeef647398ad0421'),
(145, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '228ee5975b99b392150172d05eb68010'),
(146, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e3db75206cf0ec9d76f02e50f37838b9'),
(147, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4779cde89970c1aae6a91f9e7a5dd671'),
(148, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a2084ad44cf91a450830006831b30249'),
(149, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '159b42948145ffc8d871763a2111f62d'),
(150, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ad774c95dbe5125441ce8c1416e4b839'),
(151, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'fb2cea42ce28da5f7b9a37dd0141b67a'),
(152, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2d9f3aa5eea519dcbfec2354ce6db4be'),
(153, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'fe25912d6244cbd43f7015726162f467'),
(154, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '268ee035b21870a4f30c8571fc040839'),
(155, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1a427b8a5579fdd58e600f080586ac35'),
(156, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '57ebeeb0ebbf28b0f47f4ac088e8fd0c'),
(157, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3df7112b313e24bfdb61af7ac341939f'),
(158, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b9b85c8303cd96d8ee37cba05f82aac0'),
(159, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '53c2cea4af9540064a13d9f8132ca04e'),
(160, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'efa9eac74f6bffc6140c1d13661e5264'),
(161, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3ca0f312dbc30ecccccc7197ab5264b4'),
(162, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '37c877117a586d091364bca968d38a10'),
(163, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8eeb939105f7097686cfc6038ff33243'),
(164, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '90b65361be3d285d19ff3cd5e7dd00ae'),
(165, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'cd7e86d75d9101cd1f22aa521c693059'),
(166, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0d3ba9e6b84e7ab1903c8b7c87c6204c'),
(167, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '70db8085eb894699dcbff68663bdeedf'),
(168, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '25d14a2c22565696faf80505c2b8d373'),
(169, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '9319f3f023e5449eb327e4bdccdd4bf9'),
(170, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '850c62dfd1debfbfcbaf08542e1258d7'),
(171, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a243783e6c578e4ec89257eb4e901741'),
(172, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '9f8673c8bdf54bae667daa89a1df144b'),
(173, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7aad129eb739da6a2875fddc33d590ca'),
(174, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '05fcc986195a6cabbda65fd4ab6f3c66'),
(175, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '96953109937fe8580815355bfb740d2d'),
(176, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f17572e93de7531487b30c7ab45582e8'),
(177, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8b8781dd0f2332d1e163baf029b4fe54'),
(178, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3c5228868ee7ab0803cf15787f4d5df0'),
(179, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '44ad59b291b361d0dee39bed754b8e87'),
(180, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a8dc5d10a1d2929840be8aef8e309721'),
(181, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f136a4f5890765ac7cb421e2cc7cd9b7'),
(182, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '474921917d2314b21775442f521a08d1'),
(183, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '593e3a3dca61c65ab2f1f58f7ac77065'),
(184, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8e40aebeff817eaebb196d3b6c4a6319'),
(185, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c4d50f01025039a9aa139571e75972ad'),
(186, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '77379ea5f0ef7bc63e0d0d2b9a900000'),
(187, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8cd1bcff5b8b1671c5c064f36bc49144'),
(188, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a9ee6480171fba8e9e4c8776d5a2892c'),
(189, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '63cdfb87d1b4c6e12edf87d1089b4da3'),
(190, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6f3952e6214d826f9a2c048a6742cbe6'),
(191, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd78f87ba71534d59c3b517df5745f12a'),
(192, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7793b49f1009c94780da4d3c0e2cc1bb'),
(193, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2995499d777d29c28f8eda16685c25a6'),
(194, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd9f252e945a880d402361398961b7ddd'),
(195, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd2f4a5d3a7d82167ca0ab8a23668067c'),
(196, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '9d701a79f85866a4b06bdfd7a1177e20'),
(197, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2e5f8a1ef19f9897d3e731065060d7bb'),
(198, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7a1ef439d529fe6efa18fd86cc98c923'),
(199, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b40d97fc8f3605d45f24cb2bee61857c'),
(200, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a076e8a52581573f97a8bc741d8d0314'),
(201, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e94ed250110744eeb73354b1e43a6841'),
(202, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '9c8e6e300ffaefdd3ddaae1efaa273ff'),
(203, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd7e1a28fe05ae66d7b6c9cc49ce5028e'),
(204, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b0be399e2843351d11704a14b210985d'),
(205, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f6513d204ce825a0e51a81ddc055d610'),
(206, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'cd67d9b7ee1d000a0ecb3165c5f25960'),
(207, 'ghie.guerrero@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '57732a203988d71ae34aa82feca09037'),
(208, 'ghie.guerrero@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '5111420735a46b6808d57582ff6e12d0'),
(209, 'ghie.guerrero@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '646142c004e23e514aed00dc08f10c45'),
(210, 'shen.layug@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'befe7a127ea2c352de4a40ee34d98c7e'),
(211, 'shen.layug@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '9e8e47080ad4f93f54e859d4e6a2f7d3'),
(212, 'shen.layug@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7a4ec3b5dfdc670c7485c0e827c29fa1'),
(213, 'shen.layug@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '87da64e2a80c742b16f6421654320e17'),
(214, 'shen.layug@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ed577cd28588f19b573885b38e40cb39'),
(215, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4cbbaac2c4ff23e0c6142928b698fa3c'),
(216, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '23108cbbb4dffb9dbf77d942e49c857d'),
(217, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '57cb7ab01c8919899d097ceec89693c4'),
(218, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f5408d8ec93b7ac10cc28149a99a7b42'),
(219, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '72f7274c20554bff74f2b2aef6a86778'),
(220, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a1c5128ed4194371ac29c9442706d209'),
(221, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '63db21ccbf3f72b820a4fc2db11cb145'),
(222, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '5f0daa5276888027542aa456e4ae6ab3'),
(223, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c6423108d8529b8f1d4096f03d2de6e0'),
(224, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '588fa0f2dafc803e439f53790cb988c1'),
(225, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f2e677e58588fcdf22823847ab0491c4'),
(226, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8486a3964769df758d5bbeb4491373ff'),
(227, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e0ea1008d48f54e2735505b5f598c37c'),
(228, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8ba10193fed6b5b9918184c2a9df01ce'),
(229, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '5d246fb66151ae1910acc47f1e1ad1f8'),
(230, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a1ea788471ccc629962ebfc763278009'),
(231, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'abbfba8f2240995a6a51daf5eff8e4de'),
(232, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ad9b61656a279bded2955a46debc6c84'),
(233, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd73075121c5f9404b79b0bf26a6dbd73'),
(234, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '01af4dd389adf2ba71cfdbf82c2a4a55'),
(235, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '215162b415fa5174e93acb2474306780'),
(236, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8e06d455426b02d421bb3cf70d8b88ff'),
(237, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '46b52c0b1e43fc965bba3caca235304d'),
(238, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '11f2d141227d93276603b96e61fa72aa'),
(239, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0aafe5df360bd3eda1a67fda150eb579'),
(240, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f059f2efee99075ddc222a074774c8cf'),
(241, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f5c34eba5b0afb6c88b79d5146363821'),
(242, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '919c8fc467645d3dadb71dd2802bc8db'),
(243, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '853c58b462bb79a3d8edae19f98579a6'),
(244, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e951a01b14626200227201f4256b9f02'),
(245, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '61d29be03c7787b359210f19447f3b99'),
(246, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e68b34e8bb5fb7b957ec39b5478e4948'),
(247, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6098604b94a2caa91a7dcc17d71f3398'),
(248, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '50ae7de5e6804eebddc298e4513980d3'),
(249, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4977dff032bdc52e4b66d77eb7eef2bd'),
(250, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '95e48f0286449c4dc9277b4c6314fb96'),
(251, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4c2d0b0593b9de600315e5fa74fec0d5'),
(252, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2a68379de46f7c869d320cefbf19391e'),
(253, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '871c969741126882ba1dbdeb8f9f8ff6'),
(254, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '1a8dab47c6a250d89426b8bf3187e5f8'),
(255, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '81d535e4ace5c4f2679844ea17d48040'),
(256, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '2a0788ad62c42fbd1d116c6d1b3926a8'),
(257, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'eb383c0dc05575a7fddf563849931176'),
(258, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '5cb2b105edca2f462753572f0daa22ff'),
(259, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f39e4ee923bd7a3387e0b17b2a903d10'),
(260, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a8f1cfbbea111269a65553eb61951809'),
(261, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '90b79768a18c073552d16d4edbb24d91'),
(262, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0e8a5d2c20af965037ad30d57a69223e'),
(263, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2e60c90a1ef96869912ee505d821e8e8'),
(264, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e182ded8c8414b0e969d54e830980bec'),
(265, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '116a4f80d372625905ff9fc309abcda4'),
(266, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7000747e17b9e70385ac893897e73937'),
(267, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '5140d1f7b76f740caa0eac1aee46ff7d'),
(268, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '14bffcf0172bbd0e44cf4ec2e74ecd36'),
(269, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a0ab2d4d4c049aec0e6fd69508fdd5d2'),
(270, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '40a30168ddf547f5b552179b6eb4e618'),
(271, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'db388991f6cfdb525b7dece647beacd4'),
(272, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6dd11946b900845f9c961d246253ef14'),
(273, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0dc23e852d3b931000dd564852ea55cd'),
(274, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '51e32551bd67877a7136b976a15f9c56'),
(275, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '67ec80e61de7a9f29885e62a22a4e028'),
(276, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd11d9146f3badee0a01ad9495d6853a6'),
(277, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e53a25a1a58e3211535d41a5f5a05ed4'),
(278, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '236ca03e2ace71113b10a304acb867ce'),
(279, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e747130904fc3f77583041f0dee8ec62'),
(280, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'a46673c33ab0f3224abe4ca9ce20d756'),
(281, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '97fd4989f8841b5f39d87cbce1a58414'),
(282, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'cf7b895424b8c0da7e843759c57685c0'),
(283, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c4686f377a663a41c829172f11ec792c'),
(284, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ed659f2d92bc1a6b9731220e3f55fe4f'),
(285, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e4d854e2b6a14d21ac2d7f0fec80b525'),
(286, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '07de8ab814c8430cd1f5b6682003dfad'),
(287, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c158824a07c7c8fabad85f795dacc5bb'),
(288, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '34688b64eca0e0a17b4fb035fa119cc6'),
(289, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '367c1e184326a4fc78acb71b497261b8'),
(290, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '490b82e3cc0cd52bd5a0ae4b0869db36'),
(291, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd0a767a83de390020d1977bc26b4d931'),
(292, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '4c2c8c3f99b7a423073b189c0429da73'),
(293, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1010ea85e472d1d5891d20a6d0f49ced'),
(294, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '07d4b0693202c10ef5b06ce286f902b8'),
(295, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e80593b9f8f83b62a1b0c58d407bdffc'),
(296, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6355c7b6d3845f8a442c8e24843c7a45'),
(297, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '345f7599d94e5b6aa66307504dcc09b0'),
(298, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '36e0fb733cf9f85c9c9c39e324ff9ec4'),
(299, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b8c20fc831f530bbb936505697e27473'),
(300, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '49438fa1460b5456af3e8f93c2fc4cc4'),
(301, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '805540bb27457067302d1705c92f54fb'),
(302, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c65a1252d35b15757b21961101918ec9'),
(303, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b4360fdcb732fe5c744f3f683b4c11e8'),
(304, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '8ab977005a58d3a48069150e28e1017c'),
(305, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '79fe0749000701de01a37d2a315a36c3'),
(306, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c6e9971456f29d2f0728697973ba14f6'),
(307, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'fe2e9848a7781529fba308b4b43f19d2'),
(308, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', '3532e12b866c16d71416320cb0a15a38'),
(309, 'employer@email.com', 'd41d8cd98f00b204e9800998ecf8427e', 'd5bbafebe2ca0b496194450d53dcc134'),
(310, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '22a507157afbba568481420bbff53c62'),
(311, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '70163f48daa5d5ae2eb033fec4a8b290'),
(312, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '731b7fc9ef57aa15a6f2d7ff0b72993a'),
(313, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ac43304fe54b826f1ff1fc7132ba66a2'),
(314, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0e7669f368c89c0380e7eb44e109cac8'),
(315, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'cdff3d8d1fb57f8a5210b62086b59744'),
(316, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6c92c026486bacf80fa5b0a151072cc5'),
(317, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2927e45e816a9a1087cec41805bdf109'),
(318, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '9ce55bab66a5723d98389359c1d8d548'),
(319, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6c8a894ad49277c56893f2ba6422b1bf'),
(320, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '6d108057ebbbfe19af3116f12ed5cc51'),
(321, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '38bd80d474e608e636ca3ac9e5649a34'),
(322, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3bf5885627d5b981481fe19c691842db'),
(323, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'e5fed0b35129b971dcf70a18372ae8f0'),
(324, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '78a77cb1e5bdbe201e7cf8d7c5044ded'),
(325, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '219df2ca6075424a8214e248c0cd03a9'),
(326, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'f6dfebacacd57e06e6de4a3a86cd767a'),
(327, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'c6fbc98e4047b7bbdc1e4525cfbbd2c1'),
(328, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'b03f3634b369e45e3a1b9b083a2a0921'),
(329, 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '3f98a25d843007d3d0d608338d0506d9');

-- --------------------------------------------------------

--
-- Table structure for table `tesdareps_certification`
--

CREATE TABLE IF NOT EXISTS `tesdareps_certification` (
  `tesdarepid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `contactno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tesdarepid`),
  KEY `fk_trUSERID` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tesdareps_certification`
--

INSERT INTO `tesdareps_certification` (`tesdarepid`, `userid`, `firstname`, `middlename`, `lastname`, `contactno`) VALUES
(1, 32, 'Jason', 'Schertz', 'Siebel', '09063452222'),
(2, 171, 'Angela', 'Aquio', 'Gaston', '09224445678'),
(3, 297, 'Heart', 'S.', 'Salinto', '09334567566'),
(4, 298, 'Mary Cynthia', 'L.', 'Longa', '0907831234'),
(5, 299, 'Miguel Tim', 'G.', 'Co', '09034445678'),
(6, 300, 'Marlon', 'O.', 'Onasis', '09223451267'),
(7, 301, 'Maria Beatriz', 'F.', 'Yu', '09221345736'),
(8, 302, 'Christine', 'L.', 'Suntay', '09223346109'),
(9, 303, 'Joyce', 'S.', 'Cedeno', '09221291919'),
(10, 304, 'Justin', 'M. ', 'Tee', '09062333333'),
(11, 305, 'Chico', 'L.', 'Musngi', '09062221849'),
(12, 306, 'Catherine', 'D.', 'Dela Cruz', '09082261201'),
(13, 334, 'T11', 'T', 'T11', '09062341939'),
(14, 335, 'T12', 'T', 'T12', '09062341939'),
(15, 336, 'T13', 'T', 'T13', '09062341939'),
(16, 339, 'T16', 'T', 'T16', '09062341939'),
(17, 340, 'T17', 'T', 'T17', '09062341939'),
(18, 341, 'T14', 'T', 'T14', '09062341939'),
(19, 342, 'T15', 'T', 'T15', '09062341939');

-- --------------------------------------------------------

--
-- Table structure for table `tesdareps_districts`
--

CREATE TABLE IF NOT EXISTS `tesdareps_districts` (
  `assignid` int(11) NOT NULL AUTO_INCREMENT,
  `tesdarepid` int(11) NOT NULL,
  `districtid` int(11) NOT NULL,
  `isin` tinyint(4) NOT NULL DEFAULT '1',
  `dateassigned` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`assignid`),
  KEY `fk_tdTESDAREPID` (`tesdarepid`),
  KEY `fk_tdDISTRICTID` (`districtid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tesdareps_districts`
--

INSERT INTO `tesdareps_districts` (`assignid`, `tesdarepid`, `districtid`, `isin`, `dateassigned`) VALUES
(1, 1, 1, 1, '2013-06-28 13:15:30'),
(2, 2, 1, 1, '2013-06-28 13:15:30'),
(3, 3, 2, 1, '2013-07-27 14:31:23'),
(4, 4, 2, 1, '2013-07-27 14:32:16'),
(5, 5, 4, 1, '2013-07-27 14:33:25'),
(6, 6, 4, 1, '2013-07-27 14:34:06'),
(7, 7, 5, 1, '2013-07-27 14:34:42'),
(8, 8, 5, 1, '2013-07-27 14:35:22'),
(9, 9, 6, 1, '2013-07-27 14:36:07'),
(10, 10, 6, 1, '2013-07-27 14:37:01'),
(11, 11, 7, 1, '2013-07-27 14:37:47'),
(12, 12, 7, 1, '2013-07-27 14:38:25'),
(13, 13, 8, 1, '2013-08-02 08:16:37'),
(14, 14, 14, 1, '2013-08-02 08:16:57'),
(15, 15, 18, 1, '2013-08-02 08:17:22'),
(16, 16, 35, 1, '2013-08-02 08:18:50'),
(17, 17, 40, 1, '2013-08-02 08:19:15'),
(18, 18, 23, 1, '2013-08-02 08:21:22'),
(19, 19, 30, 1, '2013-08-02 08:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `userpassword` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `usertype` varchar(45) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=402 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `userpassword`, `usertype`) VALUES
(1, 'meralco@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(14, 'gina.juan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(15, 'cartoon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(17, 'animators@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(20, 'sketch@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(28, 'formero@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(30, 'sanandres@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(32, '5star@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(35, 'nikki@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(44, 'genny@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(171, 'alexa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(172, 'mayorandy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(173, 'mayorlims@lims.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(174, 'jeven@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(175, 'katrina@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(176, 'mauricio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(177, 'troy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(178, 'geenie@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(179, 'carlo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(180, 'hally@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(181, 'adri@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(182, 'christine@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(183, 'audrey@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(184, 'nikka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(185, 'wowy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(186, 'kit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(187, 'meg@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(188, 'alyssa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(205, 'lindt@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(206, 'jigo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(207, 'james@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(208, 'jose@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(209, 'enzo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(210, 'rayver@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(211, 'bianca@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(222, 'karl@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', 'JOBADMIN'),
(223, 'cruz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(224, 'vic@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(225, 'cho@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(226, 'thayne@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(227, 'jenny@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(228, 'michaelong@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(229, 'pamamarisan@tesdancr.org.ph ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(230, 'muntiparlastapat@tesdancr.org.ph ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(231, 'camanava@tesdancr.org.ph', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(232, 'lencarus@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(233, 'tesdacar@pldtdsl.net ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(234, 'tesda_apayao@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(235, 'tesda_benguet@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(236, 'tesda_kalinga@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(237, 'tesda_ifugao@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(238, 'tesda_mp@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(239, 'tesda_ilocosnorte@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(240, 'tesda_ilocossur@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(241, 'tesda_launion@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(242, 'tesda_pangasinan@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(243, 'tesdabatanes@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(244, 'tesdacagayannorth@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(245, 'tesda_isabela03@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(246, 'tesda_nuevavizcaya@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(247, 'tesda_quirino@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(248, 'tesda_bataan@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(249, 'tesda_bulacan@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(250, 'tesda_nuevaecija@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(251, 'tesda_tarlac@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(252, 'tesdazambales@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(253, 'tesda_aurora@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(254, 'tesdapam@mozcom.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(255, 'tesdabatangas@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(256, 'tesda4a_cavite@yahoo.com.ph ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(257, 'tesda_laguna@yahoo.com.ph ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(258, 'tesdaquezon@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(259, 'tesda4a_rizal@yahoo.com.ph ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(260, 'tesda_marinduque@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(261, 'tesdaoccmin@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(262, 'tesdaormin@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(263, 'tesdapal@mozcom.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(264, 'tesda_romblon@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(265, 'bebstar10@yahoo.com ', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTDISTRICT'),
(271, 'ishrm@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(272, 'bernardocollege@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(273, 'ptsac@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(274, 'seamac@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(275, 'cmmst@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(276, 'epc@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(277, 'bowline@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(278, 'margaphil@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(279, 'smartpro@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(280, 'notip@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(288, 'michaelg@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(289, 'michelleco@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(290, 'martin145@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(291, 'miguel56@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(292, 'leegrane@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(293, 'lea89@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(294, 'victoria45@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(295, 'melljoy@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(296, 'chenmorales@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(297, 'tesdarep1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(298, 'tesdarep2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(299, 'tesdarep3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(300, 'tesdarep4@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(301, 'tesdarep5@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(302, 'tesdarep6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(303, 'tesdarep7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(304, 'tesdarep8@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(305, 'tesdarep9@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(306, 'tesdarep10@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTTESDAREP'),
(307, 'megan341@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSOR'),
(308, 'app31@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(309, 'app32@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(310, 'app33@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(311, 'app34@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(312, 'app35@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(313, 'app36@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(314, 'app37@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(315, 'app38@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(316, 'app39@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(317, 'app40@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(318, 'ac1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(319, 'ac2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(320, 'ac3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(321, 'ac4@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(322, 'ac5@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(323, 'ac6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(324, 'ac7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(325, 'ac8@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(326, 'ac9@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CERTASSESSMENTCENTER'),
(343, 'khaye@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(344, 'mr@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(345, 'gio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(346, 'clarisse@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(347, 'nalig@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(348, 'luigi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(349, 'gelo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(350, 'jm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(351, 'nero@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(352, 'jp@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(353, 'jk@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(354, 'mariel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(355, 'will@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(356, 'angela@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(357, 'leonard@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(358, 'yo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(359, 'marina@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(360, 'matthew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(361, 'sydney@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(362, 'neomi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(363, 'erika@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(364, 'stef@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(365, 'jefferson@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(366, 'chen@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(367, 'ikee@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(368, 'ina@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(369, 'royce@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(370, 'martin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(371, 'jeron@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(372, 'arnold@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(373, 'jeric@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(374, 'thomas@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(375, 'bascugin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(376, 'aldous@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(377, 'mj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(378, 'michael@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(379, 'rosenie@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(380, 'noel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(381, 'gerald@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(382, 'kaela@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(383, 'francis@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(384, 'gino@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(385, 'paul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(386, 'ronald@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'APPLICANT'),
(387, 'premiere@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(388, 'bellevue@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(389, 'diamond@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(390, 'shangrila@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(391, 'hyatt@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(392, 'cocacola@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(393, 'sanmiguel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(394, 'png@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(395, 'nestle@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(396, 'dell@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(397, 'fujitsu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(398, 'panasonic@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(399, 'apple@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(400, 'samsung@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER'),
(401, 'hp@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'EMPLOYER');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

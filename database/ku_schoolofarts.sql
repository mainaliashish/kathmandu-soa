-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 03:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ku_schoolofarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `cover_photo` varchar(100) NOT NULL,
  `about_us_title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `fb_page_link` varchar(200) NOT NULL,
  `twit_page_link` varchar(200) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `cover_photo`, `about_us_title`, `description`, `fb_page_link`, `twit_page_link`, `update_date`) VALUES
(0, 'kuart_bg.jpg', 'About KUSOA Journey.', '<p>Center for Art and Design (KU Art+Design) &ndash; with a very short yet impressive history is committed towards establishing a benchmark in fine art education in Nepal. Realizing this need for qualitative fine art education in Nepal, Kathmandu University established Art and Design program in 2003 under School of Arts. With the initiation of key person Mr. Aidan Warlow, Director, M.A, Oxford, along with two other faculty members Mr. Rabindra Puri, M.A. Bremen and Mr. Sujan Chitrakar, M.F.A. New Delhi, and an assistant administrative staff Mr. Gopal Magar, a one-year Diploma course in Fine Arts was launched. Set up on the top floor that was rented off of a public school in a historic vicinity of Durbar Square, Bhaktapur, the first batch comprised of only six students.<br /><br />The following year, it commenced three-year Bachelor of Fine Arts (BFA) in another building that provided a larger studio area, a small exhibition space and better natural lighting. The BFA course offered students to major in painting and sculpture, while introduced Graphic Design as a BFA course for the very first time in Nepal.<br /><br />Keeping in tune with the changing times, it modified the three-year BFA course format to four-years in the year 2005. Unfortunately, Mr. Warlow could not continue as the Director and the responsibilities were handed over to Mr. Sujan Chitrakar, who now heads the center as Academic Program Coordinator.<br /><br />In the year 2007, KU Art+Design shifted to a new location at the outskirt of Kathmandu, where it now runs four-year bachelor programs in Studio Art and Graphic Communication. Along with Nepali students, the center also facilitates international students in short term courses in drawing, painting, sculpture, ceramics, photography etc. KU Art+Design has seven full-time faculty members and twenty-five plus visiting faculty members. The faculty and student ratio is 1:4.<br /><br />KU Art+Design is steadily developing and continually evolving to build strong international connection through established art institutions and organizations. KU Art+Design is committed to contribute to the creative visual culture in Nepal, not only by approaching and involving it in various means of contemporary art practices but also respecting and revitalizing its rich artistic and cultural heritage.</p>', 'https://www.facebook.com/', '', '2017-07-13 03:54:25'),
(0, '', 'About KUSOA Journey.', '<p>Center for Art and Design (KU Art+Design) &ndash; with a very short yet impressive history is committed towards establishing a benchmark in fine art education in Nepal. Realizing this need for qualitative fine art education in Nepal, Kathmandu University established Art and Design program in 2003 under School of Arts. With the initiation of key person Mr. Aidan Warlow, Director, M.A, Oxford, along with two other faculty members Mr. Rabindra Puri, M.A. Bremen and Mr. Sujan Chitrakar, M.F.A. New Delhi, and an assistant administrative staff Mr. Gopal Magar, a one-year Diploma course in Fine Arts was launched. Set up on the top floor that was rented off of a public school in a historic vicinity of Durbar Square, Bhaktapur, the first batch comprised of only six students.<br /><br />The following year, it commenced three-year Bachelor of Fine Arts (BFA) in another building that provided a larger studio area, a small exhibition space and better natural lighting. The BFA course offered students to major in painting and sculpture, while introduced Graphic Design as a BFA course for the very first time in Nepal.<br /><br />Keeping in tune with the changing times, it modified the three-year BFA course format to four-years in the year 2005. Unfortunately, Mr. Warlow could not continue as the Director and the responsibilities were handed over to Mr. Sujan Chitrakar, who now heads the center as Academic Program Coordinator.<br /><br />In the year 2007, KU Art+Design shifted to a new location at the outskirt of Kathmandu, where it now runs four-year bachelor programs in Studio Art and Graphic Communication. Along with Nepali students, the center also facilitates international students in short term courses in drawing, painting, sculpture, ceramics, photography etc. KU Art+Design has seven full-time faculty members and twenty-five plus visiting faculty members. The faculty and student ratio is 1:4.<br /><br />KU Art+Design is steadily developing and continually evolving to build strong international connection through established art institutions and organizations. KU Art+Design is committed to contribute to the creative visual culture in Nepal, not only by approaching and involving it in various means of contemporary art practices but also respecting and revitalizing its rich artistic and cultural heritage.</p>', 'https://www.facebook.com/', '', '2017-07-13 04:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_ID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `a_id` int(11) NOT NULL,
  `a_title` text NOT NULL,
  `a_description` longtext NOT NULL,
  `a_pdf` varchar(200) NOT NULL,
  `posted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`a_id`, `a_title`, `a_description`, `a_pdf`, `posted_date`) VALUES
(2, 'Announcement title of ku school of arts-1', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '', '2017-07-13 15:03:20'),
(3, 'Announcement title of ku school of arts-2', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', 'doc.pdf', '2017-07-13 15:03:53'),
(4, 'Announcement title of ku school of arts-3', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', 'doc.pdf', '2017-07-13 15:06:02'),
(5, 'Announcement title of ku school of arts-4', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', 'doc.pdf', '2017-07-13 15:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_of` varchar(100) NOT NULL,
  `banner_name` varchar(200) NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_of`, `banner_name`, `updated_date`) VALUES
(1, 'aboutus', 'bg_kuart6.jpg', '0000-00-00 00:00:00'),
(2, 'dean', 'graduate.jpg', '0000-00-00 00:00:00'),
(3, 'collaboration', 'collaboration.jpg', '0000-00-00 00:00:00'),
(4, 'graduation', 'kuart_background4.jpg', '0000-00-00 00:00:00'),
(5, 'undergraduation', 'h.png', '0000-00-00 00:00:00'),
(6, 'announcement', 'a.jpg', '0000-00-00 00:00:00'),
(7, 'news', 'kuart_bg3.jpg', '0000-00-00 00:00:00'),
(8, 'studentlife', 'natural.jpg', '0000-00-00 00:00:00'),
(9, 'contactus', 'college.jpg', '0000-00-00 00:00:00'),
(10, 'gallery', 'g.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `collaborations`
--

CREATE TABLE `collaborations` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `collaboration` longtext NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collaborations`
--

INSERT INTO `collaborations` (`id`, `description`, `collaboration`, `updated_date`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>', '<h3>Denmark</h3>\r\n<p>School of denmark</p>\r\n<p>School of denmark</p>\r\n<p>School of denmark</p>\r\n<p>School of denmark</p>\r\n<p>&nbsp;</p>', '2017-07-13 08:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `college_tour`
--

CREATE TABLE `college_tour` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_tour`
--

INSERT INTO `college_tour` (`id`, `title`, `link`, `description`, `updated_date`) VALUES
(1, 'Our College Tour', 'https://www.youtube.com/watch?v=M5MBJKfVQL0', '<p>The quick brown fox jumped over the lazy dog.The quick brown fox jumped over the lazy dog.The quick brown fox jumped over the lazy dog.</p>', '2017-07-13 14:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `university_name` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `full_location` varchar(200) NOT NULL,
  `post_box_num` varchar(150) NOT NULL,
  `contact_information1` varchar(150) NOT NULL,
  `contact_information2` varchar(150) NOT NULL,
  `web_site_link` varchar(150) NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `university_name`, `banner`, `full_location`, `post_box_num`, `contact_information1`, `contact_information2`, `web_site_link`, `updated_date`) VALUES
(1, 'Kathmandu University School of Arts', 'edu-banner3.jpg', 'Hattiban,Patan 44700,Nepal', '6250', '+977-01-000000', '+977-01-000000', 'kusoa@ku.edu.np', '2017-07-13 15:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `message_title` varchar(150) NOT NULL,
  `message` longtext NOT NULL,
  `cover_photo` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`id`, `full_name`, `message_title`, `message`, `cover_photo`, `update_date`) VALUES
(1, 'Name here', 'Our campuses are living laboratories for sustainability.', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.<br /><br /></p>', '', '2017-07-13 04:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `a_id` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `cover_photo` varchar(200) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `posted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`a_id`, `event_title`, `cover_photo`, `start_time`, `end_time`, `description`, `posted_date`) VALUES
(1, 'KUSOA Event-1', 'index.png', '2017-07-14 10:55', '2017-07-21 17:00', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2017-07-13 15:07:40'),
(2, 'KUSOA Event-2', 'g.png', '2017-07-22 10:00', '2017-07-21 16:55', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2017-07-13 15:08:49'),
(3, 'KUSOA Event-3', 'h.png', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2017-07-13 15:09:03'),
(4, 'KUSOA Event-4', 'kuart_bg3.jpg', '2017-07-14 10:30', '2017-07-28 17:00', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2017-07-13 15:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_members`
--

CREATE TABLE `faculty_members` (
  `a_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `website` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `cover_photo` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `Academic_qualification` text NOT NULL,
  `trainings` text NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_members`
--

INSERT INTO `faculty_members` (`a_id`, `full_name`, `position`, `department`, `email`, `phone_num`, `website`, `location`, `latitude`, `longitude`, `cover_photo`, `description`, `Academic_qualification`, `trainings`, `updated_date`) VALUES
(1, 'Sujan Chitrakar ', 'Academic Program Coordinator / Asst Prof', 'school of arts', '123@gmail.com', '+977-01-4485146', 'http://www.myweb.com.np', 'Jawalakhel, Nepal', '27.6680669', '85.3076646', 'Screen-Shot-2016-08-02-at-16_11_27-270x270.png', '<p>Sujan Chitrakar is associated with KU Art+Design since the time of its inception in 2003. He is heading the center as Academic Program Coordinator since 2005. Prior to this, he served as an adjunct faculty member at Tribhuwan University and Khwopa Engineering College. He is also a founding member of Sutra, an artist led group that primarily promoted alternative art practices in Nepal. With numerous national and international art workshops and regular exhibitions to his credit, he practices art extensively in public and private space &mdash; both individually and collectively He is involved in many art activities apart from teaching.</p>\r\n<p>&nbsp;</p>\r\n<p>To mention few, he co-curated First Kathmandu International Art Festival, 2009 and was creative consultant for Second Kathmandu International Art Festival, 2012 for which he designed several venues for the show. He also organizes PechaKucha Night Kathmandu to bring diverse creative people to share their works and experiences.</p>', '<p>Fulbright Fellow 2013-14 / MFA College of Arts, New Delhi, India</p>', '<p>Fulbright Fellow 2013-14 / MFA College of Arts, New Delhi, India</p>', '2017-07-12 14:16:56'),
(7, 'Pratima Thakali', 'Lecturer', 'no department', '', '+977-01-4485146', '', '', '27.6705377', '85.3170023', 'pratima-thakali-270x270.png', '', '<p>MFA / MA ADS Beaconhouse National University, Lahore, Pakistan<br /> BFA&nbsp;Beaconhouse National University, Lahore, Pakistan</p>', '', '2017-07-12 13:31:17'),
(8, 'Bhuwan Thapa', 'Teaching Assistant', 'no department', 'milanthapait@hotmail.com', '+977-01-4485146', 'Not availabel', 'Jawalakhel, Nepal', '', '', 'Bhuvan-Thapa-270x270.jpg', '<p>Thapa is a sculptor who also creates installations, site specific works. He has attended in various workshop such as, journey towards the earth, MT. Everest-8848 ART Project I, interactive 3D sculpture. He has also worked as an instructor in art engineering workshop at Kathmandu University, Dhulikhel.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;He is a president of Nepal Arts Foundation, secretary of ARAMBHA a group of contemporary sculptor of Nepal.He is involved in many group exhibition in &nbsp;Nepal and other countries such as Nepal &ndash;America Art exhibition, 15<sup>th</sup> Asian Art Biennale, Bangaladesh Shilpakala Academy, Dhaka. He is actively working in the field of creating various sculpture in search of new dimensional language</p>', '<p>MFA (Sculpture), Central Department Of Fine Art, Kathmandu, Nepal</p>', '', '2017-07-12 13:34:30'),
(9, 'Sagar Manandhar', 'Lecturer', 'no department', 'SagarManandhar@gmail.com', '+977-01-4485146', 'sagarcolor.wordpress.com', 'Jawalakhel, Nepal', '27.2800048', '2878113', 'sagar_kuart.jpg', '<p>Sagar Manandhar is associated with KU Art+ Design since 2011.</p>\r\n<p>Sagar is a painter and also experiments with various mixed media works. He had eleven major solo exhibitions and various group exhibitions in Nepal and different other countries including China, France, Netherland.</p>\r\n<p>Manandhar has also participated in different national and international art camps such as SAMHITA &ndash; National Level Seminar cum Workshop, New Delhi, India, Inspiration Manaslu, Samagaun, Manaslu. He has also worked in at Panjim, Goa in a residency organized by Indian Atelier.</p>', '<p>MFA, Banaras Hindu University, India</p>\r\n<p>BFA, Banaras Hindu University, India</p>', '', '2017-07-12 14:01:35'),
(10, 'Kirti Kaushal Joshi', 'Assistant Professor', '', '', '', '', '', '27.2800048', '2878113', 'Kirti_Kaushal_Joshi_photo-270x270.jpg', '<p>Joshi is a painter, who also creates installation and site- specific public art projects. Prior to becoming Asst. Professor he worked as art instructor at ELC learning centre, Shanghai, China and Shanghai Jiao Tong University ICEC, Shanghai, China. He was also a visiting lecturer in YGFL International Art Institute Jiang Xi, China.</p>\r\n<p>Mr. Joshi has also worked for EKTA Books Publication and KIIRTI Studio as a graphic Artist.</p>\r\n<p>His has participated in various national and international art events such as SAARC Artist Camp, Siddhartha Art Gallery, Jinagxi, China, Mural Painting (Fukuoka, Japan), Harbin International Snow Sculpture Contest to name few.</p>', '<p>MFA , Central Academy of Fine Arts, Beijing, China.</p>', '', '2017-07-12 14:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `a_id` int(11) NOT NULL,
  `gallery_title` text NOT NULL,
  `image` text NOT NULL,
  `posted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`a_id`, `gallery_title`, `image`, `posted_date`) VALUES
(1, 'Milan thapa', '[{"upload_file":"cropped-community-group.jpg"},{"upload_file":"e30af511cce572bee22d8ed3e821773fc6b1aa12-original1.jpg"},{"upload_file":"EC_banner1.jpg"},{"upload_file":"g1.png"},{"upload_file":"h.png"},{"upload_file":"index.png"}]', '2017-07-13 10:50:51'),
(3, 'member', '[{"upload_file":"pratima-thakali-270x270.png"},{"upload_file":"sagar_kuart.jpg"},{"upload_file":"Screen-Shot-2016-08-02-at-16_11_27-270x270.png"}]', '2017-07-13 11:33:27'),
(4, 'arts', '[{"upload_file":"g2.png"},{"upload_file":"index1.png"},{"upload_file":"kuart_bg31.jpg"}]', '2017-07-13 11:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `a_id` int(11) NOT NULL,
  `cover_photo` varchar(200) NOT NULL,
  `news_title` text NOT NULL,
  `description` longtext NOT NULL,
  `posted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`a_id`, `cover_photo`, `news_title`, `description`, `posted_date`) VALUES
(2, 'index.png', 'KUSOA News-1', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2017-07-13 15:15:27'),
(3, '', 'KUSOA News-2', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2017-07-13 15:17:10'),
(5, 'kuart_background4.jpg', 'KUSOA News-4', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2017-07-13 15:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice_title` text NOT NULL,
  `description` longtext NOT NULL,
  `notice_pdf` varchar(150) NOT NULL,
  `banner` varchar(150) NOT NULL,
  `posted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programs_with_detail`
--

CREATE TABLE `programs_with_detail` (
  `id` int(11) NOT NULL,
  `full_program_name` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `overview` text NOT NULL,
  `program_at_KU` mediumtext NOT NULL,
  `fees_and_funding` text NOT NULL,
  `how_to_apply` text NOT NULL,
  `program_duration` varchar(50) NOT NULL,
  `program_total_cost` varchar(50) NOT NULL,
  `teaching_language` varchar(50) NOT NULL,
  `program_banner` varchar(100) NOT NULL,
  `course_brochure` varchar(255) NOT NULL,
  `last_updated` datetime NOT NULL,
  `program_goals` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs_with_detail`
--

INSERT INTO `programs_with_detail` (`id`, `full_program_name`, `program`, `level`, `overview`, `program_at_KU`, `fees_and_funding`, `how_to_apply`, `program_duration`, `program_total_cost`, `teaching_language`, `program_banner`, `course_brochure`, `last_updated`, `program_goals`) VALUES
(1, 'Bachelor in Economics', 'Economics', 'Bachelor', '<p>Economics deals with production, distribution, consumption and &nbsp;management of goods and services. The study of economics is central to &nbsp;the understanding of business, markets, trade, government policies, &nbsp;international issues, globalization, health, development, and the &nbsp;environmental issues. It explores how decisions made by producers, &nbsp;distributers, consumers, businesses and governments affect our society &nbsp;and contributes to our understanding of policy design and business &nbsp;strategy.</p>\r\n<p>&nbsp;</p>', '<p>Bachelor in Economics (B-ECON) at Kathmandu University is a four-year degree course, designed for students intending to become qualified economists. The program is made for those students who want to make their careers in business, finance, international development, health, human resource management, marketing, management and research. It is also for those students who aim to work in financial markets, commodity markets, education sector, government institutions, banking sector, manufacturing sector, and insurance companies.</p>\r\n<p>B-ECON prepares students to understand individual and group decision making, the structure of markets and economies, and the relationship between regions within the global economy. Our teaching program emphasizes the value of working in teams and developing skills in communication, both oral and written.</p>\r\n<p>Studying Bachelor of Economics (B-ECON) at Kathmandu University will:</p>\r\n<div align="left">\r\n<ul>\r\n<li>provide an understanding of microeconomics, macroeconomics as well as econometrics and a range of other topics related to computer, mathematics and sociology</li>\r\n<li>equip students with employability skills such as leadership, teamwork, critical thinking, communication and problem solving</li>\r\n<li>provide students with an opportunity for learning, gaining exposure and networking through its internship program</li>\r\n<li>provide students with an opportunity to make an in-depth study in the area of their choice</li>\r\n</ul>\r\n</div>', '<p align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Six Month quis nostrud exercitation $6,400.00 nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>mention here the process.........................</p>', '4 Yrs.', '1000000', 'English,Nepali', 'EC_banner.jpg', '', '2017-07-09 08:17:06', ''),
(2, 'Bachelor in Communication Development', 'Community Development', 'Bachelor', '<p>Community Development deals with production, distribution, consumption and management of goods and services. The study of economics is central to the understanding of business, markets, trade, government policies, international issues, globalization, health, development, and the environmental issues. It explores how decisions made by producers, distributers, consumers, businesses and governments affect our society and contributes to our understanding of policy design and business strategy.</p>', '<p>Bachelor in Community Development (B-CommDev) at Kathmandu University is a four-year degree course, designed for students intending to become qualified economists. The program is made for those students who want to make their careers in business, finance, international development, health, human resource management, marketing, management and research. It is also for those students who aim to work in financial markets, commodity markets, education sector, government institutions, banking sector, manufacturing sector, and insurance companies. B-ECON prepares students to understand individual and group decision making, the structure of markets and economies, and the relationship between regions within the global economy. Our teaching program emphasizes the value of working in teams and developing skills in communication, both oral and written. Studying Bachelor of Economics (B-ECON) at Kathmandu University will:</p>', '<p>type fee structure here</p>', '<p>how to apply??</p>\r\n<p>write some process here!!</p>', '', '', '', '', '', '2017-07-07 14:43:38', ''),
(3, 'Bachelor in Media Study', 'Media Study', 'Bachelor', '<p>Bachelor in Media &nbsp;Study deals with production, distribution, consumption and management of goods and services. The study of economics is central to the understanding of business, markets, trade, government policies, international issues, globalization, health, development, and the environmental issues. It explores how decisions made by producers, distributers, consumers, businesses and governments affect our society and contributes to our understanding of policy design and business strategy.</p>', '<p>Bachelor in Economics (B-ECON) at Kathmandu University is a four-year degree course, designed for students intending to become qualified economists. The program is made for those students who want to make their careers in business, finance, international development, health, human resource management, marketing, management and research. It is also for those students who aim to work in financial markets, commodity markets, education sector, government institutions, banking sector, manufacturing sector, and insurance companies. B-ECON prepares students to understand individual and group decision making, the structure of markets and economies, and the relationship between regions within the global economy. Our teaching program emphasizes the value of working in teams and developing skills in communication, both oral and written. Studying Bachelor of Economics (B-ECON) at Kathmandu University will:</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>', '<p>write something here !!!</p>', '', '', '', 'media.png', '', '2017-07-02 14:58:59', 'dfaf'),
(4, 'Bachelor in Fine Arts', 'Fine Arts', 'Bachelor', '<p>Landscape Management and Heritage Studies deals with production, distribution, consumption and management of goods and services. The study of economics is central to the understanding of business, markets, trade, government policies, international issues, globalization, health, development, and the environmental issues. It explores how decisions made by producers, distributers, consumers, businesses and governments affect our society and contributes to our understanding of policy design and business strategy.</p>', '<p>Bachelor in Economics (B-ECON) at Kathmandu University is a four-year degree course, designed for students intending to become qualified economists. The program is made for those students who want to make their careers in business, finance, international development, health, human resource management, marketing, management and research. It is also for those students who aim to work in financial markets, commodity markets, education sector, government institutions, banking sector, manufacturing sector, and insurance companies. B-ECON prepares students to understand individual and group decision making, the structure of markets and economies, and the relationship between regions within the global economy. Our teaching program emphasizes the value of working in teams and developing skills in communication, both oral and written. Studying Bachelor of Economics (B-ECON) at Kathmandu University will:</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Six Month quis nostrud exercitation $6,400.00 nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>', '', '', '', '', '', '2017-07-02 12:21:59', 'fasdf'),
(5, 'Master in Development Studies', 'Development Studies', 'Master', '<p>The Master in Development Studies program trains students in the &nbsp;understanding of current development issues and exposes them to a &nbsp;comprehensive range of tools and methods for the analysis of real-world &nbsp;development issues.</p>\r\n<p>Graduates can follow careers as development specialists and &nbsp;analysts in a wide variety of development agencies, both in the &nbsp;government and elsewhere.</p>', '<p>The <strong>Master in</strong> <strong>Development Studies</strong> <strong>(DEVS)</strong> at Kathmandu University is a multidisciplinary programme offered to meet the &nbsp;growing complexity of &nbsp;development &nbsp;activities.</p>\r\n<p>On completion of Masters in DEVS, students will have further developed their</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Knowledge, skills and understanding regarding contemporary high &nbsp;priority national and global development issues, and the underlying &nbsp;debate</li>\r\n<li>Basic technical skills to effectively conduct research and analysis in different areas of development</li>\r\n<li>Ability to communicate and discuss development issues with peers</li>\r\n<li>Foundations for further studies in related fields</li>\r\n</ul>', '<p>write fees and funding here !!</p>', '<p>write process here !!</p>', '', '', '', 'cropped-community-group.jpg', 'internshipresume.docx', '2017-07-13 08:49:05', ''),
(6, 'Master in Human and Natural Resources', 'Human and Natural Resources', 'Master', '<p>Landscape Management and Heritage Studies deals with production, distribution, consumption and management of goods and services. The study of economics is central to the understanding of business, markets, trade, government policies, international issues, globalization, health, development, and the environmental issues. It explores how decisions made by producers, distributers, consumers, businesses and governments affect our society and contributes to our understanding of policy design and business strategy.ffff</p>', '<p>Bachelor in Economics (B-ECON) at Kathmandu University is a four-year degree course, designed for students intending to become qualified economists. The program is made for those students who want to make their careers in business, finance, international development, health, human resource management, marketing, management and research. It is also for those students who aim to work in financial markets, commodity markets, education sector, government institutions, banking sector, manufacturing sector, and insurance companies. B-ECON prepares students to understand individual and group decision making, the structure of markets and economies, and the relationship between regions within the global economy. Our teaching program emphasizes the value of working in teams and developing skills in communication, both oral and written. Studying Bachelor of Economics (B-ECON) at Kathmandu University will:</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Six Month quis nostrud exercitation $6,400.00 nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>', '4 Yrs.', '', '', 'natural.jpg', '', '2017-07-08 19:19:02', 'fadfa');

-- --------------------------------------------------------

--
-- Table structure for table `program_interested_visitors`
--

CREATE TABLE `program_interested_visitors` (
  `v_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `message` text NOT NULL,
  `program` varchar(100) NOT NULL,
  `seen` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `email_sent` int(11) NOT NULL,
  `email_sent_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `flag` int(11) NOT NULL,
  `inserted_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `image_name`, `flag`, `inserted_time`) VALUES
(1, 'ku_banner_1.jpg', 1, '0000-00-00 00:00:00'),
(2, 'ku_banner_2.jpg', 1, '0000-00-00 00:00:00'),
(3, 'ku_banner_3.jpg', 1, '0000-00-00 00:00:00'),
(4, 'ku_banner_4.jpg', 1, '0000-00-00 00:00:00'),
(5, 'ku_banner_5.jpg', 1, '0000-00-00 00:00:00'),
(6, 'ku_banner_6.jpg', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stdlife`
--

CREATE TABLE `stdlife` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `cover_photo` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdlife`
--

INSERT INTO `stdlife` (`id`, `title`, `cover_photo`, `description`, `updated_date`) VALUES
(1, 'Student life of KUSOA', 'kuart_bg3.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.<br /><br /><br /></p>', '2017-07-13 06:57:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collaborations`
--
ALTER TABLE `collaborations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_tour`
--
ALTER TABLE `college_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `faculty_members`
--
ALTER TABLE `faculty_members`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs_with_detail`
--
ALTER TABLE `programs_with_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_interested_visitors`
--
ALTER TABLE `program_interested_visitors`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `collaborations`
--
ALTER TABLE `collaborations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `college_tour`
--
ALTER TABLE `college_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dean`
--
ALTER TABLE `dean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faculty_members`
--
ALTER TABLE `faculty_members`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programs_with_detail`
--
ALTER TABLE `programs_with_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `program_interested_visitors`
--
ALTER TABLE `program_interested_visitors`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

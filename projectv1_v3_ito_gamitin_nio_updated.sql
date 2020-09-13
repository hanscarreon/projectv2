-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2020 at 05:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `chat_text` text NOT NULL,
  `chat_status` enum('published','draft','deleted') NOT NULL,
  `chat_receiver_status` enum('inbox','recieved','seen') NOT NULL,
  `chat_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `chat_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `sender_id`, `reciever_id`, `chat_text`, `chat_status`, `chat_receiver_status`, `chat_created`, `chat_updated`) VALUES
(1, 2, 3, 'test', 'published', 'inbox', '2020-08-25 14:53:04', '0000-00-00 00:00:00'),
(2, 2, 3, 'anyare', 'published', 'inbox', '2020-08-25 15:00:37', '0000-00-00 00:00:00'),
(3, 3, 2, 'asdasd ', 'published', 'inbox', '2020-08-25 15:12:23', '0000-00-00 00:00:00'),
(4, 3, 2, 'anak pota ka pahirap ka', 'published', 'inbox', '2020-08-25 15:12:38', '0000-00-00 00:00:00'),
(5, 3, 2, 'tessss', 'published', 'inbox', '2020-08-25 15:13:43', '0000-00-00 00:00:00'),
(6, 3, 2, 'response??', 'published', 'inbox', '2020-08-25 15:14:14', '0000-00-00 00:00:00'),
(7, 3, 2, 'res', 'published', 'inbox', '2020-08-25 15:14:33', '0000-00-00 00:00:00'),
(8, 13, 2, 'hellooo mic test', 'published', 'inbox', '2020-09-06 16:25:55', '0000-00-00 00:00:00'),
(9, 13, 2, 'mic test', 'published', 'inbox', '2020-09-06 16:26:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sentimend_meeting`
--

CREATE TABLE `sentimend_meeting` (
  `meet_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `meet_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `meet_file` text NOT NULL,
  `meet_note` text NOT NULL,
  `meet_case` enum('waiting','online','done','resched') NOT NULL,
  `meet_status` enum('published','draft','deleted') NOT NULL,
  `meet_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `meet_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `meet_mark` enum('none','plan','follow') NOT NULL,
  `meet_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentimend_meeting`
--

INSERT INTO `sentimend_meeting` (`meet_id`, `case_id`, `stud_id`, `adv_id`, `meet_date`, `meet_file`, `meet_note`, `meet_case`, `meet_status`, `meet_created`, `meet_updated`, `meet_mark`, `meet_link`) VALUES
(1, 1, 2, 3, '2020-08-05 15:20:36', '', 'proceed to plan', 'done', 'published', '2020-08-15 07:51:25', '0000-00-00 00:00:00', 'plan', ''),
(2, 6, 2, 3, '2020-08-15 15:13:08', '', 'tapos na finish', 'done', 'published', '2020-08-15 14:17:00', '2020-08-16 15:46:54', 'none', ''),
(3, 2, 2, 3, '2020-08-29 14:18:00', '', 'dalin sa mental', 'done', 'published', '2020-08-15 14:18:03', '2020-08-16 15:46:24', 'none', ''),
(4, 1, 2, 3, '2020-08-16 15:35:44', '', '', 'waiting', 'deleted', '2020-08-16 15:35:44', '0000-00-00 00:00:00', 'none', ''),
(5, 1, 2, 3, '2020-08-16 15:38:11', '', 'ulit pa', 'done', 'published', '2020-08-16 15:38:11', '0000-00-00 00:00:00', 'plan', ''),
(6, 1, 2, 3, '2020-08-16 15:39:52', '', '', 'resched', 'published', '2020-08-16 15:39:52', '2020-08-19 13:58:09', 'follow', ''),
(7, 1, 2, 3, '2020-08-31 13:56:00', '', '', 'waiting', 'deleted', '2020-08-19 13:56:10', '0000-00-00 00:00:00', 'follow', ''),
(8, 1, 2, 3, '2020-08-31 13:58:00', '', 'sa wakas nakinig rin', 'done', 'published', '2020-08-19 13:58:09', '2020-08-23 14:59:13', 'follow', ''),
(9, 3, 2, 3, '2020-08-29 13:51:00', '', '', 'waiting', 'published', '2020-08-25 13:51:23', '0000-00-00 00:00:00', 'none', 'test'),
(10, 4, 2, 3, '2020-09-05 04:17:00', '', '', 'waiting', 'published', '2020-08-26 13:14:57', '0000-00-00 00:00:00', 'none', ''),
(11, 47, 14, 13, '2020-09-18 07:29:00', '', '', 'waiting', 'published', '2020-09-07 07:29:53', '0000-00-00 00:00:00', 'none', '');

-- --------------------------------------------------------

--
-- Table structure for table `sentiment_case`
--

CREATE TABLE `sentiment_case` (
  `case_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `case_text` text NOT NULL,
  `case_study` enum('positive','neutral','negative') NOT NULL,
  `case_note` text NOT NULL,
  `case_con` enum('ongoing','meeting','closed','recommended','plan') NOT NULL,
  `case_status` enum('published','draft','deleted') NOT NULL,
  `case_file` text NOT NULL,
  `case_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `case_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `case_neg_percent` text NOT NULL,
  `case_neg` int(11) NOT NULL,
  `case_mid_percent` text NOT NULL,
  `case_mid` int(11) NOT NULL,
  `case_pos_percent` text NOT NULL,
  `case_pos` int(11) NOT NULL,
  `case_total_lines` int(11) NOT NULL,
  `case_cause` text NOT NULL,
  `case_res` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentiment_case`
--

INSERT INTO `sentiment_case` (`case_id`, `user_id`, `case_text`, `case_study`, `case_note`, `case_con`, `case_status`, `case_file`, `case_created`, `case_updated`, `case_neg_percent`, `case_neg`, `case_mid_percent`, `case_mid`, `case_pos_percent`, `case_pos`, `case_total_lines`, `case_cause`, `case_res`) VALUES
(1, 2, 'fuck this idiot you are stupid mother fuckerssssssssss', 'negative', '', 'closed', 'published', '', '2020-08-23 14:59:13', '2020-08-23 14:59:13', '', 0, '', 0, '', 0, 0, '', ''),
(2, 2, 'fuckerssssssssss fuck this idiot you are stupid mother ', 'negative', '', 'recommended', 'published', '', '2020-08-16 15:46:24', '2020-08-16 15:46:24', '', 0, '', 0, '', 0, 0, '', ''),
(3, 2, ' fuck this idiot you fuckerssssssssss are stupid mother  fuck this idiot you fuckerssssssssss are stupid mother  fuck this idiot you fuckerssssssssss are stupid mother  fuck this idiot you fuckerssssssssss are stupid mother  fuck this idiot you fuckerssssssssss are stupid mother ', 'negative', '', 'meeting', 'published', '', '2020-08-25 13:51:23', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(4, 2, ' how it was? ', 'neutral', '', 'meeting', 'published', '', '2020-08-26 13:14:57', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(5, 2, ' find me something ', 'neutral', '', 'ongoing', 'published', '', '2020-08-18 13:13:43', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(6, 2, ' ok lets go ', 'positive', '', 'closed', 'published', '', '2020-08-18 13:04:03', '2020-08-16 15:46:54', '', 0, '', 0, '', 0, 0, '', ''),
(7, 2, ' this is it ', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 13:32:58', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(8, 2, ' you are great and good at the same time ', 'positive', '', 'ongoing', 'published', '', '2020-08-14 13:33:17', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(9, 2, 'how awesome you are i adore you because you\'re cool ', 'positive', '', 'ongoing', 'published', '', '2020-08-14 13:47:32', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(10, 2, 'this hell you shoud fuck this shit mother fucker ', 'negative', '', 'ongoing', 'published', '', '2020-08-14 13:59:30', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(11, 2, 'hello nice ', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 13:59:51', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(12, 2, 'follow up go ', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:00:06', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(13, 4, 'what ever', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:32:30', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(14, 4, 'nothing', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:32:46', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(15, 4, 'simple things', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:32:58', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(16, 4, 'this is bull shit mother fucker', 'negative', '', 'ongoing', 'published', '', '2020-08-14 14:35:42', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(17, 4, 'hell is coming you are idiot devil bastard', 'negative', '', 'ongoing', 'published', '', '2020-08-14 14:36:04', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(18, 4, 'simple and clean is nice thing', 'positive', '', 'ongoing', 'published', '', '2020-08-14 14:36:31', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(19, 4, 'we can do this just help each other', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:36:45', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(20, 4, 'i dont know', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:41:16', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(21, 4, 'ask some one not me!', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:41:24', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(22, 4, 'ask google', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:41:31', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(23, 4, 'did you see me?', 'neutral', '', 'ongoing', 'published', '', '2020-08-14 14:41:43', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(24, 8, 'let ok let go we can do this, its easy !!!', 'positive', '', 'ongoing', 'published', '', '2020-08-15 06:36:14', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(25, 8, 'let ok let go we can do this, its easy !!!', 'positive', '', 'ongoing', 'published', '', '2020-08-25 14:49:27', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(26, 12, 'test!', 'neutral', '', 'ongoing', 'published', '', '2020-08-26 15:09:48', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(27, 14, 'dd', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 18:53:43', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(28, 14, 'ugly', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 18:56:16', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(29, 14, 'analaysis ssss', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 18:57:06', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(30, 14, 'dsaddasd', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 18:57:23', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(31, 14, 'partse text', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 18:58:58', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(32, 14, 'partse text', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 18:59:16', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(33, 14, 'test', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:00:15', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(34, 14, 'testttttttt ', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:01:03', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(35, 14, 'wesss', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:01:12', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(36, 14, 'wewewas asd asd asd as', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:01:40', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(37, 14, 'sdasdas ', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:01:49', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(38, 14, 'dadasd', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:02:01', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(39, 14, 'dadasd', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:02:02', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(40, 14, 'sad dasd. ', 'negative', '', 'ongoing', 'published', '', '2020-09-06 19:02:08', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(41, 14, 'asdsadsa ', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:02:14', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(42, 14, 'ewewe ', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:03:54', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(43, 14, 'sads asd dasd', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:05:42', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(44, 14, 'sdasd a', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:06:05', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(45, 14, 'sadasd', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:06:14', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(46, 14, '  dsd. dsad', 'neutral', '', 'ongoing', 'published', '', '2020-09-06 19:06:24', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(47, 14, 'test ssss', 'neutral', '', 'meeting', 'published', '', '2020-09-07 07:29:53', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(48, 2, 'itlog', 'neutral', '', 'ongoing', 'published', '', '2020-09-07 08:48:51', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(49, 14, '{', 'positive', '', 'ongoing', 'deleted', '', '2020-09-13 15:50:34', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(50, 14, '{', 'positive', '', 'ongoing', 'deleted', '', '2020-09-13 15:50:32', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(51, 14, '{', 'positive', '', 'ongoing', 'deleted', '', '2020-09-07 14:52:48', '0000-00-00 00:00:00', '', 0, '', 0, '', 0, 0, '', ''),
(52, 14, '\nYou’ve probably heard the term sentiment analysis before, but perhaps never really took much notice of how important it can be for your company.\n\nBut you should. The term refers to mining the opinions of your customers. If done properly, sentiment analysis can reveal gold mines inside the thoughts and opinions of your customers.\n\nThere are dozens of different ways you can mine customer opinions. Once we’ve explained the perks of sentiment analysis, we’ll show you 10 ways opinion mining can help your business succeed and boost its bottom line.\n\nIf you are already putting sentiment analysis into practice, this blog will show you many ways of how to get better results with less effort.', 'neutral', '', 'ongoing', 'published', '', '2020-09-07 14:52:51', '0000-00-00 00:00:00', '0%', 0, '72.72727272727273%', 8, '27.27272727272727%', 3, 11, '', ''),
(53, 14, 'Analyze positive and negative mentions about your business. Sign up free. Protect your reputation with social media monitoring. Detect Potential Sales. Flip bad business reviews. Get Social Insights. Reach Customers. Fast. Over 100.000 brands. Protect your reputation.', 'neutral', '', 'ongoing', 'published', '', '2020-09-07 14:55:06', '0000-00-00 00:00:00', '10%', 1, '50%', 5, '40%', 4, 10, '', ''),
(54, 14, 'react app sentiment', 'neutral', '', 'ongoing', 'published', '', '2020-09-10 16:26:25', '0000-00-00 00:00:00', '0%', 0, '100%', 1, '0%', 0, 1, '', ''),
(55, 2, 'this is a test reponsen ugly', 'negative', '', 'ongoing', 'published', '', '2020-09-13 14:16:18', '0000-00-00 00:00:00', '100%', 1, '0%', 0, '0%', 0, 1, 'academic', 'email');

-- --------------------------------------------------------

--
-- Table structure for table `sentiment_plan`
--

CREATE TABLE `sentiment_plan` (
  `plan_id` int(11) NOT NULL,
  `meet_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `plan_file` text NOT NULL,
  `plan_case` enum('ongoing','closed','recommended','plan','done') NOT NULL,
  `plan_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `plan_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `plan_status` enum('published','draft','deleted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentiment_plan`
--

INSERT INTO `sentiment_plan` (`plan_id`, `meet_id`, `case_id`, `stud_id`, `adv_id`, `plan_file`, `plan_case`, `plan_created`, `plan_update`, `plan_status`) VALUES
(1, 1, 1, 2, 3, '', 'ongoing', '2020-09-07 07:42:02', '2020-08-22 18:32:30', 'deleted'),
(2, 1, 1, 2, 3, '', 'ongoing', '2020-09-07 07:42:06', '2020-08-23 16:26:30', 'published'),
(3, 5, 1, 2, 3, '', 'ongoing', '2020-09-07 07:42:05', '2020-08-23 16:08:43', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_fname` text NOT NULL,
  `user_lname` text NOT NULL,
  `user_mname` text NOT NULL,
  `user_address` text NOT NULL,
  `user_email` text NOT NULL,
  `user_role` enum('admin','student') NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_status` enum('published','draft','deleted') NOT NULL,
  `user_pos` enum('hs','col','elem') NOT NULL,
  `user_yr` text NOT NULL,
  `user_bod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_img` text NOT NULL,
  `user_gender` enum('none','male','female') NOT NULL,
  `user_messenger_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_fname`, `user_lname`, `user_mname`, `user_address`, `user_email`, `user_role`, `user_created`, `user_updated`, `user_status`, `user_pos`, `user_yr`, `user_bod`, `user_img`, `user_gender`, `user_messenger_link`) VALUES
(1, 'test123', 'E10ADC3949BA59ABBE56E057F20F883E', 'hans', 'carreon', 'aquino', 'val city', 'hans@gmail.com', 'admin', '2020-08-14 12:17:33', '0000-00-00 00:00:00', 'published', 'col', '', '0000-00-00 00:00:00', '', 'none', ''),
(2, 'colstud', 'E10ADC3949BA59ABBE56E057F20F883E', 'christian', 'carreon', 'aqunino', '', 'student1@gmail.com', 'student', '2020-08-14 12:49:30', '0000-00-00 00:00:00', 'published', 'col', '', '0000-00-00 00:00:00', '', 'none', ''),
(3, 'coladv', 'E10ADC3949BA59ABBE56E057F20F883E', 'hentai', 'des', 'kamen', '', 'col123@gmail.com', 'admin', '2020-08-14 12:52:05', '0000-00-00 00:00:00', 'published', 'col', '', '0000-00-00 00:00:00', '', 'none', ''),
(4, 'elemstud', 'E10ADC3949BA59ABBE56E057F20F883E', 'ben10', 'force', 'engeng', '', 'elem123@gmail.com', 'student', '2020-08-14 12:53:36', '0000-00-00 00:00:00', 'published', 'elem', '', '0000-00-00 00:00:00', '', 'none', ''),
(5, 'elemadv', 'E10ADC3949BA59ABBE56E057F20F883E', 'baby', 'malakas', 'ama', '', 'elemadv@gmail.com', 'admin', '2020-08-14 12:55:39', '0000-00-00 00:00:00', 'published', 'elem', '', '0000-00-00 00:00:00', '', 'none', ''),
(6, 'hsstud', 'E10ADC3949BA59ABBE56E057F20F883E', 'asiyong', 'toyo', 'salonganisa', '', 'hstud123@gmail.com', 'student', '2020-08-14 12:56:33', '0000-00-00 00:00:00', 'published', 'hs', '', '0000-00-00 00:00:00', '', 'none', ''),
(7, 'hsadv', 'E10ADC3949BA59ABBE56E057F20F883E', 'ash', 'banana', 'ketchup', '', 'hsadv@gmail.com', 'admin', '2020-08-14 12:57:35', '0000-00-00 00:00:00', 'published', 'hs', '', '0000-00-00 00:00:00', '', 'none', ''),
(8, 'colstud2', 'E10ADC3949BA59ABBE56E057F20F883E', 'rimuru', 'tempest', 'storm', '', 'colstud2@gmail.com', 'student', '2020-08-15 06:28:58', '0000-00-00 00:00:00', 'published', 'col', '', '0000-00-00 00:00:00', '', 'none', ''),
(9, 'ben10', 'E10ADC3949BA59ABBE56E057F20F883E', 'ben', '10', 'alien', '', 'ben10@gmail.com', 'student', '2020-08-25 16:12:58', '0000-00-00 00:00:00', 'published', 'col', '', '0000-00-00 00:00:00', '', 'none', ''),
(10, 'picolo123', 'E10ADC3949BA59ABBE56E057F20F883E', 'picolo', 'daimao', 'namekian', '', 'picolo@gmail.com', 'admin', '2020-08-25 16:23:21', '0000-00-00 00:00:00', 'published', 'col', '', '0000-00-00 00:00:00', '', 'none', ''),
(11, 'tanjiro123', 'E10ADC3949BA59ABBE56E057F20F883E', 'kamado', 'tanjiro', 'slayer', '', 'tanjiro@gmail.com', 'student', '2020-08-25 16:25:33', '0000-00-00 00:00:00', 'published', 'hs', '', '0000-00-00 00:00:00', '', 'none', ''),
(12, 'shiroe123', 'E10ADC3949BA59ABBE56E057F20F883E', 'shiroe', 'white', 'megame', '', 'shiroe123@gmail.com', 'student', '2020-08-25 16:27:02', '0000-00-00 00:00:00', 'published', 'col', '', '0000-00-00 00:00:00', '', 'none', ''),
(13, 'colGTO', 'e10adc3949ba59abbe56e057f20f883e', 'ben', 'furry', 'mac', 'ohio', 'colgto@jru.edu', 'admin', '2020-09-06 15:36:47', '0000-00-00 00:00:00', 'published', 'col', '1', '1986-02-18 16:00:00', '', 'male', ''),
(14, 'ben123', 'e10adc3949ba59abbe56e057f20f883e', 'Ben10', 'Manalotow', 'Tulfo', 'bukid', 'ben123@my.jru.edu', 'student', '2020-09-06 15:52:05', '0000-00-00 00:00:00', 'published', 'col', '3', '2000-06-12 16:00:00', '', 'male', ''),
(15, 'd0104afb-34c6-4959-915a-962c7e77f086', 'e10adc3949ba59abbe56e057f20f883e', 'alien', 'picolo', 'force', 'marilao', 'hans.kayce0898@gmail.com', 'student', '2020-09-13 09:05:08', '0000-00-00 00:00:00', 'published', 'hs', '3', '2020-09-21 16:00:00', '', 'male', ''),
(16, '54e15a63-c4e7-41d8-a571-1e654b1becad', 'e10adc3949ba59abbe56e057f20f883e', 'pangalan', 'apilido', 'gitna', 'bukids', 'student123@jru.edu', 'student', '2020-09-13 11:25:07', '0000-00-00 00:00:00', 'published', 'col', '2', '2019-02-06 16:00:00', '', 'male', ''),
(17, '12-3123123', 'e10adc3949ba59abbe56e057f20f883e', 'testf', 'testl', 'testm', 'jan lang', 'test@jru.edu', 'student', '2020-09-13 11:27:03', '0000-00-00 00:00:00', 'published', 'elem', '2', '2015-01-12 16:00:00', '', 'female', ''),
(18, '21-3123123', 'e10adc3949ba59abbe56e057f20f883e', '12312312', '123213123', '123123123', '123123123', '12345678@jru.edu', 'student', '2020-09-13 11:32:53', '0000-00-00 00:00:00', 'published', 'col', '3', '2020-09-12 16:00:00', '', 'male', ''),
(19, '21-3213213', 'e10adc3949ba59abbe56e057f20f883e', 'asadsad', 'hopia', 'tipas', '11222', 'jkhasdaskjdh@my.jru.edu', 'student', '2020-09-13 11:45:30', '0000-00-00 00:00:00', 'published', 'hs', '6', '2020-09-29 16:00:00', '', 'male', ''),
(20, '45-4545234', 'e10adc3949ba59abbe56e057f20f883e', 'Ben10', '12312312', '12312312', '234567890', '57577@jru.edu', 'student', '2020-09-13 11:59:21', '0000-00-00 00:00:00', 'published', 'col', '2', '0000-00-00 00:00:00', '', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `sentimend_meeting`
--
ALTER TABLE `sentimend_meeting`
  ADD PRIMARY KEY (`meet_id`);

--
-- Indexes for table `sentiment_case`
--
ALTER TABLE `sentiment_case`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `sentiment_plan`
--
ALTER TABLE `sentiment_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sentimend_meeting`
--
ALTER TABLE `sentimend_meeting`
  MODIFY `meet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sentiment_case`
--
ALTER TABLE `sentiment_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sentiment_plan`
--
ALTER TABLE `sentiment_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

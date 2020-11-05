-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 04:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentiment`
--

-- --------------------------------------------------------

--
-- Table structure for table `sentiment_case`
--

CREATE TABLE `sentiment_case` (
  `case_id` int(11) NOT NULL,
  `case_text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `meet_id` int(11) NOT NULL,
  `case_note` text NOT NULL,
  `case_con` enum('ongoing','meeting','closed','recommended','plan') NOT NULL,
  `case_status` enum('published','draft','deleted') NOT NULL,
  `case_file` text NOT NULL,
  `case_created` timestamp NULL DEFAULT NULL,
  `case_updates` timestamp NULL DEFAULT NULL,
  `case_result` text NOT NULL,
  `case_line` int(11) NOT NULL,
  `case_neg_percent` text NOT NULL,
  `case_neg` int(11) NOT NULL,
  `case_mid_percent` text NOT NULL,
  `case_mid` int(11) NOT NULL,
  `case_pos_percent` text NOT NULL,
  `case_pos` int(11) NOT NULL,
  `case_total_lines` int(11) NOT NULL,
  `case_reason` text NOT NULL,
  `case_cause` text NOT NULL,
  `case_res` enum('none','SMS','email','zoom','gmeet') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentiment_case`
--

INSERT INTO `sentiment_case` (`case_id`, `case_text`, `user_id`, `admin_id`, `meet_id`, `case_note`, `case_con`, `case_status`, `case_file`, `case_created`, `case_updates`, `case_result`, `case_line`, `case_neg_percent`, `case_neg`, `case_mid_percent`, `case_mid`, `case_pos_percent`, `case_pos`, `case_total_lines`, `case_reason`, `case_cause`, `case_res`) VALUES
(1, 'fukcking egg go die', 3, 1, 2, '', 'plan', 'published', '', '2020-10-27 09:14:04', '2020-11-01 03:38:58', 'negative', 1, '100%', 1, '0%', 0, '0%', 0, 0, 'peers,emotion', '', 'zoom'),
(2, 'good to team, lets go we can do it', 3, 1, 3, '', 'recommended', 'published', '', '2020-10-27 11:13:36', '2020-11-01 04:56:01', 'positive', 1, '0%', 0, '0%', 0, '100%', 1, 0, 'family,peers,relationship', '', 'email'),
(3, 'ljkashdajshdjkashd sad sadjh asjh sadh ajs', 3, 1, 0, '', 'ongoing', 'deleted', '', '2020-10-25 03:24:40', '2020-10-28 11:06:18', '', 0, '', 0, '', 0, '', 0, 0, 'family', '', 'email'),
(4, 'When I was in the library on June 25, 2020 two men are staring at me and I didn’t know them and after a minute 1 of them came to my table and said to me why am I staring to them and they want me to go out in the library and I said that I’m sorry but I don’t want any trouble and they said to me that. “FUCK YOU! you want to DIE!?” and then I reply to them ok I will go I’m sorry and then I was alone in 3rd floor to go to my classroom and when I enter to my class I see them and sitting in my subject so definitely they are my classmates so in the right side of the room they are vacant seat so I decide to go there. And they notice me and they staring me again and they go to my back of my seat and said to me “Now you’re in trouble common let’s fight in the comfort room', 3, 1, 6, '', 'meeting', 'published', '', '2020-10-28 01:47:00', '2020-11-01 03:11:23', 'negative', 3, '100%', 3, '0%', 0, '0%', 0, 0, 'academic,relationship', '', 'email'),
(5, 'Hello, my name is Jane Doe and I have a problem that’s why I don’t come to school it’s not because I have a problem with my academic or even my teacher, I just don’t want to go to school I don’t know why I am acting like this in these past few weeks. I just don’t want to go to school even my mother and my father are worried because of my mood. I just want you to help me with my condition. I just want to be normal.', 3, 1, 0, '', 'ongoing', 'published', '', '2020-10-27 03:37:34', '2020-11-01 01:48:48', 'neutral', 4, '50%', 2, '0%', 0, '50%', 2, 0, 'peers,relationship,emotion', '', 'SMS'),
(6, 'Good day, I have a problem in my Filipino subject because of my teacher. He always calls me idiot and some of my classmates are laughing at me so I probably don’t want to go to school and the same reason that I don’t want to go to school one of my classmates are bullying me. He always bumps me in the canteen even in the comfort room he punches me in my shoulder. I scared to tell my parents because I don’t want any trouble so I suggest to tell you using this application so maybe you can help me in my teacher even my classmates too.', 3, 1, 0, '', 'ongoing', 'published', '', '2020-10-27 03:38:06', '2020-11-01 01:47:36', 'neutral', 4, '50%', 2, '0%', 0, '50%', 2, 0, 'peers,relationship,emotion', '', 'SMS'),
(7, 'When I was in the comfort room on the first floor at Tuesday afternoon the group of student, I think 5 members in the group and I don’t know them either they want me to do what there are doing but I didn’t accept what they challenge to me, one of the member come on the front of my face and shouting one inch away from my ear and said fuck you mother fucker, I tried to yell back and shouting goes to hell with an angry tone after I shout it one of the members hit me in the face with his fist and I was trying to defend myself but one of the members kick me in my core and the other member hold by arm side by side and continuing to beat me after I\'m totally debilitated they are run out faster as they can until nobody can see what they did to me. I\'m afraid to talk with others about this issue because if the group sense that I\'m going to tell with anybody they\'re going to kill me silently so I’m hiding it for a very long time.', 3, 1, 4, '', 'closed', 'published', '', '2020-10-27 11:04:01', '2020-11-01 05:14:31', 'negative', 2, '100%', 2, '0%', 0, '0%', 0, 0, 'peers,relationship,emotion', '', 'SMS'),
(8, 'lets go let do this', 3, 1, 11, '', 'recommended', 'published', '', '2020-10-27 03:36:24', '2020-11-01 05:14:05', 'neutral', 1, '0%', 0, '100%', 1, '0%', 0, 0, 'family', '', 'email'),
(9, 'test', 3, 1, 9, '', 'meeting', 'published', '', '2020-11-01 12:29:18', '2020-10-31 11:29:47', 'neutral', 1, '0%', 0, '100%', 1, '0%', 0, 0, 'academic,family', '', 'email'),
(10, 'ugly shit', 3, 1, 10, '', 'meeting', 'published', '', '2020-11-01 12:29:14', '2020-11-01 02:12:30', 'negative', 1, '100%', 1, '0%', 0, '0%', 0, 0, 'relationship', '', 'email'),
(11, 'good job guys', 3, 1, 0, '', 'ongoing', 'published', '', '2020-11-01 02:21:03', NULL, 'positive', 1, '0%', 0, '0%', 0, '100%', 1, 0, 'academic,family', '', 'email'),
(12, 'what the fuck is this', 3, 1, 0, '', 'ongoing', 'published', '', '2020-11-01 02:21:34', NULL, 'negative', 1, '100%', 1, '0%', 0, '0%', 0, 0, 'family', '', 'SMS'),
(13, 'this is a test sentiement for test one account', 4, 1, 14, '', 'closed', 'published', '', '2020-11-02 05:34:49', '2020-11-02 06:54:24', 'neutral', 1, '0%', 0, '100%', 1, '0%', 0, 0, 'family,peers', '', 'email'),
(14, 'test', 5, 1, 0, '', 'ongoing', 'published', '', '2020-11-05 03:39:04', NULL, 'neutral', 1, '0%', 0, '100%', 1, '0%', 0, 0, 'academic,family,peers', '', 'gmeet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sentiment_case`
--
ALTER TABLE `sentiment_case`
  ADD PRIMARY KEY (`case_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sentiment_case`
--
ALTER TABLE `sentiment_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

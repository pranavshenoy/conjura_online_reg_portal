-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2017 at 04:34 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conjura`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `pre_reg` char(2) NOT NULL COMMENT 'y if advance payment required',
  `team` char(2) NOT NULL COMMENT 'y if its a team event'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `amount`, `pre_reg`, `team`) VALUES
(1001, 'voice_of_conjura', 100, 'n', 'n'),
(1002, 'unplugged', 400, 'n', 'y'),
(1003, 'solowestern', 100, 'n', 'n'),
(1004, 'overdrive', 400, 'n', 'y'),
(1005, 'dyad(duet)', 150, 'n', 'y'),
(1006, 'agnee', 400, 'n', 'y'),
(1007, 'dj_war', 500, 'n', 'y'),
(1008, 'spot_master', 100, 'n', 'n'),
(1009, 'reflection', 150, 'n', 'y'),
(1010, 'go_solo', 100, 'n', 'n'),
(1011, 'choreonight', 1500, 'n', 'y'),
(1012, 'monoact', 100, 'n', 'n'),
(1013, 'mime', 300, 'n', 'y'),
(1014, 'hraswa', 500, 'y', 'y'),
(1015, 'drama', 300, 'n', 'y'),
(1016, 'love_letter_writing', 50, 'n', 'n'),
(1017, 'jam', 50, 'n', 'n'),
(1018, 'haiku_writing', 50, 'n', 'n'),
(1019, 'debate', 100, 'n', 'n'),
(1020, 'recitation', 50, 'n', 'n'),
(1021, 'pencil_sketching', 50, 'n', 'n'),
(1022, 'painting', 50, 'n', 'n'),
(1023, 'mehendi', 50, 'n', 'n'),
(1024, 'face_painting', 50, 'n', 'n'),
(1025, 'collage', 50, 'n', 'n'),
(1026, 'clay_modelling', 50, 'n', 'n'),
(1027, 'mr_and_ms_conjura', 300, 'n', 'n'),
(1028, 'treasure_hunt', 200, 'n', 'y'),
(1029, 'graffiti', 100, 'n', 'y'),
(1030, 'hive_mind', 200, 'n', 'y'),
(1031, 'you_know_nothing', 100, 'n', 'y'),
(1032, 'badminton', 200, 'n', 'y'),
(1033, 'football', 300, 'n', 'y'),
(1034, 'cricket', 400, 'n', 'y'),
(1035, 'volleyball', 300, 'n', 'y'),
(1036, 'chess', 200, 'n', 'n'),
(1037, 'g_coder', 100, 'n', 'n'),
(1038, 'cadwar', 100, 'n', 'n'),
(1039, 'fabricato', 150, 'n', 'y'),
(1040, 'robo_gt', 300, 'n', 'y'),
(1041, 'envisage', 100, 'n', 'y'),
(1042, 'creativo', 150, 'n', 'y'),
(1043, 'engine_assembly', 150, 'n', 'y'),
(1044, 'contraption', 200, 'n', 'y'),
(1045, 'aqua_strike', 150, 'n', 'y'),
(1046, 'regatta', 100, 'n', 'n'),
(1047, 'praesentare', 100, 'n', 'y'),
(1048, 'hackovate', 300, 'n', 'y'),
(1049, 'glow_it_or_blow_it', 100, 'n', 'n'),
(1050, 'espionage', 300, 'n', 'y'),
(1051, 'electromaze', 100, 'n', 'n'),
(1052, 'task_marathon', 100, 'n', 'y'),
(1053, 'robowar', 500, 'n', 'y'),
(1054, 'matlab_image_coding', 100, 'n', 'y'),
(1055, 'line_follower', 200, 'n', 'n'),
(1056, 'formula_dr1', 1000, 'n', 'y'),
(1057, 'instant_coding', 100, 'n', 'n'),
(1058, 'code_fortress', 100, 'n', 'y'),
(1059, 'hack_dr_lanning', 100, 'n', 'n'),
(1060, 'fb_quest', 100, 'n', 'n'),
(1061, 'alohomora', 100, 'n', 'y'),
(1062, 'theodo', 100, 'n', 'y'),
(1063, 'sthapati', 100, 'n', 'y'),
(1064, 'sahistha_saggha', 200, 'n', 'y'),
(1065, 'contrivir', 100, 'n', 'y'),
(1066, 'equipo_360', 200, 'n', 'y'),
(1067, 'terminus_puzzle', 200, 'n', 'y'),
(1068, 'innovate_2017', 100, 'n', 'y'),
(1069, 'propulsia', 200, 'n', 'y'),
(1070, 'potentia', 100, 'n', 'y'),
(1071, 'formula_h', 200, 'n', 'y'),
(1072, 'deadlock', 100, 'n', 'y'),
(1073, 'choncord_macro', 200, 'y', 'y'),
(1074, 'choncord_micro', 100, 'y', 'y'),
(1075, 'fabrilis', 100, 'y', 'y'),
(1076, 'hustle_n_bustle', 100, 'y', 'y'),
(1077, 'play_around', 200, 'n', 'y'),
(1078, 'trikal', 100, 'y', 'y'),
(1079, 'call_of_duty', 100, 'n', 'n'),
(1080, 'fifa_15_legendary', 100, 'n', 'n'),
(1081, 'fifa_tournament', 100, 'n', 'n'),
(1082, 'nfs_most_wanted', 100, 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `sno` int(10) NOT NULL,
  `part_id` int(10) NOT NULL REFERENCES participants(id),
  `event_id` int(10) NOT NULL REFERENCES events(event_id),
  `paid` char(2) NOT NULL,
  `trans_id` varchar(15) NOT NULL REFERENCES transactions(trans_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) NOT NULL COMMENT '11001',
  `name` varchar(25) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` char(2) NOT NULL,
  `accommodation` char(2) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `sno` int(10) NOT NULL,
  `event_id` int(10) NOT NULL REFERENCES events(event_id),
  `head_id` int(10) NOT NULL REFERENCES participants(id),
  `member_id` int(10) NOT NULL REFERENCES participants(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno` int(10) NOT NULL,
  `part_id` int(10) NOT NULL REFERENCES participants(id),
  `amt` int(10) NOT NULL,
  `trans_id` varchar(25) NOT NULL,
  `acnt_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `trans_id` (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) NOT NULL  AUTO_INCREMENT, AUTO_INCREMENT=1083;
--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT , AUTO_INCREMENT=11001;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

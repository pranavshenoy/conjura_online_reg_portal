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
CREATE DATABASE IF NOT EXISTS `conjura` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `conjura`;
-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `pre_reg` char(2) NOT NULL COMMENT 'y if advance payment required',
  `team` char(2) NOT NULL COMMENT 'y if its a team event',
  `event_display` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10001;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `amount`, `pre_reg`, `team`, `event_display`) VALUES
(, 'voice_of_conjura', 100, 'n', 'n', 'VOICE OF CONJURA'),
( 'unplugged', 400, 'n', 'y', 'UNPLUGGED'),
( 'solowestern', 100, 'n', 'n', 'SOLOWESTERN'),
( 'overdrive', 400, 'n', 'y', 'OVERDRIVE'),
( 'dyad(duet)', 150, 'n', 'y', 'DYAD(DUET)'),
( 'agnee', 400, 'n', 'y', 'AGNEE'),
( 'dj_war', 500, 'n', 'y', 'DJ WAR'),
( 'spot_master', 100, 'n', 'n', 'SPOT MASTER'),
( 'reflection', 150, 'n', 'y', 'REFLECTION'),
( 'go_solo', 100, 'n', 'n', 'GO SOLO'),
( 'choreonight', 1500, 'n', 'y', 'CHOREONIGHT'),
( 'monoact', 100, 'n', 'n', 'MONOACT'),
( 'mime', 300, 'n', 'y', 'MIME'),
( 'hraswa', 500, 'y', 'y', 'HRASWA'),
( 'drama', 300, 'n', 'y', 'DRAMA'),
( 'love_letter_writing', 50, 'n', 'n', 'LOVE LETTER WRITING'),
( 'jam', 50, 'n', 'n', 'JAM'),
( 'haiku_writing', 50, 'n', 'n', 'HAIKU WRITING'),
( 'debate', 100, 'n', 'n', 'DEBATE'),
( 'recitation', 50, 'n', 'n', 'RECITATION'),
( 'pencil_sketching', 50, 'n', 'n', 'PENCIL SKETCHING'),
( 'painting', 50, 'n', 'n', 'PAINTING'),
( 'mehendi', 50, 'n', 'n', 'MEHENDI'),
( 'face_painting', 50, 'n', 'n', 'FACE PAINTING'),
( 'collage', 50, 'n', 'n', 'COLLAGE'),
( 'clay_modelling', 50, 'n', 'n', 'CLAY MODELLING'),
( 'mr_and_ms_conjura', 300, 'n', 'n', 'MR & MS CONJURA'),
( 'treasure_hunt', 200, 'n', 'y', 'TREASURE HUNT'),
( 'graffiti', 100, 'n', 'y', 'GRAFFITI'),
( 'hive_mind', 200, 'n', 'y', 'HIVE MIND'),
( 'you_know_nothing', 100, 'n', 'y', 'YOU KNOW NOTHING'),
( 'badminton', 200, 'n', 'y', 'BADMINTON'),
( 'football', 300, 'n', 'y', 'FOOTBALL'),
( 'cricket', 400, 'n', 'y', 'CRICKET'),
( 'volleyball', 300, 'n', 'y', 'VOLLEYBALL'),
( 'chess', 200, 'n', 'n', 'CHESS'),
( 'g_coder', 100, 'n', 'n', 'G CODER'),
( 'cadwar', 100, 'n', 'n', 'CADWAR'),
( 'fabricato', 150, 'n', 'y', 'FABRICATO'),
( 'robo_gt', 300, 'n', 'y', 'ROBO GT'),
( 'envisage', 100, 'n', 'y', 'ENVISAGE'),
( 'creativo', 150, 'n', 'y', 'CREATIVO'),
( 'engine_assembly', 150, 'n', 'y', 'ENGINE ASSEMBLY'),
( 'contraption', 200, 'n', 'y', 'CONTRAPTION'),
( 'aqua_strike', 150, 'n', 'y', 'AQUA STRIKE'),
( 'regatta', 100, 'n', 'n', 'REGATTA'),
( 'praesentare', 100, 'n', 'y', 'PRAESENTARE'),
( 'hackovate', 300, 'n', 'y', 'HACKOVATE'),
( 'glow_it_or_blow_it', 100, 'n', 'n', 'GLOW IT OR BLOW IT'),
( 'espionage', 300, 'n', 'y', 'ESPIONAGE'),
( 'electromaze', 100, 'n', 'n', 'ELECTROMAZE'),
( 'task_marathon', 100, 'n', 'y', 'TASK MARATHON'),
( 'robowar', 500, 'n', 'y', 'ROBOWAR'),
( 'matlab_image_coding', 100, 'n', 'y', 'MATLAB IMAGE CODING'),
( 'line_follower', 200, 'n', 'n', 'LINE FOLLOWER'),
( 'formula_dr1', 1000, 'n', 'y', 'FORMULA DR1'),
( 'instant_coding', 100, 'n', 'n', 'INSTANT CODING'),
( 'code_fortress', 100, 'n', 'y', 'CODE FORTRESS'),
( 'hack_dr_lanning', 100, 'n', 'n', 'HACK DR LANNING'),
( 'fb_quest', 100, 'n', 'n', 'FB QUEST'),
( 'alohomora', 100, 'n', 'y', 'ALOHOMORA'),
( 'theodo', 100, 'n', 'y', 'THEODO'),
( 'sthapati', 100, 'n', 'y', 'STHAPATI'),
( 'sahistha_saggha', 200, 'n', 'y', 'SAHISTHA SAGGHA'),
( 'contrivir', 100, 'n', 'y', 'CONTRIVIR'),
( 'equipo_360', 200, 'n', 'y', 'EQUIPO 360'),
( 'terminus_puzzle', 200, 'n', 'y', 'TERMINUS PUZZLE'),
( 'innovate_2017', 100, 'n', 'y', 'INNOVATE 2017'),
( 'propulsia', 200, 'n', 'y', 'PROPULSIA'),
( 'potentia', 100, 'n', 'y', 'POTENTIA'),
( 'formula_h', 200, 'n', 'y', 'FORMULA H'),
( 'deadlock', 100, 'n', 'y', 'DEADLOCK'),
( 'choncord_macro', 200, 'y', 'y', 'CHONCORD MACRO'),
( 'choncord_micro', 100, 'y', 'y', 'CHONCORD MICRO'),
( 'fabrilis', 100, 'y', 'y', 'FABRILIS'),
( 'hustle_n_bustle', 100, 'y', 'y', 'HUSTLE N BUSTLE'),
( 'play_around', 200, 'n', 'y', 'PLAY AROUND'),
( 'trikal', 100, 'y', 'y', 'TRIKAL'),
( 'call_of_duty', 100, 'n', 'n', 'CALL OF DUTY 4 MODERN WARFARE'),
( 'fifa_15_legendary', 100, 'n', 'n', 'FIFA 15 LEGENDARY'),
( 'fifa_tournament', 100, 'n', 'n', 'FIFA TOURNAMENT'),
( 'nfs_most_wanted', 100, 'n', 'n', 'NFS MOST WANTED');

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

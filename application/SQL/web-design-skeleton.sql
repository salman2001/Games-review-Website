-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 02:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `activereviews`
--

CREATE TABLE `activereviews` (
  `ID` int(11) NOT NULL,
  `GameName` varchar(250) NOT NULL,
  `GameBlurb` longtext NOT NULL,
  `GameReview` longtext NOT NULL,
  `GameComments_YN` varchar(1) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ReviewImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `activereviews`
--

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
('1', 'Borderlands 3', 'This text was retrieved from the database.', 'This is a test review of the game.', 'Y', 'borderlands-3', 'borderlands-3.jpg'),
('2', 'Call of Duty 4:Modern Warfare', 'First person Shooter Game','A first person shooter game that has various level of difficulties and gets harder as you progrss through the game','Y', 'cod-4', 'cod4.jpg'),
('3','PUBG', 'First Person and Third Person Shooter Game', 'A first and third person shooter game where you can either team up with people from different places or play solo. This game is online so you play with random difficulty levels.', 'Y', 'pubg', 'pubg.jpg'),
('4', 'Days Gone', 'Days Gone is an action-adventure survival horror game set in a post-apocalyptic open world, played from a third-person perspective. The player controls Deacon St. John (Sam Witwer), a former U.S. Army 10th Mountain Division Afghanistan War veteran outlaw-turned-drifter and bounty hunter who prefers life on the road to wilderness encampments.(Wikipedia)', 'When a virus causes a large portion of humanity to become uncontrollably violent, Deacon, his wife Sarah (Courtnee Draper), and his friend Boozer (Jim Pirri) attempt to flee for safety and escape the carnage. Sarah is stabbed and critically wounded, forcing Deacon to evacuate her on a National Emergency Response Organization (NERO) helicopter. Due to the helicopter being at capacity, Deacon stays behind with Boozer, intending to reunite with Sarah.Two years later, civilization has collapsed, and vast hordes of the infected, now called "Freakers", roam the landscape and are a persistent threat to surviving humans. Deacon and Boozer work as freelance bounty hunters in what is left of Oregon, with Deacon believing Sarah is dead after finding out the NERO refugee camp she was evacuated to was overrun by Freakers. Deacon and Boozer plan to head further north to find better opportunities, but Boozer has his arm badly burned by a gang of cultists called Rippers, forcing him to stay at their safehouse to recuperate and delay their trip. Deacon learns the Rippers have placed a price on his and Boozers heads. In addition, Deacon catches sight of NERO helicopters carrying a research team several times, leading him to believe there is a chance Sarah may be alive.(Wikipedia', 'y', 'days-gone', 'days-gone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gamescomments`
--

CREATE TABLE `gamescomments` (
  `UID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `UserComment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `gamescomments`
--

INSERT INTO `gamescomments` (`UID`, `UserID`, `ReviewID`, `UserComment`) VALUES
(1, 1, 1, 'This is a comment that was generated manually in the database.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `UserPassword` varchar(250) NOT NULL,
  `DarkMode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES
(1, 'Lecturer', 'Example', 1);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `activereviews`
--
ALTER TABLE `activereviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `gamescomments`
--
ALTER TABLE `gamescomments`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activereviews`
--
ALTER TABLE `activereviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gamescomments`
--
ALTER TABLE `gamescomments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

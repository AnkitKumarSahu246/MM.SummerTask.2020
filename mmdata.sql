-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 02:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `profilephoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `profilephoto`) VALUES
(1, 'ankit@ankit.com', '12345', 'ankit', 'sahu', 'ankit.jpeg'),
(2, 'itzme@itzme.com', 'ankit', 'ankit kumar', 'sahu', 'ankit.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `likes` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `body1` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_image1` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category`, `likes`, `title`, `slug`, `body`, `body1`, `post_image`, `post_image1`, `video`, `created_at`) VALUES
(1, 0, 'Tech', 2, 'Google Travel Data Show Lockdown Fatigue in US, Australia; Other Countries Stay Home', 'Google-Travel-Data-Show-Lockdown-Fatigue-in-US-Australia-Other-Countries-Stay-Home', 'More people stayed home in Brazil, Japan and Singapore in April as those countries\' novel coronavirus cases surged, while people in the United States and Australia returned to parks and jobs as infection rates flattened, data from Google show.\r\n\r\nThe latest weekly update of aggregated travel patterns Google collected from its users\' phones pointed to increased disobedience with lockdown orders in place since March but rising compliance with those issued last month.\r\n\r\nThe data, posted online by the Alphabet unit late on Thursday, compared daily traffic to retail and recreational venues, parks, train and bus stations, grocery stores and workplaces with a five-week period from January 3 to February 6.', 'More people stayed home in Brazil, Japan and Singapore in April as those countries\' novel coronavirus cases surged, while people in the United States and Australia returned to parks and jobs as infection rates flattened, data from Google show.\r\n\r\nThe latest weekly update of aggregated travel patterns Google collected from its users\' phones pointed to increased disobedience with lockdown orders in place since March but rising compliance with those issued last month.\r\n\r\nThe data, posted online by the Alphabet unit late on Thursday, compared daily traffic to retail and recreational venues, parks, train and bus stations, grocery stores and workplaces with a five-week period from January 3 to February 6.', 'https://media.gettyimages.com/photos/pink-morning-at-lodhi-gardens-picture-id695641506?s=612x612', 'https://media.gettyimages.com/photos/pink-morning-at-lodhi-gardens-picture-id695641506?s=612x612', '', '2020-05-03 12:21:54'),
(2, 0, 'Business', 12, 'Google Travel Data Show Lockdown Fatigue in US, Australia, Countries Stay Home', 'Google-Travel-Data-Show-Lockdown-Fatigue-in-US-Australia-Countries-Stay-Home', 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has? ', '', 'https://i.pinimg.com/originals/12/4e/16/124e1664bfae0d2b9dfd1d7b5dbb1e21.jpg', 'noimage.jpeg', '', '2020-05-03 16:45:52'),
(3, 0, 'Tech', 2, 'Realme 5 Pro, Realme XT Receiving OTA Update With April Security Patch', 'Realme-5-Pro-Realme-XT-Receiving-OTA-Update-With-April-Security-Patch', 'Realme 5 Pro and Realme XT have started receiving the OTA updates for the month of May in India, with April security patch. The build number of the Realme 5 Pro update is RMX1971EX_11.C.03, while Realme XT update has build number RMX1921EX_11.C.04. The updates for both the phones will be done in a staged manner for the sake of stability. They will be pushed out randomly to a smaller number of users and a broader release will be coming out a few days later. This will be done to ensure that all the critical bugs are ironed out.\r\n\r\nRealme informed about the latest OTA update on Realme Community website. The update for Realme 5 Pro having build number RMX1971EX_11.C.03 delivers the Android security patch for the month of April 2020. With the update users in India will be getting DocVault ID feature on their phones. The audio quality for third-party apps has also been optimised. In dark mode, an arrow to the right of the list of recent location information requests has also been added. The update also brings a few fixes for the Realme phone like stopping the prompt tone from appearing every time when the music is played. The alarm on the phone was getting turned off after clearing it from background tasks. That has also been taken care of.\r\n\r\nRealme XT update with firmware version RMX1921EX_11.C.04 also brings the latest Android security patch. Realme has brought to the phone the same fixes and changes as the Realme 5 Pro.\r\n\r\nRealme has said that the manual download link for the update will be available on their software update website. You can also check for the update on your phone by going to Settings > Software Upgrade.', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRfCm2-PPHUWViHK6Slk966Z_Dzw9PE_g9R0x8PcxiVDxwlpUFM&usqp=CAU', '', '', '2020-05-03 17:23:26'),
(4, 0, 'Business', 10, 'The price of reopening the economy tens of thousands of American lives.The harsh choice between life and prosperity', 'The-price-of-reopening-the-economy-tens-of-thousands-of-American-lives-The-harsh-choice-between-life-and-prosperity', '(CNN)President Donald Trump now knows the price of the haunting bargain required to reopen the country -- tens of thousands more lives in a pandemic that is getting worse not better.\r\n\r\nIt\'s one he now appears ready to pay, if not explain to the American people, at a moment of national trial that his administration has constantly underplayed.\r\nDepressing new death toll projections and infection data on Monday dashed the optimism stirred by more than half the country taking various steps to reopen an economy that is vital to Trump\'s reelection hopes and has shed more than 30 million jobs. Stay-at-home orders slowed the virus and flattened the curve in hotspots like New York and California, but they have so far failed to halt its broader advance, leaving the nation stuck on a grim plateau of about 30,000 new cases a day for nearly a month.\r\nNew evidence of the likely terrible future toll of Covid-19 came on a day when Trump stayed out of sight -- his wild briefings that hurt his political prospects now paused -- meaning he could not be questioned on his enthusiasm for state openings in the light of new evidence.\r\nThe White House also took new steps to limit testimony to the House from members of the President\'s coronavirus task force, prompting Democratic Speaker Nancy Pelosi to warn on CNN that it was \"afraid of the truth.\"', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRfCm2-PPHUWViHK6Slk966Z_Dzw9PE_g9R0x8PcxiVDxwlpUFM&usqp=CAU', '', '', '2020-05-05 10:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2019 at 06:47 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9210197_trueword_db_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img_name` text COLLATE utf8_unicode_ci NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `description`, `img_name`, `date_posted`) VALUES
(1, 'About Pastor Chris Oyakhilome', 'Through an anointed ministry spanning over 25 years, Pastor, teacher, healing minister, television host and bestselling author Pastor Chris Oyakhilome (PhD) has helped millions experience a victorious and ', '', '2019-04-08'),
(2, 'ISIS War Against Christians', 'Most of us if not all of us have heard of the killing of Christians by a terrorist group called the ISIS, on the 2nd of September we got a news that the Orthodox and Catholic Christian leaders met with the UN asking countries to stop supporting and arming this terrorist group.\r\n\r\nBelow is part of the statement issued:\r\n\r\n\"Countries must stop supporting and arming terrorists. Arabs must exert pressure on the financiers of these groups. We must stop extremist organizations and Arab countries must not remain silent against ISIS.\" -Statement released by leaders at Lebanon meeting with UN officials, Western diplomats.\"\r\n\r\n\"The Christians of Iraq have been detained by the Islamic State of Iraq (ISIS) and are being driven out of their houses. [Originally] there were 120,000 in Erbil; now there are 60,000...\" \r\n\r\nAlso on the 4th of September we got another news of this same terrorist group selling Christian women and underage girls they abducted in Iraq, according to the group.\r\n\r\nBelow is part of the statement issued:\r\n\r\n\"In the last several weeks, ISIS has sold about 300 Yazidi women and underage girls they abducted in Iraq, according to the group. Assyrian Christian women have also been sold to ISIS fighters.\"\r\n\r\n\"They took everything from us... They took the women. They raped them. They are selling them. For God Sakes, they are selling them! What century are we?\" -Testimony of a Christian refugee.\r\n\r\nREF:BreakingChristiannews', '', '2019-04-08'),
(3, 'About Christ Embassy A.K.A Believers Loveworld Incorporated', 'Believers’ LoveWorld Incorporated, (a.k.a Christ Embassy) is a global ministry with a vision of taking God’s divine presence to the nations of the world and to demonstrate the character of the Holy Spirit. This is achieved through every available means, as the Ministry is driven by a passion to see men and women all over the world, come to the knowledge of the divine life made available in Christ Jesus.\r\nThrough the years, various arms of the Ministry have been birthed to effectively proclaim the gospel of Jesus Christ.\r\nThe Ministry has a vibrant TV Ministry, Internet Ministry, the Healing School, Rhapsody of Realities, and an Inner-city mission; where children without hope of a future are fed, housed, clothed, educated and given a chance to live out their dreams. The Ministry also hosts various crusades in the largest arenas in various countries where millions have been brought into the kingdom of God, and mighty miraculous works have been demonstrated. The venues of such meetings are constantly filled to capacity.\r\nThis global mission has led to the establishment of an ever-widening network of hundreds of churches and fellowships worldwide in all continents, affecting millions of people with a unique and timely revelation of the new creation in Christ Jesus.\r\nThe Ministry will stop at nothing in ensuring that the gospel of the Lord Jesus Christ is preached in all the nations of the world as is expected by the Lord.', '', '2019-04-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

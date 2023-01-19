-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 10:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Rafiul Islam', 'rafiul15-2265@diu.edu.bd', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(18, 'as', 'rafiul15-2265@diu.edu.bd', 'vdd', 'efdfd'),
(19, 'Rafiul Islam', 'rafiul15-2265@diu.edu.bd', 'Laravel', 'ffffffffffff'),
(20, 'ma', 'rafiul15-2265@diu.edu.bd', 'ggg', 'ggg'),
(21, 'gf', 'rafiul15-2265@diu.edu.bd', 'fgg', 'gg'),
(22, 'wwwwwwwwwwww', 'rafiul15-2265@diu.edu.bd', 'rrrrrrrrrrr', 'rrrrrrrr'),
(23, 't6', 'rafiul15-2265@diu.edu.bd', 'rrrrrrrrrrrrrrrrrrrrrrrrr', 'rrr');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `pre` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `icon`, `pre`, `post`, `title`) VALUES
(1, 'bi bi-emoji-smile', 12, 1234, 'Love'),
(2, 'bi bi-journal-richtext', 14, 1456, 'Projects'),
(3, 'bi bi-headset', 14, 1463, 'Hours Of Support'),
(4, 'bi bi-award', 12, 45, 'Awards');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `github`) VALUES
(1, 'https://www.facebook.com/RafiulIslamRobinKhan', 'https://www.facebook.com/RafiulIslamRobinKhan', 'https://www.facebook.com/RafiulIslamRobinKhan', 'https://www.youtube.com/@rafiulislam7097', 'https://www.linkedin.com/in/rafiulislamrobinkhan/', 'https://github.com/Abdur-Rafiul');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `occupation`, `des`, `photo`) VALUES
(3, 'Rafiul Islam', 'Student', 'I am a Good Man', '1.jpg'),
(4, 'Rakibul Islam', 'Student', 'Good Man', 'photo_2022-11-08_19-42-44-removebg-preview.png'),
(5, 'Rafiul', 'Teacher', 'Good', '81595810_629977574486594_7807456095437324288_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `title`, `description`, `birthday`, `website`, `phone`, `city`, `age`, `degree`, `address`) VALUES
(1, 'Rafiul Islam', 'rafiul i', 'rafiul15-2265@diu.edu.bd', 'Full Stack Developer', '                                                                                                I am a a Responsive Web designer and Web Developer. I makes video tutorial to share my Knowledge. My Over all skill makes me a Complete Software Developer, So ', '30-12-1999', 'https://personal-website-livid-sigma.vercel.app/', '01701-729512', 'Dhaka', 'wwww', 'BSC in CSE', 'Miapur Hajipara Bongram Bazar Pabnajf'),
(2, 'Rafiul Islam', 'rafiul i', 'rafiul15-2265@diu.edu.bd', 'Full Stack Developer', '                                                                                                I am a a Responsive Web designer and Web Developer. I makes video tutorial to share my Knowledge. My Over all skill makes me a Complete Software Developer, So ', '30-12-1999', 'https://personal-website-livid-sigma.vercel.app/', '01701-729512', 'Dhaka', 'wwww', 'BSC in CSE', 'Miapur Hajipara Bongram Bazar Pabnajf');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `fullName`, `email`, `userName`, `phone`, `password`) VALUES
(14, 'Rafiul Islam', 'rafiul15-23265@diu.edu.bd', 'rafiul', '1234', '12345678'),
(19, 'Rakibul', 'rakib@gmail.com', 'rakib', '1234567', '12345678'),
(20, 'Robin', 'rakib@gmail.com', 'wwwww', '1111', '12345678910'),
(21, 'Robin', 'rakib@gmail.com', 'wwwww', '1111', '12345678910'),
(22, 'Rakibul', 'r@gmail.com', 'ssss', '111111', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

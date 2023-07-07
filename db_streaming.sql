-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2023 at 12:31 AM
-- Server version: 5.7.24
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_streaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `nationality` varchar(20) NOT NULL,
  `DNI` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `last_name`, `date_of_birth`, `nationality`, `DNI`, `created_at`) VALUES
(1, 'Tom', 'Hanks', '1956-07-09', 'American', '123456789', '2023-07-06 23:30:11'),
(2, 'Meryl', 'Streep', '1949-06-22', 'American', '987654321', '2023-07-06 23:30:11'),
(3, 'Leonardo', 'DiCaprio', '1974-11-11', 'American', '456123789', '2023-07-06 23:30:11'),
(4, 'Julia', 'Roberts', '1967-10-28', 'American', '789456123', '2023-07-06 23:30:11'),
(5, 'Brad', 'Pitt', '1963-12-18', 'American', '321654987', '2023-07-06 23:30:11'),
(6, 'Natalie', 'Portman', '1981-06-09', 'Israeli', '159357486', '2023-07-06 23:30:11'),
(7, 'Johnny', 'Depp', '1963-06-09', 'American', '753159486', '2023-07-06 23:30:11'),
(8, 'Cate', 'Blanchett', '1969-05-14', 'Australian', '486753159', '2023-07-06 23:30:11'),
(9, 'Robert', 'Downey Jr.', '1965-04-04', 'American', '963852741', '2023-07-06 23:30:11'),
(10, 'Emma', 'Stone', '1988-11-06', 'American', '741852963', '2023-07-06 23:30:11'),
(11, 'Hugh', 'Jackman', '1968-10-12', 'Australian', '852741963', '2023-07-06 23:30:11'),
(12, 'Charlize', 'Theron', '1975-08-07', 'South African', '369852147', '2023-07-06 23:30:11'),
(13, 'Denzel', 'Washington', '1954-12-28', 'American', '147852369', '2023-07-06 23:30:11'),
(14, 'Scarlett', 'Johansson', '1984-11-22', 'American', '258369147', '2023-07-06 23:30:11'),
(15, 'Will', 'Smith', '1968-09-25', 'American', '963147258', '2023-07-06 23:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `DNI` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `last_name`, `date_of_birth`, `nationality`, `DNI`, `created_at`) VALUES
(1, 'Christopher', 'Nolan', '1970-07-30', 'British', '123456789', '2023-07-06 23:31:46'),
(2, 'Steven', 'Spielberg', '1946-12-18', 'American', '987654321', '2023-07-06 23:31:46'),
(3, 'Martin', 'Scorsese', '1942-11-17', 'American', '456123789', '2023-07-06 23:31:46'),
(4, 'Quentin', 'Tarantino', '1963-03-27', 'American', '789456123', '2023-07-06 23:31:46'),
(5, 'Alfonso', 'Cuarón', '1961-11-28', 'Mexican', '321654987', '2023-07-06 23:31:46'),
(6, 'David', 'Fincher', '1962-08-28', 'American', '159357486', '2023-07-06 23:31:46'),
(7, 'Greta', 'Gerwig', '1983-08-04', 'American', '753159486', '2023-07-06 23:31:46'),
(8, 'Bong', 'Joon-ho', '1969-09-14', 'South Korean', '486753159', '2023-07-06 23:31:46'),
(9, 'Ava', 'DuVernay', '1972-08-24', 'American', '963852741', '2023-07-06 23:31:46'),
(10, 'Hayao', 'Miyazaki', '1941-01-05', 'Japanese', '741852963', '2023-07-06 23:31:46'),
(11, 'Denis', 'Villeneuve', '1967-10-03', 'Canadian', '852741963', '2023-07-06 23:31:46'),
(12, 'Spike', 'Lee', '1957-03-20', 'American', '369852147', '2023-07-06 23:31:46'),
(13, 'Pedro', 'Almodóvar', '1949-09-25', 'Spanish', '147852369', '2023-07-06 23:31:46'),
(14, 'Kathryn', 'Bigelow', '1951-11-27', 'American', '258369147', '2023-07-06 23:31:46'),
(15, 'Wes', 'Anderson', '1969-05-01', 'American', '963147258', '2023-07-06 23:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `iso_code` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `iso_code`, `created_at`) VALUES
(1, 'English', 'en', '2023-07-06 23:25:57'),
(2, 'Spanish', 'es', '2023-07-06 23:25:57'),
(3, 'French', 'fr', '2023-07-06 23:25:57'),
(4, 'German', 'de', '2023-07-06 23:25:57'),
(5, 'Italian', 'it', '2023-07-06 23:25:57'),
(6, 'Portuguese', 'pt', '2023-07-06 23:25:57'),
(7, 'Chinese', 'zh', '2023-07-06 23:25:57'),
(8, 'Japanese', 'ja', '2023-07-06 23:25:57'),
(9, 'Korean', 'ko', '2023-07-06 23:25:57'),
(10, 'Russian', 'ru', '2023-07-06 23:25:57'),
(11, 'Arabic', 'ar', '2023-07-06 23:25:57'),
(12, 'Hindi', 'hi', '2023-07-06 23:25:57'),
(13, 'Dutch', 'nl', '2023-07-06 23:25:57'),
(14, 'Swedish', 'sv', '2023-07-06 23:25:57'),
(15, 'Norwegian', 'no', '2023-07-06 23:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `created_at`) VALUES
(1, 'Netflix', '2023-07-06 23:58:48'),
(2, 'Amazon Prime Video', '2023-07-06 23:58:48'),
(3, 'Hulu', '2023-07-06 23:58:48'),
(4, 'Disney+', '2023-07-06 23:58:48'),
(5, 'HBO Max', '2023-07-06 23:58:48'),
(6, 'YouTube', '2023-07-06 23:58:48'),
(7, 'Apple TV+', '2023-07-06 23:58:48'),
(8, 'Google Play', '2023-07-06 23:58:48'),
(9, 'Spotify', '2023-07-06 23:58:48'),
(10, 'Twitch', '2023-07-06 23:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Breaking Bad', 'A high school chemistry teacher turned methamphetamine manufacturer teams up with a former student to build a drug empire.', '2023-07-06 23:35:25'),
(2, 'Game of Thrones', 'Nine noble families fight for control over the mythical lands of Westeros.', '2023-07-06 23:35:25'),
(3, 'Friends', 'Follows the personal and professional lives of six friends living in Manhattan.', '2023-07-06 23:35:25'),
(4, 'Stranger Things', 'A group of young friends in a small town uncover a series of supernatural mysteries.', '2023-07-06 23:35:25'),
(5, 'The Office', 'A mockumentary-style sitcom depicting the everyday lives of office employees.', '2023-07-06 23:35:25'),
(6, 'The Crown', 'A historical drama series portraying the reign of Queen Elizabeth II.', '2023-07-06 23:35:25'),
(7, 'Money Heist', 'A criminal mastermind recruits eight individuals for a heist on the Royal Mint of Spain.', '2023-07-06 23:35:25'),
(8, 'Breaking Bad', 'A high school chemistry teacher turned methamphetamine manufacturer teams up with a former student to build a drug empire.', '2023-07-06 23:35:25'),
(9, 'Game of Thrones', 'Nine noble families fight for control over the mythical lands of Westeros.', '2023-07-06 23:35:25'),
(10, 'Friends', 'Follows the personal and professional lives of six friends living in Manhattan.', '2023-07-06 23:35:25'),
(11, 'Stranger Things', 'A group of young friends in a small town uncover a series of supernatural mysteries.', '2023-07-06 23:35:25'),
(12, 'The Office', 'A mockumentary-style sitcom depicting the everyday lives of office employees.', '2023-07-06 23:35:25'),
(13, 'The Crown', 'A historical drama series portraying the reign of Queen Elizabeth II.', '2023-07-06 23:35:25'),
(14, 'Money Heist', 'A criminal mastermind recruits eight individuals for a heist on the Royal Mint of Spain.', '2023-07-06 23:35:25'),
(15, 'Breaking Bad', 'A high school chemistry teacher turned methamphetamine manufacturer teams up with a former student to build a drug empire.', '2023-07-06 23:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `series_actors`
--

CREATE TABLE `series_actors` (
  `id` int(3) NOT NULL,
  `series_id` int(3) NOT NULL,
  `actor_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series_actors`
--

INSERT INTO `series_actors` (`id`, `series_id`, `actor_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 4),
(5, 4, 5),
(6, 4, 6),
(7, 5, 7),
(8, 6, 8),
(9, 7, 9),
(10, 8, 10),
(11, 8, 11),
(12, 9, 12),
(13, 10, 13),
(14, 11, 14),
(15, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `series_directors`
--

CREATE TABLE `series_directors` (
  `id` int(3) NOT NULL,
  `series_id` int(3) NOT NULL,
  `director_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series_directors`
--

INSERT INTO `series_directors` (`id`, `series_id`, `director_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 4, 5),
(6, 5, 6),
(7, 6, 7),
(8, 7, 8),
(9, 7, 9),
(10, 8, 10),
(11, 9, 11),
(12, 10, 12),
(13, 11, 13),
(14, 12, 14),
(15, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `series_languages_audio`
--

CREATE TABLE `series_languages_audio` (
  `id` int(3) NOT NULL,
  `series_id` int(3) NOT NULL,
  `language_audio_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series_languages_audio`
--

INSERT INTO `series_languages_audio` (`id`, `series_id`, `language_audio_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 3, 4),
(5, 4, 5),
(6, 4, 6),
(7, 5, 7),
(8, 6, 8),
(9, 7, 9),
(10, 8, 10),
(11, 8, 11),
(12, 9, 12),
(13, 10, 13),
(14, 11, 14),
(15, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `series_languages_subtitle`
--

CREATE TABLE `series_languages_subtitle` (
  `id` int(3) NOT NULL,
  `series_id` int(3) NOT NULL,
  `language_subtitle_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series_languages_subtitle`
--

INSERT INTO `series_languages_subtitle` (`id`, `series_id`, `language_subtitle_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5),
(6, 4, 6),
(7, 5, 7),
(8, 6, 8),
(9, 7, 9),
(10, 8, 10),
(11, 9, 11),
(12, 10, 12),
(13, 11, 13),
(14, 11, 14),
(15, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `series_platforms`
--

CREATE TABLE `series_platforms` (
  `id` int(3) NOT NULL,
  `series_id` int(3) NOT NULL,
  `platform_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series_platforms`
--

INSERT INTO `series_platforms` (`id`, `series_id`, `platform_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 2, 3),
(5, 3, 1),
(6, 3, 3),
(7, 4, 1),
(8, 4, 4),
(9, 5, 2),
(10, 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series_actors`
--
ALTER TABLE `series_actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_id` (`series_id`),
  ADD KEY `actor_id` (`actor_id`);

--
-- Indexes for table `series_directors`
--
ALTER TABLE `series_directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_id` (`series_id`),
  ADD KEY `director_id` (`director_id`);

--
-- Indexes for table `series_languages_audio`
--
ALTER TABLE `series_languages_audio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_id` (`series_id`),
  ADD KEY `language_audio_id` (`language_audio_id`);

--
-- Indexes for table `series_languages_subtitle`
--
ALTER TABLE `series_languages_subtitle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_id` (`series_id`),
  ADD KEY `language_subtitle_id` (`language_subtitle_id`);

--
-- Indexes for table `series_platforms`
--
ALTER TABLE `series_platforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_id` (`series_id`),
  ADD KEY `platform_id` (`platform_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `series_actors`
--
ALTER TABLE `series_actors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `series_directors`
--
ALTER TABLE `series_directors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `series_languages_audio`
--
ALTER TABLE `series_languages_audio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `series_languages_subtitle`
--
ALTER TABLE `series_languages_subtitle`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `series_platforms`
--
ALTER TABLE `series_platforms`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `series_actors`
--
ALTER TABLE `series_actors`
  ADD CONSTRAINT `series_actors_ibfk_1` FOREIGN KEY (`series_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `series_actors_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `series_directors`
--
ALTER TABLE `series_directors`
  ADD CONSTRAINT `series_directors_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `series_directors_ibfk_2` FOREIGN KEY (`series_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `series_languages_audio`
--
ALTER TABLE `series_languages_audio`
  ADD CONSTRAINT `series_languages_audio_ibfk_1` FOREIGN KEY (`series_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `series_languages_audio_ibfk_2` FOREIGN KEY (`language_audio_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `series_languages_subtitle`
--
ALTER TABLE `series_languages_subtitle`
  ADD CONSTRAINT `series_languages_subtitle_ibfk_1` FOREIGN KEY (`language_subtitle_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `series_languages_subtitle_ibfk_2` FOREIGN KEY (`series_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `series_platforms`
--
ALTER TABLE `series_platforms`
  ADD CONSTRAINT `series_platforms_ibfk_1` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `series_platforms_ibfk_2` FOREIGN KEY (`series_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

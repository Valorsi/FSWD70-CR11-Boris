-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 10:28 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_boris_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `address` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `web_address` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `event_name` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_date`, `event_time`, `address`, `web_address`, `event_name`) VALUES
(1, '2019-09-21', '21:00:00', 'Firas', 'www.IfestiaFestival.com', 'Ifestia Festival'),
(2, '2019-11-23', '10:00:00', 'Schloss Schoenbrunn', 'https://www.schoenbrunn.at/en/visitor-information/events/schoenbrunn/event-detail/veranstaltung/26th', 'Christmas Market at Schoenbrunn Palace'),
(3, '2019-07-31', '15:00:00', 'Stockholm Sweden', 'https://www.songkick.com/festivals/90526-stockholm-pride/id/37988064-stockholm-pride-festival-2019', 'Stockholm Pride Festival 2019');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `zip_code` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `information` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `fk_restaurant` int(11) DEFAULT NULL,
  `fk_event` int(11) DEFAULT NULL,
  `fk_tourist` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city`, `zip_code`, `address`, `image`, `information`, `fk_restaurant`, `fk_event`, `fk_tourist`) VALUES
(1, 'Santorini', '84700', 'Santorini, Kyklades , Greece', 'https://www.santorini.com/hotels/zoehouses/image2.jpg', 'Santorini, a small island located in Kyklades, home to an Active Volcano and the golden sunset. Explore a variety of ancient history while remaining close to the beautiful beaches & steep cliffs.', 1, 1, 1),
(2, 'Vienna', '1130', 'Schönbrunner Schloßstraße 47', 'https://www.schoenbrunn.at/fileadmin/_processed_/b/b/csm_Schoenbrunn-homepage_a325399359.jpg', 'The history of Schönbrunn and the buildings that previously stood on this site dates back to the fourteenth century. Emperor Matthias discovered a spring that gave the estate the name it still bears today.', 2, 2, 3),
(3, 'Stockholm', '104 65', 'Sweden, Stockholm ', 'https://imprintmytravel.com/wp-content/uploads/2019/04/Stockholm-Sehenswuerdigkeiten-Titel.jpg', 'DescriptionStockholm, the capital of Sweden, encompasses 14 islands and more than 50 bridges on an extensive Baltic Sea archipelago.', 3, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `tel_nr` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `web_address` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `tel_nr`, `type`, `description`, `address`, `web_address`) VALUES
(1, 'Taverna Mario', '+30 2286 032000', 'Greek Tavern', 'Come dine by the seaside, at one of santorini\'s most modern taverns. ', 'Monolithos ', 'www.santorinirestaurant.gr'),
(2, 'Schoenbrunner Stoeckl & Dinnertheater', '+43 660 6363200', 'Austrian', 'Come and enjoy our unique mixture of classical music, culinary art & cabaret. A truly Viennese dinner show theatre.', 'Schoenbrunn , 1130', 'http://dinnertheater.wien/en/home/'),
(3, 'Kagges', '+46 8 796 81 02', 'Swedish', 'This cozy, intimate restaurant exudes a classy yet relaxed ambience', 'Lilla Nygatan 21', 'http://www.kagges.com/'),
(4, 'Babis o Sougias', '22860 32850', 'Greek', 'Vazoume mpros me ton sougia ', 'Somewhere in Greece', 'www.babisosougias.com');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tourist_id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `web_address` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`tourist_id`, `type`, `description`, `web_address`) VALUES
(1, 'Volcano & Natural hot Springs Tour', 'Take a boat to the Volcano to explore a natural phenomenon and afterwards dive into the hot springs ', 'www.fakewebsiteijustmadeupbecausethisdoesnthaveawebsite.com'),
(3, 'Schoenbrunner Zoo', 'Visit the Royal Zoo, within Schoenbrunn ', 'https://www.zoovienna.at/en/'),
(4, 'Thousand Island Cruise', 'Join us on our guided full day cruise where you will experience the best of the Stockholm archipelag', 'https://www.visitstockholm.com/events/guided-tours/thousand-island-cruise---a-full-day-excursion-in-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) COLLATE utf8_bin NOT NULL,
  `userEmail` varchar(60) COLLATE utf8_bin NOT NULL,
  `userPass` varchar(255) COLLATE utf8_bin NOT NULL,
  `rule` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `rule`) VALUES
(2, 'Boris Jankovic', 'boris@user.com', '842873f014a3288552fd1cc18d56659f06f931068ffa3b182a8c79b9f3d17284', 'user'),
(3, 'boris', 'boris@admin.com', '842873f014a3288552fd1cc18d56659f06f931068ffa3b182a8c79b9f3d17284', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `fk_restaurant` (`fk_restaurant`),
  ADD KEY `fk_event` (`fk_event`),
  ADD KEY `fk_tourist` (`fk_tourist`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`tourist_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `tourist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`fk_restaurant`) REFERENCES `restaurant` (`restaurant_id`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`fk_event`) REFERENCES `events` (`event_id`),
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`fk_tourist`) REFERENCES `tourist` (`tourist_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

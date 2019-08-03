-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Aug 2019 um 16:03
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_fabian_andiel_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `contact_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone_number` int(11) NOT NULL,
  `street_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `street_number` int(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `name`, `startDate`, `description`, `image`, `capacity`, `contact_email`, `contact_phone_number`, `street_name`, `street_number`, `zip`, `city`, `url`, `type`) VALUES
(1, 'Event1', '2019-08-08 17:00:00', 'awesome event', 'https://shop.ticket-pf.de/images/KontraK-20.jpg?20190212120713774545', 3000, 'contact@location1.com', 1234, 'test avenue', 1, 1150, 'Vienna', 'www.event1.org', 'sports'),
(2, 'Event2', '2019-08-09 19:00:00', 'cool event', 'https://cdn.pixabay.com/photo/2016/11/08/04/51/boxing-1807479_1280.jpg', 2000, 'contact@location2.com', 12345, 'test avenue', 2, 1030, 'vienna', 'www.event2.com', 'music'),
(3, 'Event3', '2019-09-09 20:00:00', 'best event', 'https://cdn.pixabay.com/photo/2016/11/21/13/36/man-1845432_1280.jpg', 3000, 'contact@location3.com', 123456, 'test avenue', 3, 3, '3', '1050', 'sports'),
(4, 'Event4', '2019-09-10 21:00:00', 'place2be', 'https://upload.wikimedia.org/wikipedia/commons/5/51/Noizy-4.jpg', 4000, 'contact@location4.com', 124456, 'test avenue', 4, 1050, 'vienna', 'www.location4.com', 'sports'),
(5, 'Event5', '2019-09-10 21:00:00', 'place2be', 'https://cdn.pixabay.com/photo/2014/01/29/17/24/disney-254494_1280.jpg', 5000, 'contact@location5.com', 125556, 'test avenue', 5, 1050, 'vienna', 'www.location5.com', 'sports'),
(6, 'Event6', '2019-09-10 21:00:00', 'place2be', 'https://cdn.pixabay.com/photo/2016/06/07/00/16/girl-in-the-ring-1440690_1280.jpg', 6000, 'contact@location6.com', 126666, 'test avenue', 6, 1060, 'vienna', 'www.location6.com', 'sports'),
(7, 'Event7', '2027-07-07 19:00:00', 'place2be', 'link to image7', 7000, 'location7@location.com', 123445, 'test road', 7, 7, '3000', 'test city', 'club'),
(8, 'Event4', '2019-09-10 21:00:00', 'place2be', 'https://upload.wikimedia.org/wikipedia/commons/5/51/Noizy-4.jpg', 4000, 'contact@location4.com', 124456, 'test avenue', 4, 1050, 'vienna', 'www.location4.com', 'sports');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
